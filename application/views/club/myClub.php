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
                          <div class="country"><?php echo $clubInfo->city ?></div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-7">

                      <ul class="nav nav-tabs  nav-tabs--left" >
                        <li class="nav-item">
                          <a href="#ProjetBlock" class="nav-link active" data-toggle="tab" ><i class="fas fa-project-diagram"></i> Projets</a>
                        </li>
                        <li class="nav-item">
                          <a href="#membresBlock" class="nav-link" data-toggle="tab" ><i class="fa fa-users"></i> Membres</a>
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
                <div class="tab-pane fade show active"  id="ProjetBlock" >

                
                    <div class="row">
                      <div class="col-lg-4">
                          <aside class="sidebar static right">
                            <div class="widget">
                              <h4 class="widget-title">Mon club</h4>
                              <ul class="fav-community">
                                <li><i class="fa fa-address-card"></i> <?php echo $clubInfo->birthday ?> </li>
                                <?php if ($role == 1 || $role == 3  || $role == 6 ){ ?>
                                <li><i class="fa fa-users"></i><a data-toggle="modal" data-target="#TuniFan" >invitez vos amis</a> pour rejoindre le club</li>
                                <?php } ?>
                                <li><i class="fa fa-thumbs-up"></i><?php echo count($members) ?> Membre actif</li>
                                <li><i class="fa fa-rss"></i>13 Tunifans</li>
                                <li><i class="fa fa-globe"></i><a href="<?php echo $clubInfo->email ?>" title="">club Tunivisions <?php echo $clubInfo->name ?></a></li>
                                <li><i class="fa fa-map-marker"></i><?php echo $clubInfo->facebook ?></li>
                              </ul>
                            </div>
                          </aside>
                        </div><!-- sidebar -->
                      <div class="col-lg-8">
                      <?php foreach ($projectRecords as $projet ) { ?>
                       <div class="central-meta">
                            <div class="row">
                        <div class="col-lg-12">
                            <div class="event-box">
                                <div class="row merged20">
                                    <div class="col-lg-12 col-md-4 col-sm-5">
                                        <img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" class="alligator-projects " alt=""> 
                                    </div>
                                    <div class="col-lg-9 col-md-6 col-sm-5">
                                        <div class="event-title">
                                            <span class="ba"><?php echo $projet->type ?></span>
                                            <h4><a href="<?php echo base_url() ?>Project/projectDetails/<?php echo $projet->projectId ?>" title=""><?php echo $projet->titre ?></a></h4>
                                            <label class="text-mute" >by <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $projet->ClubID  ?>"> <?php if ($projet->ClubID > 5 ) {echo "club ";}  echo "Tunivisions ".$projet->ClubName; ?></a></label>
                                            <span>de <i class="fa fa-clock-o" style="color: green"></i> <?php echo $projet->startDate ?></span>
                                            <span>à <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $projet->endDate ?></span>
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $projet->local ?></span>
                                            <span><i class="fa fa-money" aria-hidden="true"></i> <?php echo $projet->prix ?> DT</span>
                                            <hr>
                                                <a title="" href="<?php echo $projet->eventFB ?>" ><i class="fa fa-facebook"></i>  Evenement Facebook</a>     
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-2">
                                        <div class="event-time">
                                           <span class="">
                                             
                                            <?php if (empty($projet->score )){  ?>
                                              <?php if( (($role == 1 || $role == 2  || $role == 3 || $role == 6 || $SA == 1 || $role == 2  ) && $projet->ClubID == $clubID ) || $SA == 1  ){ ?>
                                                  <button class="btn btn-danger" data-toggle="modal" data-target="#ProjectScore<?php echo $projet->projectId ?>" >Collecter les points</button>
                                              <?php } ?>

                                               <div class="modal fade" id="ProjectScore<?php echo $projet->projectId ?>">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h6 class="modal-title">Rapport du projet : <?php echo $projet->titre ?> </h6>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">
                                                            <form class="c-form" action="<?php echo base_url() ?>Project/addNewScore/<?php echo $projet->projectId ?>" method="POST" >
                                                            

                                                            <div class="uzer-nam">
                                                            <label><br>Album photos </label>
                                                            <span>https://www.facebook.com/ClubtunivisionsX/photos/</span>
                                                              <input type="text" 
                                                             name="album" width="100%" id="album" pattern="(\w)?(\.)?(\d.*)" required >

                                                           </div>
                                                           <small><span class="text-mute" >Exemple : a.5619848191981</span></small>


                                                        
                                                        
                                                           <div class="uzer-nam">
                                                            <label><br>Video after movie </label>
                                                            <span>https://www.facebook.com/ClubTunivisionsX/videos/</span>
                                                              <input type="text" 
                                                             name="video" width="100%" id="video"  pattern="\d.*"  >
                                                           </div>
                                                           <small><span class="text-mute" >Exemple : 5619848191981</span></small>
                                                            

                                                            <br><br>
                                                            <input type="submit" name="" value="envoyer" class="btn btn-primary">

                                                            </form>

                                                          </div>

                                                          <!-- Modal footer -->
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div><!-- fade Modal -->

                                            <?php }else{  $p = $projet->score  ; echo $p->points.' points' ; } ?>

                                           </span> 
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } ?>
                </div>
                </div>
                </div>           
                            
                 <div class="central-meta tab-pane fade " id="membresBlock" >
                    <div class="row">
                      <?php foreach ($members as $member ) { ?>
                      <div class="col-lg-4 ">
                        <div class="friend-box">
                          <figure>
                            <img src="<?php echo base_url() ?>assets/images/resources/frnd-cover3.jpg" alt="">
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
                              <li><span>née le:</span> <?php echo $member->birthday ?></li>
                              <li><span>Sexe :</span> <?php echo $member->sexe ?></li>
                              <li><span>E-Mail:</span><?php echo $member->email ?></li>
                              <li><span>mobile:</span><?php if($SA == 1 ){echo $member->mobile ; } ?></li>
                            </ul>
                            <!--
                            <a class="btn-main align-left" href="#" title="">Vister</a>
                            <a class="send-mesg" href="#" title="">Message</a>
                            -->
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