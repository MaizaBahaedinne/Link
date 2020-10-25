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
                                            if ($role == 1 || $role == 3 || $role == 6 ){
                                            if ( (time()-(60*60*24)) < strtotime($projet->endDate) ){ ?>
                                            <li>
                                                <a href="#" title="Folow us" class="main-btn" data-ripple=""  data-toggle="modal" data-target="#myModal" >Modifier</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url() ?>Task/tasksListing/<?php echo $projet->projectId ?>"  class="align-right user-ben main-btn " >Liste des taches</a>
                                            </li>
                                            <?php } } ?>
                                            
                                        </ul>
                                        
                                        </div>
                                    </div>
                                    <br>
                                </div>  
                            </div><!-- user profile banner  -->
                            
                        
                            <div class="col-lg-9">
                                <div class="central-meta">
                                    <span class="create-post">Description <a href="#" title=""></a></span>
                                    <?php echo $projet->description ?> 
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
              <h4 class="modal-title">Modifier le projet <?php echo $projet->titre ?></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
                        
                           
   
                                    

                                 
                                    <label for="fname">Cible  &nbsp; &nbsp; <br> </label>
                                        
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
                                              $("#facebook").prop("required", false);
                                            });
                                        </script>

                                    <br>

                                    <label for="fname">Lien d'évenement facebook : </label>
                                    <input type="url" name="facebook" id="facebook" class="form-control" >
                            
                                    

                                    <label for="fname">Type</label>
                                    <select class="form-control" id="type" name="type" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Conférence">Conférence</option>
                                            <option value="Action">Action</option>
                                            <option value="Couverture Mediatique">Couverture Mediatique</option>
                                            <option value="Compétition">Compétition</option>
                                            <option value="Soirée">Soirée</option>
                                    </select>
                          

                                    <hr>
                               
                                    <label for="fname">Titre</label>
                                    <input type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                              
                                    
                                                            
                                   
                                    <label for="fname">Description</label>
                                    <textarea class="form-control" name="description" id="tinymceExample" rows="20" required></textarea>

                               
                                    

                                    <label for="fname">Date debut</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                    <input type="datetime-local" class="form-control "  min="<?php echo date('Y-m-d').'T00:00' ?>"   id="debut" name="debut"  required >
 

                              
                                    <label for="fname">Date fin</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                    <input type="datetime-local" class="form-control"  min="<?php echo date('Y-m-d').'T00:00' ?>"   id="fin" name="fin"  required >

                            
                                    <hr>
                             
                                    <label for="fname">Local</label>
                                    <input type="text" class="form-control " id="local" name="local" maxlength="255" required >      

                             
                                    <label for="fname">Capacité</label>
                                    <input type="number" class="form-control " id="capacite" name="capacite"  required >      

                                    <label for="fname">Prix</label>
                                    <input type="number" class="form-control" id="prix" name="prix"  required >      






                        </div>
                       
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-secondary" value="Reset" />
 
                       
                    </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->