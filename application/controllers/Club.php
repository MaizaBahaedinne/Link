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
        			$this->isLoggedIn();   
    }
    

		public function index()
		        {
		                $clubs = $this->club_model->clubListing($this->SA);
		            
		                foreach ($clubs as $key ) {


		                	$key->P 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 1 , '' ) ;
							$key->VPAF  = 	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 3 , 'Administration et finance' ) ;
							$key->AAF 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 6 , 'Administration et finance' ) ;
							$key->VPRH 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 3 , 'Ressource Humaine' ) ;
							$key->ARH 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 6 , 'Ressource Humaine' ) ;
							$key->VPM 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 3 , 'Marketing' ) ;
							$key->AM 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 6 , 'Marketing' ) ;
							$key->VPE 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 3 , 'Evenementiel' ) ;
							$key->AE 	=  	$this->user_model->getMemberByRoleAndCelulle($key->clubID , 6 , 'Evenementiel' ) ;
							$key->members = count($this->user_model->userListingByclub($key->clubID));
		                }

						
		                $data["clubs"] =  $clubs ;

 		                $this->global['pageTitle'] = 'Clubs';
		             	$this->global['active'] = 'Clubs';
		                $this->loadViews("club/all", $this->global, $data, NULL);   
						
		        }


		        		public function Hierarchy ()
		        {
		                
		                $data["President"]  =  	$this->user_model->getMemberByRoleAndCelulle(-1 , 1 , '' ) ;
		                $data["EM"] 	=  	$this->user_model->getMemberByRoleAndCelulle(-1 , 10 , '' ) ;
		                $data["CU"] 	=  	$this->user_model->getMemberByRoleAndCelulle(0 , 2 , '' ) ;
		                $data["CU"]->managers 	=  	$this->user_model->getManagers(0); 
		                $data["CH"] 	=  	$this->user_model->getMemberByRoleAndCelulle(1 , 2 , '' ) ;
		                $data["CH"]->managers 	=  	$this->user_model->getManagers(1);
		                $data["CA"] 	=  	$this->user_model->getMemberByRoleAndCelulle(2 , 2 , '' ) ;
		                $data["CA"]->managers 	=  	$this->user_model->getManagers(2);

 		                $this->global['pageTitle'] = 'Clubs';
		             	$this->global['active'] = 'Clubs';
		               $this->loadViews("Foundation/family", $this->global, $data, NULL);   
						
		        }


			public function clubInfo($clubId)
		        {
			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			        $data["projectRecords"] = $this->project_model->projectListingByClub($clubId);
			        $data['cl'] = $clubId;
			        $data['members'] = $this->user_model->userListingByclub($clubId);

			    	$this->global['pageTitle'] = 'Mon club';   
			    	$this->global['clubN'] = $clubId;    
			       $this->loadViews("club/myClub", $this->global, $data, NULL);
		        }




		        public function editClub($clubId)
		        {
					$this->load->model('user_model');

					$data["projectRecords"] = $this->project_model->projectListingByClub($clubId);
                    $data["members"] = $this->user_model->userListingByclub($clubId);
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


			/**
		     * This function is used to delete the user using userId
		     * @return boolean $result : TRUE / FALSE
		     */
		    function editBureau($clubId)
			    {
					//P
			        $P = $this->input->post('P');
			        $OldP = $this->user_model->getMemberByRoleAndCelulle($clubId,1,NULL) ;
			        $OldPU = array('roleId'=> 5 , 'ClubID'=> 2 , 'cellule'=> '' ) ;
			        $NewP = $this->user_model->getUserInfo($P) ;
			        $NewPU = array('roleId'=> 1 , 'cellule'=> '' ) ;
			        if( !(empty($OldP)) )
			        {
			        	echo("P: ".$NewP->userId ." => ".$OldP->userId) ;
			        	if($OldP->userId != $P)
			        	{
			        		$this->user_model->editUser($OldP , $OldP->userId);
			       			$this->user_model->editUser($NewPU , $NewP->userId);
			       			$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        	}			        	
			        }
			        else 
			        {  
			        		$this->user_model->editUser($NewP->userId , $NewPU); 
			        		$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        }

			        //VPM
			        $VPM = $this->input->post('VPM');
			        $OldVPM = $this->user_model->getMemberByRoleAndCelulle($clubId,3,'Marketing') ;
			        $OldVPMU = array('roleId'=> 5 , 'ClubID'=> 2 , 'cellule'=> '' ) ;
			        $NewVPM = $this->user_model->getUserInfo($VPM) ;
			        $NewVPMU = array('roleId'=> 3 , 'cellule'=> 'Marketing' );
			        if( !(empty($OldVPM)) )
			        {
			        	echo("VPM: ".$NewVPM->userId ." => ".$OldVPM->userId) ;
			        	if($OldVPM->userId != $VPM)
			        	{
			        		$this->user_model->editUser($OldVPMU , $OldVPM->userId);
			       			$this->user_model->editUser($NewVPMU , $NewVPM->userId);
			       			$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        	}	
			        }
			        else 
			        {
			        		echo("<br>VPM: ".$NewVPM->userId ) ;
			        		$this->user_model->editUser($NewVPMU , $NewVPM->userId); 
			        		$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        }


			        //VPRH
			        $VPRH = $this->input->post('VPRH');
			        $OldVPRH=$this->user_model->getMemberByRoleAndCelulle($clubId,3,'Ressource Humaine');
			        $OldVPRHU = array('roleId'=> 5 , 'ClubID'=> 2 , 'cellule'=> '' ) ;
			        $NewVPRH = $this->user_model->getUserInfo($VPRH) ;
			        $NewVPRHU = array('roleId'=> 3 , 'cellule'=> 'Ressource Humaine' ) ;
			        if( !(empty($OldVPRH)) )
			        {
			        	echo("<br>VPRH: ".$NewVPRH->userId ." => ".$OldVPRH->userId) ;
			        	if($OldVPRH->userId != $VPRH)
			        	{
			        		$this->user_model->editUser($OldVPRHU , $OldVPRH->userId);
			       			$this->user_model->editUser($NewVPRHU , $NewVPRH->userId);
			       			$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        	}			        	
			        }
			        else 
			        {
			        		echo("<br>VPRH: ".$NewVPRH->userId ) ;
			        		$this->user_model->editUser($NewVPRHU , $NewVPRH->userId); 
			        		$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        }

			        //VPAF
			        $VPAF = $this->input->post('VPAF');
			        $OldVPAF=$this->user_model->getMemberByRoleAndCelulle($clubId,3,'Administration et finance');
			        $OldVPAFU = array('roleId'=> 5 , 'ClubID'=> 2 , 'cellule'=> '' ) ;
			        $NewVPAF = $this->user_model->getUserInfo($VPM) ;
			        $NewVPAFU = array('roleId'=> 3 , 'cellule'=> 'Administration et finance' ) ;
			        if( !(empty($OldVPRH)) )
			        {
			        	echo("<br>VPAF: ".$NewVPAF->userId ." => ".$OldVPAF->userId) ;
			        	if($OldVPAF->userId != $VPAF)
			        	{
			        		$this->user_model->editUser($OldVPAFU , $OldVPAF->userId);
			       			$this->user_model->editUser($NewVPAFU , $NewVPAF->userId);
			       			$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        	}			        	
			        }
			        else 
			        {
			        		echo("<br>VPAF: ".$NewVPAF->userId ) ;
			        		$this->user_model->editUser($NewVPAFU , $NewVPAF->userId); 
			        		$this->session->set_flashdata('success', 'Le bureau à été mise à jour enregistrée ');
			        }

			        //  redirect('/Club/editClub/'.$clubId)  ;
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