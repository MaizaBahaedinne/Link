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
		                	echo($this->user_model->getMemberByRoleAndCelulle($key->clubID , 1 , '' ) ) ;

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

		               header('Content-Type: application/json');
            			echo json_encode( $clubs , JSON_PRETTY_PRINT);

						/*	
		                $data["clubs"] =  $clubs ;

 		                $this->global['pageTitle'] = 'Clubs';
		             	$this->global['active'] = 'Clubs';
		                $this->loadViews("club/all", $this->global, $data, NULL);   
						*/
		        }



			public function clubInfo($clubId)
		        {
					
		      

			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			        $data["bureauExe"] = $this->club_model->BureauListing($clubId);
			        $data["projectRecords"] = $this->project_model->projectListingByClub($clubId);
			        $data['cl'] = $clubId;
			        $data["members"] = $this->user_model->userListingByclubINFO($clubId) ;
			 		$count = $this->user_model->userListing($this->vendorId);
			        $data['userRecords'] = $this->user_model->userListingByclub($this->vendorId,$clubId);

			        


			    	$this->global['pageTitle'] = 'Mon club';   
			    	$this->global['clubN'] = $clubId;    
			       $this->loadViews("club/myClub", $this->global, $data, NULL);
		        }


		        public function editClub($clubId)
		        {
					$this->load->model('user_model');
					
                    $data["members"] = $this->user_model->userListingByclub($this->vendorId,$clubId);
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
		       
					
					function Members($clubID)
					    {

					          
					            $searchText = $this->security->xss_clean($this->input->post('searchText'));
					            $data['searchText'] = $searchText;
					            $data["clubInfo"] = $this->club_model->getClubInfo($clubID);	            
					            $data['members'] = $this->user_model->userListingByclub($clubID);
								$data['cl'] = $clubID;
					            
					            $this->global['pageTitle'] = 'members';
					            $this->global['active'] = 'users';
					            $this->loadViews("club/membres", $this->global, $data, NULL);
					        
					    }
}