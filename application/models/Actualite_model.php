<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Actualite_model extends CI_Model
{



        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function actuInfo($actuID)
    {
        $this->db->select('actuID, titre, description , image , lien , createdBy , createdDate ');
        $this->db->from('tbl_actu');
        $this->db->where('actuID', $actuID);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function actuListing()
    {
        $this->db->select('BaseTbl.actuID , BaseTbl.titre , BaseTbl.description , BaseTbl.image , BaseTbl.createdBy , BaseTbl.createdDate , Users.name , Users.userId ');
        $this->db->from('tbl_actu as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.createdBy');
        $this->db->order_by('BaseTbl.createdDate','DESC'); 
        $this->db->limit(4);      
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($actuInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_actu', $actuInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


   /**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function actuById($actuId)
    {
        $this->db->select('BaseTbl.actuID , BaseTbl.titre , BaseTbl.description , BaseTbl.image , BaseTbl.lien , BaseTbl.createdDate , Users.name , Users.userId ' );
        $this->db->from('tbl_actu as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.createdBy');
        $this->db->where('BaseTbl.actuID', $actuId);
        $query = $this->db->get();
        
        return $query->row();
    }

    
 
    

    
   
}

