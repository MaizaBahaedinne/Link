<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <!-- user profile banner  -->
                            <div class="col-lg-4">
                <aside class="sidebar static right">
                  
                  <!-- explore events -->
                  <div class="widget">
                    <h4 class="widget-title">Calendrier des réunions</h4>
                    
                    <div class="full-calendar">
                                <div id="yourId" class="jalendar mid">

                                  <?php foreach ($meetRecords as $meet ) { 

                                    $date= date_create($meet->dateDebut); 
                                    $dateF =date_format($date,'d-m-Y');   
                                    $timeF =date_format($date,'H:i');   
                                     ?> 

                                    <div class="added-event"
                                    data-date="<?php echo  $dateF ?>" 
                                    data-time="<?php echo  $timeF ?>"
                                    data-link="" 
                                    data-title="<?php echo  $meet->type ?> 
                                    : 
                                    <?php echo  $meet->titre ?> 
                                    by <?php if ($meet->clubID > 5 ) {echo "club ";}  echo "Tunivisions ".$meet->name; ?> ">
                                      
                                    </div>
                                
                                  <?php }?>

                                </div>
                              </div>
                  </div><!-- calendar -->
                  
                  <!-- recent links -->

                </aside>
              </div>
                            <!-- sidebar -->
                            <div class="col-lg-8">
                                    <div class="central-meta">
                                        <div class="title-block">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="align-left">
                                                        <h5>Réunion</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-6 ">
                                                          <!--
                                                            <form method="post">
                                                                <input type="text" placeholder="chercher ..">
                                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                            </form>
                                                          -->
                                                        </div>
                                                        <div class="col-lg-6 ">
                                                            <div class="select-options">
                                                               <?php 
                                                              if ( $SA == 1 ) { ?>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="far fa-calendar-plus"></i> Ajouter une réunion</button>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- title block -->
                                    <div class="central-meta">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <?php foreach ($meetRecords as $meet ) { ?>

                                                <div class="event-box">
                                                    <div class="row merged20">

                                                        
                                                        <div class="col-lg-9 col-md-6 col-sm-5">
                                                            <div class="event-title">
                                                                <span class="ba"></span>
                                                                <h3>
                                                                  <a href="<?php echo base_url() ?>Project/projectDetails/<?php echo $meet->meetId ?>" title="">
                                                                    <?php echo $meet->titre ?>
                                                                  </a>
                                                                </h3>
                                                                <label class="text-mute" >by <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $meet->clubId  ?>"> <?php if ($meet->clubId > 5 ) {echo "club ";}  echo "Tunivisions ".$meet->name; ?></a></label>
                                                                <span>de <i class="fas fa-calendar-alt" style="color:green"></i></i> <?php echo $meet->dateDebut ?></span>
                                                                <span>Durée <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $meet->duree ?>h</span>
                                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $meet->local ?></span>
                                                                
                                                                <hr>

                                                                <div class="btn-group"  >
                                                                  <button class="btn btn-primary mr-2">Présence</button>
                                                                  <button class="btn btn-warning mr-2">Modifier</button>
                                                                  <button class="btn btn-danger mr-2">Annuler</button>
                                                                </div>
                                                                    
                                                                
                                                                
                                                                                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-2 col-sm-2">
                                                            <div class="event-time">
                                                                <span class="event-date"><?php echo $meet->type ?></span>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               <?php  } ?>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                            </div><!-- centerl meta -->
                            <!-- sidebar -->
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
              <h4 class="modal-title">Ajouter une réunion</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form class="c-form" >

                  <label>Titre</label>
                  <input type="" name="" class="form-control">
                  <label>Date Debut</label>
                   <input type="datetime-local" class="form-control "  min="<?php echo date('Y-m-d').'T00:00' ?>"   id="dateDebut" name="debut"  required >
                  <label>durée (h) </label>
                  <input type="number" name="" min="1" max="5" class="form-control">
                  <label>Ordre du jour</label>
                  <textarea row="5" class="form-control"  id="TinyMCE" rows="20" ></textarea>
                  <label>Rapporteur</label>
                  <select name="" class="form-control" >
                    <option></option>
                  </select>



                  <hr>

                    <div class="row">
                        <div class="col-lg-6">
                        <input type="submit" class="btn btn-primary" value="Envoyer" />
                        </div>
                        <div class="col-lg-6">
                        <input type="reset" class="btn btn-secondary" value="Reset" />
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


  
