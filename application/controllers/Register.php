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
                $cin = strtoupper ($this->input->post('cin'));
                $fname = strtoupper ($this->input->post('fname'));
                $lname = $this->input->post('lname');
                $name =  strtoupper ($fname).' '.$lname ;
                $email = $this->input->post('email');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $password = $this->security->xss_clean($this->input->post('password'));



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
                 'affectedYear'=>2020,
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
                    $this->session->set_flashdata('success', 'Merci de se connecter');
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
    

    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

     function QuestionMotDePasse()
    {


                $email = $this->input->post('mail');
                $cin = $this->input->post('cin');
              
                $this->load->model('user_model');
                $result = $this->user_model->checkPasswordExists($email,$cin);
                
                if($result)
                {
                    
                    $data["name"] = $result->name ; 
                    $data["userId"] = $result->userId ; 
                    $data["email"] = $result->email ; 

                    

                  $newPassword = $this->generateRandomString(8) ;


                 $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$result->userId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
              
                $result = $this->user_model->changePassword($result->userId , $usersData);

                if($result)
                {
                    $send = $this->send_mail(
                                $email , 
                        "Mot de passe oublie !" , 
                        Null , 
                        "Bonjour ".$result->name.",<br> Votre nouveau mot de passe est <b>".$newPassword."</b></b> <br> <br>" ) ;

                    if($send){
                        $this->session->set_flashdata('success', 'on a envoyé un mail à '.$email);
                    } else {
                    $this->session->set_flashdata('error', 'Problème veuillez contacter l\'équipe support  <a href="mailto:tunivisions.link@gmail.com"> tunivisions.link@gmail.com </a> ');
                    }

                    redirect('/login') ; 
                }
                else
                {
                    $this->session->set_flashdata('error', 'Compte introuvable');
                }
            }
        }


 

                    
                    
            
    


     /**
     * Index Page for this controller.
     */
    public function Passechange($userId)
    {   
         
         $data['user'] = $this->user_model->getUserInfo($userId) ;
//         $this->load->view('register/changePassword',$data   );
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
