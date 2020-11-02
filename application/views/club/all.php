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
                        <th>Ecole</th>
                        <th>Region</th>
                       
                        <th>Membres</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($clubs))
                    {
                        foreach($clubs as $record)
                        {
                    ?>
                    <tr>
                        <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->clubID ?>" target="_blank"   >
                           <b><?php echo $record->name ?> </b> 
                           <?php if ($record->is_Actif=="0"){  ?>
                               <i class="fa fa-ban" aria-hidden="true"></i>
                           <?php } ?>
                         </a>

                          <?php $P = $record->P ;  ?>
                          <?php $VPAF = $record->VPAF ; ?>
                          <?php $VPRH = $record->VPRH ; ?>
                          <?php $VPM = $record->VPM ; ?>
                          <?php $VPE = $record->VPE ; ?>


                          <?php $AAF = $record->AAF ; ?>
                          <?php $ARH = $record->ARH ; ?>
                          <?php $AM = $record->AM ; ?>
                          <?php $AE = $record->AE ; ?>

                          <div class="row">
                            <div class="col-md-4">
                              <small>Président</small>
                            </div>
                            <div class="col-md-8">
                              <div class="users-thumb-list">
                              <?php if($P) { ?>
                              <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $P->userId ?>" target="_blank"  title="<?php echo $P->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $P->name ?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $P->avatar ?>">  
                              </a>
                              <?php } ?>
                              </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-4">
                              <small> Vice Président</small>
                            </div>
                            <div class="col-md-2">
                              <div class="users-thumb-list">
                                <?php if($VPAF) { ?>

                              <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $VPAF->userId ?>" target="_blank"  title="<?php echo $VPAF->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $VPAF->name ?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $VPAF->avatar ?>"> 
                              </a>
                               <?php } ?>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="users-thumb-list">
                                <?php if($VPRH) { ?>
                              <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $VPRH->userId ?>" target="_blank"  title="<?php echo $VPRH->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $VPRH->name ?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $VPRH->avatar ?>"> 
                              </a>
                               <?php } ?>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="users-thumb-list">
                                <?php if($VPM) { ?>
                              <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $VPM->userId ?>" target="_blank" title="<?php echo $VPM->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $VPM->name ?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $VPM->avatar ?>"> 
                              </a>
                               <?php } ?>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="users-thumb-list">
                                <?php if($VPE) { ?>
                              <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $VPE->userId ?>" target="_blank"  title="<?php echo $VPE->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $VPE->name ?>">
                                <img alt="" class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $VPE->avatar ?>"> 
                              </a>
                               <?php } ?>
                              </div>
                            </div>
                            </div>

                        </td>
                        <td>
                            <small><?php echo $record->city ?></small>
                        </td>

                        <td>
                         
                            <small><?php echo $record->members ; ?> </small>
                        </td>
                        <td>
                            <?php if ($record->SenJun == 3 ){ echo 'University' ; }?>
                            <?php if ($record->SenJun == 4 ){ echo 'High School' ; }?>
                        </td>
                        <?php if($SA== 1 ||  $uid == 1031 ){ ?>
                        <td>
                             <a href="<?php echo base_url() ?>Club/editClub/<?php echo  $record->clubID ?>">   <i class="ti-pencil"></i>
                        </td>
                         <?php    }    ?> 
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



    <script type="text/javascript">
          $( document ).ready( function()
          {
              var json ;
              var gouvernorat = $( '#city' );
              var delegation = $( '#delegation' );
              
   
         

              var d = $.ajax({
              url: '<?php echo base_url(); ?>assets/json/tunisia.json',
              type: "GET",
              dataType: 'json',
              success: function (data) {
                  console.log(data);
                     $.each( data , function (index, value)
                  {
                  gouvernorat.append('<option value="' + index + '">' +  index  + '</option>');
                  });

                  gouvernorat.change( function()
                  {
                  var gouv = $(this).val();
                  var deleg = data[ gouv ];

                  $('option', delegation).remove();
                  delegation.append('<option value="">-- Delegation --</option>');

                  $.each( deleg, function (index, value)
                  {
                  delegation.append('<option value="' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '">' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '</option>');
                  });
                  });    

              } 
              });



                  
              });
          </script>
