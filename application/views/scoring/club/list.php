<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des clubs <a class="align-right main-btn" data-toggle="modal" data-target="#myModal" >Ajouter un club</a> </h4>

                    <ul class="faved-page">
                         <table  class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                        <th>Club</th>
                        <th>projets</th>
                        <th>Points</th>
                        <th>statut</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($Scores))
                    {
                        foreach($Scores as $record)
                        {
                    ?>
                    <tr>
                        <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->clubID ?>" target="_blank"   >
                           <small><?php echo $record->club ?> </small> 
                           <?php if ($record->is_Actif=="0"){  ?>
                         </a>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->projectId ?>" target="_blank"   >
                           <small><?php echo $record->projet ?> </small> 
                         </a>
                        </td>
                         <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->projectId ?>" target="_blank"   >
                           <small><?php echo $record->points ?> </small> 
                         </a>
                        </td>
                         <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->projectId ?>" target="_blank"   >
                           <small><?php if($record->points== 1 ){ ?><?php } ?> </small> 
                         </a>
                        </td>



                    </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                  </table>

                    </ul>
                  </div>
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
              <h4 class="modal-title">Ajouter un club 
                        
                </h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form"  action="<?php echo base_url() ?>Club/addNew" method="post" >
                      

                        <label>type</label>
                        <select <?php if($SA!=1 ){ echo "Disable"; } ;?> name="HUA" >
                          <option <?php if($clubID==0 ) {echo "Selected" ; } ?> value="3" >University</option>
                          <option <?php if($clubID==1 ) {echo "Selected" ; } ?> value="4" >High School</option>
                          <option  >Kids</option>
                          <option <?php if($clubID==2 ) {echo "Selected" ; } ?> >Alumni</option>
                        </select>

                        <label>Nom</label>
                        <input type="text" name="name" class="form-control" required>
                       
                        <label>Region</label>
                        <input type="text" name="city"  class="form-control" required>
                       
                        <label>Date création</label>
                        <input type="date" name="birthday" class="form-control" required>
                        
                        <label>facebook</label>
                        <input type="url" name="email" class="form-control" required>
                        
                        <label>email</label>
                        <input type="email" name="facebook"  class="form-control" required>
                        
                        <label>Actif</label>
                        <select name="is_Actif" class="form-control" >
                          <option value="1"  >Actif</option>
                          <option value="0" >Inactif</option>
                        </select>

                    <br>
                           

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




