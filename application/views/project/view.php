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
                                           
                                           <?php if ($SA == 1 || $SA == 2 || $role == 2  ||  $clubID == 0 ){ ?>
                                            <li >
                                                <a href="<?php echo base_url() ?>Statistique/ProjectStatistique/<?php echo $projet->projectId ?>" class="btn main-btn btn-sm"  >Statistique
                                                </a>
                                            </li>
                                          <?php } ?>
                                          
                                          <?php 
                                            if ((($role == 1 || $role == 2  || $role == 3 || $role == 6 || $role == 7  ) && $projet->ClubID == $clubID  ) || $SA == 1 || $SA == 2 ){
                                            if ( (time()-(60*60*24)) < strtotime($projet->startDate) ){ ?>
                                            <li>
                                                <a href="#" title="Folow us" class="main-btn" data-ripple=""  data-toggle="modal" data-target="#myModal" >Modifier</a>
                                            </li>
                                            <?php } } ?>
                                            

                                            <?php 
                                            if ((($role == 1 || $role == 2  || $role == 3 || $role == 6 || $role == 7  ) && $projet->ClubID == $clubID  ) || $SA == 1 || $SA == 2 ){

                                            ?>
                                            <li>
                                                <a href="#" title="Folow us" class="main-btn btn-success" data-ripple=""  data-toggle="modal" data-target="#presence" >Présence</a>
                                            </li>
                                            <?php  } ?>


                                          <?php 
                                            if ((($role == 1 || $role == 2  || $role == 3 || $role == 6 || $role == 7  ) && $projet->ClubID == $clubID  ) || $SA == 1 || $SA == 2 ){ ?>
                                                <li><a class="btn main-btn btn-sm" href="<?php echo base_url() ?>Task/tasksListing/<?php echo $projet->projectId ?>" ><i class="fa fa-user"></i> Taches </a></li>
                                            <?php } ?>
                                            


                                            
                                          <?php if ( $role == 1 || $role == 3 || $role == 6 || $SA==1 || $SA==2  ) { ?>
                                                <li><a class="btn main-btn btn-sm" href="<?php echo base_url() ?>TFM/partantByClub/<?php echo $clubID ?>/<?php echo $projet->projectId ?>" ><i class="fa fa-user"></i> My Team</a></li>
                                            <?php } ?>
                                           


                                          
                                         <?php if (  $SA == 1 || (($projet->projectId == 2499 && $userC->SenJun == 3 )||( $projet->projectId == 2500 && $userC->clubID == 2 ) ) ){ 
                                            if( empty($partProject) ){
                                            ?>
                                            <li >
                                                <a class="btn main-btn btn-sm" data-ripple=""  data-toggle="modal" data-target="#participationProjet" ><i class="fa fa-user-plus"></i> Participation
                                                </a>
                                            </li>
                                          <?php } }  ?>
                                           
                                        </ul>
                                        
                                        </div>
                                    </div>
                                    <br>
                                </div>  
                            </div><!-- user profile banner  -->
                            
                        
                            <div class="col-lg-7">
                                <?php if ($partProject){ ?>
                                  <div class="central-meta">
                                     <span class="create-post">Statut de participation <a href="#" title=""></a></span>
                                     <?php if ($partProject->statut == 2 ){ ?>
                                    <div class="btn btn-block btn-danger">

                                      <b>Votre participation est en cours de validation !</b>  <br>
                                      Le paiement sera effectué en deux tranches : 170 dt.<br> <br>
                                       100 DT : Mardi 01 MARS<br>
                                       70 DT : Jeudi 08 MARS <br><br>

                                      Les présidents peuvent contacter directement nos représentants dans ces régions :<br>

                                      <br>

                                      <br>
                                      ⚠️ Si votre region ne figure pas dans la liste ci dessus, les présidents concernés devront collecter les frais des participants et les enverront via mandat minute au nom de Bechir Khlifi et merci de scanner le rendu et l'envoyer par mail<br>
                                      <b>tunivisionsfoundation@gmail.com</b><br>
                                      <br>
                                      ⚠️ Pour le bon déroulement du paiement, les présidents des clubs seront nos vis à vis financière.
                                      <br>
                                      ⚠️ Veuillez noter qu'en cas d'annulation de la participation d'un Tunimateur, les deux tranches sont non remboursable.
                                    </div>
                                     <?php } ?>
                                    <?php if ($partProject->statut == 1 ){ ?>
                                    <div class="btn btn-block btn-success">
                                      Votre participation a été validé <br>
                                      code de  participation : <b><?php echo $partProject->id ?></b>
                                      </div>
                                      <?php if($partProject->formationId != 0 ){ ?>
                                      
                                      <h4><?php echo $partProject->formation_name ?> <?php echo $partProject->time ?> <?php echo $partProject->salle ?></h4>
                                      

                                      <?php } else { ?>

                                        <form class="c-form" method="post" action="<?php echo base_url() ?>TFM/ChoixAtelier/<?php echo $partProject->id ?>/<?php echo $projet->projectId ?>" >
                                        <h5>Choix de formation :</h5>
                                      <select name="formation" >
                                      <?php foreach ($ateliers as $atelier ) {?>
                                       <option value="<?php echo $atelier->atelierId ?>" > 
                                         <?php echo $atelier->nom ?> <?php echo $atelier->time ?>
                                       </option>
                                      <?php  
                                       }  
                                      ?>
                                      </select>
                                      <br>
                                      <hr>
                                      <input type="submit" class="btn btn-block btn-primary" name="">
                                    </form> 

                                      <?php  } ?>

                                    
                                     <?php } ?>
                                  </div>
                                <?php } ?>
                                <div class="central-meta">
                                    <span class="create-post">Détails <a href="#" title=""></a></span>
                                    <i class="fa fa-clock-o" aria-hidden="true" ></i> DU <?php echo $projet->startDate ?> AU <?php echo $projet->endDate ?> <br><br>
                                    <i class="fa fa-users" aria-hidden="true"></i> <?php echo $projet->cible ?><br><br>
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
                                                    <span><i class="ti-heart"></i>
                                                      <a data-toggle="modal" data-target="#partant" ><?php echo count($part) ?> Participants</a></span>
                                                      <div class="modal fade" id="partant">
                                                        <div class="modal-dialog modal-lg">
                                                          <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                              <h4 class="modal-title">Liste des participants</h4>
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <?php $this->load->helper("form"); ?>
                                                                <div>
                                                                <table  class="table table-responsive-xl" id="tableid" style="width: cover" >
                                                                  <thead>
                                                                    <th>#</th>
                                                                    <th>nom</th>
                                                                    <th>validé par</th>
                                                                  </thead>
                                                                  <tbody>
                                                                    <?php $i=0 ; foreach ($part  as $p ) {?>
                                                                    <tr <?php if($p->clubId != $projet->clubID ) { ?> style="background-color: #fefbd8;" <?php } ?> >
                                                                      <td><?php echo $p->scoringId ?></td>
                                                                      <td><?php echo $p->name ?>
                                                                        <br><small> <?php echo $p->role ?> du <?php echo $p->club ?></small>
                                                                      </td>
                                                                      <td><?php echo $p->valider ?> <br> <?php echo $p->createdDTM ?>  </td>
                                                                    </tr>
                                                                  <?php } ?>
                                                                  </tbody>

                                                                          
                                                                      
                                                            </table>

                                                          </div>



                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div><!-- fade Modal -->
                                                      
                                                      <div class="users-thumb-list">
                                                        <?php $i=0 ; foreach ($part  as $p ) {?>                                                       
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="<?php echo $p->name ?>">
                                                            <img class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $p->avatar ?>" alt="">  
                                                        </a>
                                                        <?php $i++ ; if($i==10){break;} } ?>
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="link2">
                                                      <span><i class="fa fa-eye"></i>x</span>
                                                      <a href="#" title="weekly-likes">x </a>
                                                      <div class="users-thumb-list">
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                                                            <img src="images/resources/userlist-1.jpg" alt="">  
                                                        </a>
                                                        
                                                      </div>
                                                  </div>


                                                  <div class="tab-pane fade" id="link3">
                                                     <?php if($score->album) { ?> 
                                                      <div class="fb-post" data-href="https://www.facebook.com/media/set?set=<?php echo $score->album ?>" data-width="500" data-show-text="false"></div>

                                                        <a href="https://www.facebook.com/media/set?set=<?php echo $score->album ?>" 
                                                           class="btn btn-primary btn-sm">Go Facebook</a>
                                                    <?php } ?> 
                                                  </div>

                                                  <div class="tab-pane fade" id="link4">
                                                     <?php if($score->video) { ?> 
                                                      <div id="fb-root"></div>
                                                      <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

                                                      <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/<?php $score->video ?>/" data-width="500" data-show-text="false">
                                                        <div class="fb-xfbml-parse-ignore">
                                                          <blockquote cite="https://www.facebook.com/facebook/videos/<?php echo $score->video ?>/">
                                                            
                                                        </div>
                                                      </div>
                                                      <a href="https://www.facebook.com/facebook/videos/<?php echo $score->video ?>/" 
                                                           class="btn btn-primary btn-sm">Go Facebook</a>
                                                    <?php } ?> 
                                                  </div>

                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- page like widget -->
                                      <?php if(!(empty($score))) { ?> 
                                    <div class="widget">
                                        <h4 class="widget-title">Note du projet <b>(<?php echo  $score->points ?>)</b> </h4>
                                        
                                        <div class="your-page">
                                            <h6>Taches (<?php echo $score->taches ?>) </h6>
                                            <hr>
                                            <ul>    
                                              <li><i class="fas fa-thumbtack"></i> Nombre des affectaions : <?php echo  $score->aff ?></li>
                                              <li><i class="fas fa-tasks"></i> Nombre des affectaions validées : <?php echo  $score->affE ?></li>
                                            </ul>
                                            <hr>
                                            <b><i class="fas fa-chart-line"></i> Taux d'éfficacité : <?php echo  $score->affP ?>%<br><br></b>

                                            
                                            <h6>Présence</h5>
                                            <hr>
                                            <ul>    
                                              <li><i class="fas fa-users"></i> Nombre des membres inscrits : <?php echo  $score->nbMem ?></li>
                                              <li><i class="fas fa-file-powerpoint"></i>Nombre des participants : <?php echo  $score->participation  ?></li>
                                            </ul>
                                            <hr>
                                            <b><i class="fas fa-percent"></i> Taux de présence : <?php echo  $score->tauxParticipation ?>%</b>
                                            <hr>
                                            <b>Note</b>
                                            <?php echo  $score->description ?>

                                        </div>
                                    
                                    </div><!-- page like widget -->
                                   <?php } ?> 
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
              <p><?php echo $projet->titre ?> by <?php if ($projet->ClubID > 5 ) {echo "club ";}  echo "Tunivisions ".$projet->ClubName; ?></p>
              <br>
              <?php 
              $now  =    strtotime('now') ;
              $start  =   strtotime($projet->startDate) ;
              $end =  strtotime('+3 hours',strtotime($projet->endDate)) ;

             if ( (($now-$start) >= 0 ) &&  (($now-$end) <= 0 ) ){


             ?> 
              <div id="qrcode1" style="text-align: center; height: 350px ; width: 350px"></div>
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
        <div class="modal-dialog modal-lg ">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Fiche de participation au <?php echo $projet->titre ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              
              <div id="Regelement">
              <form class="c-form" action="<?php echo base_url() ?>TFM/partanTfm/<?php echo $projet->projectId ?>" method="post" >
            
                <h5>REGLEMENTS &laquo; <?php echo $projet->titre ?> &raquo;</h5>
                <hr>
                <div style="border-color: red ; border-style: groove; border-width:1px ; border-color: #757a95 ; ">
                  <div style="margin: 25px ">
                   
                   <p>Chers participants,</p>
                    <p style="margin-left: 20px;">❖ Afin d&rsquo;assurer un bon d&eacute;roulement de notre s&eacute;minaire &laquo; <?php echo $projet->titre ?> &raquo; comportant 1200 participants, nous avons proc&eacute;d&eacute; &agrave; la mise en place de ce r&egrave;glement qui a pour but de favoriser toutes les conditions qui m&egrave;nent &agrave; la bonne conduite de ce s&eacute;minaire.</p>
                    <p style="margin-left: 20px;">❖ Nous vous invitons &agrave; prendre conscience du pr&eacute;sent r&egrave;glement qui impose le respect des lieux, des normes de s&eacute;curit&eacute;, des relations entre les Tunimateurs.</p>
                    <p style="margin-left: 20px;">❖ Les articles du pr&eacute;sent r&egrave;glement s&rsquo;appliquent &agrave; chaque participant et doivent &ecirc;tre lus et approuv&eacute;s.</p>
                    <h3>ARTICLE 1 : ORGANISATION ET PROTOCOLE SANITAIRE</h3>
                    <h4>A. Respect du fonctionnement de la proc&eacute;dure d&rsquo;inscription :</h4>
                    <p>Afin de finaliser son inscription, chaque participant est demand&eacute; &agrave; :</p>
                    <p style="margin-left: 20px;">&bull; Effectuer son paiement</p>
                    <p style="margin-left: 20px;">&bull; Lire, approuver et signer le pr&eacute;sent r&egrave;glement ci-dessous</p>
                    <p style="margin-left: 20px;">&bull; Se munir de sa carte d&rsquo;identit&eacute; durant les jours du s&eacute;minaire</p>
                    <h4>B. Respect du protocole sanitaire lors du TUM :</h4>
                    <p><strong>B.1. Port du masque obligatoire</strong></p>
                    <p style="margin-left: 20px;">&bull; Le port d&rsquo;un masque est obligatoire &agrave; l&rsquo;h&ocirc;tel et durant toutes les phases de votre journ&eacute;e : R&eacute;unions, c&eacute;r&eacute;monies d&rsquo;ouverture et de cl&ocirc;ture, formations etc..</p>
                    <p style="margin-left: 20px;">&bull; Assurez-vous d&apos;avoir suffisamment des masques pour votre journ&eacute;e.</p>
                    <p style="margin-left: 20px;">&bull; Vous pouvez &eacute;galement apporter du d&eacute;sinfectant pour les mains si vous le souhaitez (flacon de moins de 100ml).</p>
                    <p><strong>B.2. Acc&egrave;s aux formations / workshop et conf&eacute;rences :</strong></p>
                    <p>Pour acc&eacute;der aux activit&eacute;s du s&eacute;minaire, chaque membre doit imp&eacute;rativement :</p>
                    <p style="margin-left: 20px;">&bull; Porter son badge.</p>
                    <p style="margin-left: 20px;">&bull; Se munir de son bloc note et son stylo.</p>
                    <p style="margin-left: 20px;">&bull; Porter votre PC si c&rsquo;est possible.</p>
                    <p style="margin-left: 20px;">&bull; Respecter le dress code (un document vous sera communiqu&eacute; &agrave; propos le Dress code)</p>
                    <p>Remarque : Un bloc note, un stylo et votre badge vous seront soumis d&egrave;s votre arriv&eacute;e sous forme de welcome pack.</p>
                    <p><strong>B.3. Conf&eacute;rences et formations/workshop :</strong></p>
                    <p>Durant les formations :</p>
                    <p style="margin-left: 20px;">- Vous &ecirc;tes amen&eacute;s &agrave; signer la de pr&eacute;sence qui sera circul&eacute;e entre participants. - L&rsquo;utilisation des t&eacute;l&eacute;phones portables est interdite - Vous devez respecter la dur&eacute;e des formations et des conf&eacute;rences (Pas de retard) - L&rsquo;absence et le retard ne sont pas tol&eacute;r&eacute;s et le fait de ne pas assister &agrave; l&rsquo;int&eacute;gralit&eacute; du Programme auquel vous &ecirc;tes affect&eacute; risque de vous faire perdre un de vos droits.</p>
                    <h3>ARTICLE 2 : RESPECT DES LIEUX</h3>
                    <h4>II.1. Locaux :</h4>
                    <p style="margin-left: 20px;">- Ce s&eacute;minaire &eacute;tant r&eacute;serv&eacute; aux Tunimateurs, il est strictement interdit de faire introduire des</p>
                    <p style="margin-left: 20px;">personnes &eacute;trang&egrave;res aux mouvement &agrave; l&rsquo;espace de l&rsquo;h&ocirc;tel.</p>
                    <p style="margin-left: 20px;">- Chaque participant doit veiller &agrave; la propret&eacute; des salles.</p>
                    <p style="margin-left: 20px;">- Tout incident doit &ecirc;tre signal&eacute; &agrave; un responsable (Membre du comit&eacute; organisateur).</p>
                    <p style="margin-left: 20px;">- Chaque membre s&rsquo;engage &agrave; ne rien faire qui puisse porter pr&eacute;judice de quelque fa&ccedil;on &agrave; l&rsquo;int&eacute;grit&eacute;</p>
                    <p style="margin-left: 20px;">de l&rsquo;h&ocirc;tel.</p>
                    <h4>II.2. Hygi&egrave;ne et s&eacute;curit&eacute; :</h4>
                    <p style="margin-left: 20px;">- Il est strictement interdit de prendre son repas,de fumer ou d&rsquo;introduire des boissons Alcoolis&eacute;es</p>
                    <p style="margin-left: 20px;">dans les salles de formations(Seules sont autoris&eacute;es les petites collations)</p>
                    <h4>II.3. Vol :</h4>
                    <p style="margin-left: 20px;">- Vous &ecirc;tes amen&eacute;s &agrave; bien garder et surveiller vos affaires,la Fondation n&rsquo;assumera aucune</p>
                    <p style="margin-left: 20px;">cons&eacute;quence en cas de vol.</p>
                    <h3>ARTICLE 3 : DISCIPLINE</h3>
                    <h4>III.1.Sanctions</h4>
                    <p>Tout manquement du participant &agrave; l&rsquo;une des prescriptions du pr&eacute;sent r&egrave;glement int&eacute;rieur pourra</p>
                    <p>faire l&rsquo;objet d&rsquo;une sanction.</p>
                    <p>Constitue une sanction toute mesure, autre que les observations verbales, prises par le comit&eacute;</p>
                    <p>organisateur, &agrave; la suite d&rsquo;un agissement du participant consid&eacute;r&eacute; comme fautif, que cette mesure</p>
                    <p>soit de nature &agrave; affecter imm&eacute;diatement ou non la pr&eacute;sence de l&rsquo;int&eacute;ress&eacute; dans le s&eacute;minaire ou &agrave;</p>
                    <p>mettre en cause la continuit&eacute; de la formation qu&rsquo;il re&ccedil;oit.</p>
                    <p>Selon la gravit&eacute; du manquement constat&eacute;, la sanction pourra consister :</p>
                    <p style="margin-left: 20px;">- Soit un avertissement. - Soit un bl&acirc;me ou un rappel &agrave; l&rsquo;ordre.</p>
                    <p style="margin-left: 20px;">- Soit une mesure d&rsquo;exclusion temporaire ou d&eacute;finitive du s&eacute;minaire.</p>
                    <p style="margin-left: 20px;">- Soit un retrait du certificat</p>
                    <p style="margin-left: 20px;">Plus particuli&egrave;rement, les raisons pouvant motiver l&rsquo;exclusion temporaire ou d&eacute;finitive d&rsquo;un stagiaire</p>
                    <p style="margin-left: 20px;">sont, par exemple:</p>
                    <p style="margin-left: 20px;">- Le non-respect r&eacute;current des r&egrave;gles de bon fonctionnement du s&eacute;minaire telles que d&eacute;finies par le</p>
                    <p style="margin-left: 20px;">pr&eacute;sent r&egrave;glement int&eacute;rieur.</p>
                    <p style="margin-left: 20px;">- Toute perturbation du bon d&eacute;roulement d&rsquo;une formation/conf&eacute;rence</p>
                    <p style="margin-left: 20px;">- Le non-respect r&eacute;current des consignes p&eacute;dagogiques dispens&eacute;es parles formateurs</p>
                    <p style="margin-left: 20px;">- Les comportements p&eacute;nalisant la progression des autres participants</p>
                    <p style="margin-left: 20px;">- Les comportements portant atteinte au respect moral ou physique des participants ou des</p>
                    <p style="margin-left: 20px;">formateurs.</p>
                    <p><strong>Notez bien :</strong></p>
                    <p>chaque club tunivisions est appel&eacute;e &agrave; faire passer ce pr&eacute;sent r&egrave;glement &agrave; l&rsquo;ensemble de ses</p>
                    <p>participants.</p>
                    <p>Une copie sign&eacute;e et scann&eacute;e par tous les participants du club doit &ecirc;tre envoy&eacute;e au p&ocirc;le logistique du</p>
                    <p>TUM d&eacute;cembre 2020 &agrave; l&rsquo;adresse mail de la fondation .</p>
                    <p><strong>ACCEPTATION DU REGLEMENT INTERIEUR :</strong></p>
                    <p>Apr&egrave;s lecture compl&egrave;te de ce r&egrave;glement, les participants peuvent poser toutes les questions qu&rsquo;ils</p>
                    <p>jugent n&eacute;cessaires au comit&eacute; organisateur(le contact se fait via la boite mail du comit&eacute;).</p>
                    <p>D&egrave;s la r&eacute;ception de ce r&egrave;glement, la personne a la possibilit&eacute; de ne pas finaliser son inscription .</p>
                    </div>
                </div>
                <hr>
              <div >
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
                  <select name="bus" required>
                    <option value="" ></option>
                    <option value="0" >Oui</option>
                    <option value="1" >Non</option>
                  </select>

                  <div>
                    <div class="checkbox">
                      <label>
                      <input type="checkbox"  required><i class="check-box"></i>Je suis <b><?php echo $name ?></b> j'ai lu et j'approuve le reglement de participation au <b><?php echo $projet->titre ?></b>
                      </label>
                    </div>
                  </div>
                
                  <hr>
                  <input type="submit" name="" value="Envoyer">
                

              </div>
              
              </form>
              </div>

              
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->