<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Task extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');

        $this->isLoggedInPub();   
    }

    function index()
    {
        $data["projet"] = $this->project_model->getProjectInfo(400);

      $this->global['pageTitle'] = 'Taches';
      $this->loadViews('task/list', $this->global, $data, NULL) ; 
    }
    



           
      




       
		
}