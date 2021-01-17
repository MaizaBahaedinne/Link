<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Support extends BaseController {
   

   public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model'); 
        $this->load->model('project_model');   

        
        $this->isLoggedIn();   
    }    

		

		        


					
				
}