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

 
   function PresenceCheck($projectId,$userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->where('BaseTbl.projectID', $projectID);
        $this->db->where('BaseTbl.userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    } 

    function addPresence($projectInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_scoring', $projectInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    } 

}

?>