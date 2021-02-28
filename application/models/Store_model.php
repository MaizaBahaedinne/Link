<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Store_model extends CI_Model
{
        
        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function reservationListing()
    {
        $this->db->select('BaseTbl.storeId , BaseTbl.produit , BaseTbl.taille , BaseTbl.nombre , Users.name , Users.mobile , Clubs.name clubName , BaseTbl.statut ');
        $this->db->from('tbl_store as BaseTbl');
         $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.par', 'LEFT');
         $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
     
          
        $query = $this->db->get();
        
        return $query->result();
    }

        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function reservationListingByUser($userId)
    {
        $this->db->select('BaseTbl.storeId , BaseTbl.produit , BaseTbl.taille , BaseTbl.nombre , Users.name , Users.mobile , Clubs.name clubName ');
        $this->db->from('tbl_store as BaseTbl');
         $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.par', 'LEFT');
         $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->where('BaseTbl.par = ', $userId ) ;
          
        $query = $this->db->get();
        
        return $query->result();
    }



        /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewReservation($storeInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_store', $storeInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


   





}

  
