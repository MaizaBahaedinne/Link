<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Academy extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('Academy_formation_model');
        
        $this->isLoggedInPub();   
    }
    

	public function formationListing()
		        {
						
		               
 					      
            			$data['count'] = "" ; 

		                $this->global['pageTitle'] = 'Academy';
		            	$data['Fromations'] = "" ;
		                $this->loadViews("academy/list", $this->global, $data, NULL);   
		        		

		        }
        		


	public function NewFormation()
		        {
		                
		                $this->global['pageTitle'] = 'Formation';
		           		$this->global['active'] = 'actu';
					    $data['FromationsTypes'] = "" ; 
		           		
		           		
		        		$this->loadViews("academy/formation/newFormation", $this->global, $data, NULL);  
		        		  
		          
		        }  


    public function addNewF()
		        {
		                
		               $Titre = $this->input->post('titre');
		               $Description = $this->input->post('description');		       
			   		   

			   		   $target_dir = "uploads/Academy/";
	                    $target_file = $target_dir . basename($_FILES["affiche"]["name"]);
	                    $uploadOk = 1;
	                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						if(move_uploaded_file($_FILES["affiche"]["tmp_name"], $target_file) ){
			   		   $formationInfo = array(
		                 'label' =>  $label, 
		                 'description' => $Description ,
		                 'affiche' => date('H_i_s').basename($_FILES["fileToUpload"]["name"]) , 
		                 'type' => $type ,
		                 'createdBy' => $this->vendorId ,
		                 'createdDTM'=> date('Y-m-d H:i:s')
		                     );

			   		   $resultat = $this->academy_formation_model->addNew($formationInfo);
			   		   

		        		  
		        		}
		        		redirect('user') ;  
		          
		        }    

		public function formation($formationId)
		        {
		                $data['actuInfo'] =  $this->actualite_model->actuById($formationId);
		                 $this->global['pageTitle'] = $data['actuInfo']->titre  ;
		           		 
		           		 $this->global['active'] = 'actu';
		        		 $this->loadViews("actu/view", $this->global, $data  , NULL); 
		        		  
		          
		        }  
		
}