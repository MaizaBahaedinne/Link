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


    function tasksListing ($projectId) 
    {
      $taches = $this->Task_model->taskListing($projectId);
                   
       $data["projet"] = $this->project_model->getProjectInfo($projectId);
      foreach ($taches as $tache ) {
        $tache->affections= $this->Task_model->AffectationsListing($tache->tacheId);
        $tache->membresDispo = $this->Task_model->DisponibleMembreListing($this->clubID,$this->cellule,$tache->startedDate,$tache->deadline   );

      }

       $data["taches"] = $taches;

      $this->global['pageTitle'] = 'Taches';
      $this->loadViews('task/list', $this->global, $data, NULL) ; 
    }
    
}