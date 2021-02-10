<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Support extends BaseController {
   

   public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model'); 
        $this->load->model('project_model');   
        $this->load->model('actualite_model');
        $this->load->model('posts_model');
        
        $this->load->model('task_model');
        
        $this->isLoggedIn();   
    }    

		public function projet()
		        {
                	$this->global['pageTitle'] = 'Support';
			        $this->global['active'] = 'Clubs';
			         $this->loadViews("support/projet", $this->global, NULL , NULL);   
			    
		        }

		        


					
				
}