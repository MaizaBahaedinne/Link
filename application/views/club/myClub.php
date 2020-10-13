<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
              <div class="user-profile">
                <figure>
                  <div class="edit-pp">
                    <label class="fileContainer">
                      <i class="fa fa-camera"></i>
                      <input type="file">
                    </label>
                  </div>
                  <img src="<?php echo base_url()?>assets/images/resources/couverture.jpg" alt="">                  
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
                          <div class="country"><?php echo $clubInfo->city ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-10">
                      <ul class="profile-menu">
                        <li>
                          <a class="active" href="<?php echo base_url() ?>Club/clubInfo/<?php echo $cl ?>">Projets</a>
                        </li>
                        <li>
                          <a class="" href="<?php echo base_url() ?>Club/Members/<?php echo $cl ?>">Membes</a>
                        </li>

                        
                      </ul>
                      <ol class="folw-detail">
                        <li><span>Projets</span><ins><?php echo count($projectRecords) ?></ins></li>
                        <li><span>Membres</span><ins><?php echo count($members) ?></ins></li>
                        <li><span>Points</span><ins>0</ins></li>
                      </ol>
                    </div>
                  </div>
                </div>  
              </div><!-- user profile banner  -->



             <!-- sidebar -->
              <div class="col-lg-9">
                                    
                                    <div class="central-meta">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <?php foreach ($projectRecords as $projet ) { ?>

                                                <div class="event-box">
                                                    <div class="row merged20">

                                                        <div class="col-lg-4 col-md-4 col-sm-5">
                                                            <img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" class="alligator-projects " alt="">
                                                                
                                                        </div>
                                                        <div class="col-lg-5 col-md-6 col-sm-5">
                                                            <div class="event-title">
                                                                <span class="ba"></span>
                                                                <h4><a href="<?php echo base_url() ?>Project/projectDetails/<?php echo $projet->projectId ?>" title=""><?php echo $projet->titre ?></a></h4>
                                                                
                                                                <span>de <i class="fa fa-clock-o" style="color: green"></i> <?php echo $projet->startDate ?></span>
                                                                <span>à <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $projet->endDate ?></span>
                                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $projet->local ?></span>
                                                                <span><i class="fa fa-money" aria-hidden="true"></i> <?php echo $projet->prix ?> DT</span>
                                                                <ul class="sociaz-media">
                                                                    <li><a title="" href="<?php echo $projet->eventFB ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                                </ul>
                                                                
                                                                                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-2 col-sm-2">
                                                            <div class="event-time">
                                                                <span class="event-date"><?php echo $projet->type ?></span>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               <?php  } ?>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
              </div><!-- centerl meta -->


              <div class="col-lg-3">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Mon club</h4>
                    <ul class="fav-community">
                      <li><i class="fa fa-address-card"></i> <?php echo $clubInfo->birthday ?> </li>
                      <li><i class="fa fa-users"></i><a href="#" title="">invitez vos amis</a> pour rejoindre le club</li>
                      <li><i class="fa fa-thumbs-up"></i>13 Membre actif</li>
                      <li><i class="fa fa-rss"></i>13 Tunifans</li>
                      <li><i class="fa fa-globe"></i><a href="<?php echo $clubInfo->email ?>" title="">club Tunivisions <?php echo $clubInfo->name ?></a></li>
                      <li><i class="fa fa-map-marker"></i><?php echo $clubInfo->facebook ?></li>
                    </ul>
                  </div>

                  
                  
                  
                  
                
                </aside>
              </div><!-- sidebar -->
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section>