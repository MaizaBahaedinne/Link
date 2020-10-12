<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row" id="page-contents">
					<div class=" col-lg-12">
						<div class="central-meta">
              <div class="col-md-8">
							<span><h4> Gestion des tache :  </h4> <?php echo $projet->titre ?></span>
							</div>
              <div class="col-md-4">
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Ajouter une tache</button> 
              </div>
							<div>
                  <table class="table">
                    <thead>
                      <th>ID</th>
                      <th>Deadline</th>
                      <th>Par</th>
                      <th>affecté à</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php foreach ($taches as $tache ) { ?>
                        <td><?php echo $tache->tacheId?></td>
                        <td><?php echo $tache->deadline?></td>                                     <td><?php echo $tache->par?></td>

                        <td><?php foreach ($tache->affections as $affection ) { ?>
                              <ul>

                                   

                            
                              <?php echo  "<li>".$affection->name."</li>"
                               
                              ?> &nbsp;
                             
                                <?php 
                                 $end = $tache->deadline ;
                                 
                                if($affection->status == 0 &&  (time()-(60*60*24)) < strtotime($tache->deadline) )  { ?>
                                  <button class="btn" style="background-color:green" > <i class="fas fa-check-circle"></i> </button>
                                  <?php }elseif ($affection->status== 1 )  {  ?>
                                    <button class="btn" disabled style="background-color:gray"> <i class="fas fa-check-circle"></i> </button>
                                  <?php } ?> 
                                
                              </ul>
                            <?php }?>
                        </td>
                        <td></td>
                        <td></td>

                      <?php }?>
                      
                    </tbody>
                    <tfoot></tfoot>
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