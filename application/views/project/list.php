<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <!-- user profile banner  -->
                            <!-- sidebar -->
                            <div class="col-lg-8">
                                    <div class="central-meta">
                                        <div class="title-block">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="align-left">
                                                        <h5>Projets</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-5 ">
                                                          <!--  <form method="post">
                                                                <input type="text" placeholder="chercher ..">
                                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                            </form> -->
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm-4">
                                                            <div class="select-options">
                                                               <?php 
                                                              if ( ($role == 1 || $role == 2 || $role == 3 || $role== 6 || $role== 7) ||   $SA == 1 ) { ?>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter un projet</button>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                                            <div class="option-list">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                                <ul>
                                                                    <!--
                                                                    <li><a title="" href="#">Show Friends Public</a></li>
                                                                    -->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- title block -->
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
                                                                <span class="ba"></span>
                                                                <h3><a href="<?php echo base_url() ?>Project/projectDetails/<?php echo $projet->projectId ?>" title=""><?php echo $projet->titre ?></a></h3>

                                                                <label class="text-mute" >by <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $projet->ClubID  ?>"> <?php if ($projet->ClubID > 5 ) {echo "club ";}  echo "Tunivisions ".$projet->ClubName; ?></a></label>
                                                                <span>de <i class="fa fa-clock-o" style="color: green"></i> <?php echo $projet->startDate ?></span>
                                                                <span>à <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $projet->endDate ?></span>
                                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $projet->local ?></span>
                                                                <span><i class="fa fa-money" aria-hidden="true"></i> <?php echo $projet->prix ?> DT</span>
                                                                <hr>
                                                                
                                                                    
                                                                    <li><a class="btn btn-primary btn-sm " href="<?php echo base_url() ?>TFM/partantByClub/<?php echo $clubID ?>/<?php echo $projet->projectId ?>" ><i class="fa fa-user"></i> My Team </a></li>
                                                                
                                                                
                                                                                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-2 col-sm-2">
                                                            <div class="event-time">
                                                                <span class="event-date"><?php echo $projet->type ?></span>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               
                                                
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <?php  } ?>
                            </div><!-- centerl meta -->
                            <div class="col-lg-4">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Mon Club</h4> 
                    <div class="your-page">
                      <figure>
                        <a href="#" title><img alt="author" src="<?php echo base_url()?>assets/images/resources/profile.png"></a>
                      </figure>
                      <div class="page-meta">
                        <a href="#" title="" class="underline"><?php if ($clubInfo->clubID > 5 ) {echo "club Tunivisions ";}  echo $clubInfo->name ; ?></a>
                        <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
                        <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                      </div>
                      <ul class="page-publishes">
                        <li>
                          <span> <a href="<?php echo base_url()?>Club/clubInfo/<?php echo $clubInfo->clubID ?>">  <i class="ti-pencil-alt"></i>Projets</a></span>
                        </li>
                        <li>
                          <span> 
                            <a  data-toggle="modal" data-target="#tuniFan">
                                <i class="fa fa-user-plus"></i>Invite
                            </a>
                          </span>
                        </li>
                      </ul>



                      <!--
                      <div class="page-likes">
                        <ul class="nav nav-tabs likes-btn">
                          <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
                           <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
                        </ul>
                        
                        <div class="tab-content">
                          <div class="tab-pane active fade show" id="link1">
                          <span><i class="ti-heart"></i>884</span>
                            <a href="#" title="weekly-likes">35 new likes this week</a>
                            <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                              <img src="images/resources/userlist-2.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                              <img src="images/resources/userlist-3.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                              <img src="images/resources/userlist-4.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                              <img src="images/resources/userlist-5.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                              <img src="images/resources/userlist-6.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                              <img src="images/resources/userlist-7.jpg" alt="">  
                            </a>  
                            </div>
                          </div>
                          <div class="tab-pane fade" id="link2">
                            <span><i class="fa fa-eye"></i>440</span>
                            <a href="#" title="weekly-likes">440 new views this week</a>
                            <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                              <img src="images/resources/userlist-2.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                              <img src="images/resources/userlist-3.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                              <img src="images/resources/userlist-4.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                              <img src="images/resources/userlist-5.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                              <img src="images/resources/userlist-6.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                              <img src="images/resources/userlist-7.jpg" alt="">  
                            </a>  
                            </div>
                          </div>  
                        </div>

                      </div>-->
                    </div>
                  </div><!-- page like widget -->
                  <!-- explore events -->
                  <div class="widget">
                    <h4 class="widget-title">Calendar</h4>
                    
                    <div class="full-calendar">
                                <div id="yourId" class="jalendar mid">

                                  <?php foreach ($Projets as $Projet ) { 

                                    $date= date_create($Projet->startDate); 
                                    $dateF =date_format($date,'d-m-Y');   
                                    $timeF =date_format($date,'H:i');   
                                     ?> 

                                    <div class="added-event"
                                    data-date="<?php echo  $dateF ?>" 
                                    data-time="<?php echo  $timeF ?>"
                                    data-link="" 
                                    data-title="<?php echo  $Projet->type ?> 
                                    : 
                                    <?php echo  $Projet->titre ?> 
                                    by <?php if ($Projet->ClubID > 5 ) {echo "club ";}  echo "Tunivisions ".$Projet->ClubName; ?> ">
                                      
                                    </div>
                                
                                  <?php }?>

                                </div>
                              </div>
                  </div><!-- calendar -->
                  <!--
                  <div class="widget stick-widget" style="">
                    <h4 class="widget-title">Recent Links <a title="" href="#" class="see-all">See All</a></h4>
                    <ul class="recent-links">
                      <li>
                        <figure><img src="images/resources/recentlink-1.jpg" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title="">moira's fade reaches much farther than you think.</a></h6>
                          <span>2 weeks ago </span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="images/resources/recentlink-2.jpg" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title="">daniel asks if we want him to do the voice of doomfist</a></h6>
                          <span>3 months ago </span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="images/resources/recentlink-3.jpg" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title="">the pitnik overwatch scandals.</a></h6>
                          <span>1 day before</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  -->
                  <!-- recent links -->

                </aside>
              </div><!-- sidebar -->
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>




    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Ajouter un projet</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form" class="c-form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
                        
                           
                                    <label for="fname">Banner</label>
                                    <input type="file" name="file" id="file" class="dropify-fr" required accept="image/*"  />                                                                        
                                    <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 500 ko </p>
                                    <p id="error1" style="display:none; color:#FF0000;">
                                          Format d'image invalide! Le format d'image doit être JPG, JPEG.
                                          </p>
                                          <p id="error2" style="display:none; color:#FF0000;">
                                          La taille maximale du fichier est de 500 ko.
                                          </p>
                                    <script type="text/javascript">
                                          $('#submitt').prop("disabled", true);
                                            var a=0;
                                            //binds to onchange event of your input field
                                            $('#file').bind('change', function() {
                                              if ($('input:submit').attr('disabled',false)){
                                                 $('input:submit').attr('disabled',true);
                                                 }
                                                var ext = $('#file').val().split('.').pop().toLowerCase();
                                                if ($.inArray(ext, ['jpg','jpeg']) == -1){
                                                   $('#error1').slideDown("slow");
                                                   $('#error2').slideUp("slow");
                                                   a=0;
                                                 }else{
                                                   var picsize = (this.files[0].size);
                                                   if (picsize > 500000){
                                                   $('#error2').slideDown("slow");
                                                 a=0;
                                                 }else{
                                                 a=1;
                                                    $('#error2').slideUp("slow");
                                                 }
                                                    $('#error1').slideUp("slow");
                                                 if (a==1){
                                                 $('input:submit').attr('disabled',false);
                                               }
                                            }
                                        });
                                    </script>
                                    <br>
                                    <b for="fname">Cible  &nbsp; &nbsp; <br> </b>

                                    <div class="form-radio">
                                  <div class="radio">
                                  <label>
                                   <input type="radio" name="cible" id="Publique" value="Publique" required><i class="check-box"></i>Publique
                                  </label>
                                  </div>
                                  <div class="radio">
                                  <label>
                                    <input type="radio" name="cible" id="Only" value="Only tunimateur" ><i class="check-box"></i>Intra-Tunivisions
                                  </label>
                                  </div>
                                  <div class="radio">
                                  <label>
                                    <input type="radio" name="cible" id="prive" value="Privé"><i class="check-box"></i>Inter-club
                                  </label>
                                  </div>
                                </div>
                                        <script type="text/javascript">
                                          $( "#Publique" ).click(function() {
                                              $("#facebook").prop("required", true);
                                            });
                                          $( "#Only" ).click(function() {
                                              $("#facebook").prop("required", true);
                                            });
                                          $( "#prive" ).click(function() {
                                              $("#uzer-nam").prop("required", false);
                                            });
                                        </script>
                                   <br>
                                    <div class="uzer-nam">
                                      <label><br>Lien d'évenement facebook :</label>
                                      <span>https://www.facebook.com/events/</span>
                                        <input type="number" 
                                      placeholder="exemple : 235643091127564" name="facebook" width="30%" id="facebook"  >
                                      
                                    </div>
                                    <label for="fname">Type</label>
                                    <select class="form-control" id="type" name="type" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Conférence">Conférence</option>
                                            <option value="Action">Action</option>
                                            <option value="Couverture Mediatique">Couverture Mediatique</option>
                                            <option value="Compétition">Compétition</option>
                                            <option value="Soirée">Soirée</option>
                                            <option value="Team Building">Team Building</option>
                                    </select>
                                    <hr>
                                    <label for="fname">Titre</label>
                                    <input type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                                    <label for="fname">Description</label>
                                    <textarea class="form-control" name="description"  id="TinyMCE" rows="20" ></textarea>
                                    <label for="fname">Date debut</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                    <input type="datetime-local" class="form-control "  min="2020-09-15T00:00"  max="2021-01-17T00:00"   id="debut" name="debut"  required >
                                    <label for="fname">Date fin</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                    <input type="datetime-local" class="form-control" min="2020-09-15T01:00"  max="2021-01-17T23:00"   id="fin" name="fin"  required >
                                    <hr>
                                    <label for="fname">Lieu</label>
                                    <input type="text" class="form-control " id="local" name="local" maxlength="255" required >      
                                    <label for="fname">Capacité</label>
                                    <input type="number" class="form-control " id="capacite" name="capacite"  required >      
                                    <label for="fname">Prix</label>
                                    <input type="number" class="form-control" id="prix" name="prix"  required >      
                                    <hr>
                        <div class="row">
                            <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            </div>
                            <div class="col-lg-6">
                            <input type="reset" class="btn btn-secondary" value="Reset" />
                            </div>
                        </div>  
                        <br>
                        <small style="color: red" >Toute tentative de tricherie risque de pénaliser le club jusqu'à  x-10  du note de projet </small>


                        </div>

 
                       
                    </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->


  
<script>
            $(document).ready(function(){
                
              // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
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