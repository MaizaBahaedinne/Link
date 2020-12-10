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
                                        <div class="col-lg-4">
                                             <a style="color: red" >DU 
                                                <?php echo date('d/m/Y H:i',strtotime('+0 hours',strtotime($projet->startDate))) ; ?> 
                                                AU <?php echo date('d/m/Y H:i',strtotime('+0 hours',strtotime($projet->endDate))) ; ?>   
                                                </a><br>
                                             <h4><?php echo $projet->type ?> : <?php echo $projet->titre ?></h4>
                                        </div>
                                        <div class="col-lg-8">
                                            <ul class="align-right user-ben">
                                           
                                           <?php if ($HUA == 1 || $SA == 1 ){ ?>
                                            <li >
                                                <a class="btn main-btn btn-sm"  >Statistique
                                                </a>
                                            </li>
                                          <?php } ?>
                                          <?php if ($HUA == 3 || $SA == 1 ){ ?>
                                            <li >
                                                <a class="btn main-btn btn-sm" data-ripple=""  data-toggle="modal" data-target="#participationProjet" >Participation
                                                </a>
                                            </li>
                                          <?php } ?>
                                            <?php 
                                            if ((($role == 1 || $role == 2  || $role == 3 || $role == 6 || $role == 7  ) && $projet->ClubID == $clubID  ) || $SA == 1 || $SA == 2 ){
                                            if ( (time()-(60*60*24)) < strtotime($projet->startDate) ){ ?>
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
                            
                        
                            <div class="col-lg-7">

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
                            <div class="col-lg-5">
                                <aside class="sidebar static right">

                                  <div class="widget">
                                        <h4 class="widget-title">Rapport</h4> 
                                        <div class="your-page">
 
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">Participants</a></li>
                                                     <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">Organisateurs</a></li>
                                                     <li class="nav-item"><a  href="#link3" data-toggle="tab" data-ripple="">Album photo</a></li>
                                                     <li class="nav-item"><a class="" href="#link4" data-toggle="tab" data-ripple="">aftermovie</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                  <div class="tab-pane active fade show" id="link1">
                                                    <span><i class="ti-heart"></i><?php echo count($part) ?> Participants</span>
                                                      
                                                      <div class="users-thumb-list">
                                                        <?php foreach ($part  as $p ) {?>                                                       
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="<?php echo $p->name ?>">
                                                            <img class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $p->avatar ?>" alt="">  
                                                        </a>
                                                        <?php } ?>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="link2">
                                                      <span><i class="fa fa-eye"></i>440</span>
                                                      <a href="#" title="weekly-likes">440 new views this week</a>
                                                      <div class="users-thumb-list">
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                                                            <img src="images/resources/userlist-1.jpg" alt="">  
                                                        </a>
                                                        
                                                      </div>
                                                  </div>

                                                  <div class="tab-pane fade" id="link3">
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="vwqxXg2L"></script>

       <div class="fb-post" 
      data-href="https://www.facebook.com/media/set?set=<?php echo  $score->album ?>"
      data-width="400"></div>

                                                  </div>

                                                  <div class="tab-pane fade " id="link4">
        <?php if($score->video != '') { ?>                                            
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="RFPjGo7w"></script>
                                                      <!-- Your embedded video player code -->
         <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/<?php echo  $score->video ?>/" data-width="500" data-show-text="false">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook/videos/<?php echo  $score->video ?>/">
              <a href="https://www.facebook.com/facebook/videos/<?php echo  $score->video ?>/">How to Share With Just Friends</a>
              <p>How to share with just friends.</p>
          Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on Friday, December 5, 2014
            </blockquote>
         </div>
        </div>
          <?php }else{ echo "<h4>Pas de after movie</h4>" ; } ?> 
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- page like widget -->
                               
                                    <div class="widget">
                                        <h4 class="widget-title">Note du projet </h4>
                                        <?php if(!(empty($score))) { ?> 
                                        <div class="your-page">
                                            <h6>Taches (<?php echo $score->taches ?>) </h6>
                                            <hr>
                                            <ul>    
                                                <li>Nombre des affectaions : <?php echo  $score->aff ?></li>
                                                <li>Nombre des affectaions validées : <?php echo  $score->affE ?></li>
                                            </ul>
                                            <hr>
                                            <b>Taux d'éfficacité : <?php echo  $score->affP ?>%<br><br></b>

                                            
                                            <h6>Présence</h5>
                                            <hr>
                                            <ul>    
                                                <li>Nombre des membres inscrits : <?php echo  $score->nbMem ?></li>
                                                <li>Nombre des participants : <?php echo  $score->participation  ?></li>
                                            </ul>
                                            <hr>
                                            <b>Taux de présence : <?php echo  $score->tauxParticipation ?>%</b>
                                            <hr>
                                            <b>Note</b>
                                            <?php echo  $score->description ?>

                                        </div>
                                    <?php } ?> 
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
                <form role="form" class="c-form"  id="addproject" action="<?php echo base_url() ?>Project/editProject/<?php echo $projet->projectId ?>" method="post" role="form"  enctype="multipart/form-data">
                        
                           
                                    <label for="fname">Banner</label>
                                    <input 
                                    type="file" 
                                    name="file" id="file" 
                                    class="dropify-fr"  
                                    data-default-file = "<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>"
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
                                        
                                    <input type="radio" name="cible" id="Publique" value="Publique" required <?php if($projet->cible=="Publique") { ?> checked <?php } ?> >Publique 
                                    <input type="radio" name="cible" id="prive" value="Privé" <?php if($projet->cible=="Privé") { ?> checked <?php } ?> > Privé
                                    <input type="radio" name="cible" id="Only" value="Only tunimateur" <?php if($projet->cible=="Only tunimateur"){ ?> checked <?php } ?> > Only tunimateur
                           

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
                                         placeholder="exemple : 235643091127564" name="facebook" width="30%" id="facebook" value="<?php echo $projet->eventFB ?>"   >
                                      
                                    </div>
                                    
                            
                                    

                                    <label for="fname">Type</label>
                                    <select class="form-control" id="type" name="type" >
                                            <option value="Evenement" <?php if($projet->type=="Evenement"){ ?> selected <?php } ?> >Evenement</option>
                                            <option value="Formation" <?php if($projet->type=="Formation"){ ?> selected <?php } ?> >Formation</option>
                                            <option value="Conférence" <?php if($projet->type=="Conférence"){ ?> selected <?php } ?> >Conférence</option>
                                            <option value="Action"  <?php if($projet->type=="Action"){ ?> selected <?php } ?> >Action</option>
                                            <option value="Couverture Mediatique" <?php if($projet->type=="Couverture Mediatique"){ ?> selected <?php } ?> >Couverture Mediatique</option>
                                            <option value="Compétition" <?php if($projet->type=="Compétition"){ ?> selected <?php } ?> >Compétition</option>
                                            <option value="Soirée" <?php if($projet->type=="Soirée"){ ?> selected <?php } ?> >Soirée</option>
                                            <option value="Team Building"  <?php if($projet->type=="Team Building"){ ?> selected <?php } ?> >Team Building</option>
                                    </select>
                          

                                    <hr>
                               
                                    <label for="fname">Titre</label>
                                    <input value="<?php echo $projet->titre ?>"  type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                              
                                    
                                                            
                                   
                                    <label for="fname">Description</label>
                                    <textarea class="form-control" name="description"  id="TinyMCE" rows="20"   required><?php echo $projet->description ?></textarea>

                               
                                    

                                    <label for="fname">Date debut</label>
                                        
                                    <input type="datetime-local" class="form-control "  
                                    min="<?php echo date('Y-m-d').'T00:00' ?>" 
                                    value="<?php $debut = date_create($projet->startDate) ; echo date_format($debut , 'Y-m-d\TH:i'); ?>"    
                                    id="debut" name="debut"  required >
 

                              
                                    <label for="fname">Date fin</label>
                                        
                                    <input type="datetime-local" class="form-control"  
                                    min="<?php echo date('Y-m-d').'T00:00' ?>"   
                                    id="fin" 
                                    value="<?php $end = date_create($projet->endDate) ; 
                                    echo date_format($end , 'Y-m-d\TH:i'); ?>" 
                                    name="fin"  required >

                            
                                    <hr>
                             
                                    <label for="fname">Local</label>
                                    <input type="text" class="form-control " value="<?php echo $projet->local ?>"  id="local" name="local" maxlength="255" required >      

                             
                                    <label for="fname">Capacité</label>
                                    <input type="number" class="form-control " value="<?php echo $projet->capacite ?>"  id="capacite" name="capacite"  required >      

                                    <label for="fname">Prix</label>
                                    <input type="number" class="form-control" name="prix" value="<?php echo $projet->prix ?>"  required >      
                                   


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
        <div class="modal-dialog ">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Code de présence</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <h5>Patager ce code avec les tunimateurs partants</h5>
              <br>
              <?php 
              $now  =    strtotime('now') ;
              $start  =   strtotime($projet->startDate) ;
              $end =  strtotime('+3 hours',strtotime($projet->endDate)) ;

              if ( (($now-$start) >= 0 ) &&  (($now-$end) <= 0 ) ){ ?>
              <div id="qrcode1" style="height: 350px ; width: 350px"></div>
              <script type="text/javascript">
                  var qrcode = new QRCode(document.getElementById("qrcode1"), {
                    width : 350,
                    height : 350
                  });

                  function makeCode () {    
                    qrcode.makeCode("Project/addPresence\/<?php echo $projet->projectId ?>\/<?php echo $uid ?>");
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
                <br>
                <p>Ce code reste valable du 
                 <b style="color: green "> <?php echo date( 'd/m/Y H:i' , strtotime('+0 hours',strtotime($projet->startDate))) ; ?> </b>
                 jusqu'à <b style="color: red ">
                 <?php echo date('d/m/Y H:i',strtotime('+3 hours',strtotime($projet->endDate))) ; ?></b> </p>

                <br>
                <p>Pour valider votre participation merci de faire les étaps suivantes : </p>
                <ul>
                    <li>1 - Se connecter avec votre compte sur <a href="<?php echo base_url() ?>" >Tunivisions.link</a> </li>
                    <li>2 - Cliquer sur <i class="fa fa-sliders" ></i> en haut à droit</li>
                    <li>3 - selectioner "Scanner QR" </li>
                    <li>4 - Donner la permission au navigateur d'utiliser la camera </li>
                    <li>5 - Scanner le code  </li>
                </ul>

                <p>Les Tunimateurs partants des autres club peuvent scanner se code pour avoir des bonus</p>




            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->




         <div class="modal fade" id="participationProjet">
        <div class="modal-dialog ">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Fiche de participation au <?php echo $projet->titre ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              
              <form class="c-form" action="<?php echo base_url() ?>TFM/partanTfm/8" method="post" >
            )
                <h5>Règlement</h5>
                <hr>
                <div style="border-color: red ; border-style: groove; border-width:1px ; border-color: #757a95 ; ">
                <h6 style=" margin: 10px">R1</h6>
                <p style=" margin: 15px">Bla Bla Bla<br>
                <input type="checkbox" required>  Lu & approuvé </input>
                </p>
                </div>
             

              <div hidden>
                <h5>Fiche de participation</h5>
                
                  <label>Nom et prénom</label>
                  <input  value="<?php echo $user->name ?>" disabled>
                  <label>CIN</label>
                  <input  value="<?php echo $user->cin ?>" disabled>
                  <label>Sexe</label>
                  <input  value="<?php echo $user->sexe ?>" disabled>
                  <label>Club Tunivisions</label>
                  <input  value="<?php echo $user->ClubName ?>" disabled>
                  <label>Motorisé</label>
                  <select required>
                    <option value="" ></option>
                    <option value="Oui" >Oui</option>
                    <option value="Non" >Non</option>
                  </select>
                  <hr>
                  <input type="submit" name="" value="Envoyer">
                

              </div>
              </form>
              <div>
                
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->