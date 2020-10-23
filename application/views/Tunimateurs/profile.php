   <section>
      <div class="gap2 gray-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row merged20" id="page-contents">
                     

                    <div class="user-profile">
                <figure>
                  <img src="<?php echo base_url() ?>assets/images/resources/profile-image.jpg" alt="">
                  <ul class="profile-controls">
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Add friend"><i class="fa fa-user-plus"></i></a></li>
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Follow"><i class="fa fa-star"></i></a></li>
                    <li><a class="send-mesg" href="#" title="" data-toggle="tooltip" data-original-title="Send Message"><i class="fa fa-comment"></i></a></li>
                    <li>
                      <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                        <!--
                        <ul class="more-dropdown">
                          <li><a href="setting.html" title="">Update Profile Photo</a></li>
                          <li><a href="setting.html" title="">Update Header Photo</a></li>
                          <li><a href="setting.html" title="">Account Settings</a></li>
                          <li><a href="support-and-help.html" title="">Find Support</a></li>
                          <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                          <li><a href="#" title="">Block Profile</a></li>
                        </ul>
                      -->
                      </div>
                    </li>
                  </ul>
                </figure> 
              </div>

              <div class="user-feature-info">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-3">
                    <div class="user-figure">
                      <figure><img src="<?php echo base_url() ?>uploads/avatar/<?php echo $userInfo->avatar ?>" alt=""></figure>
                      <div class="author-meta">
                        <h5><a href="#" title=""><?php echo $userInfo->name ?></a></h5>
                        <span><?php echo $userInfo->role ?> <?php echo $userInfo->cellule ?></span>
                        <ins><?php if ($userInfo->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$userInfo->ClubName ; ?></a>
</ins>
                      </div>
                      <!--
                      <a href="setting.html" title="">edit your profile</a>
                      -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-9">
                    <div class="user-inf-meta">
                      <ul class="user-info">
                        <li><span>0</span> Projets</li>
                        <li><span>0</span> Formations</li>
                        <li><span>0</span> Conférences</li>
                        <li><span>0</span> Missions</li>
                      </ul>
                      <ol class="pit-rate">
                        <li class="rated"><i class="fa fa-star"></i></li>
                        <li class="rated"><i class="fa fa-star"></i></li>
                        <li class="rated"><i class="fa fa-star"></i></li>
                        <li class="rated"><i class="fa fa-star"></i></li>
                        <li class=""><i class="fa fa-star"></i></li>
                      </ol>
                      <span>4.7/5</span>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="job-progres">
                      <li><span class="main-color">0%</span> Tâches</li>
                      <li><span class="color-blue">0</span> Tâches en cours</li>
                      <li><span class="color-valvet">0</span> Tâches terminées</li>
                    </ul>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sharing-tools">
                      <div class="we-video-info">
                        <ul>
                          <li>
                            <span class="views" title="views">
                              <i class="fa fa-eye"></i>
                              <ins>0</ins>
                            </span>
                          </li>
                          <li>

                        </ul>
                        <div class="share-to-other">
                          <ul>
                            <?php if($userInfo->facebook != '' ){ ?>
                            <li>
                              <a title="" href="<?php echo $userInfo->facebook  ?>" class="facebook-color"><i class="fa fa-facebook-square"></i></a></li>
                            <li>
                            <?php }if($userInfo->linkedin != '' ){ ?>
                            <li>
                              <a title="" href="<?php echo $userInfo->linkedin  ?>" class="dribble-color"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                            <?php }if($userInfo->instagram != '' ){ ?>
                            <li>
                              <a title="" href="<?php echo $userInfo->instagram  ?>" class="instagram-color"><i class="fa fa-instagram"></i></a>
                            </li>
                            <?php } ?>

                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>


               <div class="row">
               <div class="col-lg-12">
               <div class="row merged20" id="page-contents">
               <div class="col-lg-4">
                        <aside class="sidebar static left">
                           <div class="widget">
                              <h4 class="widget-title">Badges <a class="see-all" href="#" title="">See All</a></h4>
                              <ul class="badgez-widget">
                                 <li>
                                 <a href="#" title="" data-toggle="tooltip" data-original-title="Male User"><img src="images/badges/badge2.png" alt=""></a>
                                 </li>
                                 
                              </ul>
                           </div><!-- badges -->
                           <div class="central-meta ">
                              <span class="create-post">Personal Info</span>
                              <div class="personal-head">
                                <span class="f-title"><i class="fa fa-user"></i> About Me:</span>
                                <p>
 
                                </p>
                                <span class="f-title"><i class="fa fa-birthday-cake"></i> Anniversaire:</span>
                                <p>
                                  <?php echo $userInfo->birthday ?> 
                                </p>
                                <span class="f-title"><i class="fa fa-phone"></i> Mobile:</span>
                                <p>
                                  <?php echo $userInfo->mobile ?>  
                                </p>
                                <span class="f-title"><i class="fa fa-male"></i> Sexe:</span>
                                <p>
                                  <?php echo $userInfo->sexe ?>  
                                </p>
                                <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                <p>
                                  <?php echo $userInfo->gouvernorat ?> 
                                </p>
                                <span class="f-title"><i class="fa fa-briefcase"></i> Occupation:</span>
                                <p>
                                  UI/UX Designer 
                                </p>
                                <span class="f-title"><i class="fa fa-handshake-o"></i> Joined:</span>
                                <p>
                                  <?php echo $userInfo->createdDtm ?>  
                                  <br> par <?php echo $userInfo->parrain ?>  
                                </p>
                                
                                <span class="f-title"><i class="fa fa-envelope"></i> Email &amp; Website:</span>
                                <p>
                                  <a href="wpkixx.html" title="">www.wpkixx.com</a> Pitnik@yourmail.com 
                                </p>
                                
                              </div>
                            </div>
                           
                           
                           <div class="advertisment-box">
                              <h4 class="">publicité</h4>
                              <figure>
                                 <a href="#" title="Advertisment"><img src="<?php echo base_url() ?>assets/images/resources/ad-widget.gif" alt=""></a>
                              </figure>
                           </div>
                           
                           <div class="widget">
                              <h4 class="widget-title">Activité récente</h4>
                              <ul class="activitiez">
                                 <!--  log 
                                 <li>
                                    <div class="activity-meta">
                                       <i>10 hours Ago</i>
                                       <span><a href="#" title="">Commented on Video posted </a></span>
                                       <h6>by <a href="time-line.html">black demon.</a></h6>
                                    </div>
                                 </li>
                                 -->
                              </ul>
                           </div><!-- recent activites -->
                           
                        </aside>
                     </div>      
                 
                     <div class="col-md-8">
                        
                        <div class="central-meta">
                  <span class="create-post">General Info<a href="#" title="">See All</a></span>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="gen-metabox">
                        <span><i class="fa fa-puzzle-piece"></i> Tunivisions Experience</span>
                          <?php foreach ($ExpTuns as $ExpTun ) { ?>
                           Mandat : <b> <?php echo  $ExpTun->attacheDT ?> -  <?php echo  $ExpTun->endDT ?></b>
                          <p>
                            <a href="#" title="#" > <?php echo  $ExpTun->role ?> </a> <?php echo  $ExpTun->cellule ?> 
                            <a href="#" title="#"> <?php if ($ExpTun->clubId > 5 ) {echo "club ";}  echo 'Tunivisions '.$ExpTun->ClubName ; ?> </a>
                          </p>
                          <?php } ?>
                      </div>
                      <div class="gen-metabox">
                        <span><i class="fa fa-plus"></i> Skills</span>
                        <p>
                          Swimming, Surfing, Uber Diving, Anime, Photography, Tattoos, Street Art.
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="gen-metabox">
                        <span><i class="fa fa-mortar-board"></i> Diplome</span>
                        <p>
                          Master of computer science, sixteen years degree From <a href="#" title="">Oxford Uniersity, London</a>
                        </p>
                      </div>
                      <div class="gen-metabox">
                        <span><i class="fa fa-certificate"></i> Expérience professionnelle</span>
                        <p>
                          Currently working in the "color hands" web development agency from the last 5 five years as <a href="#" title="">Senior UI/UX Designer</a>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-">
                      <div class="gen-metabox no-margin">
                        <span><i class="fa fa-sitemap"></i> Langue</span>

                      </div>
                    </div>
                    
                  </div>  
                </div>

                     </div>



                </div>
             </div>
          </div>     
            </div>
         </div>
      </div>   
   </section><!-- content -->