<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Score_club_model extends CI_Model
{

    function ClassementClub($SenJun)
    {
        $this->db->select('sum(BaseTbl.points) scores , club.name club ');
        $this->db->from('tbl_club_scores as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_club as club', 'proj.clubId = club.clubID', 'LEFT');

        
        $this->db->where(' club.SenJun = ', $SenJun ) ;
        $this->db->where(' proj.startDate > ','2020-09-15') ;
        $this->db->where(' BaseTbl.statut = ','0') ;
        $this->db->where('club.is_Actif =  ', 1);
        
        $this->db->group_by('club.clubID' );
        $this->db->order_by('scores  DESC' );
        
        $query = $this->db->get(); 
        $result = $query->result();        
        return $result;
    }
    

    function scoreListingByClub($clubID)
    {
        $this->db->select('proj.titre , proj.type  , BaseTbl.points , BaseTbl.createdDTM  ');
        $this->db->from('tbl_club_scores as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->where(' proj.clubID = ', $clubID ) ;
        $this->db->where(' proj.startDate > ','2020-09-15') ;
        $this->db->where(' BaseTbl.statut = ','0') ;
        $this->db->order_by('BaseTbl.createdDTM','ASC');
        
        $query = $this->db->get(); 
        $result = $query->result();        
        return $result;
    }

     function scoreByClub($clubID)
    { 
        $this->db->select('sum(BaseTbl.points) points');
        $this->db->from('tbl_club_scores as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->where(' proj.clubID = ', $clubID ) ;
        $this->db->where(' proj.startDate > ','2020-09-15') ;
        $this->db->where(' BaseTbl.statut = ','0') ;
        $this->db->order_by('BaseTbl.createdDTM','ASC');
        
        $query = $this->db->get(); 
        $result = $query->row();        
        return $result;
    }

     function scoreByProject($project)
     { 
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_club_scores as BaseTbl');
        $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->where(' BaseTbl.projectId = ', $project ) ;
        $this->db->where(' proj.startDate > ','2020-09-15') ;
        $this->db->where(' BaseTbl.statut = ','0') ;
        $this->db->order_by('BaseTbl.createdDTM','ASC');
        
        $query = $this->db->get(); 
        $result = $query->row();        
        return $result;
    }

    function addNew($scoresInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_club_scores', $scoresInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }


    function getProjectInfo($projectID)
    {
        $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.banner , BaseTbl.type , BaseTbl.cible , Clubs.clubID , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local , BaseTbl.eventFB  ,  BaseTbl.createdDate ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('BaseTbl.projectID', $projectID);
        $query = $this->db->get();
        
        return $query->row();
    }

    

}

?>