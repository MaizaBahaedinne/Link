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
        $taches = $this->Task_model->taskListing(1);
                   
       $data["projet"] = $this->project_model->getProjectInfo(1);
      foreach ($taches as $tache ) {
        $tache->affections= $this->Task_model->AffectationsListing($tache->projectId);
      }
     
       $data["taches"] = $taches;

      $this->global['pageTitle'] = 'Taches';
      $this->loadViews('task/list', $this->global, $data, NULL) ; 
    }
    



           
      




       
		
}