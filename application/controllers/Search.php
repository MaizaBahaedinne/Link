<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Search extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('project_model');
        $this->load->model('search_model');
        
        $this->isLoggedInPub();   
    }
    

	public function index()
		        {
						$text = $this->input->post('text');
		              
		                $data['users'] = $this->search_model->userListingSearch($text);
		                $data['clubs'] = $this->search_model->clubListingSearch($text);
		                $data['projets'] = $this->search_model->projectListingSearch($text);
 						$data['SearchText'] = $text;
 						
            			$searchInfo = array(
		                 'text' =>  $text, 
		                 'createdBy' => $this->vendorId ,
		                 'createdDTM'=> date('Y-m-d H:i:s')
		                );

			   		   $resultat = $this->search_model->addNew($searchInfo);

		                $this->global['pageTitle'] = 'Chercher';
		            	$this->global['active'] = 'actu';
		            	
		                $this->loadViews("search/list", $this->global, $data, NULL);   
		        		

		        }



		        


		        		





    public function addNewSearch()
		        {
		               
			   		   $actuInfo = array(
		                 'text' =>  $text, 
		                 'createdBy' => $this->vendorId ,
		                 'createdDate'=> date('Y-m-d H:i:s')
		                     );

			   		   $resultat = $this->actualite_model->addNew($actuInfo);

		        	    redirect('Actu/Show'.$resultat) ;  
		          
		        }    


		
}