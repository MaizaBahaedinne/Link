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
                       <?php if($SA == 1 || $SA == 2  ){ ?>
                      <a class="align-right main-btn" data-toggle="modal" data-target="#myModal" >Ajouter un club</a>
                      <?php } ?> 
                       </h4>

                    <ul class="faved-page">
                         <table  class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Nom et prénom</th>
                    
                        <th>statut</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                              
              
                    
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>

                       
                        <td><?php echo $record->id ?></td>
                        <td>               
                                    <a class="kt-user-card-v2__name" href="#">
                                     <?php echo $record->name ?> 
                                     <?php if($record->remb == 2 ){ ?>
                                    <i class="ri-checkbox-circle-fill" style="color:#05BD53 "></i>
                                    <?php } ?>
                                  <?php if($record->remb == 1 ){ ?>
                                    <i class="ri-checkbox-circle-fill" style="color:#ff1a1a "></i>
                                    <?php } ?>
                                    </a>
                                    <br>                              
                                    <span class="kt-user-card-v2__desc">
                                    <?php echo $record->role ?> <?php echo $record->cellule ?>  
                                    </span>                            
                        </td>
 
                        <td> 

                            <?php if ($record->statut == 2 ) { ?>
                                <span class="btn btn-warning btn-sm">en attente</span>
                            <?php } elseif($record->statut == 2 ) {} ?>
                                <span class="btn btn-primary btn-sm">Validée</span>
                            <?php }  ?>
                        
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

        
