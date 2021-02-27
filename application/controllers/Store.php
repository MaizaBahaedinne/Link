<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Store extends BaseController {
   

    public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->model('club_model'); 
            $this->load->model('project_model');   
            $this->load->model('scoring_model');   
            $this->load->model('score_club_model');  
            
            $this->isLoggedIn();   
        }    

    public function index()
        {
            $this->global['pageTitle'] = 'Store ';
                          $this->global['active'] = 'Projets';
            $this->loadViews("store/list", $this->global , NULL, NULL);   
        }    




    public function addNewReservation()
        {
          $PR = $this->input->post('PR');
          $PGOR = $this->input->post('PGOR');
          $PGOB = $this->input->post('PGOB');

          $TPR = $this->input->post('TPR');
          $TPGOR = $this->input->post('TPGOR');
          $TPGOB = $this->input->post('TPGOB');

          if($PR > 0){
          $reservationInfo = array(        
           'produit' => "Capuche  Rouge" ,
           'nombre' => $PR ,
           'taille' => $TPR ,
           'createdDate'=> date('Y-m-d H:i:s') ,
           'par'=>$this->vendorId
            );         

            $result = $this->store_model->addNewReservation($reservationInfo);
          }


         if($PGOR > 0){
          $reservationInfo = array(        
           'produit' => "Chaab El Go Rouge" ,
           'nombre' => $PGOR ,
           'taille' => $TPGOR ,
           'createdDate'=> date('Y-m-d H:i:s') ,
           'par'=>$this->vendorId
            );         

           $result = $this->store_model->addNewReservation($reservationInfo);
          }


          if($PGOB > 0){
          $reservationInfo = array(        
           'produit' => "Chaab El Go Bleu" ,
           'nombre' => $PGOB ,
           'taille' => $TPGOB ,
           'createdDate'=> date('Y-m-d H:i:s') ,
           'par'=>$this->vendorId
            );         

           $result = $this->store_model->addNewReservation($reservationInfo);
          }

         if($result)
                {
                    $this->session->set_flashdata('success', 'Votre Reservation est en cours de validation par notre equipe ');
                    redirect('/login') ; 
                }
                else
                {
                    $this->session->set_flashdata('error', 'Problème de reservation ! ');
                }
                    
         redirect('');

        }
     

		

		        


					
				
}