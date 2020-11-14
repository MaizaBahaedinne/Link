<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Posts extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model'); 
        $this->load->model('project_model');   
        $this->load->model('actualite_model');
        $this->load->model('posts_model');
        
        $this->load->model('task_model');
        
        $this->isLoggedIn();   
    }
    

    public function Acceuil()
    {
         $data  ['userId'] = $this->vendorId ; 
         $data['ActuRecords'] = $this->actualite_model->actuListing();
         $data['projectRecords'] = $this->project_model->projectListing();
         $data["clubInfo"] = $this->club_model->getClubInfo($this->clubID);
         $data["members"] = $this->user_model->userListingByclub($this->clubID) ;
         $data["Projets"] = $this->project_model->projectListingByClub($this->clubID);
         $data["taches"] =  $this->task_model->AffectationsByUserListing($this->vendorId); 

         $data  ['postRecords'] =  $this->posts_model->postsListing();
        
            foreach ($data['postRecords'] as $key ) {                
                        $key->commentsRecords              = $this->posts_model->CommentsListing($key->postId);
                        $key->likeRecords             = $this->posts_model->likesListing($key->postId);
                         $key->likeCheck          = $this->posts_model->likeCheck($key->postId,$this->vendorId);
                  }

          
         $this->global['pageTitle'] = 'Acceuil' ;
         $this->loadViews("Acceuil", $this->global, $data, NULL);   
    }



    public function post($postId)
    {   

         $data  ['userId'] = $this->vendorId ; 
         $data['ActuRecords'] = $this->actualite_model->actuListing();
         $data['projectRecords'] = $this->project_model->projectListing();
          $data["clubInfo"] = $this->club_model->getClubInfo($this->clubID);
          $data["members"] = $this->user_model->userListingByclub($this->clubID) ;
                   $data["Projets"] = $this->project_model->projectListingByClub($this->clubID);
         $data["taches"] =  $this->task_model->AffectationsByUserListing($this->vendorId); 

         
         $data  ['postRecords'] =  $this->posts_model-> postById($postId);
        
            foreach ($data['postRecords'] as $key ) {                
                        $key->commentsRecords              = $this->posts_model->CommentsListing($key->postId);
                        $key->likeRecords             = $this->posts_model->likesListing($key->postId);
                         $key->likeCheck          = $this->posts_model->likeCheck($key->postId,$this->vendorId);
                  }

          
         $this->global['pageTitle'] = 'Acceuil' ;
       
        $this->loadViews("post/view", $this->global, $data, NULL);   
    }


    public function addNewP()
    {
        $postText = $this->input->post('postText');
        

                $file_name = 'Post__'.$name.'_'.$_FILES['fileT']['name'];
                $file_tmp = $_FILES['fileT']['tmp_name'];
                
                $file_destination = 'uploads/post/' . $file_name;
                move_uploaded_file($file_tmp, $file_destination);

        $postInfo = array(        
               'Content' => NL2BR($postText) ,
               'photo '=> $file_name  ,
               'userId ' => $this->vendorId ,
               'DatePosted '=> date('Y-m-d H:i:s') ,
           );


        $result = $this->posts_model->addNewPost($postInfo); 
        redirect('/Posts/Acceuil');
    }



     public function addNewComment($postId)
    {
        $comment = $this->input->post('comment');
        $commentInfo = array(        
           'content' => NL2BR($comment) ,
           'userId ' => $this->vendorId ,
           'createdDTM '=> date('Y-m-d H:i:s') ,
           'postId' => $postId 

       );
        $result = $this->posts_model->addNewComment($commentInfo);


        
        redirect('/Posts/post/'.$postId);
    }

    public function deleteComment($commentId)
    {


        $commentInfo = array(        
           'isDeleted' => 1 ,
       );
        $result = $this->posts_model->deleteComment($commentInfo,$commentId);
        return $result ; 
    }


        public function deletePost($postId)
    {

        $postInfo = array(        
           'isDeleted' => 1 ,
       );
        $result = $this->posts_model->deletePost($postInfo,$postId);
        
        redirect('Posts/Acceuil') ;
    }


     public function Like($postId)
    {
        
        $likeInfo = array(        
           'userId ' => $this->vendorId ,
           'createDTM '=> date('Y-m-d H:i:s') ,
           'postId' => $postId 

       );
        $result = $this->posts_model->addNewLike($likeInfo) ;

        if ($result > 0 ){
            return true  ; 
        }

        return false ; 
    }





}