<?php if ($SA== 1  ) {  ?>
<div id="content-page" class="content-page">
            <div class="container">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script defer type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script defer type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>



<style type="text/css">
.content-loader tr td 
{
    white-space: nowrap;
}
</style>





                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Systeme</a></li>
                        <li class="breadcrumb-item active" aria-current="page">utilisateurs</li>
                    </ol>
                </nav>

                <div class="row">
                   
            <div class="card col-md-12">
              <div class="card-body">
                                <h6 class="card-title"></h6>
                                   
                
                    <table  class="display table dataTable no-footer" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                       
                        <th>id</th>
                        <th>Nom et prénom</th>
                        
                        <th>Contact</th>
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
                        
                        
                        <td>
                            <A HREF="mailto:<?php echo $record->email ?>">
                                <i class="fa fa-mail"></i><?php echo $record->email ?>
                            </A> 
                           <br> 
                            <a href="<?php echo $record->facebook ?>">
                                <i class="fa fa-facebook"></i> <?php echo $record->facebook ?>
                            </a>
                        <br>
                        <?php if($SA == 1 ) { ?>
                             <a href="tel:<?php echo $record->mobile ?>">
                                <i class="fa fa-phone"></i> <?php echo $record->mobile ?>
                            </a>   
                        <?php } ?>    
                         </td>

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


               
              </div>
            </div>
                
                </div>


             <!-- begin::Global Config(global config for global JS sciprts) -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
            $(document).ready( function () {
                $('#example').DataTable();
            } );
  </script>
</div></div>
<?php } ?>