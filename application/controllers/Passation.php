<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Passation extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('passation_model');
        $this->load->model('club_model');

        $this->isLoggedIn();   
    }
    

  public function index()
            {
             

             $data  ['userRecords'] = $this->club_model->clubListing($this->clubID,$this->SA); 

             foreach ($data  ['userRecords'] as $key ) {
        
              $key->NP =  count($this->passation_model->passationListingClub($key->clubID , 1 , '' )) ;
              $key->NVPAF =  count($this->passation_model->passationListingClub($key->clubID , 3 , 'Administration et finance' )) ;
              $key->NAAF =  count($this->passation_model->passationListingClub($key->clubID , 6 , 'Administration et finance' )) ;
              $key->NVPRH =  count($this->passation_model->passationListingClub($key->clubID , 3 , 'Gestion des talents' )) ;
              $key->NARH =  count($this->passation_model->passationListingClub($key->clubID , 6 , 'Gestion des talents' )) ;
              $key->NVPM =  count($this->passation_model->passationListingClub($key->clubID , 3 , 'Marketing' )) ;
              $key->NAM =  count($this->passation_model->passationListingClub($key->clubID , 6 , 'Marketing' )) ;
              $key->NVPE =  count($this->passation_model->passationListingClub($key->clubID , 3 , 'Evenementiel' )) ;
              $key->NAE =  count($this->passation_model->passationListingClub($key->clubID , 6 , 'Evenementiel' )) ;
              $key->ND =  $key->NP + $key->NVPAF +   $key->NAAF +  $key->NVPRH + $key->NARH + $key->NVPM + $key->NAM + $key->NARH + $key->NVPE  + $key->NAE  ; 
              }
             $this->global['pageTitle'] = 'Passation' ;
              $this->loadViews("club/passation/listClub", $this->global, $data, NULL);   
        } 
        


	     public function NewPassation()
		        {
              if(  empty($this->passation_model->passationByuserId($this->vendorId)) ){

		                $this->global['pageTitle'] = 'Passation';
		                $data["Experience"] = $this->user_cariere_model->carrierListing($this->vendorId);
		                $data["ExperienceA"] = $this->user_cariere_model->carrierAutreListing($this->vendorId) ;   
  		           		$data["Diplome"] = $this->user_diplome_model->diplomeListing($this->vendorId) ;
  		           		$data["ExperienceP"] = $this->user_cariere_model->carrierProListing($this->vendorId) ;
  		           		$data["Langue"] = $this->user_cariere_model->langListing($this->vendorId) ;
  		           		$data["skils"] = $this->user_cariere_model->hardListing($this->vendorId) ;		
         						$data["Roles"] = $this->user_model->getUserAllRoles() ; 
           					$data["Clubs"] = $this->user_model->getClubs() ;
  		           		$data["ressourceInfo"] = $this->ressource_model->ressourceListingBUserT($this->vendorId);

		        		    $this->loadViews("club/passation/new", $this->global, $data, NULL);  
                }else
                {
                    $this->global['pageTitle'] = 'Passation';
                    $code = $this->passation_model->passationByuserId($this->vendorId) ; 
                    $data['code']=  $code->passationId ; 

                    $this->loadViews('club/passation/view', $this->global, $data, NULL) ; 
                }
		        }  


        public function NewPassationUniversity()
            {
              if(  empty($this->passation_model->passationByuserId($this->vendorId)) ){

                    $this->global['pageTitle'] = 'Passation';
                    $data["Experience"] = $this->user_cariere_model->carrierListing($this->vendorId);
                    $data["ExperienceA"] = $this->user_cariere_model->carrierAutreListing($this->vendorId) ;   
                  $data["Diplome"] = $this->user_diplome_model->diplomeListing($this->vendorId) ;
                  $data["ExperienceP"] = $this->user_cariere_model->carrierProListing($this->vendorId) ;

                  $data["Langue"] = $this->user_cariere_model->langListing($this->vendorId) ;
                  $data["skils"] = $this->user_cariere_model->hardListing($this->vendorId) ;


            
            $data["Roles"] = $this->user_model->getUserAllRoles() ; 
                $data["Clubs"] = $this->user_model->getClubs() ;


                  $data["ressourceInfo"] = $this->ressource_model->ressourceListingBUserT($this->vendorId);


                $this->loadViews("Foundation/passationUniversity", $this->global, $data, NULL);  
                }else
                {
                          $this->global['pageTitle'] = 'Passation';
                          $code = $this->passation_model->passationByuserId($this->vendorId) ; 
                          $data['code']=  $code->passationId ; 

                 $this->loadViews('club/passation/view', $this->global, $data, NULL) ; 
                }
            }

        public function NewPassationHighSchool()
            {
              if(  empty($this->passation_model->passationByuserId($this->vendorId)) ){

                    $this->global['pageTitle'] = 'Passation';
                    $data["Experience"] = $this->user_cariere_model->carrierListing($this->vendorId);
                    $data["ExperienceA"] = $this->user_cariere_model->carrierAutreListing($this->vendorId) ;   
                  $data["Diplome"] = $this->user_diplome_model->diplomeListing($this->vendorId) ;
                  $data["ExperienceP"] = $this->user_cariere_model->carrierProListing($this->vendorId) ;

                  $data["Langue"] = $this->user_cariere_model->langListing($this->vendorId) ;
                  $data["skils"] = $this->user_cariere_model->hardListing($this->vendorId) ;


            
            $data["Roles"] = $this->user_model->getUserAllRoles() ; 
                $data["Clubs"] = $this->user_model->getClubs() ;


                  $data["ressourceInfo"] = $this->ressource_model->ressourceListingBUserT($this->vendorId);


                $this->loadViews("Foundation/passationUniversity", $this->global, $data, NULL);  
                }else
                {
                          $this->global['pageTitle'] = 'Passation';
                          $code = $this->passation_model->passationByuserId($this->vendorId) ; 
                          $data['code']=  $code->passationId ; 

                 $this->loadViews('club/passation/view', $this->global, $data, NULL) ; 
                }
            }   




	       public function addNewPassation()
		        {	            


                    $this->global['pageTitle'] = 'Passation';
                               

		               $userInfo = array(                                      
                                      'nom'=> strtoupper ($this->input->post('nom')) ,
                                      'prenom'=>$this->input->post('prenom'),
                                      'adresse'=>$this->input->post('adresse'),
                                      'gouvernorat'=>$this->input->post('gouvernorat'),
                                      'delegation'=>$this->input->post('delegation'),
                                      'updatedBy'=>$this->vendorId,
                                      'updatedDtm'=>date('Y-m-d H:i:s'));



		               $result = $this->user_model->editUser($userInfo, $this->vendorId);

                  $user =  $this->user_model->getUserInfoById($this->vendorId);
 						
                  $cellule = $this->input->post('cellule'); 
                  
                  if($this->input->post('roleId') == 1){
                    $cellule = '' ; 
                  }

            $passationInfo = array(                                      
                                      'roleAct'=>$user->roleId,
                                      'celluleAct'=>$user->cellule,
                                      'roleVol'=> $this->input->post('roleId'), 
                                      'cellule'=> '',
                                      'LM'=> NL2BR($this->input->post('LM')) ,
                                      'PA'=> NL2BR($this->input->post('PA')),
                                      'statut'=> 1 ,
                                      'userId'=>$this->vendorId,
                                      'createdDTM'=>date('Y-m-d H:i:s')
                                                                          );

               $result = $this->passation_model->addNewPassation($passationInfo);

                $data['code']=$result ; 


		        		$this->loadViews('club/passation/view', $this->global, $data, NULL) ; 
		        }  





                  




          public function PassationByClub ($clubId)
            {
             

             $data  ['userRecords'] = $this->passation_model->passationListingByClub($clubId) ; 

             
             $this->global['pageTitle'] = 'Passation' ;
              $this->loadViews("club/passation/listByClub", $this->global, $data, NULL);   
        } 


        public function Dossier ($passationId)
            {
             
               $passation = $this->passation_model->PassationById($passationId) ;
               $data["passation"] = $this->passation_model->PassationById($passationId) ;
               $this->global['pageTitle'] = 'Passation';
               $data["Experience"] = $this->user_cariere_model->carrierListing($passation->userId);
               $data["ExperienceA"] = $this->user_cariere_model->carrierAutreListing($passation->userId) ;   
               $data["Diplome"] = $this->user_diplome_model->diplomeListing($passation->userId) ;
               $data["ExperienceP"] = $this->user_cariere_model->carrierProListing($passation->userId) ;
               $data["Langue"] = $this->user_cariere_model->langListing($passation->userId) ;
               $data["skils"] = $this->user_cariere_model->hardListing($passation->userId) ;
               $data["Roles"] = $this->user_model->getUserAllRoles() ; 
               $data["Clubs"] = $this->user_model->getClubs() ;
               $data["ressourceInfo"] = $this->ressource_model->ressourceListingBUserT($passation->userId);

              $this->global['pageTitle'] = 'Passation' ;
              $this->loadViews("club/passation/dossier", $this->global, $data, NULL);   
        } 


        public function AccepteDossier ()
            {
            
              $ids = $this->input->post('id'); 
             foreach ( $ids as $key ) {
              $Dossier =   $this->passation_model->PassationById($key) ;
              echo  $Dossier->clubID .' cellule : '.$Dossier->celluleVol.' role : '.$Dossier->roleId.' name : '.$Dossier->name   ;
              if ( $Dossier->roleId == 1 ){ $Dossier->celluleVol = '' ;  }
              $CandidatActuel = $this->user_model->getMemberByRoleAndCelulle($Dossier->clubID,$Dossier->celluleVol,$Dossier->roleId);
              echo  '<br>'.$CandidatActuel->name   ;

              $CandidatActuelInfo = array('roleId'=>11 , 'cellule'=>''   );
              $this->user_model->editUser($CandidatActuelInfo,  $CandidatActuel->userId);

              $DossierInfo = array('roleId'=>$Dossier->roleId , 'cellule'=>$Dossier->celluleVol   );
              $this->user_model->editUser($DossierInfo,  $Dossier->userId);

              $DossierIn = array('statut' => 0 , 'partant'=>$CandidatActuel->userId , 'acceptDate'=>date('Y-m-d H:i:s') , 'accepteBy'=> $this->vendorId  );
              $this->passation_model->editPassation($DossierIn,  $key);

            }
           
             
        } 




       
		
}