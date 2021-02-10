<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User_cariere_model extends CI_Model
{
        
    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function carrierListing($userID)
    {
         $this->db->select('Role.role , BaseTbl.cellule  ,   Clubs.clubId ,  Clubs.name  ClubName , BaseTbl.attacheDT , BaseTbl.endDT , BaseTbl.Approuve ');
        $this->db->from('tbl_users_cariere as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubId', 'LEFT');
        
       
        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.CreatedDTM', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function carrierAutreListing($userID)
    {
         $this->db->select(' BaseTbl.cariereAutreId  , BaseTbl.role , BaseTbl.association , BaseTbl.debut , BaseTbl.fin ');
        $this->db->from('tbl_user_cariere_autre as BaseTbl');
        $this->db->join('tbl_users as User', 'User.userId = BaseTbl.userId','left');

       
        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.createdDTM', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function carrierProListing($userID)
    {
        $this->db->select(' BaseTbl.cariereProId  , BaseTbl.departement , BaseTbl.ste ,  BaseTbl.steDomain , BaseTbl.poste , BaseTbl.debut , BaseTbl.fin ');
        $this->db->from('tbl_user_cariere_pro as BaseTbl');
        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.CreatedDTM', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function langListing($userID)
    {
        $this->db->select(' BaseTbl.langId  , BaseTbl.nom , BaseTbl.niveau');
        $this->db->from('tbl_user_lang as BaseTbl');
        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.niveau', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

      /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function hardListing($userID)
    {
        $this->db->select(' BaseTbl.skilsId  , BaseTbl.nom , BaseTbl.niveau');
        $this->db->from('tbl_user_skils as BaseTbl');
        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.niveau', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewCarrier($carrierInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_users_cariere', $carrierInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

        /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewCarrierAutre($carrierInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_user_cariere_autre', $carrierInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


        /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewCarrierPro($carrierInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_user_cariere_pro', $carrierInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }



            /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewLang($carrierInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_user_lang', $carrierInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


             /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewHard($carrierInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_user_skils', $carrierInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }




   
    
    
    
    
    






 


}

  
