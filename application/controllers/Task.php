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
      
      foreach ($taches as $tache ) {
        $tache->affections= $this->Task_model->AffectationsListing($tache->tacheId);
        $tache->membresDispo =  $this->Task_model-> DisponibleMembreAffected($tache->startedDate,$tache->deadline,$this->clubID); 

         
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



        

                /**
             * This function is used to edit the task using taskId
             * @return boolean $b : TRUE / FALSE
             */
           function editTask($tacheId)
            {
   $affections= $this->Task_model->AffectationsListing($tacheId);
           $membresDispoRow =  $this->Task_model-> DisponibleMembreAffected($this->input->post('startedDate'),$this->input->post('deadline'),$this->clubID);
$b=false;

    
$this->global['pageTitle'] = 'Task';
              $this->loadViews("task/edit", $this->global, $data, NULL);

      
              foreach ($affections as $aff ) {
                foreach ($membresDispoRow as $membre ) {
        if ($membre->userId==$aff->userAffectedID) {
$b=true;
break;
        }
      
    if ($membre->userId!=$aff->userAffectedID) {
$b=false;
        } 
           }
      }
      if ($b==TRUE){
                $userAffectatedID  =$this->input->post('userIdAffected');                
                $affectationInfo = array(        
                 'tacheId' =>  $tacheId,
                 //'createdBy' => $this->vendorId  , 
                 'userAffectatedID' => $userAffectatedID ,
                 'createdDTM'=> date('Y-m-d H:i:s') 
                     );
             
                
                $result = $this->Task_model->addAffectation($affectationInfo);
             
                }
                    
                

   
              $project=$this->Task_model->projectById($tacheId);
                     redirect('/Task/tasksListing/'. $project->projectId);
              
            }
        
 function deleteTask($tacheId)
    {
            $taskInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            if( $this->user_model->deleteUser($tacheId, $taskInfo) ) {  }  
$project=$this->Task_model->projectById($tacheId);
                     redirect('/Task/tasksListing/'. $project->projectId);    }

         function editAffect($affectionsId)
            {
   $affection1= $this->Task_model->getAffectation($affectionsId);


    
//$this->global['pageTitle'] = 'Task';
  //            $this->loadViews("task/edit", $this->global, $data, NULL);

  
                     $status = $this->input->post('status');                

                $affection1 = array(        
                 'status' => $status ,
                 
                 'createdDate'=> date('Y-m-d H:i:s') 
                     );
                  $result = $this->Task_model->editAffect($taskInfo,$tacheId);
                    
                

   
              $project=$this->Task_model->projectById($affection1->tacheId);
                     redirect('/Task/tasksListing/'. $project->projectId);
              
            }
    
}