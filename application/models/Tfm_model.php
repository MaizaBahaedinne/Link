<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Tfm_model extends CI_Model
{

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMListing()
    {
        $this->db->select('BaseTbl.tfmId , BaseTbl.nom , BaseTbl.dateDebut , BaseTbl.dateFin , BaseTbl.local , BaseTbl.banner , BaseTbl.prix ');
        $this->db->from('tbl_tfm as BaseTbl');
        $this->db->order_by('BaseTbl.dateFin','DESC'); 
           
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
    function TFMPListing($userID)
    {
        $this->db->select('BaseTbl.tfmId , BaseTbl.dateInscrip , BaseTbl.statut ,  BaseTbl.remb   ');
        $this->db->from('tbl_tfm_part as BaseTbl');

        $this->db->where('BaseTbl.userId =',$userID);
       
           
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
    function TFMPId($userID,$TfmId)
    {
        $this->db->select(' BaseTbl.id , BaseTbl.tfmId , BaseTbl.dateInscrip , BaseTbl.statut ,  BaseTbl.remb ');
        $this->db->from('tbl_tfm_part as BaseTbl');

        $this->db->where('BaseTbl.userId =',$userID);
        $this->db->where('BaseTbl.tfmId =',$TfmId);
       
           
        $query = $this->db->get();
        
        $result = $query->row();        
        return $result;
    }




    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewPartTFM($TFMInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_tfm_part', $TFMInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
          

           /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editTFMPart($tfmInfo, $tfmpartId)
    {
        $this->db->where('id', $tfmpartId);
        $this->db->update('tbl_tfm_part', $tfmInfo);
        
        return TRUE;
    }
    

}

