<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Club extends BaseController {

    public function __construct()
    {
        parent::__construct();
			        $this->load->model('user_model');
			        $this->load->model('notification_model');
			        $this->load->model('club_model');
					$this->load->model('project_model');
					$this->load->model('Score_club_model');
					$this->load->model('scoring_model');					
        			$this->isLoggedIn();   
    }
    

		public function index()
		        {
		                $clubs = $this->club_model->clubListing($this->SA, $this->clubID);
		            
		                foreach ($clubs as $key ) {
		                	$key->P = $this->user_model->getMemberByRoleAndCelulle($key->clubID , 1 , Null ) ;
							$key->members = count($this->user_model->userListingByclub($key->clubID));
		                }

		                $data["clubs"] =  $clubs ;



 		                $this->global['pageTitle'] = 'Clubs';
		             	$this->global['active'] = 'Clubs';
		                $this->loadViews("club/all", $this->global, $data, NULL);   
						
		        }


		        


		public function clubInfo($clubId)
		        {
			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			        $data["projectRecords"] = $this->project_model->projectListingByClub($clubId);

			        foreach ($data["projectRecords"] as $proj ) 
			        {
			        	$proj->score = $this->Score_club_model->scoreByProject ($proj->projectId) ;
			        	$proj->part = $this->scoring_model->PresenceByProject($proj->projectId); 
			        }
			        $data['cl'] = $clubId;
			        $data['members'] = $this->user_model->userListingByclub($clubId);
			        $data["scores"]  = $this->Score_club_model->scoreListingByClub($clubId) ;
		            $data["score"]  = $this->Score_club_model->scoreByClub($clubId) ; 
		            $data['RateMember'] =  $this->scoring_model->RankByUsersClub($clubId) ;
			    	$this->global['pageTitle'] = 'Mon club';   
			    	$this->global['clubN'] = $clubId;    
			       $this->loadViews("club/myClub", $this->global, $data, NULL);
		        }


		public function myTeam()
		        {
			        $data["clubInfo"] = $this->club_model->getClubInfo($this->clubID);
			        $data["projectRecords"] = $this->project_model->projectListingByClub($this->clubID);
			        foreach ($data["projectRecords"] as $proj ) 
			        {
			        	$proj->score = $this->Score_club_model->scoreByProject($proj->projectId) ;
			        }
			        $data['cl'] = $this->clubID;

			        $data['members'] = $this->user_model->getMembersByCellule ($this->clubID ,$this->cellule);
			        $data["scores"]  = $this->Score_club_model->scoreListingByClub($this->clubID) ;
		            $data["score"]  = $this->Score_club_model->scoreByClub($this->clubID) ; 

			    	$this->global['pageTitle'] = 'Mon club';   
			    	$this->global['clubN'] = $this->clubID;    
			       $this->loadViews("club/myTeam", $this->global, $data, NULL);
		        }




		        public function editClub($clubId)
		        {
					$this->load->model('user_model');
					$data["projectRecords"] = $this->project_model->projectListingByClub($clubId);
                    $data["members"] = $this->user_model->userListingByclubAll($clubId);
			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			       	$this->global['pageTitle'] = 'Clubs';
			        $this->loadViews("club/edit", $this->global, $data, NULL);
		        }

			        /**
			     * This function is used to delete the user using userId
			     * @return boolean $result : TRUE / FALSE
			     */
			    function edit($clubId)
				    {

				        $name = $this->input->post('name');
				        $city = $this->input->post('city');
				        $birthday = $this->input->post('birthday');
				        $email = $this->input->post('email');
				        $facebook = $this->input->post('facebook');
				        $is_Actif = $this->input->post('is_Actif');

				        $clubInfo = array('name'=> $name ,
				                              'city'=>$city,
				                               'birthday'=>$birthday,
				                               'email'=>  $email  ,
				                               'facebook'=>  $facebook ,
				                               'is_Actif'=> $is_Actif ,

				                             );
				            
				           if( $this->club_model->editClub($clubId , $clubInfo) ){

				           		$this->session->set_flashdata('success', 'Mise à jour enregistrée ');
				           }
				            else
				            {
				                $this->session->set_flashdata('error', 'Mise à jour erronée ');
				            }
				          
				          redirect('/Club/editClub/'.$clubId)  ;
				    }


				   function passation($oldPosteroleId , $clubId , $cellule , $NewPosteID) {

				   	$OldP = $this->user_model->getMemberByRoleAndCelulle($clubId,$oldPosteroleId,$cellule) ;
			        $OldPU = array('roleId'=> 5 , 'ClubID'=> 2 , 'cellule'=> '' ) ;
			        $NewP = $this->user_model->getUserInfo($NewPosteID) ;
			        $NewPU = array('roleId'=> $oldPosteroleId , 'cellule'=> $cellule ) ;
			        if( !(empty($OldP)) )
			        {
			        	echo("Poste : ".$NewP->userId ." => ".$OldP->userId) ;
			        	if($OldP->userId != $NewP->userId )
			        	{
			        		$this->user_model->editUser($OldPU , $OldP->userId);
			       			$this->user_model->editUser($NewPU , $NewP->userId);
			       			$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        	}
			        	else 
				        {  
			        		$this->user_model->editUser( $NewPU , $NewP->userId); 
			        		$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
				        }			        	
			        }
			        else 
			        {  
		        		$this->user_model->editUser( $NewPU , $NewP->userId); 
		        		$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        }
				   }

			/**
		     * This function is used to delete the user using userId
		     * @return boolean $result : TRUE / FALSE
		     */
		    function editBureau($clubId)
			    {

			        $P = $this->input->post('P')  ;
			        $VPM = $this->input->post('VPM')  ;
			        $VPE = $this->input->post('VPE')  ;
			        $VPAF = $this->input->post('VPAF')  ;
			        $VPRH = $this->input->post('VPRH')  ;
			        $AM = $this->input->post('AM')  ;
			        $AE = $this->input->post('AE')  ;
			        $AAF = $this->input->post('AAF')  ;
			        $ARH = $this->input->post('ARH')  ;
			        
			      	if($P != Null ){
			      	$this->passation(1,$clubId,Null,$P) ; 
			      	}

					if($VPM != Null ){
			      	$this->passation(3,$clubId,'Marketing',$VPM) ; }
			      	if($VPE != Null ){
			      	$this->passation(3,$clubId,'Evenementiel',$VPE) ; }
			      	if($VPAF != Null  ){
			      	$this->passation(3,$clubId,'Administration et finance',$VPAF) ;} 
			      	 if($VPRH != Null  ){
			      	$this->passation(3,$clubId,'Ressource Humaine',$VPRH) ; }

			        if($AM != Null  ){
			      	$this->passation(6,$clubId,'Marketing',$AM) ; }
			      	 if($AE != Null  ){
			      	$this->passation(6,$clubId,'Evenementiel',$AE) ;} 
			      	 if($AAF != Null  ){
			      	$this->passation(6,$clubId,'Administration et finance',$AAF) ; }
			      	 if($ARH != Null  ){
			      	$this->passation(6,$clubId,'Ressource Humaine',$ARH) ; }

			        





			       
			      



			         redirect('/Club/editClub/'.$clubId)  ;
			    }



				  /**
				     * This function is used to delete the user using userId
				     * @return boolean $result : TRUE / FALSE
				     */
				    function addNew()
				    {

				        $name = $this->input->post('name');
				        $city = $this->input->post('city');
				        $birthday = $this->input->post('birthday');
				        $email = $this->input->post('email');
				        $facebook = $this->input->post('facebook');
				        $is_Actif = $this->input->post('is_Actif');
				      	$HUA = $this->input->post('HUA');

				            
				            $clubInfo = array('name'=> $name ,
				                              'city'=>$city,
				                               'birthday'=>$birthday,
				                               'email'=>  $email  ,
				                               'facebook'=>  $facebook ,
				                               'is_Actif'=> 0 ,
				                               'SenJun'=>$HUA

				                             );
				            
				           if( $this->club_model->addClub($clubInfo) ){

				           		$this->session->set_flashdata('success', 'club tunivisions '.$name.'a été ajouter avec succées');
				           }
				            else
				            {
				                $this->session->set_flashdata('error', 'Mise à jour erronée ');
				            }
				          
				          redirect('/Club')  ;
				    }
		       
					
				
}