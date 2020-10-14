<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Club_model extends CI_Model
{


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function clubListingCount()
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.birthday , BaseTbl.city ,BaseTbl.email , BaseTbl.is_Actif ');
        $this->db->from('tbl_club as BaseTbl');
           
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function clubListing($clubId,$SA)
    {
        $this->db->select('BaseTbl.clubID  ,  Club.name  , Club.is_Actif , Club.SenJun   , Club.city   ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_club as Club', 'BaseTbl.ClubID = Club.clubID', 'LEFT');
        $this->db->where('BaseTbl.roleId = 1 OR BaseTbl.roleId = ','2') ;
        $this->db->where('BaseTbl.isDeleted = ','0') ;

        if($SA!=1){

                $this->db->where('BaseTbl.clubID > ', 5 ) ;

                $this->db->where('BaseTbl.clubID != ', -1 ) ; 

                if($clubId == 0 ){
                    $this->db->where('BaseTbl.SenJun = ', 3 ) ;      
                }

                if($clubId == 1 ){
                    $this->db->where('BaseTbl.SenJun = ', 4 ) ;      
                }
        }


       $this->db->group_by('BaseTbl.clubID') ;
        $query = $this->db->get();
        

        $result = $query->result();        
        return $result;
    }



/**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function getClubInfo($clubID)
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.birthday , BaseTbl.city ,BaseTbl.email ,BaseTbl.facebook , BaseTbl.is_Actif , BaseTbl.charte ' );
        $this->db->from('tbl_club as BaseTbl');
        $this->db->where('BaseTbl.clubID', $clubID);
        $query = $this->db->get();
        
        return $query->row();
    }

     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function BureauListing($clubID)
    {
        $this->db->select(' Users.userId , Users.name as Tname , Users.cellule , Users.avatar , Role.role , Users.cellule   ');
            $this->db->from('tbl_users as Users'); 
            $this->db->join('tbl_roles as Role ', 'Users.roleId = Role.roleId', 'LEFT');
           $this->db->where('Users.roleId  IN (6,2,1,4,3) AND `ClubID` = ',$clubID) ;
           $this->db->where('Users.isDeleted = ',0) ;
       

        $this->db->order_by('Users.roleId', 'ASC') ;
        
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
    function editClub( $clubID, $clubInfo)
    {
        $this->db->where('ClubID', $clubID);
        $this->db->update('tbl_club', $clubInfo);
        
        return TRUE;
    }

        /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addClub ($clubInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_club', $clubInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

   
}

  