<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Store extends BaseController {
   

    public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->model('club_model'); 
            $this->load->model('project_model');   
            $this->load->model('scoring_model');   
            $this->load->model('score_club_model');  
            
            $this->isLoggedIn();   
        }    

    public index()
        {
            $this->loadViews("store/list", NULL, NULL, NULL);   
        }    




     

		

		        


					
				
}