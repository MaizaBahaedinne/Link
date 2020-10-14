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
                         <table  class="table" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                        <th>Faculté</th>
                        <th>Secteur</th>
                        <th>Président</th>
                        <th>Membres</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($clubRecords))
                    {
                        foreach($clubRecords as $record)
                        {
                    ?>
                    <tr>

                        <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->clubID ?>" target="_blank"   >
                           <small><?php echo $record->name ?> </small> 
                           <?php if ($record->is_Actif=="0"){  ?>
                               <i class="fa fa-ban" aria-hidden="true"></i>
                           <?php } ?>
                         </a>
                        </td>
                        <td>
                            <small><?php echo $record->city ?></small>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>" target="_blank"   >
                          <small> <?php echo $record->P ?></small>
                         </a>
                        </td>
                        <td>
                            <small><?php echo $record->members ; ?> </small>
                        </td>
                        <td>


                            <?php if ($record->SenJun == 3 ){ echo 'University' ; }?>
                            <?php if ($record->SenJun == 4 ){ echo 'High School' ; }?>






                        </td>
                        <?php if($SA== 1){ ?>
                        <td>
                             <a href="https://tunivisions.link/Club/editClub/<?php echo  $record->clubID ?>">   <i class="ti-pencil"></i>
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
              <h4 class="modal-title">Ajouter un club</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php $this->load->helper("form"); ?>
                <form role="form"  id="addproject" action="<?php echo base_url() ?>Club/addNew" method="post" role="form"  enctype="multipart/form-data">
                      

                        <label>Nom</label>
                        <input type="text" name="name" class="form-control" >
                       
                        <label>Region</label>
                        <input type="text" name="city"  class="form-control" >
                       
                        <label>Date création</label>
                        <input type="date" name="birthday" class="form-control" >
                        
                        <label>facebook</label>
                        <input type="url" name="email" class="form-control" >
                        
                        <label>email</label>
                        <input type="email" name="facebook"  class="form-control" >
                        
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
