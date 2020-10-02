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

		                $this->load->model('club_model');
		                $searchText='' ;
		                $data['clubRecords'] = $this->club_model->clubListing($this->HUA);

		                $this->global['pageTitle'] = 'Clubs';
		             	$this->global['active'] = 'Clubs';
		                $this->loadViews("club/all", $this->global, $data, NULL);   
		        }



			public function clubInfo($clubId)
		        {
					
		      

			        $data["clubInfo"] = $this->club_model->getClubInfo($clubId);
			        $data["bureauExe"] = $this->club_model->BureauListing($clubId);
			        $data["ProjectByClub"] = $this->project_model->projectListingByClubPost($clubId);
			        

			        $data["members"] = $this->user_model->userListingByclubINFO($clubId) ;
			        $data["membersCount"] =count($this->user_model->userListingByclub($this->vendorId,$clubId)) ;
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
		       
					    function members()
					    {

					          
					            $searchText = $this->security->xss_clean($this->input->post('searchText'));
					            $data['searchText'] = $searchText;
					            
					            $this->load->library('pagination');
					            
					            $data['members'] = $this->user_model->userListingByclub($this->clubID);

					            
					            $this->global['pageTitle'] = 'CodeInsect : User Listing';
					            $this->global['active'] = 'users';
					            $this->loadViews("club/members", $this->global, $data, NULL);
					        
					    }
}