


<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row" id="page-contents">
					<div class=" col-lg-12">
						<div class="central-meta">
              <div class="row">
              <div class="col-md-8">
							<h6 class="widget-title" > Gestion des tache : <?php echo $projet->titre ?>  </h6> 
							</div>
              <div class="col-md-4">
              <?php 
               if (($role == 1 || $role == 3 || $role == 6  ) &&   $projet->ClubID == $clubID  ){ 
                if ( (time()-(60*60*24)) < strtotime($projet->endDate) ){ ?> 
              <a class="align-right main-btn" data-toggle="modal" data-target="#myModal" >Ajouter une tache</a> 
              <?php } } ?>
              </div>
              </div>
							<div>
                <hr>

                  <table class="table table-striped table-responsive-xl" style="width: cover">
                    <thead>
                      <th  width="2%" >ID</th>
                      <th  >titre</th>
                      <th width="25%" >Deadline</th>
                      
                      <th width="30%">affecté à</th>
                      <th width="5%" >Action</th>
                    </thead>
                    <tbody>
                      <?php foreach ($taches as $tache ) { ?>
                        <tr>
                          <td name="T">
                            <?php echo $tache->tacheId?>
                        </td> 
                        <td>
                          <h4>
                            <?php echo $tache->titre ?>
                          </h4>
                          <span>
                            <?php echo $tache->description ?>

                          </span>
                          <hr>
                          Crée par : <a data-toggle="tooltip" title="" href="#" data-original-title="<?php echo $tache->parname?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $tache->avatar ?>" style="border-radius: 50%;" >  <?php echo $tache->parname?>
                           </a> 
                        </td> 
                        <td><b>Debut : </b><?php echo $tache->startedDate ?> <hr> <b>Fin : </b><?php echo $tache->deadline ?></td>                                     

                        <td>
                           <ul>
                        <?php foreach ($tache->affections as $affection ) { ?>
  
                               <li  class="<?php  if ($affection->status== 1 )  {   ?> badges-success <?php } ?>" > 
                                  <div class="row  ">
                                    <div class="col-md-3">
                                      <a data-toggle="tooltip" title="" href="#" data-original-title="<?php echo $affection->name  ;  ?>">
                                      <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $affection->avatar ?>" style="border-radius: 50%;"> 
                                       </a> 
                                  </div>

                                  <div class="col-md-3  ">
                                    <?php  echo $affection->name  ; ?>
                                  </div>
                                </div>
                                <div class="row ">
                                <?php 

                               
                                if($affection->status == 0 &&  (time()-(60*60*24)) < strtotime($tache->deadline) )  { ?>
                                  <small>
                                  <button class="btn btn-warning btn-sm" > <i class="fa fa-check-square"></i> Valider </button>
                                  <?php }elseif ($affection->status== 1 )  {  ?>
                                  <button class="btn btn-success btn-sm" disabled > <i class="fa fa-check-square"></i> Cloturé </button>
                                  <?php }elseif ($affection->status== 0 &&  (time()-(60*60*24)) > strtotime($tache->deadline) ) {  ?>
                                  <button class="btn btn-sm" disabled style="color:gray"> <i class="fa fa-check-square"></i> Dépassé </button>
                                  <?php } ?>
                                  <?php if ((time()-(60*60*24)) < strtotime($tache->deadline) ) {  ?> 
                                  <button class="btn btn-danger btn-sm"  > <i class="fa fa-minus-square"></i> Supprimer </button>
                                  <?php } ?>
                                 </small>
                                </div>
                                
                               </li>
                               <hr>                                                         
                           

                            <?php }?>      
                            </ul> 
                            <?php 
                               if (($role == 1 || $role == 3 || $role == 6  ) &&   $projet->ClubID == $clubID  ){ 
                                if ( (time()-(60*60*24)) < strtotime($projet->endDate) ){ ?>  
                                <small>                        
                            <a  class="align-center main-btn btn-sm" data-toggle="modal" data-target="#addMembersToTask<?php echo $tache->tacheId?>" >
                              <i class="fa fa-user-plus"></i> Ajouter des membres 
                            </a></small>  
                            <?php  } } ?>
                                <div class="modal fade" id="addMembersToTask<?php echo $tache->tacheId?>">
                                    <div class="modal-dialog ">
                                      <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Ajouter des membres</h4>&nbsp;&nbsp;

                                          <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="un membre peut avoir seulement une tache dans une periode bien déterminer."> 
                                            ?
                                          </button>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <?php $this->load->helper("form"); ?>
                                            <form role="form"  id="addmember" action="<?php echo base_url() ?>Task/affectUser/<?php echo $tache->tacheId ?>" method="post" role="form"  enctype="multipart/form-data">
       
                                               
                                                <span class="text-mute">ci-dessous la liste des membres disponible</span>
                                                <br>
                                                <br>
                                                <div >
                                                    <select id='lists' class="form-control"name ="userIdAffected">
                                                      <?php foreach ($tache->membresDispo as $user) { ?>
                                                       <option value="<?php echo $user->userId ?>" ><?php echo $user->name ?> </option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                                  
                                                    <br>
                                                   
                                                  <input type="submit" class="btn align-right btn-primary" value="Envoyer" />

                             
                                                   
                                                </form>





                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div><!-- fade Modal -->
                        </td>
                        <td>
                          <a href=""><i class="fa fa-pencil"></i></a>
                          <a href=""><i class="fa fa-eye"></i></a>
                        </td>
                        </tr>
                      <?php } ?>
                      
                    </tbody>
                   
                  </table>       
              </div>
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
              <h4 class="modal-title">Ajouter une tache</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form"  id="addtask" action="<?php echo base_url() ?>Task/addNewT/<?php echo $projet->projectId ?>" method="post" class="c-form"  enctype="multipart/form-data">
                      

                    <label>Titre</label>

                        <?php if( (time()-(60*60*24)) < strtotime($projet->endDate)) { ?>
                          <input type="text"    name="titre" required >
                        <?php } ?>

                        <?php if( (time()-(60*60*24)) > strtotime($projet->endDate)) { ?>
                            <select  name="titre" required >
                                <option value="" ></option>
                               <option value="  Faire le bilan budgétaire"> Faire le bilan budgétaire </option>
                               <option value="Analyser les fiches d'évaluation"> Analyser les fiches d'évaluation  </option>
                               <option value="Faire le bilan de l'événement"> Faire le bilan de l'événement </option>
                               <option value="Rédiger les actes de l'événement"> Rédiger les actes de l'événement  </option>
                               <option value="Diffuser les actes de l'événement"> Diffuser les actes de l'événement </option>

                            </select>
                        <?php } ?>
                    <label>Description</label>
                  <textarea  name="description"row="40" required ></textarea>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <label>type</label>
                        <select  name="type" required>
                          <option value=""></option>
                          <option value="Evenmentiel">Evenmentiel</option>
                          <option value="Administrative">Administrative</option>
                          <option value="Marketing">Marketing</option>
                          <option value="Ressource humaine">Ressource humaine</option>
                        </select>     
                      </div>
                      <div class="col-md-6">
                        <label>debut</label>
                        <input type="datetime-local"   min="<?php echo date('Y-m-d').'T00:00' ?>"  required name="startedDate">     
                      </div>
                      <div class="col-md-6">
                        <label>Fin</label>
                        <input type="datetime-local"  min="<?php echo date('Y-m-d').'T00:00' ?>" required  name="deadline">
                      </div>
                    </div>                

                    <br>


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
              
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->