<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Club_model extends CI_Model
{


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function clubListingCount($type)
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.birthday , BaseTbl.city ,BaseTbl.email , BaseTbl.is_Actif ');
        $this->db->from('tbl_club as BaseTbl');
        $this->db->where('BaseTbl.clubID > ', 5 ) ;
        if($type !=  0)
        {
            $this->db->where('BaseTbl.SenJun = ', $type ) ;   
        }
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
    function clubListing($SA,$clubID)
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.is_Actif , BaseTbl.SenJun , BaseTbl.city , BaseTbl.email , BaseTbl.facebook ');
        $this->db->from('tbl_club as BaseTbl');
         $this->db->where('BaseTbl.clubID > ', 5 ) ;
         $this->db->where('BaseTbl.clubID != ', -1 ) ; 
        if($SA!=1){
               
                
                if($clubID == 0 ){
                    $this->db->where('BaseTbl.SenJun = ', 3 ) ;      
                }
                if($clubID == 1 ){
                    $this->db->where('BaseTbl.SenJun = ', 4 ) ;      
                }
        }

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
        $this->db->select('*' );
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

  