<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">



                        	<!-- scoring clubs -->
                        	<div class="col-lg-12 " >
                        		<aside class="sidebar static right" >
                        		<div class="widget">
                        		<h4 class="widget-title">Classement des clubs</h4>
                        		 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 40px;
                                            height: 40px;
                                        }
                                    </style> 
                                    <style type="text/css">
                                            table.tableizer-table {
                                                font-size: 14px;
                                                border: 1px solid #CCC; 
                                                font-family: Arial, Helvetica, sans-serif;
                                            } 
                                            .tableizer-table th {
                                                background-color: #104E8B; 
                                                color: #FFF;
                                                font-weight: bold;
                                            }
                                        </style>
                                    <div class="your-page" >
				                    <table  class="table table-responsive tableizer-table" id="tableid" style="width: 100%" >
				                      <thead>
				                          <th width="5%" >#
				                          </th>
				                          <th>
				                            Club
				                          </th>
				                          <th width="5%" >
				                            
				                          </th>
                                  <th width="10%" >
                                    P
                                  </th>
                                  <th width="10%" >
                                    F
                                  </th>
                                  <th width="10%" >
                                    C
                                  </th>
                                  <th width="10%" >
                                    E
                                  </th>
                                  <th width="10%" >
                                    TE
                                  </th>
                                  <th width="10%" >
                                    TP
                                  </th>
				                       
				                     
				                          <th width="10%" style="text-align: right;" >
				                            Score
				                          </th>
				                          </thead>
                                    <?php  if(!empty($clubs)){ $c=1 ;   foreach ($clubs as $club ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                           					<?php echo   $club->name   ?>
                                        </td>
                                        <td>
                                          <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                        <?php } else if ($c== 2) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                        <?php } else if ($c== 3) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                        <?php   }  ?>
                                        </td>
                                                                             
                                        <td><?php echo $club->P ?></td>
                                        <td><?php echo $club->F ?></td>
                                        <td><?php echo $club->C ?></td>
                                        <td><?php echo $club->E ?></td>
                                        <td><?php $s = $club->score ; echo round($s->affP) ?>%</td>
                                        <td ><?php $s = $club->score ; echo round($s->tauxParticipation) ?>%</td>

                                        <td style="text-align: center;" > <b ><?php $s = $club->score ; echo $s->points ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
				                </table>
                        </div>
					            </div>
					        </aside>
                        	</div>
                        	<!-- end scoring clubs -->
  
                          <!-- scoring vp Marketing -->
                              

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row"> 

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 VP Marketing</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($vpM)){ $c=1 ;   foreach ($vpM as $membre ) { ?>
                                        <tr>

                                          

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 VP Evenementiel</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($vpE)){ $c=1 ;   foreach ($vpE as $membre ) { ?>
                                        <tr>

                                         

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 VP AF</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($vpAF)){ $c=1 ;   foreach ($vpAF as $membre ) { ?>
                                        <tr>

                                         

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 VP RH</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                           
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($vpRH)){ $c=1 ;   foreach ($vpRH as $membre ) { ?>
                                        <tr>
 

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->
                </div>

                 <!-- end scoring membre -->

                 <hr>
                <div class="row"> 

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 Assistant Marketing</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($aM)){ $c=1 ;   foreach ($aM as $membre ) { ?>
                                        <tr>

                                          

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 Assistant Evenementiel</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($aE)){ $c=1 ;   foreach ($aE as $membre ) { ?>
                                        <tr>

                                         

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 Assistant AF</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($aAF)){ $c=1 ;   foreach ($aAF as $membre ) { ?>
                                        <tr>

                                         

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 VP RH</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                           
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($aRH)){ $c=1 ;   foreach ($aRH as $membre ) { ?>
                                        <tr>
 

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->
                </div>

                 <!-- end scoring assistant -->


                                  <!-- end scoring membre -->

                 <hr>
                <div class="row"> 

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 membre Marketing</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($mM)){ $c=1 ;   foreach ($mM as $membre ) { ?>
                                        <tr>

                                          

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 membre Evenementiel</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($mE)){ $c=1 ;   foreach ($mE as $membre ) { ?>
                                        <tr>

                                         

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 membre AF</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                            
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($mAF)){ $c=1 ;   foreach ($mAF as $membre ) { ?>
                                        <tr>

                                         

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->

                              <!-- scoring vp Marketing -->
                              <div class="col-lg-3 " >
                                  <aside class="sidebar static right" >
                                  <div class="widget">
                                  <h4 class="widget-title">TOP 3 membre RH</h4>
                                   <style type="text/css">
                                          .pro-turtle {
                                              object-fit: cover;
                                              border-radius : 100% ;
                                              object-position: 50% 50%;
                                              width: 30px;
                                              height: 30px;
                                          }
                                      </style> 
                                       <div class="your-page" >
                                      <table  class="table-responsive-xl" id="tableid" style="width: 100%" >
                                        <thead>
                                           
                                            <th >
                                            </th>
                                            <th>
                                              Tunimateurs
                                            </th>
                                            
                                       
                                            <th>
                                              S
                                            </th>
                                            </thead>
                                      <?php  if(!empty($mRH)){ $c=1 ;   foreach ($mRH as $membre ) { ?>
                                        <tr>
 

                                           <td>
                                        
                                           <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user"></a>
                                                                      
                                          </td>
                                          <td>
                                              <small><b><?php echo $membre->name ?></b><br>
                                              <?php echo $membre->club ?></small>
                                          </td>

                                          <td> <b ><?php echo $membre->scores ?></b> </td>
                                        </tr>
                                        
                                   
                                      <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                  </table>
                              </div>
                              </div>
                              </aside>
                              </div>
                              <!-- end scoring vp Marketing -->
                </div>

                 <!-- end scoring membre -->

                 <div class="row"> 

                              
                              <!-- end scoring vp Marketing -->
                            </div>

            </div>
        </div>


</section>