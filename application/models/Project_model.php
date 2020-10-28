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

          function projectNationalListing()
            {
                 $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName , Clubs.ClubID  ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , BaseTbl.eventFB ');
                $this->db->from('tbl_project as BaseTbl');
                $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
               

                $this->db->order_by('BaseTbl.startDate','ASC');
               

                $query = $this->db->get();
                
                $result = $query->result();        
                return $result;
            }


    function projectListingByClub($clubID)
    {
         $this->db->select('Users.userId , BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible ,Clubs.ClubID ,Clubs.name as ClubName , BaseTbl.description descP ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner , Users.name , Users.avatar , BaseTbl.eventFB ');
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
        $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.banner , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local , BaseTbl.eventFB  ,  BaseTbl.createdDate  , BaseTbl.ClubID ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('BaseTbl.projectID', $projectID);
        $query = $this->db->get();
        
        return $query->row();
    }

   /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editProject($projectInfo, $projectId)
    {
        $this->db->where('projectId', $projectId);
        $this->db->update('tbl_project', $projectInfo);
        
        return TRUE;
    }
    







    

}

?>