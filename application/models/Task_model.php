<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Task_model extends CI_Model
{

    function addNewTask($taskInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_task', $taskInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }





    function taskListing($projectId)
    {

       $this->db->select('BaseTbl.tacheId , BaseTbl.startedDate , BaseTbl.deadline , BaseTbl.par   , BaseTbl.titre , BaseTbl.description, proj.titre projtitre, proj.projectId , user.name parname , user.avatar ');
       $this->db->from('tbl_task as BaseTbl');
              $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
              $this->db->join('tbl_users as user', 'user.userId = BaseTbl.par', 'LEFT');
      $this->db->where('BaseTbl.projectId = ', $projectId);

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }

  function AffectationsListing($tacheId)
    {
        $this->db->select('user.name ,BaseTbl.status , user.name parname , user.avatar ');
        $this->db->from('tbl_affectation as BaseTbl');
        $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userAffectatedID', 'LEFT');
        $this->db->where('BaseTbl.tacheId = ', $tacheId);

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }

     function AffectationsByUserListing($userId)
    {
        $this->db->select('user.name ,BaseTbl.status , user.name parname , user.avatar , tasks.titre , tasks.deadline  ');
        $this->db->from('tbl_affectation as BaseTbl');
        $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userAffectatedID', 'LEFT');
        $this->db->join('tbl_task as tasks ', 'tasks.tacheId = BaseTbl.tacheId', 'LEFT');
        $this->db->where('BaseTbl.userAffectatedID = ', $userId);

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }

     function DisponibleMembreListing()
    {
        $this->db->select('BaseTbl.userId , BaseTbl.name  ');
        $this->db->from('tbl_users as BaseTbl');



       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }

   
    


}