<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des participant au <?php echo $projet->titre ?> 
                       
                       </h4>

                    <ul class="faved-page">
                         <table  class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Nom et prénom</th>
                        <th>Club</th>
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
                               <?php echo $record->name ?> 
                              <br>                              
                              <?php echo $record->role ?> <?php echo $record->cellule ?>            
                        </td>

                        <td> 
                              <?php echo $record->ClubName ?>
                        </td> 
 
                        <td> 
                            <?php if ($record->statut == 2 ) { ?>
                                <span class="btn btn-warning btn-sm">en attente</span>
                            <?php } elseif($record->statut == 1 ) { ?>
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

        
