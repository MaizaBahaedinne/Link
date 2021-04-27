<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Api extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('posts_model') ;
        $this->load->model('project_model') ; 
        $this->load->model('login_model') ;
        $this->load->model('Score_club_model') ;
        $this->load->model('scoring_model') ;

        
        

    }




    public function Hierarchy ()
        {
                
                $data["President"]  =   $this->user_model->getMemberByRoleAndCelulle(-1 , 1 , '' ) ;
                $data["EM"]     =   $this->user_model->getMemberByRoleAndCelulle(-1 , 10 , '' ) ;
                $data["CU"]     =   $this->user_model->getMemberByRoleAndCelulle(0 , 2 , '' ) ;
                $data["CU"]->managers   =   $this->user_model->getManagers(0); 
                $data["CH"]     =   $this->user_model->getMemberByRoleAndCelulle(1 , 2 , '' ) ;
                $data["CH"]->managers   =   $this->user_model->getManagers(1);
                $data["CA"]     =   $this->user_model->getMemberByRoleAndCelulle(2 , 2 , '' ) ;
                $data["CA"]->managers   =   $this->user_model->getManagers(2);

                $this->global['pageTitle'] = 'Clubs';
                $this->global['active'] = 'Clubs';
               $this->response($data);   
                
        }

   

    public  function ProjectListingAPI()
    {
         $data = $this->project_model->projectListing() ;
         $this->response($data); 
    }

        public  function clubListingAPI($SenJun)
    {
         $data = $this->club_model->clubListing(0,$SenJun) ;
         $this->response($data); 
    }


    public  function clubAPI($clubId)
        {   
                    $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
                    $data["projectRecords"] = $this->project_model->projectListingByClub($clubId);
                    $data['members'] = $this->user_model->userListingByclub($clubId);
                    $this->response($data); 
    }


    public  function clubInfoAPI($clubId)
        {   
                    $data = $this->club_model->getClubInfo($clubId);
                    $this->response($data); 
    }

     public  function userAPI($userId)
        {   
                    $data = $this->user_model->getUserInfoWithRole($userId) ;
                    
   
                    $this->response($data); 
    }

    public  function AuthentificationAPI($email,$password)
    {
        
        $result = $this->login_model->loginMe($email,$password);  
         $this->response($result); 
    }
  
                         





}