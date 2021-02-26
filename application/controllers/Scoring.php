<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Scoring extends BaseController {
   

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


    public function Classement($SenJun){
        


        $clubs = $this->club_model->clubListingScore($SenJun) ;
        foreach ($clubs as $key ) {
            $key->P =  count($this->score_club_model->scoreListingByClubbyType($key->clubID)) ;
            $key->F = count($this->score_club_model->scoreListingByClubbyType($key->clubID,'Formation')) ;
            $key->F += count($this->score_club_model->scoreListingByClubbyType($key->clubID,'Compétition')) ;
            $key->C = count($this->score_club_model->scoreListingByClubbyType($key->clubID,'Conférence')) ; 
            $key->E = count($this->score_club_model->scoreListingByClubbyType($key->clubID,'Evenement')) ;
            $key->E += count($this->score_club_model->scoreListingByClubbyType($key->clubID,'Soirée')) ; 
            $key->score = $this->score_club_model->scoreByClub($key->clubID) ; 
        }

       
        $data['clubs'] =  $clubs ;

        $data["presidents"] = $this->scoring_model->ClassementMembres(1,$SenJun,Null,20) ;
        
        $data["vpM"] = $this->scoring_model->ClassementMembres(3,$SenJun,'Marketing',3) ;
        $data["vpAF"] = $this->scoring_model->ClassementMembres(3,$SenJun,'Administration et finance',3) ; 
        $data["vpRH"] = $this->scoring_model->ClassementMembres(3,$SenJun,'Ressource Humaine',3) ; 
        $data["vpE"] = $this->scoring_model->ClassementMembres(3,$SenJun,'Evenmentiel',3) ;

        $data["aM"] = $this->scoring_model->ClassementMembres(6,$SenJun,'Marketing',3) ;
        $data["aAF"] = $this->scoring_model->ClassementMembres(6,$SenJun,'Administration et finance',3) ; 
        $data["aRH"] = $this->scoring_model->ClassementMembres(6,$SenJun,'Ressource Humaine',3) ; 
        $data["aE"] = $this->scoring_model->ClassementMembres(6,$SenJun,'Evenmentiel',3) ;


        $data["membres"] = $this->scoring_model->ClassementMembres(5,$SenJun,'All',100) ;
        $data["mM"] = $this->scoring_model->ClassementMembres(5,$SenJun,'Marketing',3) ;
        $data["mAF"] = $this->scoring_model->ClassementMembres(5,$SenJun,'Administration et finance',3) ; 
        $data["mRH"] = $this->scoring_model->ClassementMembres(5,$SenJun,'Ressource Humaine',3) ; 
        $data["mE"] = $this->scoring_model->ClassementMembres(5,$SenJun,'Evenmentiel',3) ;
       

        $this->global['pageTitle'] = 'Classement';
        
        if($this->SA == 1 || $this->SA == 2 || $this->role == 2 || $this->role ==  10 ) {
        $this->loadViews("scoring/dashboard", $this->global, $data, NULL);   
        }
        }


        public function ClassementWeAre (){
    
        $this->global['pageTitle'] = 'Classement';
        
        
        $this->loadViews("scoring/weare", $this->global, NULL , NULL);   
        
        }



     

		

		        


					
				
}