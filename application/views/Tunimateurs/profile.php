   <section>
      <div class="gap2 gray-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row merged20" id="page-contents">
                     

                    <div class="user-profile">
                <figure>
                  <img  src="<?php echo base_url() ?>assets/images/resources/tuniproud.jpg" alt="">
                   <!--
                  <ul class="profile-controls">
                   
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Add friend"><i class="fa fa-user-plus"></i></a></li>
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Follow"><i class="fa fa-star"></i></a></li>
                    <li><a class="send-mesg" href="#" title="" data-toggle="tooltip" data-original-title="Send Message"><i class="fa fa-comment"></i></a></li>
                    <li>
                      <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                        
                        <ul class="more-dropdown">
                          <li><a href="setting.html" title="">Update Profile Photo</a></li>
                          <li><a href="setting.html" title="">Update Header Photo</a></li>
                          <li><a href="setting.html" title="">Account Settings</a></li>
                          <li><a href="support-and-help.html" title="">Find Support</a></li>
                          <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                          <li><a href="#" title="">Block Profile</a></li>
                        </ul>
                      
                      </div>
                    </li>
                   
                  </ul>
                   -->
                </figure> 
              </div>

              <div class="user-feature-info">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-3">
                    <div class="user-figure">
                      <figure><img class="alligator-profile"  src="<?php echo base_url() ?>uploads/avatar/<?php echo $userInfo->avatar ?>" alt=""></figure>
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
                        <li><span><?php echo count($participations) ?></span> Participations</li>
                        <li><span><?php echo count($formations) ?></span> Formations</li>
                        <li><span><?php echo count($conferences) ?></span> Conférences</li>
                        <li><span><?php echo '0' ?></span> Missions</li>
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
                      <li><span class="main-color"><?php echo ((count($eff)*100)/count($tasks)) ?>%</span> efficacité</li>
                      <li><span class="color-blue"><?php echo count($tasks) ?></span> Tâches</li>
                      <li><span class="color-valvet"><?php echo count($eff) ?></span> Tâches terminées</li>
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
                                  <?php if ($SA == 1 ){ ?>
                                  <?php echo $userInfo->mobile ?>  
                                  <?php } ?>
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
                                  <?php echo $userInfo->email ?>
                                </p>
                                
                              </div>
                            </div>
                           
                           
                           <div class="advertisment-box">
                              <h4 class="">publicité</h4>
                              <figure>
                                 <a href="#" title="Advertisment"><img src="<?php echo base_url() ?>assets/images/resources/ad-widget.gif" alt=""></a>
                              </figure>
                           </div>
                           
                          
                           
                        </aside>
                     </div>      
                 
                     <div class="col-md-8">
                        
                        <div class="central-meta">
                  <span class="create-post">General Info<a href="#" title="">See All</a></span>
                  <div class="row">
                    <div class="col-lg-6">

                      <div class="gen-metabox">
                        <span><i class="fa fa-puzzle-piece"></i>Experience Tunivisions</span>
                          <?php foreach ($ExpTuns as $ExpTun ) { ?>
                            - Mandat : <b> <?php echo  $ExpTun->attacheDT ?> -  <?php echo  $ExpTun->endDT ?></b>
                          <p>
                            <a href="#" title="#" >&nbsp;&nbsp;<?php echo  $ExpTun->role ?> </a> <?php echo  $ExpTun->cellule ?> 
                            <a href="#" title="#"> <?php if ($ExpTun->clubId > 5 ) {echo "club ";}  echo 'Tunivisions '.$ExpTun->ClubName ; ?> </a>
                          </p>
                          <?php } ?>
                      </div>
                      <div class="gen-metabox">
                        <span><i class="fa fa-plus"></i> Experience Pro</span>
                         <?php foreach ($ExperienceP as $Pro ) { ?>
                            - Mandat : <b> <?php echo  $Pro->debut ?> -  <?php echo  $Pro->fin ?></b>
                          <p>
                            <a href="#" title="#" >&nbsp;&nbsp;<?php echo  $Pro->poste ?> </a> <?php echo  $Pro->departement ?> 
                            <a href="#" title="#">Chez <?php echo $Pro->ste ; ?> </a>
                            <br>
                            <span>Domain :  $Pro->steDomain  </span>
                          </p>
                          <?php } ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="gen-metabox">
                        <span><i class="fa fa-mortar-board"></i> Diplome</span>
                        <?php foreach ($Diplomes as $Diplome ) { ?>
                        <p>
                          <b><?php echo $Diplome->type ?></b>, <?php echo $Diplome->titre ?> <a href="#" title="">  <?php echo $Diplome->instituts ?> - <?php echo $Diplome->city ?> </a>
                        </p>
                         <?php } ?>
                      </div>
                      <div class="gen-metabox">
                        <span><i class="fa fa-certificate"></i>Skills</span>
                        
                        <p>
                          <?php foreach ($skills as $skill) { ?>
                          <?php echo $skill->nom ?> ,
                          <?php } ?>
                        </p>
                        
                      </div>
                  
                   
                    <div class="gen-metabox">
                        <span><i class="fa fa-sitemap"></i> Langue</span>
                          <?php foreach ($Langues as $Langue) { ?>
                          <?php echo $Langue->nom ?> ,
                          <?php } ?>
                    </div>
                      </div>
                    
                  </div>  
                </div>


                <div class="central-meta">
                  <span class="create-post">Activité récente<a href="#" title="">See All</a></span>
                 
                  
                              
                              <ul class="activitiez">
                                 <?php 
                                 if(!(empty($scores))){
                                 foreach ($scores as $score){  ?>
                                 <li>
                                    <div class="activity-meta">
                                        <b><a href="#" title=""><?php echo $score->points ?> </a>
                                        &nbsp; points
                                       </b>
                                       <span><a href="#" title=""> </a>Participation au <?php echo $score->type ?> : <?php echo $score->titre ?></span>
                                       <h6>by <a ><?php if ($score->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$score->name ; ?></a></h6>
                                       <i><?php echo xTimeAgo ($score->ValidDTM, date('Y-m-d H:i:s') )  ?></i>

                                    </div>

                                 </li>
                                 <?php } } ?>
                              </ul>
                          
                  </div>
              </div>
                 


                </div>
             </div>
          </div>     
            </div>
         </div>
      </div>   
   </section><!-- content -->