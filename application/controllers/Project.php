<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Project extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');
        $this->load->model('club_model'); 
        $this->load->model('task_model'); 
        $this->load->model('project_model'); 
        $this->load->model('scoring_model');
        $this->load->model('score_club_model');
        $this->load->model('tfm_model');
        $this->isLoggedIn();   
    }

		public function index()
		        {
		               
		                $searchText='' ;
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
                        $data["user"] = $this->user_model->getUserInfoWithRole($this->vendorId);
		                $data["projet"] = $this->project_model->getProjectInfo($projectID);
                        $data["score"] = $this->score_club_model->scoreByProject($projectID); 
                        $data["part"] = $this->scoring_model->PresenceByProject($projectID); 
                        $data["partProject"] =  $this->tfm_model->TFMPId($this->vendorId,$projectID);
                        $data["ateliers"] =  $this->tfm_model->AtelierListing();
                        

                        $this->global['pageTitle'] = "Projet" ;
		                $this->loadViews("project/view", $this->global, $data, NULL);   
		        }

        public function projectStats($SenJun)
                {
                        
                        $projet = $this->project_model->projectStats($SenJun);
                        foreach ($projet as $key ) {
                            $key->score = $this->score_club_model->scoreByProject($key->projectId);
                            $key->part = $this->scoring_model->PresenceByProject($key->projectId);
                            $key->tache = $this->task_model->taskListing($key->projectId);
                        }

                        $data['projectRecords'] =  $projet ;
                                               

                        $this->global['pageTitle'] = "Projet" ;
                        $this->loadViews("project/evalutaionFondation", $this->global, $data, NULL);   
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

                
                function SignalPresence ($ScoringId)
                {
                        $PresenceInfo = array(   
                                     "SignalDTM"   => date('Y-m-d H:i:s') ,
                                     "SignalBy"   => $this->vendorId ,
                                     "statut" => 1 
                                ); 

                        return $this->scoring_model->editPresence($PresenceInfo,$ScoringId) ;


                }

                function addPresence ($projectId,$createdBy ,$userId)
                {

                    $projet = $this->project_model->getProjectInfo($projectId);
                    $participation = $this->scoring_model->PresenceCheck($projectId,$userId) ;
                    echo $participation ;


                      $now  =    strtotime('now') ;
                      $start  =  strtotime($projet->startDate) ;
                      $end =     strtotime('+3 hours',strtotime($projet->endDate)) ;

                      /*  if(  (($now-$start) >= 0 ) )
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

                        }*/
                        
                       


                         if($projet->type =="Couverture Mediatique" && $projet->cible =="Publique" ){ $points = 2 ;}
                         if($projet->type =="Couverture Mediatique" && $projet->cible =="Privé" ){ $points = 1 ;}
                         if($projet->type =="Evenement" && $projet->cible =="Only tunimateur" ){ $points = 2 ;}

                        if($projet->type =="Evenement" && $projet->cible =="Publique" ){ $points = 5 ;}
                        if($projet->type =="Evenement" && $projet->cible =="Privé" ){ $points = 5 ;}
                        if($projet->type =="Evenement" && $projet->cible =="Only tunimateur" ){ $points = 5 ;}
                        
                        if($projet->type =="Formation" && $projet->cible =="Publique" ){ $points = 8 ;}
                        if($projet->type =="Formation" && $projet->cible =="Privé" ){ $points = 8  ;}
                        if($projet->type =="Formation" && $projet->cible =="Only tunimateur" ){ $points = 8 ;}
                        
                        if($projet->type =="Conférence" && $projet->cible =="Publique" ){ $points = 8 ;}
                        if($projet->type =="Conférence" && $projet->cible =="Only tunimateur" ){ $points = 8 ;}
                        
                        if($projet->type =="Action" && $projet->cible =="Publique" ){ $points = 5 ;}
                        if($projet->type =="Action" && $projet->cible =="Privé" ){ $points = 5 ;}
                        if($projet->type =="Action" && $projet->cible =="Only tunimateur" ){ $points = 5 ;}
                        
                      
                        
                        if($projet->type =="Compétition" && $projet->cible =="Publique" ){ $points = 8 ;}
                        if($projet->type =="Compétition" && $projet->cible =="Only tunimateur" ){ $points = 8 ;}
                        if($projet->type =="Compétition" && $projet->cible =="Privé" ){ $points = 6 ;}

                        
                        if($projet->type =="Soirée" && $projet->cible =="Publique" ){ $points = 2 ;}
                        if($projet->type =="Soirée" && $projet->cible =="Only tunimateur" ){ $points = 2 ;}

                        if($projet->type =="Team Building" && $projet->cible =="Publique" ){ $points = 2 ;}
                        if($projet->type =="Team Building" && $projet->cible =="Only tunimateur" ){ $points = 2 ;}
                        if($projet->type =="Team Building" && $projet->cible =="Privé" ){ $points = 2 ;}


                            $data["score"] = $this->score_club_model->scoreByProject($projectId); 


                         if(  (($now-$start) >= 0 ) )
                        {
                           if( (($now-$end) <= 0 ))
                           {

                        if (empty($data["score"])) {

                          $PresenceInfo = array(   
                                     "projectId" =>    $projectId ,
                                     "createdBy"  => $createdBy ,
                                     "createdDTM"   => date('Y-m-d H:i:s') , 
                                     "ValidDTM"   => date('Y-m-d H:i:s') ,
                                     "userId" => $userId , 
                                     "statut" => 0 , 
                                     "points" => $points
                                ); 

                                if(empty($participation)){
                                $result = $this->scoring_model->addScore($PresenceInfo) ;
                                $this->response("votre participation a été valider pour le projet ".$projet->titre ); ;
                                }else{
                                $result = $this->scoring_model->editPresence($PresenceInfo,$participation->scoringId) ;
                                 $this->response("votre participation a été mise à jour pour le projet ".$projet->titre); ;
                                }  
                    }
                    else 
                    {
                        $this->response("ce projet à été cloturé le ".$data["score"]->createdDTM ); ;
                    }
                  


                } 
                }
                else 
                    {
                        $this->response("ce QR code est expiré " ); ;
                    }

                     
                }




               


                public function addNewScore1 ($projectId)
                {

                $projet = $this->project_model->getProjectInfo($projectId);
                $taches = $this->task_model->taskListing($projectId);
                
                $aff = 0 ;
                $affE = 0 ;
                $affP = 0 ;
                foreach ($taches as $tache ) 
                {
                    $tache->affections = $this->task_model->AffectationsListing($tache->tacheId);
                    foreach ($tache->affections as $afff ) {
                     $aff ++ ;
                     if( $afff->status == 1 ){$affE ++ ; }
                    }
                }
                
                $album = $this->input->post('album');
                $video = $this->input->post('video');   
                $objectif = $this->input->post('objectif'); 
                $typeP = $this->input->post('typeP'); 
                $nomF = $this->input->post('nomF'); 
                $teaser = $this->input->post('teaser'); 
                $record = $this->input->post('record'); 


                if($affE > 0 ){
                    $affP  =  (($affE/$aff)*100) ;
                }else
                {
                    $affP = 0 ; 
                }

                $participation = count($this->scoring_model->PresenceByProject($projectId));
                $nbMem = count($this->user_model->userListingByclub($projet->clubID)) ;
                $tauxParticipation = ($participation/$nbMem)*100 ;
                    $s = 0 ;
                

       
                
                        if($projet->type =="Couverture Mediatique" && $projet->cible =="Publique" ){ $points = 10 ;}
                        if($projet->type =="Couverture Mediatique" && $projet->cible =="Privé" ){ $points = 10 ;}
                        if($projet->type =="Couverture Mediatique" && $projet->cible =="Only tunimateur" ){ $points = 10 ;}

                        if($projet->type =="Evenement" && $projet->cible =="Publique" ){ $points = 40 ;}
                        if($projet->type =="Evenement" && $projet->cible =="Privé" ){ $points = 10 ;}
                        if($projet->type =="Evenement" && $projet->cible =="Only tunimateur" ){ $points = 30 ;}
                        
                        if($projet->type =="Formation" && $projet->cible =="Publique" ){ $points = 60 ;}
                        if($projet->type =="Formation" && $projet->cible =="Privé" ){ $points = 40  ;}
                        if($projet->type =="Formation" && $projet->cible =="Only tunimateur" ){ $points = 50 ;}
                        
                        if($projet->type =="Conférence" && $projet->cible =="Publique" ){ $points = 80 ;}
                        if($projet->type =="Conférence" && $projet->cible =="Only tunimateur" ){ $points = 80 ;}
                        
                        if($projet->type =="Action" && $projet->cible =="Publique" ){ $points = 40 ;}
                        if($projet->type =="Action" && $projet->cible =="Privé" ){ $points = 20 ;}
                        if($projet->type =="Action" && $projet->cible =="Only tunimateur" ){ $points = 30 ;}
                        
                        if($projet->type =="Couverture Mediatique" && $projet->cible =="Publique" ){ $points = 10  ;}
                        
                        if($projet->type =="Compétition" && $projet->cible =="Publique" ){ $points = 60 ;}
                        if($projet->type =="Compétition" && $projet->cible =="Only tunimateur" ){ $points = 50 ;}

                        
                        if($projet->type =="Soirée" && $projet->cible =="Publique" ){ $points = 20 ;}
                        if($projet->type =="Soirée" && $projet->cible =="Only tunimateur" ){ $points = 20 ;}

                        if($projet->type =="Team Building" && $projet->cible =="Publique" ){ $points = 20 ;}
                        if($projet->type =="Team Building" && $projet->cible =="Only tunimateur" ){ $points = 20 ;}
                        if($projet->type =="Team Building" && $projet->cible =="Privé" ){ $points = 20 ;}
                        
                        $description ='Note du projet = '.$points ;    
                        if($video != '' ){ 
                            $points += 10 ; 
                             $description .= "<p style='color:green' >Bonus de <b>+10 points</b> pour la video </p> <br>" ;
                         }
                        if(count($taches) >= 20 )
                        {
                            $points += 15 ; 
                            $description .= "<p style='color:green' >Bonus de <b>+15 points</b> pour le nombre des taches</p> <br>" ;
                        }
                        if($affP >= 75 )
                         {  
                            $points += 15 ;
                            $description .= "<p style='color:gold' >Bonus de <b>+15 points</b> pour le TE > 75%</p> <br>" ;
                            $s = 1 ;
                         }
                         if($tauxParticipation >= 90 )
                         {  
                            $points += 10 ;
                            $description .= "<p style='color:gold' >Bonus de <b>+20 points</b> pour le TP > 90%</p> <br>" ;
                            $s = 1 ;
                         }



                $scoresInfo = array(        
                 'album' => $album ,
                 'video' => $video ,
                 'projectId' => $projet->projectId,
                 'nbMem' => $nbMem ,
                 'participation' => $participation,
                 'tauxParticipation' => $tauxParticipation ,
                 'taches' => count($taches) ,
                 'aff' => $aff,
                 'affE' => $affE ,
                 'affP' => $affP ,
                 'description' => NL2BR($description) ,
                 'createdBy'=> $this->vendorId ,
                 'createdDTM'=> date('Y-m-d H:i:s') ,
                 'objectif'=> $objectif,
                 'typeP' => $typeP,
                 'nomF' => $nomF,
                 'teaser' => $teaser,
                 'record' => $record ,
                 'points'=>$points,
                 'statut' => $s 
                     );

                $result = $this->score_club_model->addNew($scoresInfo); 
                redirect('/Project/projectDetails/'.$projet->projectId);

                }


                

			    

}