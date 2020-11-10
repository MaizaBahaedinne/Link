<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Register extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('actualite_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {

        $data['parrain'] = $this->user_model->getUserInfo($this->input->get('var1')) ;      
        $data['club'] = $this->club_model->getClubInfo($this->input->get('var2')) ; 
         $this->load->view('register/new',$data);
    }
    

    
 
 


  function registerNewUser()
    {
                
                $fname = strtoupper ($this->input->post('fname'));
                $lname = $this->input->post('lname');
                $name =  strtoupper ($fname).' '.$lname ;
                $email = $this->input->post('email');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));



                 $password = $this->input->post('password');
               
                

                $userInfo = array(
                 

                 'cin'=>$cin,
                 'email'=>$email,
                 'password'=>getHashedPassword($password),
                 'roleId'=>'5',
                 'clubID'=>$this->input->get('var2') ,
                 'name'=> $name,
                 'nom'=> $fname,
                 'prenom'=> $lname,
                 'mobile'=>$mobile,
                 'createdBy'=> $this->input->get('var1'),
                 'createdDtm'=>date('Y-m-d H:i:s'),
                 'birthday' =>date($birth) ,
                 'isDeleted' => 3 

                     );
              
       



               
                $this->load->model('user_model');

                if($this->user_model->checkEmailExists($email) < 1 ) {
                $result = $this->user_model->addNewUser($userInfo);
                
                
                
                if($result > 0  )
                {
                    $this->session->set_flashdata('success', 'votre dossier est en cours de traitement');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter <a href="https://www.facebook.com/maiza.koussai">l\'administrateur</a> ');
                }
                }else

            {
                $this->session->set_flashdata('error', 'utilisateur existe deja');
            }
                
              
            redirect('/login') ;

    }
    
    

     /**
     * Index Page for this controller.
     */
    public function MotDePasse()
    {
        $data['ActuRecords'] = $this->actualite_model->actuListing();
       $this->load->view('register/password',$data);
    }
    

     function QuestionMotDePasse()
    {


                $email = $this->input->post('mail');
              
                $this->load->model('user_model');
                $result = $this->user_model->checkPasswordExists($email);
                
                if($result)
                {
                    
                    $data["name"] = $result->name ; 
                    $data["userId"] = $result->userId ; 
                    $data["email"] = $result->email ; 

                    $content  = $this->load->view('email/resetPassword' , $data ) ; 


                    $this->send_mail( $email  , 'Mot de passe' , $data , $content ) ;

                    $this->session->set_flashdata('success', 'on a envoyé un mail à '.$email);
                    redirect('/login') ; 
                    
                }
                else
                {
                    $this->session->set_flashdata('error', 'adresse e-mail introvable ');
                    redirect('/login') ; 
                }
    }


     /**
     * Index Page for this controller.
     */
    public function Passechange($userId)
    {   
         
         $data['user'] = $this->user_model->getUserInfo($userId) ;
         $this->load->view('register/changePassword',$data   );
    }




    /**
     * Index Page for this controller.
     */
    public function MotDePassechangeF($userId)
    {           

                $newPassword = $this->input->post('password');


                 $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$userId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
              
                $result = $this->user_model->changePassword($userId , $usersData);

                if($result)
                {
                    $this->session->set_flashdata('success', 'Mot de passe modifier avec succéss ');
                    redirect('/login') ; 
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter l\'équipe support  <a href="mailto:tunivisions.link@gmail.com"> tunivisions.link@gmail.com </a> ');
                }

                    
                
    }






}

?>
