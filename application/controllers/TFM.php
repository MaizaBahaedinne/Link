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
	                $data['userRecordsT1'] = $this->Tfm_part_model->TFMPartListinByclubT2($clubID,$projectId);
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




		 public function partantByClub($clubId,$projectId)
		        {	

			       $data['userRecords'] = $this->Tfm_part_model->TFMPartListinByclub($clubId,$projectId);
	                $this->global['pageTitle'] = 'Liste des Participants';
	             	$this->global['active'] = 'TFMP';
	                $this->loadViews("TFM/listpf", $this->global, $data, NULL);   

		        }    



		        


		public function partanTfm ($TFMId){
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

				$part = $this->input->post('participant') ;

				 foreach ( $part as $r)
				{
					$partanTfm = array(  	  
									  'p_tranch1' => '160', 
							          'dateP_tranch1'=>date('Y-m-d H:i:s'),
							          'recepteurTranche1'=>$this->vendorId ,
							          'statut'=> 1 
								     	);
					$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;

					
				}

			redirect('/TFM/PaimentByClub/'.$clubId.'/'.$projectId) ;

		
		}


		


					
		


	


			


		

		

}
