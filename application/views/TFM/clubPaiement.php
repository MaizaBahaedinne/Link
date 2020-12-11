
<div id="content-page" class="content-page">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-sm-12">


<div class="row" >

    <div class="card col-md-12">
            <div class="card-header">
         
        <h5> Tranche 1 :   | Tranche 2 :  </h5>
        <label> inscription  :  <?php echo $count ?>  </label>
        <?php if($clubID == 0 ){ ?>
            <a href="<?php echo base_url() ?>TFM/stats">statistiques</a>
        <?php } ?>
    </div>
        <div class="card-body">

            <!--begin: Datatable -->

        <table id="example" class="table dataTable no-footer" style="width:cover" >
                    <thead>
                    <tr>
                       
                        <th>Club</th>
                       
                        <th>Paiment</th>
                  
                        
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
                          <?php if ( $clubID == -1  ) { ?>
                                <a href="<?php echo base_url().'TFM/PaimentByClub/'.$record->clubID ?>" class="btn btn-warning" >Paiement</a>
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


            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
    $('table').DataTable();
} );
  </script>
