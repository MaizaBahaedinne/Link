<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
              <!-- user profile banner  -->
                           <div class="user-profile">
                <figure>
                  <div class="edit-pp">
                    <label class="fileContainer">
                      <i class="fa fa-camera"></i>
                      <input type="file">
                    </label>
                  </div>
                  <img src="<?php echo base_url()?>assets/images/resources/fav-banner.jpg" alt="">                  
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
                  <ol class="pit-rate">
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class=""><i class="fa fa-star"></i></li>
                    <li><span>4.7/5</span></li>
                  </ol>
                </figure>
                
                <div class="profile-section">
                  <div class="row">
                    <div class="col-lg-2">
                      <div class="profile-author">
                        <a class="profile-author-thumb" href="about.html">
                          <img alt="author" src="images/resources/fav-dp.jpg">
                          <div class="edit-dp">
                            <label class="fileContainer">
                              <i class="fa fa-camera"></i>
                              <input type="file">
                            </label>
                          </div>
                        </a>
                        <div class="author-content">
                          <a class="h4 author-name" href="#"><?php echo $clubInfo->name ?></a>
                          <div class="country"><?php echo $clubInfo->city ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-10">
                      <ul class="profile-menu">
                        <li>
                          <a class="" href="<?php echo base_url() ?>Club/clubInfo/<?php echo $cl ?>">Projets</a>
                        </li>
                        <li>
                          <a class="active" href="<?php echo base_url() ?>Club/clubInfo/<?php echo $cl ?>">Membes</a>
                        </li>

                        
                      </ul>
                      <ol class="folw-detail">
                        <li><span>Posts</span><ins>101</ins></li>
                        <li><span>Followers</span><ins>1.3K</ins></li>
                        <li><span>Members</span><ins>22k</ins></li>
                      </ol>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="col-lg-12">
                <div class="central-meta">
                  <div class="title-block">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="align-left">
                          <h5>Friends / Followers <span>44</span></h5>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="row merged20">
                          <div class="col-lg-7 col-lg-7 col-sm-7">
                            <form method="post">
                              <input type="text" placeholder="Search Friend">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="select-options">
                              <select class="select" style="display: none;">
                                <option>Sort by</option>
                                <option>A to Z</option>
                                <option>See All</option>
                                <option>Newest</option>
                                <option>oldest</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-1 col-md-1 col-sm-1">
                            <div class="option-list">
                              <i class="fa fa-ellipsis-v"></i>
                              <ul>
                                <li><a title="" href="#">Show Friends Public</a></li>
                                <li><a title="" href="#">Show Friends Private</a></li>
                                <li><a title="" href="#">Mute Notifications</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- title block -->
                <div class="central-meta padding30">
                  <div class="row">
                    <?php foreach ($members as $member ) { ?>

                    <div class="col-lg-4 ">
                      <div class="friend-box">
                        <figure>
                          <img src="<?php echo base_url() ?>assets/images/resources/frnd-cover3.jpg" alt="">
                          <span>Followers: 450</span>
                        </figure>
                        <div class="frnd-meta">
                          <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $member->avatar ?>" class="alligator-profile-member" alt="">
                          <div class="frnd-name">
                            <a href="#" title=""><?php echo $member->name ?></a>
                            <span><?php echo $member->role ?></span>
                          </div>
                          <ul class="frnd-info">
                            <li><span>Departement:</span><?php echo $member->cellule ?></li>
                            <li><span>Anniversaire :</span> <?php echo $member->birthday ?></li>
                            <li><span>Sexe :</span> <?php echo $member->sexe ?></li>
                            <li><span>E-Mail:</span><?php echo $member->email ?></li>
                            <li><span>Photos:</span><?php echo $member->mobile ?></li>
                            
                          </ul>
                          <a class="send-mesg" href="#" title="">Message</a>
                          <div class="more-opotnz">
                            <i class="fa fa-ellipsis-h"></i>
                            <ul>
                              <li><a href="#" title="">Block</a></li>
                              <li><a href="#" title="">UnBlock</a></li>
                              <li><a href="#" title="">Mute Notifications</a></li>
                              <li><a href="#" title="">hide from friend list</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                     <?php }  ?>
                  </div>
                  <div class="lodmore">
                    <span>Viewing 1-8 of 44 friends</span>
                    <button class="btn-view btn-load-more"></button>
                  </div>
                </div>
              </div>  
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section>