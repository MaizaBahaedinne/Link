
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
                        <ul class="faved-page">
                            <table class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
                                        <thead>
                                        <tr>
                                            <th >Club</th>
                                            <th width="10%">region</th>
                                            <th width="20%">Nombre des participants</th>
                                            <th width="10%">Tranche 1</th>
                                            <th >Validé 1 (%)</th>
                                            <th width="10%">Tranche 2</th>
                                            <th >Validé 2 (%)</th>
                                            <th width="10%">paiement </th>
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
                                                <?php echo $record->ClubName ?>          
                                            </td>
                                            <td>
                                                <?php echo $record->city ?>          
                                            </td>
                                            <td>
                                              <?php echo $record->partant ?> 
                                            </td> 
                                            
                                            <td  <?php if( $record->T1 == 0 &&  $record->T2 == 0 ){ echo "style='color:red'" ; } ?>  >
                                              <b><?php echo $record->T1 ?></b> 
                                            </td> 
                                            <td>
                                              <?php if($record->T1>0 ){ echo round(($record->T1*100)/$record->partant) ;} else{ echo '0' ;} ?>% 
                                            </td>  
                                            <td>
                                              <b><?php echo $record->T2 ?></b>
                                            </td>
                                            <td <?php if( $record->T2 == 0 ){ echo "style='color:red'" ; } ?>  >
                                              <?php if($record->T2>0 ){ echo round(($record->T2*100)/$record->partant) ;} else{ echo '0' ;} ?>% 
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
                                </ul>
        
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


            
