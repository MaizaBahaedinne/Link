<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Reglement extends BaseController {

    public function __construct()
    {
        parent::__construct();  			   
    }
    

		public function PrivacyPolicy()
		        {
                	$this->global['pageTitle'] = 'Clubs';
			        $this->global['active'] = 'Clubs';
			       $this->load->view ("PrivacyPolicy");   
		        }

		public function TermsConditions()
		        {
                	$this->global['pageTitle'] = 'Clubs';
			        $this->global['active'] = 'Clubs';
			       $this->load->view ("TermsConditions");   
		        }
		        


					
				
}