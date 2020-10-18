<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Register extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
        $this->load->model('actualite_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
            $data['ActuRecords'] = $this->actualite_model->actuListing();

         $this->load->view('register/new',$data);
    }
    

    public function send_mail($to, $subject  , $data , $content )
    {       



                 // Load PHPMailer library
                    $this->load->library('phpmailer_lib');
                    
                    // PHPMailer object
                    $mail = $this->phpmailer_lib->load();
                    
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'tunivisions.link';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'no-reply@tunivisions.link';
                    $mail->Password = 'Tunivisions-Link-2019';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port     = 587;
                    
                    $mail->setFrom('no-reply@tunivisions.link', 'Tunivisions Link');
                    $mail->addReplyTo('no-reply@tunivisions.link', 'Tunivisions Link');
                    
                    // Add a recipient
                
                    $mail->addAddress($to);
                    
                    
                    // Email subject
                    $mail->Subject = $subject ;
                    
                    // Set email format to HTML
                    $mail->isHTML();
                    
                    // Email body content
                    
                  $body .='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

                    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
                    <head>
                                <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
                                <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
                                <meta content="width=device-width" name="viewport"/>
                                <!--[if !mso]><!-->
                                <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
                          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                          <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/bootstrap.min.css">
                          <!-- Typography CSS -->
                          <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/typography.css">
                          <!-- Style CSS -->
                          <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/style.css">
                          <!-- Responsive CSS -->
                          <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/responsive.css">
                          <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/dropify.min.css">

                    </head>';
                                        $body .= '<body>
                          <div class="row" >

                                <div class="col-md-4" >
                                      
                                </div>
                                <div class="col-md-4"  >
                                      <img src="https://www.tunivisions.link/images/logo%20rouge.svg" width="150px" ></img>
                                      
                                      <br>
                                <h1>Bonjour ,  '.$data['name'].' </h1> </br></br>' ;
                                        $body .= '<p>   
                                      Vous avez récemment demandé la réinitialisation de votre mot de passe. Il vous suffit de cliquer sur le bouton ci-dessous pour en définir un nouveau.</p>
                                      

                                            </br>
                                            <a href="'.base_url().'Register/Passechange/'.$data['userId'].'?userID='.$data['userId'].'" style="border-radius:50px;background-color:#d92829;display:inline-block;font-size:13px;border:none;margin:0px;font-family:Circular,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;text-align:left;text-decoration:none;padding:12px 45px!important;color:white!important;font-weight:bold!important" bgcolor="#1ED760" align="center" target="_blank" >
                                                  DÉFINIR UN NOUVEAU MOT DE <span class="il">PASSE</span>
                                            </a>
                                            </br>
                                      

                                      

                                      <p>   
                                      Si vous n\'avez pas demandé la réinitialisation de votre mot de passe, vous pouvez ignorer cet e-mail.
                                      </p>

                                      </br>

                                      <p>L\'équipe T-Link</p>


                                      </div>

                                <div class="col-md-4" >
                                      
                                </div>

                          </div>
                    </body>

                      <script    src="https://www.tunivisions.link/assets/js/bootstrap.min.js"></script>
                      
                    </html>

                    ' ;

                    $mail->Body =  $body  ; 
                    
                    // Send email
                    if(!$mail->send()){
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }else{
                        echo 'Message has been sent';
                    }
    }
 
     /**
     * Index Page for this controller.
     */
    public function reglement()
    {       

         $this->load->view('reglement');
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
                 'isDeleted' => 1 

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
         $data['ActuRecords'] = $this->actualite_model->actuListing();

         $this->load->view('register/changePassword' , $data );
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
