<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Task_model extends CI_Model
{

    function addNewTask($taskInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_task', $taskInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }





    function taskListing($projectId)
    {





       $this->db->select('BaseTbl.tacheId , BaseTbl.deadline , BaseTbl.par   , BaseTbl.titre , proj.titre, proj.projectId ');
       $this->db->from('tbl_task as BaseTbl');
              $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.projectId', 'LEFT');

      $this->db->where('BaseTbl.projectId = ', $projectId);

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }

  function AffectationsListing($tacheId)
    {


       $this->db->select('user.name ,BaseTbl.status  ');
       $this->db->from('tbl_affectation as BaseTbl');
              $this->db->join('tbl_Users as user', 'user.userId = BaseTbl.userAffectatedID', 'LEFT');

      $this->db->where('BaseTbl.tacheId = ', $tacheId);

       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }

   function tasksListingbyUser($userId)
    {








      $this->db->select('BaseTbl.TacheId , BaseTbl.deadline , BaseTbl.par , BaseTbl.note   , proj.projectId , BaseTbl.name,BaseTbl.status ');
      $this->db->from('tbl_post as BaseTbl');
      $this->db->join('tbl_project as proj', 'proj.projectId = BaseTbl.idprojet', 'LEFT');



      $this->db->where('BaseTbl.par = ', $userId);

       $query = $this->db->get();
       $result = $query->result();        
       return $result;








     
   }

  /** function ById($postId)
   {
        $this->db->select('BaseTbl.postId , BaseTbl.Content , BaseTbl.userId , BaseTbl.photo  , BaseTbl.DatePosted , User.name , User.avatar ');
        $this->db->from('tbl_post as BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.postId  =  ' , $postId ) ;
        $query = $this->db->get();
        return $query->row();
    }

        function deletePost($postInfo, $postId)
    {
         $this->db->where('postId', $postId);
        $this->db->update('tbl_post', $postInfo);
        
        return TRUE;
    }
*/



/************************ End Comments *****************************/

 /*   function addNewComment($CommentInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_comment', $CommentInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }


    function deleteComment($commentInfo, $commentId)
    {
         $this->db->where('commentId', $commentId);
        $this->db->update('tbl_comment', $commentInfo);
        
        return TRUE;
    }


    function CommentsListing($postId)
    {
        $this->db->select('BaseTbl.commentId , BaseTbl.content , BaseTbl.userId  , BaseTbl.createdDTM , BaseTbl.createdDTM  ,  User.name , User.avatar , User.userId comUserId ');
        $this->db->from('tbl_comment as BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.postId  =  ' , $postId ) ;
        $this->db->where('BaseTbl.isDeleted  =  ' , 0 ) ;

        $this->db->order_by('BaseTbl.createdDTM ASC ');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
*/
/************************ End Comments *****************************/
/************************ LIKES *****************************/
 /*    function addNewLike($likeInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_like', $likeInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }


     function likesListing($postId)
    {
        $this->db->select('User.name, User.avatar');
        $this->db->from('tbl_like as BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.postId  =  ' , $postId ) ;
        $this->db->order_by('BaseTbl.createDTM ASC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


    function likeCheck($postId,$userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_like as BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.postId  =  ' , $postId ) ;
        $this->db->where('BaseTbl.userId  =  ' , $userId ) ;
        $this->db->order_by('BaseTbl.createDTM ASC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
*/
/************************ END LIKES *****************************/


}