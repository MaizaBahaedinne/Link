<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Statestique extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->isLoggedInPub();   
    }
    

	public function index()
	{
        $data["TunimateursA"] =$this->user_model->userListingByclub($this->vendorId,2)  ;
        $data["TunimateursHS"] =$this->user_model->userListingType(4)  ;
        $data["TunimateursU"] =$this->user_model->userListingType(3)  ;
        $data["clubA"] = 17 ;
        $data["clubsHS"] = $this->club_model->clubListingCount(4) ;
        $data["clubsU"] = $this->club_model->clubListingCount(3) ;
        $this->global['pageTitle'] = 'Statestique';
        $this->loadViews("Stat/index", $this->global, $data , NULL);
	}
	
		
}