<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
              <div class="user-profile">
                
                <figure>
                <!--
                  <div class="edit-pp">
                    <label class="fileContainer">
                      <i class="fa fa-camera"></i>
                      <input type="file">
                    </label>
                  </div>
                -->
                  <img src="<?php echo base_url()?>assets/images/resources/couverture.jpg" alt=""> 
                  <!--                 
                  <ul class="profile-controls">
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Like"><i class="fa fa-thumbs-up"></i></a></li>
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Follow"><i class="fa fa-star"></i></a></li>
                    <li><a class="send-mesg" href="#" title="" data-toggle="tooltip" data-original-title="Send Message"><i class="fa fa-comment"></i></a></li>
                    <li>
                      <div class="edit-seting" title="" data-toggle="tooltip" data-original-title="Edit Profile image"><i class="fa fa-sliders"></i>
                        <ul class="more-dropdown">
                          <li>
                            <a href="#" title="">Share this Page</a>
                          </li>
                          <li>
                            <a href="#" title="">Update Profile Photo</a>
                          </li>
                          <li>
                            <a href="#">Update Header Photo</a>
                          </li>
                          <li>
                            <a href="setting.html" title="" data-toggle="tooltip" data-original-title="">Account Settings</a>
                          </li>
                          <li>
                            <a href="timeline-friends.html" title="">Invite Friends</a>
                          </li>
                          <li>
                            <a href="support-and-help.html" title="">Find support</a>
                          </li>
                          <li>
                            <a href="setting.html" title="">Block Page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  -->
                  <!--
                  <ol class="pit-rate">
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class=""><i class="fa fa-star"></i></li>
                    <li><span>4.7/5</span></li>
                  </ol>
                -->
                </figure>
                
                <div class="profile-section">

                  <div class="row">
                    <div class="col-lg-2">
                      <div class="profile-author">
                        <a class="profile-author-thumb" href="about.html">
                          <img alt="author" src="<?php echo base_url()?>assets/images/resources/profile.png">
                          <div class="edit-dp">
                            <label class="fileContainer">
                              <i class="fa fa-camera"></i>
                              <input type="file">
                            </label>
                          </div>
                        </a>
                        <div class="author-content">
                          <a class="h4 author-name" href="#"><?php echo $clubInfo->name ?></a>
                          <div class="country">Departement <?php echo $cellule ?></div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-7">

                      <ul class="nav nav-tabs  nav-tabs--left" >
                        
                        <li class="nav-item">
                          <a href="#membresBlock" class="nav-link active" data-toggle="tab" ><i class="fa fa-users"></i> Membre</a>
                        </li>

                      </ul>

                    </div>
                    <div class="col-md-3">
                      <ol class="folw-detail">
                        <li><span>Projets</span><ins><?php echo count($projectRecords) ?></ins></li>
                        <li><span>Membres</span><ins><?php echo count($members) ?></ins></li>
                        <li><span>Points</span><ins><?php echo $score->points ?></ins></li>
                      </ol>
                    </div>

                  </div>
                </div>  
              </div><!-- user profile banner  -->



             <!-- sidebar -->
              <div class="col-lg-12 tab-content" >
                          
                 <div class="central-meta tab-pane fade show active " id="membresBlock" >
                    <div class="row">
                      <?php foreach ($members as $member ) { ?>
                      <div class="col-lg-4 ">
                        <div class="friend-box">
                          <figure>
                            <img src="<?php echo base_url() ?>assets/images/resources/frnd-cover3.jpg" style="height: 50px" alt="">
                            <span></span>
                          </figure>
                          <div class="frnd-meta">
                            <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $member->avatar ?>" class="alligator-profile-member" alt="">
                            <div class="frnd-name">
                              <a href="<?php echo base_url()?>User/ProfileShow/<?php echo $member->userId?>" title=""><?php echo $member->name ?></a>
                              <span><?php echo $member->role ?></span>
                            </div>
                            <ul class="frnd-info">
                              <li><span>Cellule:</span><?php echo $member->cellule ?></li>
                              <li><span>née le:</span><?php echo $member->birthday ?></li>
                              <li><span>Sexe :</span> <?php echo $member->sexe ?></li>
                              <li><span>E-Mail:</span><?php echo $member->email ?></li>
                              <li><span>mobile:</span><?php echo $member->mobile ;  ?></li>
                            </ul>
                            <a class="btn-main align-left" href="#" title="">Vister</a>
                            <a class="send-mesg" href="#" title="">Message</a>
                            <div class="more-opotnz">
                              <i class="fa fa-ellipsis-h"></i>
                              <ul>
                                <li><a href="#" title="">Bloquer</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                       <?php }  ?>
                    </div>
     
                  </div>
              </div><!-- centerl meta -->


              

                  
                  
                  

            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section>