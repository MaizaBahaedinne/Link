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
      $this->db->where('user.isDeleted = ', 0 );

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
        $this->db->where('user.isDeleted = ', 0 );

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


    function addAffectation($affectationInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_affectation', $affectationInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }
    function projectById($tacheId)
        { $this->db->select('BaseTbl.projectId');
               $this->db->from('tbl_task as BaseTbl');
         $query = $this->db->get();
               $result = $query->row();        
               return $result;
   
}
    function affectationListing($tacheId)
    {

       $this->db->select('BaseTbl.affectationId ,BaseTbl.tacheId , BaseTbl.createdDTM , BaseTbl.userAffectedID , BaseTbl.status   , proj.projectId ,t.startedDate , t.deadline , t.par   , t.titre , t.description, user.name parname , user.avatar ');
       $this->db->from('tbl_affectation as BaseTbl');
              $this->db->join('tbl_task as t', 't.tacheId = BaseTbl.tacheId', 'LEFT');
              $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userAffectedID', 'LEFT');
      $this->db->where('BaseTbl.tacheId = ', $tacheId);
      $this->db->where('user.isDeleted = ', 0 );

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }


    


     function DisponibleMembreAffected($dateStart,$deadline,$clubID)
    {   

          $ds= date_create($dateStart);
          $dates =date_format($ds,'Y-m-d H:i:s');
          $df= date_create($dateStart);
          $datef =date_format($df,'Y-m-d H:i:s');


          //tous les utilisateurs affectés  du date concerné
          $this->db->select('us.userId , us.name ');
          $this->db->from('tbl_users as us');
          $this->db->join('tbl_affectation as BaseTbl', 'BaseTbl.userAffectatedID = us.userId', 'right');
          $this->db->join('tbl_task as t', 't.tacheId = BaseTbl.tacheId', 'right');
          $this->db->where('us.ClubID = ',$clubID);
          $this->db->where('us.isDeleted = ', 0 );
          $this->db->where('t.startedDate < ',$deadline);
          $this->db->where('t.deadline > ',$dateStart);
          $tab = $this->db->get();
          $array1 = $tab->result(); 
          

          //tous les utilisateurs 
          $this->db->select('us.userId , us.name ');
          $this->db->from('tbl_users as us');
          $this->db->where('us.ClubID = ',$clubID);
          $tab = $this->db->get();
          $array2 = $tab->result(); 

          $result=array_udiff($array2,$array1,
          function ($obj_a, $obj_b) {
            return $obj_a->userId - $obj_b->userId;
          }
          );

         
       
        return $result ;
       
   }
   

    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editTask($taskInfo, $taskId)
    {
        $this->db->where('tacheId', $taskId);
        $this->db->update('tbl_task', $taskInfo);
        
        return TRUE;
    }

    function deleteTask($taskId, $taskInfo)
    {
        $this->db->where('tacheId', $taskId);
        $this->db->update('tbl_task', $taskInfo);
        
        return $this->db->affected_rows();
    }

   function editAffect($affectInfo, $affectId)
    {
        $this->db->where('affectationId', $affectId);
        $this->db->update('tbl_affectation', $affectInfo);
        
        return TRUE;
    } 


   function deleteAffect($affectInfo, $affectId)
    {
        $this->db->where('affectationId', $affectId);
        $this->db->delete('tbl_affectation');
        
        return TRUE;
    } 

    function getAffectation($affectationId){
      $this->db->select('*');
          $this->db->from('tbl_affectation as BaseTbl');
          where('BaseTbl.affectationId', $affectationId);
    }


}