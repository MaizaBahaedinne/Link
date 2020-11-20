<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Search_model extends CI_Model
{


    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($searchInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_search', $searchInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


            /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingSearch($search)
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName ,  Clubs.clubID , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule , Paren.name parrain , Paren.userId p_userId , BaseTbl.facebook ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->join('tbl_users as Paren', 'Paren.userId = BaseTbl.createdBy', 'LEFT');
       
        $this->db->where('BaseTbl.userId LIKE ' ,  '%'.$search.'%' );
        $this->db->where('Clubs.name LIKE ' ,  '%'.$search.'%' );
        $this->db->order_by('BaseTbl.userId', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


         /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function clubListingSearch($Search)
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.is_Actif , BaseTbl.SenJun , BaseTbl.city ');
        $this->db->from('tbl_club as BaseTbl');
        $this->db->where('BaseTbl.clubID > ', 5 ) ;
        $this->db->where('BaseTbl.clubID != ', -1 ) ; 
        $this->db->where('BaseTbl.name Like ', '%'.$Search.'%' ) ; 

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
   
    function projectListingSearch($Search)
    {
        $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName , Clubs.ClubID  ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description descP ,  BaseTbl.local ,BaseTbl.banner , BaseTbl.eventFB ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
       
       $this->db->where('BaseTbl.titre Like ', '%'.$Search.'%' ) ; 
       $this->db->where('Clubs.name Like ', '%'.$Search.'%' ) ;

        $this->db->order_by('BaseTbl.startDate','ASC');
       

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
 
    

    
   
}

