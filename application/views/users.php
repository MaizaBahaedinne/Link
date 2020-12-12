<?php if ($SA== 1 && $SA == 2   ) {  ?>
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
                       
                        <th>id</th>
                        <th>Nom et prénom</th>
                        <?php if($SA == 1  ) { ?>
                        <th>Contact</th>
                        <?php }?>
                        <th>Inscription </th>
                        <th>Actif</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                              
                </style>
                    
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                       
                        <td>
                            <small>
                            <?php echo $record->userId ?>
                            </small>
                        </td>
                      
                        <td>              
                                        <a class="kt-user-card-v2__name" href="https://tunivisions.link/User/ProfileShow/<?php echo $record->userId ?>" >
                                        <?php echo $record->name ?> 
                                        </a>
                                        <br>                              
                                        
                                        <small>  
                                            <small>  
                                                <?php echo $record->role ?> <?php echo $record->cellule ?> 
                                                <a  href="<?php echo base_url() ?>Club/clubInfo/<?php echo $record->clubID ?>">
                                                  <?php echo $record->ClubName ?> 
                                                </a>    
                                            </small>
                                        </small>
                                                                  
                                                        
                                
                          

                        </td>
                        
                        <?php if($SA == 1  ) { ?>
                        <td>
                            <A HREF="mailto:<?php echo $record->email ?>">
                                <i class="fa fa-mail"></i><?php echo $record->email ?>
                            </A> 
                           <br> 
                            <a href="<?php echo $record->facebook ?>">
                                <i class="fa fa-facebook"></i> 
                            </a>
                         | 
                        <?php if($SA == 1 ) { ?>
                             <a href="tel:<?php echo $record->mobile ?>">
                                <i class="fa fa-phone"></i> <?php echo $record->mobile ?>
                            </a>   
                        <?php } ?>    
                         </td>
                         <?php } ?>   

                         
                        <td>
                            <small><small>

                           parrin : <a class="kt-user-card-v2__name" href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->p_userId ?>" > <?php echo $record->parrain ?></a><br>
                           date d'inscription :<a> <?php echo $record->createdDtm ?></a>
                       </small></small>
                        </td>
                        
                        <td> 
                           
                        <?php if($record->isDeleted == 0) { ?>
                            <span class="btn btn-primary btn-sm" >Actif</span>
                        <?php }   ?>
                        <?php if($record->isDeleted == 3) { ?>
                            <span class="btn btn-warning btn-sm" >non Actif</span>
                        <?php } ?>

                        <?php  if($record->isDeleted == 2) {  ?>
                            <span class="btn btn-danger btn-sm" >bloqué</span>
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
               
            
<?php } ?>