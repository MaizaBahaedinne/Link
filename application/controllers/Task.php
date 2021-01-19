<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Task extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');
        $this->load->model('Task_model');
        $this->load->model('scoring_model');

        $this->isLoggedInPub();   
    }

    function index()
    {
        
    }


    function tasksListing($projectId) 
    {
      $taches = $this->Task_model->taskListing($projectId);           
      $data["projet"] = $this->project_model->getProjectInfo($projectId);  
      foreach ($taches as $tache ) 
        {
          $tache->affections= $this->Task_model->AffectationsListing($tache->tacheId);
          $tache->membresDispo = $this->Task_model->DisponibleMembreAffected($tache->startedDate,$tache->deadline,$this->clubID,$this->vendorId); 
        }
      $data["taches"] = $taches;
      $this->global['pageTitle'] = 'Taches';
      $this->loadViews('task/list', $this->global, $data, NULL) ; 
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
           'deadline' => $deadline.' 23:59:59' , 
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
             'createdBy' => $this->vendorId  , 
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
      public function editAffect($affectID,$userId)
        {
              $affectationInfo = array('status' => 1 , 'validDTM'  => date('Y-m-d H:i:s') , 'validBy'  => $this->vendorId   );
              $result = $this->Task_model->editAffect($affectationInfo, $affectID); 

              $scoreInfo = array('createdBy' => $this->vendorId ,
                                 'userId' => $userId ,
                                 'createdDTM' => date('Y-m-d H:i:s') , 
                                 'ValidDTM' => date('Y-m-d H:i:s') , 
                                 'affectId' => $affectID , 
                                 'statut' => 0 ,
                                 'points' => 3 
                                ) ;  
              $result2 = $this->scoring_model->addScore($scoreInfo);

               $scoreInfo1 = array('createdBy' => $this->vendorId ,
                                 'userId' => $this->vendorId ,
                                 'createdDTM' => date('Y-m-d H:i:s') , 
                                 'ValidDTM' => date('Y-m-d H:i:s') , 
                                 'affectId' => $affectID , 
                                 'statut' => 0 ,
                                 'points' => 1 
                                ) ;  
              $result3 = $this->scoring_model->addScore($scoreInfo1);
        }
              
      /**
       * This function is used to edit the task using taskId
       * @return boolean $b : TRUE / FALSE
       */
      function deleteAffect($affectID)
        {
           
              $result = $this->Task_model->deleteAffect($affectID);
        } 

   
                
                  
                
        
                  
    
}