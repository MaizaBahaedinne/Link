<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row" id="page-contents">
					<div class=" col-lg-12">
						<div class="central-meta">
              <div class="row">
              <div class="col-md-8">
							<h4> Gestion des tache : <?php echo $projet->titre ?>  </h4> 
							</div>
              <div class="col-md-4">

              <a class="align-right main-btn" data-toggle="modal" data-target="#myModal" >Ajouter une tache</a> 
              </div>
              </div>
							<div>
                <br>
                  <table class="table" style="width: cover">
                    <thead>
                      <th width="30%" >titre</th>
                      <th width="12%" >Deadline</th>
                      <th width="5%">Par</th>
                      <th>affecté à</th>
                      <th width="5%" >Action</th>
                    </thead>
                    <tbody>
                      <?php foreach ($taches as $tache ) { ?>
                        <tr>
                        <td>
                          <h4>
                            <?php echo $tache->titre ?>
                          </h4>
                          <span>
                            <?php echo $tache->description ?>
                          </span>
                        </td> 
                        <td><?php echo $tache->deadline ?></td>                                     
                        <td> 
                          <a data-toggle="tooltip" title="" href="#" data-original-title="<?php echo $tache->parname?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $tache->avatar ?>">  
                           </a> 
                        </td>
                        <td>
                           <ul>
                        <?php foreach ($tache->affections as $affection ) { ?>
                             

                                   

                            
                                <li> 
                                  <div class="row ">
                                    <div class="col-md-3">
                                      <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $affection->avatar ?>"> 
                                  </div>

                                  <div class="col-md-3">
                                    <?php  echo $affection->name  ; ?>
                                  </div>
                                  <div class="col-md-6">
                                <?php 

                               
                                if($affection->status == 0 &&  (time()-(60*60*24)) < strtotime($tache->deadline) )  { ?>
                                  <button class="btn" style="color:orange" > <i class="fa fa-check-square"></i> Valider </button>
                                  <?php }elseif ($affection->status== 1 )  {  ?>
                                  <button class="btn" disabled style="color:green"> <i class="fa fa-check-square"></i> Cloturé </button>
                                  <?php }elseif ($affection->status== 0 &&  (time()-(60*60*24)) > strtotime($tache->deadline) ) {  ?>
                                  <button class="btn" disabled style="color:gray"> <i class="fa fa-check-square"></i> Dépassé </button>
                                  <?php } ?> 
                                  <br>
                                 <button class="btn" disabled style="color:red"> <i class="fa fa-minus-square"></i> Supprimer </button>
                                </div>
                                </div>
                               </li>
                               <hr>                                                         
                           

                            <?php }?>      
                            </ul>                            
                            <a  class="align-center main-btn" href="">
                              <i class="fa fa-user-plus"></i> ajouter des membres 
                            </a>
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
              <h4 class="modal-title">Ajouter une projet</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
     






           
                      <input type="submit" class="align-right btn" value="Envoyer" />

 
                       
                    </form>





            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->