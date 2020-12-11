
<div id="content-page" class="content-page">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-sm-12">


<div class="row" >

    <div class="card col-md-12">
        <div class="card-header">
        <label> inscription  :  <?php echo count($clubRecords) ?>  </label>
    </div>
        <div class="card-body">

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
                              
                </style>
                    
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
                                    <div class="kt-user-card-v2__pic">
                                        
                                    </div>                          
                                    <div class="kt-user-card-v2__details">                              
                                        <a class="kt-user-card-v2__name" href="#">
                                         <?php
                                            if ($record->ClubName != "Foundation"  && $record->ClubName != "Foundation Junior" && $record->ClubName != "Alumni")
                                            echo "club ";
                                            ?>   Tunivisions  <?php echo $record->ClubName ?></td>
                                        </a>                              
                                    </div>                      
                                </div>
                            </span>


                        </td>
                        
                     
                    
                        
                    <td>

                      <?php echo $record->partant ?> 
                    </td> 
 

                    <td> 
                          <?php if ( ($role == 2 && $clubID == 0) ||  $uid == 2 ) { ?>
                                <a href="<?php echo base_url() ?>TFM/PaimentByClub/<?php echo $record->clubID ?>/<?php echo $record->clubID ?>" class="btn btn-warning" >Paiement</a>
                         <?php } ?>   
                    </tr>

                    <?php
                    }
                    }
                    ?>
                    
                    </tbody>

                  </table>

        
    </div>
        <div class="card-footer">
        
    </div>
        
    </div>
    

</div>

</div>
</div>
</div>
</div>


            
