<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Statistique extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('project_model'); 
        $this->load->model('Tfm_part_model');
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
        
        $data["projetA"] = $this->project_model->projectStats(2);
        $data["projetU"] = $this->project_model->projectStats(3);
        $data["projetHS"] = $this->project_model->projectStats(4);

        $this->global['pageTitle'] = 'Statestique';
        $this->loadViews("Stat/index", $this->global, $data , NULL);
	}
	

    public function ProjectStatistique ($ProjectId){
                   
        $data["projet"] = $this->project_model->getProjectInfo($ProjectId);
        $data['partParReg'] = $this->Tfm_part_model->TFMPartByCityListing($ProjectId,2);
        $data['partParclub'] = $this->Tfm_part_model->TFMPartByClubListing($ProjectId,2);
        $data['partParsexeH'] = $this->Tfm_part_model->TFMPartConfirmedBySexeHListing($ProjectId);
        $data['partParsexeF'] = $this->Tfm_part_model->TFMPartConfirmedBySexeFListing($ProjectId);
        $data['countRythme'] = $this->Tfm_part_model->TFMPartRythme($ProjectId);
        $data['countINSNotConfirmed'] = $this->Tfm_part_model->TFMPartListing($ProjectId,2);
        $data['countINSConfirmed'] = $this->Tfm_part_model->TFMPartListing($ProjectId,1);
        $data['countINSConfirmed1'] = $this->Tfm_part_model->TFMPartListing1($ProjectId,2);
        $data['paiement'] =  $this->Tfm_part_model->TFMPaiementByUser($ProjectId) ; 

        $data['PointDepart'] =  $this->Tfm_part_model->PointDeDepart($ProjectId) ;

        $this->global['pageTitle'] = 'Statistique projet';
        $this->global['active'] = 'TFMC';
        $this->loadViews("project/statistique", $this->global, $data, NULL);   
        
        }
		
}