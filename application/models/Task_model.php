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

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }
     function DisponibleMembreAffected($dateStart,$deadline)
    {   

          $ds= date_create($dateStart);
          $dates =date_format($ds,'Y-m-d H:i:s');
          $df= date_create($dateStart);
          $datef =date_format($df,'Y-m-d H:i:s');




          //tous les utilisateurs affectés  du date concerné
          $this->db->select('us.userId ');
          $this->db->from('tbl_affectation as BaseTbl');
          $this->db->join('tbl_users as us', 'BaseTbl.userAffectatedID = us.userId', 'LEFT');
          $this->db->join('tbl_task as t', 't.tacheId = BaseTbl.tacheId', 'LEFT');
          $this->db->where('t.startedDate >= ',$dateStart);
          $this->db->where('t.deadline <= ',$deadline);
          $tab = $this->db->get();
          $query1_result = $tab->result(); 
          //save the users  affected of querry in ids
          $room_id= array();
          foreach($query1_result as $row){
          $room_id[] = $row->userId;
          }
          $room = implode(",",$room_id);
          $ids = explode(",", $room);

          // tous les utilisateur non affécté 

          $this->db->select('us.userId , us.name  ');
          $this->db->from('tbl_users as us');
           $this->db->where_not_in('us.userId',$ids);
          $query1 = $this->db->get();
          $result1 = $query1->result();        
          //save users not affected 
          $room_id1= array();
          foreach($result1 as $row){
          $room_id1[] = $row->userId;
          }
          $room1 = implode(",",$room_id1);
          $ids1 = explode(",", $room1);

          //resultat final 

          $this->db->select('us.userId , us.name  ');
          $this->db->from('tbl_users as us');
          $this->db->where_not_in('us.userId',$ids);
            $this->db->or_where_in('us.userId',$ids1);

          $queryfinal = $this->db->get();
          $resultfinal = $queryfinal->result();  


          return $resultfinal;



   }
   

   
    


}