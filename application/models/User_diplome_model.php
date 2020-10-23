<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User_diplome_model extends CI_Model
{
        
    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function diplomeListing($userID)
    {
        $this->db->select('BaseTbl.diplomeId , BaseTbl.dateDebut , BaseTbl.dateFin , Clubs.name instituts , BaseTbl.type , BaseTbl.titre , Clubs.city , ');
        $this->db->from('tbl_users_diplome as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.institut', 'LEFT');
        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.CreatedDTM', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewDipmome($carrierInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_users_diplome', $carrierInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
   
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editDiplome($carrierInfo, $carrierId)
    {
        $this->db->where('diplomeId', $carrierId);
        $this->db->update('tbl_users_diplome', $carrierInfo);
        
        return TRUE;
    }
    
    
    






 


}

  
