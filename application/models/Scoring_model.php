<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Scoring_model extends CI_Model
{

     function ScoreByUser($userId) 
     {
        $this->db->select('BaseTbl.points , BaseTbl.ValidDTM , proj.titre , proj.type , club.name  , club.clubID ');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_club as club', 'proj.clubId = club.clubID', 'LEFT');
      
    
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->where('statut = ',0 );
        $this->db->order_by('BaseTbl.ValidDTM  DESC' );
        $query = $this->db->get();
         
        return $query->result();
    } 

    function ScoreByUserByPart($userId) 
     {
        $this->db->select('BaseTbl.points , BaseTbl.ValidDTM , proj.titre , proj.type , club.name  , club.clubID ');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_club as club', 'proj.clubId = club.clubID', 'LEFT');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->where('BaseTbl.projectId !=', NULL );
        $this->db->where('statut = ',0 );
        $query = $this->db->get();
         
        return $query->result();
    } 


     function ScoreByUserByType($userId,$type) 
     {
        $this->db->select('BaseTbl.points , BaseTbl.ValidDTM , proj.titre , proj.type , club.name  , club.clubID ');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_club as club', 'proj.clubId = club.clubID', 'LEFT');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->where('proj.type', $type );
        $this->db->where('statut = ',0 );
        $query = $this->db->get();
         
        return $query->result();
    } 
 
   function PresenceCheck($projectId,$userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->where('BaseTbl.projectId', $projectId);
        $this->db->where('BaseTbl.userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }


    function PresenceByProject($projectId)
    {
        $this->db->select('*');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.projectId', $projectId);
        $query = $this->db->get();
        return $query->result();
    }  

    function addScore($projectInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_scoring', $projectInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    } 



    function editPresence($projectInfo,$scoringId)
    {
         $this->db->where('scoringId', $scoringId);
        $this->db->update('tbl_scoring', $projectInfo);
        
        return TRUE;
    } 



    

}

?>