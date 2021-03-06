<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
  
        $this->load->model('user_model');
 
        
        $this->load->model('club_model'); 
        $this->load->model('project_model');   
        $this->load->model('Image_upload_model');
        $this->load->model('actualite_model');
        $this->load->model('notification_model');

        $this->load->model('Tfm_part_model');

        $this->load->model('login_model');
        $this->load->model('posts_model') ; 
        $this->load->model('user_cariere_model') ;
        $this->load->model('user_diplome_model') ;


        $this->load->model('scoring_model') ;
        $this->load->model('task_model') ;  
        
        $this->isLoggedIn();   
    }
    


    
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        

        $data['MyTFM'] = $this->Tfm_part_model->TFMMyBus($this->vendorId);
        $data["tunimateurs"] = count($this->user_model->userListing($this->vendorId))  ; 
        $data["tunimateursApp"] = count($this->user_model->userListingApprouveF());
        $data["tunimateursAppJ"] = count($this->user_model->userListingApprouveFJ());
        $data["tunimateursAppA"] = count($this->user_model->userListingApprouveFA());
        $data["clubscountS"] = count($this->club_model->clubListingS() )  ;
        $data["clubscountJ"] = count($this->club_model->clubListingJ() )  ;
        $data['ActuRecords'] = $this->actualite_model->actuListing();
        $data['MyclubID'] = $this->clubID;
        $data["membersCount"] = count($this->user_model->userListingByclub($this->vendorId,$this->clubID)) ;

        $this->global['active'] = 'dashboard';
        $this->loadViews("dashboard", $this->global, $data , NULL);
    }
    


/**
     * This function is used to load the user list
     */
    function userListing($HUA)
    {


            $data['userRecords'] = $this->user_model->userListing($HUA)  ;
            
            $this->global['pageTitle'] = 'users';
           
            $this->loadViews("users", $this->global, $data, NULL);
    }

    /**
     * This function is used to load the user list
     */
    function userListingLeders($HUA)
    {


            $data['userRecords'] = $this->user_model->userListingLeders($HUA)  ;
            
            $this->global['pageTitle'] = 'Leaders';
           
            $this->loadViews("Tunimateurs/leaders", $this->global, $data, NULL);
    }


    /**
     * This function is used to load the user list
     */
    function userBlockListing()
    {
            $data['userRecords'] = $this->user_model->userListingBlock();
            $this->global['pageTitle'] = 'Blocage';
            $this->global['active'] = 'Blocage';
            $this->loadViews("Tunimateurs/blocage", $this->global, $data, NULL);
    }







   
    

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {

            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            $data['clubs'] = $this->user_model->getClubs();
            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
       
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    

     function addNewLink($reciver){

        $userInfo = array(
                 'id_tunSender' => $this->vendorId ,  
                 'id_tunReciver'=>$reciver ,
                 'Addeddate'=>date('Y-m-d H:i:s'),
                 'statut'=>0 
                     );
                
                $result = $this->user_model->addNewLink($userInfo);

                return $result ; 

     }


    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $this->load->library('form_validation');         
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('club','Club Tunivisions','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[8]');
            $this->form_validation->set_rules('cin','cin','required|min_length[8]');

            

            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
          
                $name = $this->input->post('fname');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $clubID = $this->input->post('club');
                $cellule = $this->input->post('cellule');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $mobile2 = $this->security->xss_clean($this->input->post('mobile2'));
                $birth = $this->security->xss_clean($this->input->post('birthday'));
                $affectedYear = $this->security->xss_clean($this->input->post('affectedYear'));
                $cin = $this->security->xss_clean($this->input->post('cin'));
                $sexe = $this->security->xss_clean($this->input->post('sexe'));
                $gouvernorat = $this->security->xss_clean($this->input->post('gouvernorat'));
                $delegation = $this->security->xss_clean($this->input->post('delegation'));
                $facebook = $this->security->xss_clean($this->input->post('facebook'));
                $instagram = $this->security->xss_clean($this->input->post('instagram'));
                $linkedin = $this->security->xss_clean($this->input->post('linkedin'));
               
                $file_name = 'Avatr_'.$name.'_'.$_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                
                $file_destination = 'uploads/avatar/' . $file_name;
                move_uploaded_file($file_tmp, $file_destination);


                $userInfo = array(
                 'avatar' => $file_name ,  
                 'email'=>$email,
                 'password'=>getHashedPassword($password),
                 'roleId'=>$roleId,
                 'cellule'=>$cellule,
                 'clubID'=>$clubID,
                 'name'=> $name,
                 'mobile'=>$mobile,
                 'mobile2'=>$mobile2,
                 'cin'=>$cin,
                 'birthday'=>$birth,
                 'affectedYear'=>$affectedYear,
                 'createdBy'=>$this->vendorId,
                 'createdDtm'=>date('Y-m-d H:i:s'),
                 'birthday'=>date($birth),
                 'sexe'=>$sexe,
                 'gouvernorat'=>$gouvernorat,
                 'delegation'=>$delegation,
                 'facebook'=>$facebook,
                 'instagram'=>$instagram,
                 'linkedin'=>$linkedin
                     );
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Formulaire validé');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId)
    {
            
            $data["userInfo"] = $this->user_model->getUserInfoWithRole($userId);
            $data['clubs']  = $this->club_model->clubListing($this->SA, $this->clubID);
            $this->global['pageTitle'] = 'Modification';
            $this->loadViews("Tunimateurs/edit", $this->global, $data, NULL);   
    }
    

     /**
     * This function is used to edit the user information
     */
    function editUserAdmin($userId)
    {
     $cin = $this->input->post('cin');
                $nom = strtoupper ($this->input->post('nom'));
                $prenom = $this->input->post('prenom');
                $name =  $nom.' '.$prenom ;
                $birthday = $this->input->post('birthday');
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $linkedin = $this->input->post('linkedin');
                $adresse =$this->input->post('adresse');
                $delegation = $this->input->post('delegation');
                $gouvernorat = $this->input->post('gouvernorat');
                $sexe = $this->input->post('sexe') ; 
                $cellule = $this->input->post('cellule');  
                $clubId = $this->input->post('clubID');         
            
                $userInfo = array(
                                      
                                      'name'=>$name,
                                      'prenom'=>$prenom,
                                      'nom'=>$nom,
                                      'adresse' => $adresse,
                                      'birthday'=>$birthday,
                                      'facebook'=>$facebook,
                                      'instagram'=>$instagram,
                                      'linkedin'=>$linkedin,
                                      'cin'=>$cin,
                                      'sexe'=>$sexe,
                                      'clubID' => $clubId  , 
                                      'gouvernorat'=>$gouvernorat,
                                      'delegation'=>$delegation,
                                      'cellule'=>$cellule ,
                                      'updatedBy'=>$this->vendorId,
                                      'updatedDtm'=>date('Y-m-d H:i:s'), 
                                       );
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('User/editOld/'.$userId);
      
        
    }
    


    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $cin = $this->input->post('cin');
                $nom = strtoupper ($this->input->post('nom'));
                $prenom = $this->input->post('prenom');
                $name =  $nom.' '.$prenom ;
                $birthday = $this->input->post('birthday');
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $linkedin = $this->input->post('linkedin');
                $adresse =$this->input->post('adresse');
                $delegation = $this->input->post('delegation');
                $gouvernorat = $this->input->post('gouvernorat');
                $sexe = $this->input->post('sexe');
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }

  public function goAlumni()
    { 
      $cellule = $this->input->post('cellule');
      $userInfo = array(
                        'cellule'=>$cellule,
                        'roleId'=>5 ,
                        'clubID' => 2
                         ) ;

       $result = $this->user_model->editUser($userInfo, $this->vendorId);
                  if($result == true){
                    $this->session->set_flashdata('success', 'Votre profile a été mise à jour <br> merci de se connecter !');
                    redirect("/logout") ; 
       }
    
    }


    /**
     * This function is used to edit the user information
     */
    public function MAJUser()
    { 
                $cin = $this->input->post('cin');
                $nom = strtoupper ($this->input->post('nom'));
                $prenom = $this->input->post('prenom');
                $name =  $nom.' '.$prenom ;
                $birthday = $this->input->post('birthday');
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $linkedin = $this->input->post('linkedin');
                $adresse =$this->input->post('adresse');
                $delegation = $this->input->post('delegation');
                $gouvernorat = $this->input->post('gouvernorat');
                $sexe = $this->input->post('sexe');

                $file_name = 'avatar__'.$name.'_'.$_FILES['fileT']['name'];
                $cellule = $this->input->post('cellule');
                $file_tmp = $_FILES['fileT']['tmp_name'];
                $file_destination = 'uploads/avatar/' . $file_name;
                $userInfo = array(
                                      'avatar' => $file_name ,
                                      'name'=>$name,
                                      'prenom'=>$prenom,
                                      'nom'=>$nom,
                                      'adresse' => $adresse,
                                      'birthday'=>$birthday,
                                      'facebook'=>$facebook,
                                      'instagram'=>$instagram,
                                      'linkedin'=>$linkedin,
                                      'cin'=>$cin,
                                      'sexe'=>$sexe,
                                      'gouvernorat'=>$gouvernorat,
                                      'delegation'=>$delegation,
                                      'cellule'=>$cellule,
                                      'isDeleted'=> 0,
                                      'updatedBy'=>$this->vendorId,
                                      'updatedDtm'=>date('Y-m-d H:i:s'));

                
                  if(move_uploaded_file($file_tmp, $file_destination))
                  {
                  $result = $this->user_model->editUser($userInfo, $this->vendorId);
                  if($result == true){
                    $this->session->set_flashdata('success', 'Votre profile a été mise à jour <br> merci de se connecter !');
                    redirect("/logout") ; 
                  }
                
                else
                {
                    $this->session->set_flashdata('error', 'Erreur de mise à jour');
                    redirect("/logout") ;
                }
                }

                
              
            
        
    }


     public function AvatarEdit($userId)
    { 

      $userInfo = $this->user_model->getUserInfoWithRole($userId);
                $file_name = 'avatar__'.$userInfo->name.'_'.$_FILES['fileT']['name'];
                $cellule = $this->input->post('cellule');
                $file_tmp = $_FILES['fileT']['tmp_name'];
                $file_destination = 'uploads/avatar/' . $file_name;
                $userInfo = array('avatar' => $file_name );
                
                if(move_uploaded_file($file_tmp, $file_destination))
                {
                  $result = $this->user_model->editUser($userInfo, $this->vendorId);
                  redirect("/logout") ;
                }

                
              
            
        
    }



    /**
     * This function is used to edit the user information
     */
    public function  InfoPersoEdit($userId)
    { 
                $about = $this->input->post('about');
                $birthday = $this->input->post('birthday');
                $adresse =$this->input->post('adresse');
                $delegation = $this->input->post('delegation');
                $gouvernorat = $this->input->post('gouvernorat');
                $sexe = $this->input->post('sexe');
                

                $userInfo = array(
                                  'about' => $about,
                                  'adresse' => $adresse,
                                  'birthday'=>$birthday,
                                  'sexe'=>$sexe,
                                  'gouvernorat'=>$gouvernorat,
                                  'delegation'=>$delegation,
                                  'updatedBy'=>$this->vendorId,
                                  'updatedDtm'=>date('Y-m-d H:i:s')
                                    );

        $result = $this->user_model->editUser($userInfo, $userId );
        redirect('/User/ProfileShow/'.$userId);  
                        
    }


 /**
     * This function is used to edit the user information
     */
    public function  updateSocialMedia()
    { 
                $facebook = $this->input->post('facebook');
                $instagram = $this->input->post('instagram');
                $linkedin =$this->input->post('linkedin');
                
                

                $userInfo = array(
                                  'facebook' => $facebook,
                                  'instagram' => $instagram,
                                  'linkedin'=>$linkedin,
                                  'updatedBy'=>$this->vendorId,
                                  'updatedDtm'=>date('Y-m-d H:i:s')
                                    );

        $result = $this->user_model->editUser($userInfo, $this->vendorId );
        redirect('/');  
                        
    }

    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId)
    {
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            if( $this->user_model->deleteUser($userId, $userInfo) ) {  }  
            redirect('/userListing');            
    }

    

   



        /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function blockMember()
    {

        $userId = $this->input->post('userId');
      

            
            $userInfo = array('isDeleted'=>2,
                              'updatedBy'=>$this->vendorId,
                               'updatedDtm'=>date('Y-m-d H:i:s'),
                               'cellule'=>  '' ,
                               'blockText'=>  $this->input->post('why') ,
                               'roleId'=> 5 ,

                             );
            
            $this->user_model->deleteUser($userId, $userInfo);
             
                  
          
          redirect('/User/userByClubListing')  ;
    }


            
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : User Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }






   


    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            if($result == true)
            {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Profile updation failed');
            }

            redirect('profile/'.$active);
        }
    }




    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword($active = "changepass")
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/'.$active);
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('profile/');
            }
        }
    }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }







         /**
     * This function is used to show users profile
     */
    function ProfileShow($userId)
    {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($userId);
        $data["ExpTuns"] = $this->user_cariere_model->carrierListing($userId);
        $data["Diplomes"] = $this->user_diplome_model->diplomeListing($userId);
        $data["ExperienceP"] = $this->user_cariere_model->carrierProListing($userId) ;
        $data["Langues"] = $this->user_cariere_model->langListing($userId) ;
        $data["skills"] = $this->user_cariere_model->hardListing($userId) ;    

        $data["PartScore"] = $this->scoring_model->ScoreByUser($userId,'project'); 
        $data["taskScore"] = $this->scoring_model->ScoreByUser($userId,'tache'); 

        $data["tasks"] = $this->task_model->taskListingByUser($userId);
        $data["eff"] = $this->task_model->taskListingByUserValid($userId);

        $data["participations"] = $this->scoring_model->ScoreByUserByPart($userId) ;    
        $data["formations"] = $this->scoring_model->ScoreByUserByType($userId,"Formation");
        $data["conferences"] = $this->scoring_model->ScoreByUserByType($userId,"Conférence");
        $data["missions"]   = null ;
        $data["visit"] = $this->user_model->visitListingByUser($userId) ;



        if( $this->vendorId != $userId && $userId != 0 )
        {
         $visitInfo = array(
                            'userId'=>$userId, 
                            'createdBy'=>$this->vendorId,
                            'createdDTM'=>date('Y-m-d H:i:s')
                          );
          $this->user_model->addVisiteUser($visitInfo) ; 
        }

       
        
        $this->global['pageTitle'] = $data["userInfo"]->name;
        $this->loadViews("Tunimateurs/profile", $this->global, $data, NULL);
    }
  

    function facebook()
      {
            $this->global['pageTitle'] = "facebook";
          $this->loadViews("register/facebook", $this->global, NULL);
      }

    


}

?>