<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login_model (Login Model)
 * Login model class to get to authenticate user credentials 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Passation_model extends CI_Model
{

   

     /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewPassation($reunionInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_passation', $reunionInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

            /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function passationByuserId($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_passation');
        $this->db->where('userId', $userId);
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
    function PassationById($passationId)
    {
       $this->db->select('BaseTbl.passationId, User.userId , User.nom, User.prenom  , User.name , Club.clubID , Club.name clubName , RoleAct.role act ,  RoleVol.role vol , RoleVol.roleId , User.cellule , BaseTbl.cellule celluleVol , BaseTbl.PA , BaseTbl.LM ');
        $this->db->from('tbl_passation  as BaseTbl ');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Club ', 'Club.clubID = User.ClubID', 'LEFT');
        $this->db->join('tbl_roles as RoleAct ', 'BaseTbl.roleAct = RoleAct.roleId', 'LEFT');
        $this->db->join('tbl_roles as RoleVol ', 'BaseTbl.roleVol = RoleVol.roleId', 'LEFT');
        $this->db->where('passationId', $passationId);
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
    function passationListing()
    {
        $this->db->select('BaseTbl.passationId, User.userId , User.nom, User.prenom  , User.name , Club.name clubName , RoleAct.role act ,  RoleVol.role vol , User.cellule , BaseTbl.cellule celluleVol ');
        $this->db->from('tbl_passation  as BaseTbl ');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Club ', 'Club.clubID = User.ClubID', 'LEFT');
        $this->db->join('tbl_roles as RoleAct ', 'BaseTbl.roleAct = RoleAct.roleId', 'LEFT');
        $this->db->join('tbl_roles as RoleVol ', 'BaseTbl.roleVol = RoleVol.roleId', 'LEFT');

        $query = $this->db->get();
        
        return $query->result();
    }


                /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function passationListingClub($clubID , $rolVol , $cellule)
    {
        $this->db->select('BaseTbl.passationId, User.userId , User.nom, User.prenom  , User.name , Club.name clubName , Club.clubID  , RoleVol.roleId vol , User.cellule ');
        
        $this->db->from('tbl_passation  as BaseTbl ');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Club ', 'Club.clubID = User.ClubID', 'LEFT');
        $this->db->join('tbl_roles as RoleVol ', 'BaseTbl.roleVol = RoleVol.roleId', 'LEFT');

        $this->db->where('Club.clubID  =  ',$clubID );
        $this->db->where('RoleVol.roleId  =  ',$rolVol );
        $this->db->where('BaseTbl.cellule  =  ',$cellule );

         $this->db->where('Club.clubID  >  ',4 );
        


        $query = $this->db->get();
        
        return $query->result();
    }


                    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function passationListingByClub($clubID)
    {
        $this->db->select('BaseTbl.passationId, User.userId , User.nom, User.prenom  , User.name , Club.name clubName , RoleAct.role act ,  RoleVol.role vol , User.cellule , BaseTbl.cellule celluleVol , Valid.name validBy , Partant.name PostPart , BaseTbl.acceptDate ');
        $this->db->from('tbl_passation  as BaseTbl ');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Club ', 'Club.clubID = User.ClubID', 'LEFT');
        $this->db->join('tbl_roles as RoleAct ', 'BaseTbl.roleAct = RoleAct.roleId', 'LEFT');
        $this->db->join('tbl_roles as RoleVol ', 'BaseTbl.roleVol = RoleVol.roleId', 'LEFT');
        $this->db->join('tbl_users as Partant ', 'Partant.userId = BaseTbl.partant', 'LEFT');
        $this->db->join('tbl_users as Valid ', 'Valid.userId = BaseTbl.accepteBy', 'LEFT');
        
        $this->db->where('Club.clubID  =  ',$clubID );
       


        $query = $this->db->get();
        
        return $query->result();
    }


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
    */
    function editPassation($passationInfo, $passationID)
    {
        $this->db->where('passationId', $passationID);
        $this->db->update('tbl_passation', $passationInfo);
        
        return TRUE;
    }






    
    

}