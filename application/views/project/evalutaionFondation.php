<?php if ($SA== 1 || $SA == 2   ) {  ?>
<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des utilisateurs 
                       
                       </h4>

                    <ul class="faved-page">
                                   
                
                    <table  class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                       
                        <th>date</th>
                        <th>club</th>
                        <th>Projet</th>
                        <th>type</th>
                        <th>cible</th>
                        <th>présence</th>
                        <th>tache</th>
                        <th>score</th>
                        <th>statut</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                              
                </style>
                    
                    <?php
                    if(!empty($projectRecords))
                    {
                        foreach($projectRecords as $record)
                        {
                    ?>
                    <tr>
                       
                        <td>
                            <?php echo $record->startDate ?>
                        </td>
                        <td>              
                            <?php echo $record->ClubName ?> 
                        </td>
                        <td>                              
                            <?php echo $record->titre ?>
                        </td>
                        <td>                              
                            <?php echo $record->type ?>
                        </td>
                         <td>                              
                            <?php echo $record->cible ?>
                        </td>
                        <td>                              
                            <?php echo count($record->part) ?>
                        </td>
                         <td>                              
                            <?php echo count($record->tache) ?>
                        </td>   
                        <td>                              
                            <?php 
                            if(!(empty($record->score))){ 
                                $s =$record->score ; 
                                echo $s->points ; 
                            } 
                            else 
                                {
                                 echo '<b style="color:red" >Non cloturé</b>' ;  
                             }   
                            ?>
                        </td> 
                         <td>                              
                            <?php 
                            if(!(empty($record->score))){ 
                                $p =$record->score ;
                                 if($p->statut == 1 ){
                                    echo "<b style='color:white;background-color: orange'>En cours de validation manuelle</b>" ;
                                  }elseif($p->statut == 2 ){
                                    echo "<b style='color:red';background-color: black'>tentative de tricherie</b>" ;    
                            }
                        } 
                            
                            ?>
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
               
            
<?php } ?>