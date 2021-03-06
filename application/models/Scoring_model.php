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


     function ClassementMembres($roleId,$SenJun,$cellule,$limit) 
     {
        $this->db->select('user.userId , user.avatar , user.name  , sum(BaseTbl.points) scores , BaseTbl.ValidDTM , club.name club  , club.clubID ');
        $this->db->from('tbl_scoring as BaseTbl');
        
        $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as club', 'user.clubId = club.clubID', 'LEFT');
        $this->db->join('tbl_club_scores as scoreProj ', 'BaseTbl.projectId = scoreProj.projectId', 'LEFT');
        $this->db->join('tbl_project as proj ', 'BaseTbl.projectId = proj.projectId', 'LEFT');


        

        $this->db->where('scoreProj.statut =  ', 0 );

        $this->db->where('user.roleId =  ', $roleId);
        if($cellule != 'All' ){
        $this->db->where('user.cellule =  ', $cellule);
        }
        $this->db->where('user.isDeleted = ', 0);
        $this->db->where('club.is_Actif =  ', 1);
        $this->db->where('club.SenJun =  ', $SenJun);

        $this->db->where('BaseTbl.statut = ',0 );
        
        if($limit>0){
        $this->db->limit($limit );
        }
        
        $this->db->group_by('user.userId' );
        $this->db->order_by('scores  DESC' );
        $query = $this->db->get();
         
        return $query->result();
    } 

     function ScoreByUser($userId,$type) 
     {


        if ($type == 'project'){
            $this->db->select('BaseTbl.scoringId  , sum(BaseTbl.points) points , BaseTbl.ValidDTM , proj.projectId , proj.titre , proj.type , club.name  , club.clubID , valider.name validBy , valider.userId validerId , scores.statut statutS  , proj.cible ');
            $this->db->from('tbl_scoring as BaseTbl');
            $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
            $this->db->join('tbl_club as club', 'proj.clubId = club.clubID', 'LEFT');
            $this->db->join('tbl_club_scores as scores', 'scores.projectId = proj.projectId', 'RIGHT');
            $this->db->join('tbl_users as valider', 'BaseTbl.createdBy = valider.userId', 'LEFT');
        
       
            $this->db->where('BaseTbl.projectId != ', Null );
            $this->db->where('BaseTbl.affectId = ', Null );
            $this->db->where('BaseTbl.reunionID = ', Null );
            $this->db->where('BaseTbl.userId', $userId);
            $this->db->where('BaseTbl.statut = ',0 );
            $this->db->group_by('BaseTbl.projectId' );
        }


        if ($type == 'tache'){

            $this->db->select('BaseTbl.scoringId  , sum(BaseTbl.points) points , BaseTbl.ValidDTM , proj.projectId , proj.titre , proj.type , club.name  , club.clubID , valider.name validBy , valider.userId validerId , scores.statut statutS  , proj.cible , task.titre  taskTitre , task.type taskType ');
            $this->db->from('tbl_scoring as BaseTbl');
            $this->db->join('tbl_affectation as affect', 'affect.affectationId = BaseTbl.affectId', 'LEFT');
            $this->db->join('tbl_task as task', 'affect.tacheId = task.tacheId', 'LEFT');
            $this->db->join('tbl_project as proj', 'proj.projectId = task.projectId', 'LEFT');
            $this->db->join('tbl_club as club', 'proj.clubId = club.clubID', 'LEFT');
            $this->db->join('tbl_club_scores as scores', 'scores.projectId = proj.projectId', 'RIGHT');
            $this->db->join('tbl_users as valider', 'BaseTbl.createdBy = valider.userId', 'LEFT');

            $this->db->where('BaseTbl.projectId = ', Null );
            $this->db->where('BaseTbl.affectId != ', Null );
            $this->db->where('BaseTbl.reunionID = ', Null );
            $this->db->where('BaseTbl.userId', $userId);
            $this->db->where('BaseTbl.statut = ',0 );
            
            $this->db->group_by('BaseTbl.affectId' );


        }

           
            
            $this->db->order_by('BaseTbl.ValidDTM  DESC' );
        $query = $this->db->get();
         

        return $query->result();
    } 



     function RankByUsersClub($clubId) 
     {
        $this->db->select(' user.name , user.avatar , club.name clubName , sum(BaseTbl.points) scores  ');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as club', 'user.clubId = club.clubID', 'LEFT');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');

        $this->db->join('tbl_club_scores as scoreProj ', 'BaseTbl.projectId = scoreProj.projectId', 'LEFT');
        $this->db->where('scoreProj.statut =  ', 0 );

        $this->db->where('proj.clubId', $clubId);
    
        $this->db->where('user.clubID', $clubId);
        $this->db->where('user.roleId', 5);
        $this->db->where('BaseTbl.statut = ',0 );
        $this->db->group_by('user.userId' );
        $this->db->order_by('scores  DESC' );
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
        $this->db->select('BaseTbl.scoringId ,valider.name validby , user.name , user.avatar , user.clubId , role.role , club.name club , valider.name  valider  , BaseTbl.createdDTM');
        $this->db->from('tbl_scoring as BaseTbl');
        $this->db->join('tbl_users as user', 'user.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_roles as role', 'role.roleId = user.roleId', 'LEFT');
        $this->db->join('tbl_club as club', 'user.clubId = club.clubID', 'LEFT');
        $this->db->join('tbl_users as valider', 'valider.userId = BaseTbl.createdBy', 'LEFT');
        $this->db->where('BaseTbl.projectId', $projectId);
        $this->db->where('BaseTbl.statut = ', 0);
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