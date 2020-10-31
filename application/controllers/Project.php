<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Project extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');
        $this->load->model('club_model'); 
        $this->load->model('project_model'); 
        $this->load->model('scoring_model');
        $this->isLoggedIn();   
    }

		public function index()
		        {
		               
		                $searchText='' ;
		                $data['projectRecords'] = $this->project_model->projectListing();
                                 $data['projectRecords'] = $this->project_model->projectListing();
                                 $data["clubInfo"] = $this->club_model->getClubInfo($this->clubID);
                         $data["members"] = $this->user_model->userListingByclub($this->clubID) ;
                          $data['Projets'] = $this->project_model->projectNationalListing() ;
                          $this->global['pageTitle'] = 'Projets ';
		                  $this->global['active'] = 'Projets';
		                $this->loadViews("project/list", $this->global, $data, NULL);   
		        }


   		public function projectDetails($projectID)
		        {

		                $this->load->model('project_model');
		                $searchText='' ;
		                $data["projet"] = $this->project_model->getProjectInfo($projectID);
                                              
                        $this->global['pageTitle'] = "Projet" ;
		                $this->loadViews("project/view", $this->global, $data, NULL);   
		        }
				
		public function addNew()
			    {
			            $this->load->model('user_model');
			            $data['roles'] = $this->user_model->getUserRoles();
			            $data['clubs'] = $this->user_model->getClubs();
                        $data['members'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);

                       $this->global['pageTitle'] = 'Ajouter un projet ';


			            $this->loadViews("project/New", $this->global, $data, NULL);
			    }

        public function addNewP()
                {
                $type = $this->input->post('type');
                $Titre = $this->input->post('Titre');
                $Description = $this->input->post('description');
                $debut = $this->input->post('debut');
                $fin = $this->input->post('fin');
                $cible = $this->input->post('cible');
               
                $local = $this->input->post('local');
                $prix = $this->input->post('prix');
                $capacite = $this->input->post('capacite');
                $facebook = $this->input->post('facebook');

                $file_name = 'Projet_'.$Titre.'_'.$_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_destination = 'uploads/projet/' . $file_name;
               

                $projectInfo = array(        
                 'banner' => $file_name ,
                 'type' => $type ,
                 'Titre' => NL2BR($Titre) , 
                 'description' => NL2BR($Description) , 
                 'startDate' => $debut , 
                 'endDate' => $fin , 
                 'cible' => $cible ,
                 'local' => $local ,
                 'prix' => $prix ,   
                 'capacite'=>$capacite,
                 'createBy'=> $this->vendorId ,
                 'createdDate'=> date('Y-m-d H:i:s') ,
                 'eventFB'=>$facebook ,
                 'clubID'=>$this->clubID
                     );
                
                if( move_uploaded_file($file_tmp, $file_destination)){
                $this->load->model('project_model');
                $result = $this->project_model->addNewProject($projectInfo);
                                
                }
                
                     redirect('/Project');

                }



                public function editProject($projectId)
                {
                $type = $this->input->post('type');
                $Titre = $this->input->post('Titre');
                $Description = $this->input->post('description');
                $debut = $this->input->post('debut');
                $fin = $this->input->post('fin');
                $cible = $this->input->post('cible');
               
                $local = $this->input->post('local');
                $prix = $this->input->post('prix');
                $capacite = $this->input->post('capacite');
                $facebook = $this->input->post('facebook');

                $file_name = 'Projet_'.$Titre.'_'.$_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_destination = 'uploads/projet/' . $file_name;
               
                $projet = $this->project_model->getProjectInfo($projectId);

                $projectInfo = array(        
                 'banner' => $file_name ,
                 'type' => $type ,
                 'Titre' => NL2BR($Titre) , 
                 'description' => $Description , 
                 'startDate' => $debut , 
                 'endDate' => $fin , 
                 'cible' => $cible ,
                 'local' => $local ,
                 'prix' => $prix ,   
                 'capacite'=>$capacite,
                 'createBy'=> $this->vendorId ,
                 'createdDate'=> date('Y-m-d H:i:s') ,
                 'eventFB'=>$facebook ,
                 'clubID'=>$this->clubID
                     );
                
                if( move_uploaded_file($file_tmp, $file_destination)){
                $this->load->model('project_model');
                $result = $this->project_model->editProject($projectInfo,$projectId);
                                
                }
                
                     redirect('/Project/projectDetails/'.$projectId);

                }




                function addPresence ($projectId,$createdBy ,$userId)
                {

                        $projet = $this->project_model->getProjectInfo($projectId);
                        $participation = $this->scoring_model->PresenceCheck($projectId,$userId) ;
                        echo $participation ;
                          $now  =    strtotime('now') ;
                          $start  =  strtotime($projet->startDate) ;
                          $end =     strtotime('+3 hours',strtotime($projet->endDate)) ;

                        if(  (($now-$start) >= 0 ) )
                        {
                           if( (($now-$end) <= 0 ))
                           {
                                $PresenceInfo = array(   
                                     "projectId" =>    $projectId ,
                                     "createdBy"  => $createdBy ,
                                     "createdDTM"   => date('Y-m-d H:i:s') , 
                                     "ValidDTM"   => date('Y-m-d H:i:s') ,
                                     "userId" => $userId , 
                                     "statut" => 0 
                                ); 

                                if(empty($participation)){
                                $result = $this->scoring_model->addScore($PresenceInfo) ;
                                return "votre participation a été valider pour le projet ".$projet->titre ;
                                }else{
                                $result = $this->scoring_model->editPresence($PresenceInfo,$participation->scoringId) ;
                                return "votre participation a été mise à jour pour le projet ".$projet->titre ;
                                }  

                                
                                    
                            }
                             else
                            {
                                return "Participation non validé <b>Vous avez dépassé le deadline</b> à la prochainne " ;
                            }

                        }
                        

                    



                }




                

			    

}