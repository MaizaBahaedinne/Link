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
                      <figure><img class="alligator-profile"  src="<?php echo base_url() ?>uploads/avatar/<?php echo $userInfo->avatar ?>" alt="">
                        <br>
                        <?php if($uid == $userInfo->userId || $SA == 1  ) { ?>
                        <a data-toggle="modal" data-target="#EditAvatar"   >
                              <i class="fa fa-camera"></i> Modifier
                              
                        </a>
                        
                        </form>
                      <?php } ?>
                      </figure>

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
                        <li><span><?php echo count($participations) ?></span> Activités</li>
                        <li><span><?php echo count($formations) ?></span> Formations</li>
                        <li><span><?php echo count($conferences) ?></span> Conférences</li>
                        <li><span><?php echo '0' ?></span> Missions T.Link</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php if($userInfo->roleId == 5 ) { ?>
                    <ul class="job-progres">
                      <li><span class="main-color">
                        <?php if (count($eff) > 0 ) 
                        { echo ((count($eff)*100)/count($tasks)) ; } 
                        else 
                        { echo "0" ; } ?>%
                        </span> efficacité</li>
                      <li><span class="color-blue"><?php if (count($tasks) > 0 ) { echo count($tasks)  ; }else{ echo "0" ; } ?></span> Tâches</li>
                      <li><span class="color-valvet"><?php if (count($eff) > 0 ) { echo count($eff)  ; }else{ echo "0" ; }  ?></span> Tâches terminées</li>
                    </ul>
                    <?php } ?>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sharing-tools">
                      <div class="we-video-info">
                        <ul>
                          <li>
                            <span class="views" title="views">
                              <i class="fa fa-eye"></i>
                              <ins><?php echo count($visit) ?></ins>
                            </span>
                          </li>
                          <li>

                        </ul>
                        <div class="share-to-other">
                          <ul>
                            <?php if($userInfo->facebook != '' ){ ?>
                            <li>
                              <a title="" href="<?php echo $userInfo->facebook  ?>" class="facebook-color"><i class="fab fa-facebook-square"></i></a></li>
                            <li>
                            <?php }if($userInfo->linkedin != '' ){ ?>
                            <li>
                              <a title="" href="<?php echo $userInfo->linkedin  ?>" class="dribble-color"><i class="fab fa-linkedin-square"></i></a>
                            </li>
                            <?php }if($userInfo->instagram != '' ){ ?>
                            <li>
                              <a title="" href="<?php echo $userInfo->instagram  ?>" class="instagram-color"><i class="fab fa-instagram"></i></a>
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
                              <h4 class="widget-title">Badges <a class="see-all" href="#" title=""></a></h4>
                              <ul class="badgez-widget">
                                 <li>
                                 <a href="#" title="" data-toggle="tooltip" data-original-title="Male User"><img src="images/badges/badge2.png" alt=""></a>
                                 </li>
                                 
                              </ul>
                           </div><!-- badges -->
                           <div class="central-meta ">
                              <span class="create-post">Information Pesonnelle 
                                <?php if($uid == $userInfo->userId || $SA == 1  ) { ?>
                                  <a class="see-all" data-toggle="modal" data-target="#EditPersonelInfo" >
                                  <i class="ti-pencil"></i> </a>
                                <?php } ?>
                               </span>
                              <div class="personal-head">
                                <span class="f-title"><i class="fa fa-user"></i> A propos:</span>
                                <p>
                                  <?php echo $userInfo->about ?>
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
                                <span class="f-title"><i class="fa fa-globe"></i> gouvernorat:</span>
                                <p>
                                  <?php echo $userInfo->gouvernorat ?> 
                                </p>
                                <span class="f-title"><i class="fa fa-briefcase"></i> Poste:</span>
                                <p>
                                  <?php echo $userInfo->role ?> <?php echo $userInfo->cellule ?>
                                </p>
                                <span class="f-title"><i class="fa fa-handshake-o"></i> Rejoint:</span>
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
                  <span class="create-post">Informations générales <b>[Prochainement Disponible]</b> <a href="#" title=""></a></span>
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
                          <a href="#" title="#"><b><?php echo $Pro->ste ; ?></b> </a>
                            <br> <?php echo  $Pro->debut ?> -  <?php echo  $Pro->fin ?>
                          <p>
                            <a href="#" title="#" >&nbsp;&nbsp;<?php echo  $Pro->poste ?> </a> <?php echo  $Pro->departement ?> 
                            <br>
                            <span>&nbsp;&nbsp;Domain :  <?php echo $Pro->steDomain ?>  </span>
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
                        <span><i class="fa fa-certificate"></i>Compétences</span>
                        
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
                  <span class="create-post">Activités récentes<a href="#" title=""></a></span>
                      <ul class="activitiez">
                         <?php 
                         if(!(empty($scores))){
                         foreach ($scores as $score){  ?>
                         <li>
                            <div class="activity-meta"  
                              <?php if ($score->statutS == 1){
                                echo "style='background-color: yellow'" ; 
                              } ?> >
                              <?php if ($score->statutS == 2){
                                echo "style='background-color: red'" ; 
                              } ?> >
                               <span>
                                <b>
                                  <?php if( $score->clubID == $userInfo->clubID ) { ?>
                                  <a style="color: green" >
                                    <?php echo $score->points ?>&nbsp; points 
                                  </a><?php } else { ?>
                                  <a style="color: orange" >
                                    <?php echo $score->points ?>&nbsp; points 
                                  </a>
                                  <?php } ?>

                               </b>
                                Participation au  <?php echo $score->type ?> :  
                                <a href="<?php echo base_url() ?>Project/projectDetails/<?php echo $score->projectId ?>" title="">
                                  <?php echo $score->titre ?>
                                    
                                </a>
                               </span>
                               <h6>
                                by 
                                <a>
                                  <?php if ($score->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$score->name ; ?> 
                                    
                                </a>
                               </h6>
                               <i>
                                <?php echo xTimeAgo ($score->ValidDTM, date('Y-m-d H:i:s') )  ?> <small>valider par : <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $score->validerId ?>"><?php echo $score->validBy ?></a> #<?php echo $score->scoringId ?> </small>
                               </i>
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




    <div class="modal fade" id="EditPersonelInfo">
        <div class="modal-dialog ">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Mise à jour des données personnelle</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             
              <form class="c-form" method="post" action="<?php echo base_url()?>User/InfoPersoEdit/<?php echo $userInfo->userId ?>" >

                <label>A propos</label>
                <textarea  name="about"  ><?php echo $userInfo->about ?></textarea>
                <label>Anniversaire</label>
                <input type="date" required name="birthday" value="<?php echo $userInfo->birthday ?>">
               
                <label>Sexe</label>
                <select name="sexe" required >
                  <option value=""></option>
                  <option value="Homme" <?php if($userInfo->sexe == "Homme" ){ ?> selected <?php } ?> >Homme</option>
                  <option value="Femme"  <?php if($userInfo->sexe == "Femme" ){ ?> selected <?php } ?>  >Femme</option>
                </select>

                <label>adresse</label>
                <input type="text" required name="adresse" value="<?php echo $userInfo->adresse ?>" >
                <label>Gouvernourat</label>
                 <select  name="gouvernorat"  required>
                    <option value=""></option>
                    <option value="Ariana" <?php if($userInfo->gouvernorat == "Ariana" ){ ?> selected <?php } ?> >Ariana</option>
                    <option value="Béja" <?php if($userInfo->gouvernorat == "Béja" ){ ?> selected <?php } ?>>Béja</option>
                    <option value="Ben Arous" <?php if($userInfo->gouvernorat == "Ben Arous" ){ ?> selected <?php } ?> >Ben Arous</option>
                    <option value="Bizerte" <?php if($userInfo->gouvernorat == "Bizerte" ){ ?> selected <?php } ?> >Bizerte</option>
                    <option value="Gabes" <?php if($userInfo->gouvernorat == "Gabès" ){ ?> selected <?php } ?> >Gabès</option>
                    <option value="Gafsa" <?php if($userInfo->gouvernorat == "Gafsa" ){ ?> selected <?php } ?> >Gafsa</option>
                    <option value="Jendouba"  <?php if($userInfo->gouvernorat == "Jendouba" ){ ?> selected <?php } ?>  >Jendouba</option>
                    <option value="Kairouan" <?php if($userInfo->gouvernorat == "Kairouan" ){ ?> selected <?php } ?>   >Kairouan</option>
                    <option value="Kasserine"  <?php if($userInfo->gouvernorat == "Kasserine" ){ ?> selected <?php } ?>  >Kasserine</option>
                    <option value="Kébili"  <?php if($userInfo->gouvernorat == "Kébili" ){ ?> selected <?php } ?> >Kébili</option>
                    <option value="Kef"   <?php if($userInfo->gouvernorat == "Kef" ){ ?> selected <?php } ?> >Kef</option>
                    <option value="Mahdia" <?php if($userInfo->gouvernorat == "Mahdia" ){ ?> selected <?php } ?> >Mahdia</option>
                    <option value="Manouba"  <?php if($userInfo->gouvernorat == "Manouba" ){ ?> selected <?php } ?>  >Manouba</option>
                    <option value="Médenine" <?php if($userInfo->gouvernorat == "Médenine" ){ ?> selected <?php } ?>  >Médenine</option>
                    <option value="Monastir" <?php if($userInfo->gouvernorat == "Monastir" ){ ?> selected <?php } ?> >Monastir</option>
                    <option value="Nabeul" <?php if($userInfo->gouvernorat == "Nabeul" ){ ?> selected <?php } ?> >Nabeul</option>
                    <option value="Sfax"  <?php if($userInfo->gouvernorat == "Sfax" ){ ?> selected <?php } ?>  >Sfax</option>
                    <option value="Sidi Bouzid" <?php if($userInfo->gouvernorat == "Sidi Bouzid" ){ ?> selected <?php } ?>  >Sidi Bouzid</option>
                    <option value="Siliana" <?php if($userInfo->gouvernorat == "Siliana" ){ ?> selected <?php } ?>  >Siliana</option>
                    <option value="Sousse" <?php if($userInfo->gouvernorat == "Sousse" ){ ?> selected <?php } ?>   >Sousse</option>
                    <option value="Tataouine"  <?php if($userInfo->gouvernorat == "Tataouine" ){ ?> selected <?php } ?>  >Tataouine</option>
                    <option value="Tozeur" <?php if($userInfo->gouvernorat == "Tozeur" ){ ?> selected <?php } ?> >Tozeur</option>
                    <option value="Tunis"  <?php if($userInfo->gouvernorat == "Tunis" ){ ?> selected <?php } ?>  >Tunis</option>
                    <option value="Zaghouan"  <?php if($userInfo->gouvernorat == "Zaghouan" ){ ?> selected <?php } ?> >Zaghouan</option>
                 </select>
                <label>code Postal</label>
                <input type="number" required name="delegation" value="<?php echo $userInfo->delegation ?>" > 
                <hr>
                <label>Mobile :<br> <?php echo $userInfo->mobile ?> </label>
                <br>
                <label>Mail :<br> <?php echo $userInfo->email ?></label>
              
                <hr>
                <p>Veuillez envoyer un mail à <b><a href="mailto:tunivisions.link@gmail.com">tunivisions.link@gmail.com</a></b> si vous volez changer votre <b>numéro de téléphone</b> ou votre <b>E-mail</b>
                <hr>
                <input type="submit"  value="Envoyer">

              </form>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div>



    <div class="modal fade" id="EditAvatar">
        <div class="modal-dialog modal-sm ">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Avatar</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body"  style=" text-align: center ; vertical-align: center">
             
              <form action="<?php echo base_url()?>User/AvatarEdit/<?php echo $userInfo->userId ?>" method="POST" enctype="multipart/form-data" class="c-form" >

               
               
                    <div style="height: 200px;width: 200px;  
                    align-items: center;
                    justify-content:center;
                     position: relative;" >
                                        <input 
                                       
                                        type="file" 
                                        name="fileT"   
                                        class="dropify-fr" 
                                        data-max-file-size="300K"
                                        data-max-width="800" 
                                        data-max-height="800"                                     
                                        
                                        data-allowed-file-extensions="png jpg jpeg"
                                        required accept="image/*"
                                        >
                                        
                     </div>
                    
           
                <span>Taille recommandé 800x800 px et une taille de 200 ko</span><br>
                
                <hr>
                 <input type="submit"  name="" value="envoyer">
                 <span>une re-authentification obligatoire sera faite aprés la modification de votre avatar</span>
                </form>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div>




    <script>
            $(document).ready(function(){
                
              // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux',
                        'fileSize': 'The file size is too big ({{ value }} max).',
                        'maxWidth': 'The image width is too small ({{ value }}}px min).',
                        'maxHeight': 'The image height is too big ({{ value }}px max).',
                        'imageFormat': 'The image format is not allowed ({{ value }} only).'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });



                


            });
        </script>