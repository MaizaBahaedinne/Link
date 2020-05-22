<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Posts_model extends CI_Model
{

    function addNewPost($postInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_post', $postInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }


    function addNewComment($CommentInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_comment', $CommentInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }


    function postsListing()
    {
       $this->db->select('BaseTbl.postId , BaseTbl.Content , BaseTbl.userId  , BaseTbl.DatePosted , User.name , User.avatar ');
       $this->db->from('tbl_post as BaseTbl');
       $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
       $this->db->order_by('BaseTbl.DatePosted DESC ');
       $query = $this->db->get();
       $result = $query->result();        
       return $result;
   }


   function postById($postId)
   {
        $this->db->select('BaseTbl.postId , BaseTbl.Content , BaseTbl.userId  , BaseTbl.DatePosted , User.name , User.avatar ');
        $this->db->from('tbl_post as BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.postId  =  ' , $postId ) ;
        $query = $this->db->get();
        return $query->row();
    }



    function CommentsListing($postId)
    {
        $this->db->select('BaseTbl.commentId , BaseTbl.content , BaseTbl.userId  , BaseTbl.createdDTM , BaseTbl.createdDTM  ,  User.name , User.avatar , User.userId comUserId ');
        $this->db->from('tbl_comment as BaseTbl');
        $this->db->join('tbl_users as User ', 'User.userId = BaseTbl.userId', 'LEFT');
        $this->db->where('BaseTbl.postId  =  ' , $postId ) ;
        $this->db->order_by('BaseTbl.createdDTM ASC ');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


     function addNewLike($likeInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_like', $likeInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();  
        return $insert_id;
    }


     function likesListing($postId)
    {
        $this->db->select('*');
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
        $this->db->where('BaseTbl.userId  =  ' , userId ) ;$
        $this->db->order_by('BaseTbl.createDTM ASC');
        $query = $this->db->get();
        $result = $query->row();        
        return $result;
    }




}