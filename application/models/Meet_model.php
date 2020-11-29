<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Meet_model extends CI_Model
{


        /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function meetListing($clubId)
    {
        $this->db->select('BaseTbl.* , Clubs.*');
        $this->db->from('tbl_meet BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
   
        $this->db->order_by('BaseTbl.dateDebut','ASC');
        $this->db->where('NOW() < BaseTbl.dateDebut ') ;
        $this->db->where('BaseTbl.clubId', $clubId);
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewMeet($meetInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_meet', $meetInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editMeet($meetInfo, $meetId)
    {
        $this->db->where('meetId', $meetId);
        $this->db->update('tbl_meet', $meetInfo);
        return TRUE;
    }


        /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getMeetInfo($meetId)
    {
        $this->db->select('url');
        $this->db->from('tbl_meet');
        $this->db->where('meetId', $meetId);
        $query = $this->db->get();
        return $query->row();
    }

   
}

  