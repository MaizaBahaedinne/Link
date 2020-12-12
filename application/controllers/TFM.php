<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class TFM extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('notification_model');
        $this->load->model('Tfm_part_model');
        $this->load->model('club_model');
        $this->load->model('tfm_model');
        $this->isLoggedIn();   
    }
    

		public function index()
		        {	 
		            $searchText='' ;
		            $data['tfmRecords'] = $this->tfm_model->TFMListing();

		            foreach ($data['tfmRecords'] as $a ) 
		            	{
		            	 	$a->tfm = $this->tfm_model->TFMPId($this->vendorId,$a->tfmId);
		            	}
		            $this->global['pageTitle'] = 'TFM';
		         	$this->global['active'] = 'TFM';
		            $this->loadViews("TFM/list", $this->global, $data, NULL);   
		        }


		public function partant()
		        {		
		        	$data['auto'] =  $this->club_model->getClubInfo($this->clubID) ;
		        	$data['pres'] =  $this->user_model->getUserInfoWithRole($this->vendorId) ;
	                $searchText='' ;
	                $data['tfmRecords'] = $this->tfm_model->TFMListing();
	                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
	             	$this->global['active'] = 'TFM';
	                $this->loadViews("TFM/new", $this->global, $data, NULL);   
		        }



		    public function PaimentByClub($clubID,$projectId)
				{		
					$data['clubID'] = $clubID; 
					$data['projectId'] = $projectId; 
					
	                $data['userRecords'] = $this->Tfm_part_model->TFMPartListinByclubToP($projectId,$clubID);
	               
	                $this->global['pageTitle'] = 'Paiement';
	             	$this->global['active'] = 'TFM';
	                $this->loadViews("TFM/PaimentByClub", $this->global, $data, NULL);   
		        }

		 public function partantF($ProjectId)
		        {	
	            	$data['projectId'] = $ProjectId ;  
	                $data['clubRecords'] = $this->Tfm_part_model->TFMClubPartListing($ProjectId);
	                $this->global['pageTitle'] = ' club  Listing';
	             	$this->global['active'] = 'TFMP';
	                $this->loadViews("TFM/clubPaiement", $this->global, $data, NULL);   
		        }


		 public function TFMClubPartListing()
		        {	

		        	$searchText = $this->security->xss_clean($this->input->post('searchText'));
		            $data['searchText'] = $searchText;
		            $data['userID'] = $this->vendorId;
		            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMClubPartListing());
	                $searchText='' ;
	                $data['userId'] = $this->vendorId ;
	                $data['userRecords'] = $this->Tfm_part_model->TFMClubPartListing();
	                $this->global['pageTitle'] = 'CodeInsect : club  Listing'
;	             	$this->global['active'] = 'TFMP';
	                $this->loadViews("TFM/listpf", $this->global, $data, NULL);   
		        }




		 public function partantByClub()
		        {	

			        $searchText = $this->security->xss_clean($this->input->post('searchText'));
		        	$data['searchText'] = $searchText;
		        
		        	$this->load->library('pagination');
			       	$data['count'] = count($this->Tfm_part_model->TFMPartListinByclub($this->clubID));
			        $searchText='' ;
			        $data['userRecords'] = $this->Tfm_part_model->TFMPartListinByclub($this->clubID);
			        $this->global['pageTitle'] = 'CodeInsect : club  Listing';
			        $this->global['active'] = 'TFMC';
			        $data['userId'] = $this->vendorId ;
			        $this->loadViews("TFM/listpf", $this->global, $data, NULL); 

		        }    



		        


		public function partanTfm ($TFMId){

				//club
		/*		if($this->role == 1 || $this->SA==1  ){
				$date = $this->input->post('dateFonde');
				$email = $this->input->post('email');
				$facebook = $this->input->post('facebook');

				$clubInfo = array(
		          'facebook'=>$email,
		          'email'=>$facebook,
		          'birthday'=>$date ,

		        );

				$resultC = $this->club_model->editclub($clubInfo, $this->clubID) ; 
				}

				
		
				$moto = $this->input->post('bus');
				$sys = $this->input->post('sys');
		*/	
				$moto = $this->input->post('bus');
				$partanTfm = array(
		          'tfmId'=>$TFMId ,
		          'dateInscrip'=>date('Y-m-d H:i:s'),
		          'userId'=>$this->vendorId ,
		          'statut'=>2 ,
		          'moto'=> $moto 
		        );

		         $result = $this->tfm_model->addNewPartTFM($partanTfm) ;


				
		if ($result){	
		   			redirect('/Project/projectDetails/'.$TFMId) ; 		
		   }
		
		}


		public function partanTfmPaiement1 ($clubId,$projectId){

				 foreach ( $this->input->post('participant') as $r)
				{
					$partanTfm = array(  	  
									  'p_tranch1' => '160', 
							          'dateP_tranch1'=>date('Y-m-d H:i:s'),
							          'recepteurTranche1'=>$this->vendorId ,
							          'statut'=> 1 
								     	);
					$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;

					redirect('/TFM/PaimentByClub/'.$clubId.'/'.$projectId) ;
				}



		
		}


				public function partanTfmPaiement2 (){


					foreach ( $this->input->post('participant') as $r)
				{
								 $partanTfm = array(  	  'p_tranch2' => '70', 
									          'dateP_tranch2'=>date('Y-m-d H:i:s'),
									          'recepteurTranche2'=>$this->vendorId ,
									          'statut'=> 1 
									     );
					$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;	
				}


					
		}


		public function stats ($ProjectId){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
			$data['partParReg'] = $this->Tfm_part_model->TFMPartConfirmedByCityListing($ProjectId);
			$data['partParclub'] = $this->Tfm_part_model->TFMPartConfirmedByClubListing($ProjectId);
			$data['partParsexeH'] = $this->Tfm_part_model->TFMPartConfirmedBySexeHListing($ProjectId);
			$data['partParsexeF'] = $this->Tfm_part_model->TFMPartConfirmedBySexeFListing($ProjectId);
			$data['countINS'] = $this->Tfm_part_model->TFMPartListing($ProjectId);
			$data['countTotal'] = count($this->Tfm_part_model->TFMPartListing($ProjectId));
		                
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/stat", $this->global, $data, NULL);   
		
		}


		public function TFMMyBuss ()
				{
							 
		    	  	$searchText = $this->security->xss_clean($this->input->post('searchText'));
		            $data['searchText'] = $searchText;
		            
		            $this->load->library('pagination');
					$data['userRecords'] = $this->Tfm_part_model->TFMMyBuss();
		            $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		         	$this->global['active'] = 'TFMC';
		            $this->loadViews("TFM/bus", $this->global, $data, NULL);   
				
				}

		public function BusPartList ($id){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
           			 $data['searchText'] = $searchText;
            
            		$this->load->library('pagination');
						$data['userRecords'] = $this->Tfm_part_model->BusPartList($id);
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/busPart", $this->global, $data, NULL);   
		
		}

	public function BareCode (){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
           			 $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMPartListing());
		                $searchText='' ;
		                $data['userId'] = $this->vendorId ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMPartListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMP';
		                $this->load->view("TFM/codeABare",$data,false);   
		
		}

		public function remboursement ($r)
		{


				$partanTfm = array( 'remb'=> $this->input->post('r1')
									     );
					$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;	

				redirect('TFM')		 ;
		}


		public function point ($r)
		{
				$partanTfm = array( 'pointDepart'=> $this->input->post('pointDepart')
									     );
				$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;	

				redirect('TFM')		 ;
		}
		

}
