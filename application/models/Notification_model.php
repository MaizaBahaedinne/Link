<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Notification_model extends CI_Model
{





    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewNotificaition($notifInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_notif', $notifInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function NotificationListing($userID)
    {
         $this->db->select('BaseTbl.notifId , BaseTbl.text , BaseTbl.dateNotif , BaseTbl.seen , BaseTbl.type  ');
        $this->db->from('tbl_notif as BaseTbl');

        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.dateNotif DESC'  );

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


        /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function NotificationListingHome($userID)
    {
         $this->db->select('BaseTbl.notifId , BaseTbl.text , BaseTbl.dateNotif , BaseTbl.seen , BaseTbl.type  ');
        $this->db->from('tbl_notif as BaseTbl');

        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->order_by('BaseTbl.dateNotif DESC'  );
        $this->db->limit(10);

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

 /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function NotificationNoSeenListing($userID)
    {
         $this->db->select(' BaseTbl.text , BaseTbl.dateNotif , BaseTbl.seen , BaseTbl.type  ');
        $this->db->from('tbl_notif as BaseTbl');

        $this->db->where('BaseTbl.userId =', $userID );
        $this->db->where('BaseTbl.seen = ', 'no' );
        $this->db->order_by('BaseTbl.dateNotif ASC'  );

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    
        /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editNotif($notifInfo, $notifId)
    {
        $this->db->where('notifId', $notifId);
        $this->db->update('tbl_notif', $notifInfo);
        
        return TRUE;
    }


        /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getNotifInfo($NotifId)
    {
        $this->db->select('url');
        $this->db->from('tbl_notif');
        $this->db->where('notifId', $NotifId);
        $query = $this->db->get();
        
        return $query->row();
    }

   
}

  