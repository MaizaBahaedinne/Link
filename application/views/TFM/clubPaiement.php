
<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des clubs 
                       
                    </h4>
            <!--begin: Datatable -->

        <table id="example" class="table dataTable no-footer" style="width:cover" >
                    <thead>
                    <tr>
                        <th>Club</th>
                        <th>Nombre des participants</th>
                        <th>paiement </th>
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

                            <span style="width: 145px;">
                                <div class="kt-user-card-v2">
                         
                                    <div class="kt-user-card-v2__details">                              
                                        <a class="kt-user-card-v2__name" href="#">
                                         <?php
                                            if ($record->ClubName != "Foundation"  && $record->ClubName != "Foundation Junior" && $record->ClubName != "Alumni")
                                            echo "club ";
                                            ?>   Tunivisions  <?php echo $record->ClubName ?>
                                        </a>                              
                                    </div>                      
                                </div>
                            </span>


                        </td>
                        
                     
                    
                        
                    <td>

                      <?php echo $record->partant ?> 
                    </td> 
 

                    <td> 
                          <?php if ( $clubID == 0 || $role == 10 ||  $uid == 2 || $SA == 1 || $SA == 2   ) { ?>
                                <a href="<?php echo base_url() ?>TFM/PaimentByClub/<?php echo $record->clubID ?>/<?php echo $projectId ?>" class="btn btn-sm btn-primary" >Paiement</a>
                         <?php } ?>   
                     </td>
                    </tr>

                    <?php
                    }
                    }
                    ?>
                    
                    </tbody>

                  </table>

        
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


            
