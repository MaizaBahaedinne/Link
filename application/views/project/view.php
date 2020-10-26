<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="user-profile">
                                <figure>
                                   <img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" class="alligator-projects-banner" alt="">                                 
                                    
                                </figure>
                                <div class="profile-section">
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                             <a style="color: red" >DU <?php echo $projet->startDate ?> AU <?php echo $projet->endDate ?></a><br>
                                             <h4><?php echo $projet->type ?> : <?php echo $projet->titre ?></h4>
                                        </div>
                                        <div class="col-lg-5">
                                            <ul class="align-right user-ben">
                                        
                                            <li class="more">
                                                <a href="#" title="" class="btn" data-ripple="">Participation
                                                </a>
                                                <ul class="more-dropdown">
                                                    <li>
                                                        <a href="#">J'y vais</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Peut ètre</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <?php 
                                            if ((($role == 1 || $role == 3 || $role == 6 || $role == 7  ) && $projet->ClubID == $clubID  ) || $SA == 1 ){
                                            if ( (time()-(60*60*24)) > strtotime($projet->endDate) ){ ?>
                                            <li>
                                                <a href="#" title="Folow us" class="main-btn" data-ripple=""  data-toggle="modal" data-target="#myModal" >Modifier</a>
                                            </li>
                                            <?php } ?>
                                            <li>
                                                <a href="#" title="Folow us" class="main-btn" data-ripple=""  data-toggle="modal" data-target="#presence" >Présence</a>
                                            </li>
                                            <?php  } ?>
                                            <li>
                                                <a href="<?php echo base_url() ?>Task/tasksListing/<?php echo $projet->projectId ?>"  class="align-right user-ben main-btn " >Liste des taches</a>
                                            </li>
                                            
                                            
                                        </ul>
                                        
                                        </div>
                                    </div>
                                    <br>
                                </div>  
                            </div><!-- user profile banner  -->
                            
                        
                            <div class="col-lg-9">

                                <div class="central-meta">
                                    <span class="create-post">Détails <a href="#" title=""></a></span>
                                    <i class="fa fa-clock-o" aria-hidden="true" ></i> DU <?php echo $projet->startDate ?> AU <?php echo $projet->endDate ?> <br><br>
                                    <i class="fa fa-users" aria-hidden="true"></i> Participants<br><br>
                                    <i class="fa fa-globe" aria-hidden="true"></i> <?php echo $projet->type ?> <br><br>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $projet->local ?><br><br>
                                    <?php echo $projet->description ?> 
                                </div><!-- suggested friends -->
                                <div class="central-meta">
                                    <span class="create-post">Organisateur <a href="#" title=""></a></span>
                                    <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $projet->ClubID  ?>"> <?php if ($projet->ClubID > 5 ) {echo "club ";}  echo "Tunivisions ".$projet->ClubName; ?></a>
                                </div><!-- suggested friends -->


                                
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static right">
                                    <div class="widget">
                                        <h4 class="widget-title">Your page</h4> 
                                        <div class="your-page">
                                            <figure>
                                                <a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a href="#" title="" class="underline">My Creative Page</a>
                                                <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em class="bg-blue">9</em></a></span>
                                                <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em class="bg-purple">2</em></a></span>
                                            </div>
                                            <ul class="page-publishes">
                                                <li>
                                                    <span><i class="ti-pencil-alt"></i>Publish</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti-camera"></i>Photo</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti-video-camera"></i>Live</span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-user-plus"></i>Invite</span>
                                                </li>
                                            </ul>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
                                                     <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
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
                                            </div>
                                        </div>
                                    </div><!-- page like widget -->
                                   
                               
                                  
                                   
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
                                    <input type="file" name="file" id="file" class="dropify-fr" 
                                    required accept="image/*"  />                                                                          
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
                                        
                                    <input type="radio" name="cible" id="Publique" value="Publique" required> Publique
                                    <input type="radio" name="cible" id="prive" value="Privé"> Privé
                                    <input type="radio" name="cible" id="Only" value="Only tunimateur" > Only tunimateur
                           

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
                                         placeholder="exemple : 235643091127564" name="facebook" width="30%" id="facebook" value="<?php echo $projet->facebook ?> "   >
                                      
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
                                    <input value="<?php echo $projet->titre ?>"  type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                              
                                    
                                                            
                                   
                                    <label for="fname">Description</label>
                                    <textarea class="form-control" name="description"  id="TinyMCE" rows="20" value="<?php echo $projet->description ?>"  required></textarea>

                               
                                    

                                    <label for="fname">Date debut</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                    <input type="datetime-local" class="form-control "  min="<?php echo date('Y-m-d').'T00:00' ?>" value="<?php echo $projet->startDate ?>"    id="debut" name="debut"  required >
 

                              
                                    <label for="fname">Date fin</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                    <input type="datetime-local" class="form-control"  min="<?php echo date('Y-m-d').'T00:00' ?>"   id="fin" value="<?php echo $projet->endDate ?>"  name="fin"  required >

                            
                                    <hr>
                             
                                    <label for="fname">Local</label>
                                    <input type="text" class="form-control " value="<?php echo $projet->local ?>"  id="local" name="local" maxlength="255" required >      

                             
                                    <label for="fname">Capacité</label>
                                    <input type="number" class="form-control " value="<?php echo $projet->capacite ?>"  id="capacite" name="capacite"  required >      

                                    <label for="fname">Prix</label>
                                    <input type="number" class="form-control" id="prix" value="<?php echo $projet->capacite ?> " name="prix" value="<?php echo $projet->prix ?>"  required >      
                                   


                                    <hr>
                        <div class="row">
                            <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            </div>
                            <div class="col-lg-6">
                            <input type="reset" class="btn btn-secondary" value="Reset" />
                            </div>
                        </div>  




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


      <div class="modal fade" id="presence">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Code de présence</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <h5>Patager ce code avec les tunimateurs partants</h5>
              <?php if ( (time()-(60*60*24)) < strtotime($projet->startDate) && (time()-(60*60*24)) < date($projet->deadline , strtotime('+6 hours'))  ){ ?>
              <div id="qrcode" style="align-content: center ; vertical-align: center"></div>
              <script type="text/javascript">
                  var qrcode = new QRCode(document.getElementById("qrcode"), {
                    width : 350,
                    height : 350
                  });

                  function makeCode () {    

                    qrcode.makeCode("<?php echo base_url() ;?>Project/addPresence/<?php $projet->projectId ?>/<?php echo $uid ?>");
                  }

                  makeCode();

                  $("#text").
                    on("blur", function () {
                      makeCode();
                    }).
                    on("keydown", function (e) {
                      if (e.keyCode == 13) {
                        makeCode();
                      }
                    });
                </script>
                <?php } ?>
                <p>Ce code reste valable jusqu'à <?php date($projet->endDate , strtotime('+6 hours')) ?> </p>

                <br>
                <p>Pour valider votre participation merci de faire les étaps suivantes : </p>
                <ul>
                    <li>1 - Se connecter avec le compte T-Link </li>
                    <li>2 - Cliquer sur le button <i class="fa fa-sliders" ></i> n haut à gauche</li>
                    <li>3 - selectioner "Scanner QR" </li>
                    <li>4 - Donner la permission au navigateur d'utiliser la camera </li>
                    <li>5 - Scanner le code  </li>
                </ul>




            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->