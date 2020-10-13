<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Project_model extends CI_Model
{

    function projectOldListing($serchText)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.description , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , Evaluations.valider , Evaluer.name dobyName , Evaluations.doDate   ,  Scores.score , Evaluations.statut , Scores.affectedBy , Valider.name validName 
            , Evaluations.album , Evaluations.afterMovie , BaseTbl.eventFB');
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');

        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_score_club as Scores', 'Evaluations.score_clubID = Scores.score_clubID', 'LEFT');

        $this->db->join('tbl_users as Valider ', 'Valider.userId = Evaluations.validBy', 'LEFT');
         $this->db->join('tbl_users as Evaluer ', 'Evaluer.userId = Evaluations.doBy', 'LEFT');



        $this->db->where('NOW() > BaseTbl.endDate ') ;
        
        
  

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }




     function ScoringProjectListing($serchText)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.description , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , Evaluations.valider , Evaluer.name dobyName ,  Scores.score , Evaluations.statut , Scores.affectedBy , Valider.name validName 
            , Evaluations.album , Evaluations.afterMovie , BaseTbl.eventFB , Evaluations.doDate');
        
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');

        $this->db->join('tbl_evaluation as Evaluations', 'Evaluations.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_score_club as Scores', 'Evaluations.score_clubID = Scores.score_clubID', 'LEFT');

        $this->db->join('tbl_users as Valider ', 'Valider.userId = Evaluations.validBy', 'LEFT');
         $this->db->join('tbl_users as Evaluer ', 'Evaluer.userId = Evaluations.doBy', 'LEFT');



        $this->db->where('Evaluations.validBy = 0 and Evaluations.doBy != 0 ') ;
        
        $this->db->order_by('Evaluations.doDate ASC ') ;
        
  

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function projectListing()
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName , Clubs.ClubID  ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , BaseTbl.eventFB ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
       

        $this->db->order_by('BaseTbl.startDate','ASC');
        $this->db->where('NOW() < BaseTbl.endDate ') ;

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    function projectListingByClub($clubID)
    {
         $this->db->select('Users.userId , BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName , BaseTbl.description descP ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner , Users.name , Users.avatar , BaseTbl.eventFB ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.createBy', 'LEFT');
        $this->db->where('Clubs.clubID' , $clubID ) ;        
        $this->db->order_by('BaseTbl.endDate','DESC');

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
   


   

        function projectListingByType($type,$clubID)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('Clubs.clubID =' , $clubID ) ;
        $this->db->where('BaseTbl.type =' , $type ) ;
        $this->db->order_by('BaseTbl.startDate','ASC');
        

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    function addNewProject($projectInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_project', $projectInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


    function getProjectInfo($projectID)
    {
        $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.banner , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local , BaseTbl.eventFB  ,  BaseTbl.createdDate ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('BaseTbl.projectID', $projectID);
        $query = $this->db->get();
        
        return $query->row();
    }

    

}

?>