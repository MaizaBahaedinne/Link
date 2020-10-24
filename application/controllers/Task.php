<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Task extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');
        $this->load->model('Task_model');

        $this->isLoggedInPub();   
    }

    function index()
    {
        
    }


    function tasksListing($projectId) 
    {
      $taches = $this->Task_model->taskListing($projectId);
                   
       $data["projet"] = $this->project_model->getProjectInfo($projectId);
      // $affectation = $this->Task_model->affectationListing($tache->tacheId);
      foreach ($taches as $tache ) {
        $tache->affections= $this->Task_model->AffectationsListing($tache->tacheId);
        $tache->membresDispo =  $this->Task_model-> DisponibleMembreAffected($tache->startedDate,$tache->deadline); 
      /*  $aff=  $tache->membresDispo ;
        foreach ($aff as $a ) {
          echo($a->name);
          # code...
        }*/
         
      }


       $data["taches"] = $taches;

  
      $this->global['pageTitle'] = 'Taches';
      $this->loadViews('task/list', $this->global, $data, NULL) ; 
    }


      public function addNew()
          {
                  $this->load->model('user_model');
                  $data['roles'] = $this->user_model->getUserRoles();
                  $data['clubs'] = $this->user_model->getClubs();

                        $data['members'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);

                       $this->global['pageTitle'] = 'Ajouter une tache ';


                  $this->loadViews("task/New", $this->global, $data, NULL);
          }

        public function addNewT($projectId)
                {
                $startedDate = $this->input->post('startedDate');
                $deadline = $this->input->post('deadline');
                $Description = $this->input->post('description');
                $titre = $this->input->post('titre');
                $type = $this->input->post('type');
           $user=$this->vendorId ; 
                

                $taskInfo = array(        
                 'startedDate' => $startedDate ,
                 'deadline' => $deadline , 
                 'description' => NL2BR($Description) , 
                 'titre' => $titre , 
                 'type' => $type ,
                 'projectId'=>$projectId,
                 'createdDate'=> date('Y-m-d H:i:s') ,
                 'par'=>$user
                     );
             
                
              
                $result = $this->Task_model->addNewTask($taskInfo);
                     redirect('/Task/tasksListing/'.$projectId);

                }

  public function affectUser($tacheId)
                {
                   
          
      
                $userAffectatedID  =$this->input->post('userIdAffected');                
                $affectationInfo = array(        
                 'tacheId' =>  $tacheId,
                 //'createdBy' => $this->vendorId  , 
                 'userAffectatedID' => $userAffectatedID ,
                 'createdDTM'=> date('Y-m-d H:i:s') 
                     );
             
                
              $project=$this->Task_model->projectById($tacheId);
                $result = $this->Task_model->addAffectation($affectationInfo);
                     redirect('/Task/tasksListing/'. $project->projectId);
             
                }



                   public function editTask($tacheId)
            {


        $tache->affections= $this->Task_model->AffectationsListing($tacheId);
      


              $this->global['pageTitle'] = 'Task';
              $this->loadViews("task/edit", $this->global, $data, NULL);
            }

                /**
             * This function is used to delete the user using userId
             * @return boolean $result : TRUE / FALSE
             */
         /*   function edit($tacheId)
            {

                $startedDate = $this->input->post('startedDate');
                $deadline = $this->input->post('deadline');
                $Description = $this->input->post('description');
                $debut = $this->input->post('debut');
                $titre = $this->input->post('titre');
                $type = $this->input->post('type');
           $user=$this->vendorId ,   
                
              

                    
                    $clubInfo = array('name'=> $name ,
                                      'city'=>$city,
                                       'birthday'=>$birthday,
                                       'email'=>  $email  ,
                                       'facebook'=>  $facebook ,
                                       'is_Actif'=> $is_Actif ,

                                     );
                    
                   if( $this->club_model->editClub($clubId , $clubInfo) ){

                      $this->session->set_flashdata('success', 'Mise à jour enregistrée ');
                   }
                    else
                    {
                        $this->session->set_flashdata('error', 'Mise à jour erronée ');
                    }
                  
                  redirect('/Club/editClub/'.$clubId)  ;
            }
*/
    
}