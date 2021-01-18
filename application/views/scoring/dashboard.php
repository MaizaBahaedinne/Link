<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                        	<!-- scoring membres -->
                        	<div class="col-lg-6 " >
                        		<aside class="sidebar static right" >
                        		<div class="widget">
                        		<h4 class="widget-title">TOP 10 Tunimateurs</h4>
                        		 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 30px;
                                            height: 30px;
                                        }
                                    </style> 
				                    <table  class="table table-striped table-responsive" id="tableid" style="width: cover" >
				                      <thead>
				                          <th width="5%" >#
				                          </th>
				                          <th width="10%" >
				                            Badge
				                          </th>
				                          <th>
				                            Tunimateur
				                          </th>
				                          <th>
				                          	Club
				                          </th>
				                          
				                     
				                          <th>
				                            Score
				                          </th>
				                          </thead>
                                    <?php  if(!empty($membres)){ $c=1 ;   foreach ($membres as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                        	 <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

	                                        <?php } else if ($c== 2) { ?>

	                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

	                                        <?php } else if ($c== 3) { ?>

	                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

	                                        <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                        <?php if ($c < 10 ){ ?>
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                         <?php } ?>
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                        	<small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
				                </table>
				            </div>
							</aside>
                        	</div>

                        	<!-- end scoring membres -->


                        	<!-- scoring clubs -->
                        	<div class="col-lg-6 " >
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
				                    <table  class="table table-striped table-responsive" id="tableid" style="width: cover" >
				                      <thead>
				                          <th width="10%" >Rang
				                          </th>
				                          <th>
				                            Club
				                          </th>
				                          <th width="10%" >
				                            Badge
				                          </th>
				                       
				                     
				                          <th>
				                            Score
				                          </th>
				                          </thead>
                                    <?php  if(!empty($clubs)){ $c=1 ;   foreach ($clubs as $club ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                           					<?php echo   $club->club   ?>
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
                                                                             

                                        <td> <b ><?php echo $club->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
				                </table>
					            </div>
					        </aside>
                        	</div>
                        	<!-- end scoring clubs -->



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
                                    <table  class="table-responsive-xl" id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($vpM)){ $c=1 ;   foreach ($vpM as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring vp Marketing -->

                            <!-- scoring vp Event -->
                            <div class="col-lg-3 " >
                                <aside class="sidebar static right" >
                                <div class="widget">
                                <h4 class="widget-title">TOP 3 VP Evenmentiel</h4>
                                 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 30px;
                                            height: 30px;
                                        }
                                    </style> 
                                    <table  class="table-responsive-xl " id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($vpE)){ $c=1 ;   foreach ($vpE as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring vp -->

                             <!-- scoring vp AF -->
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
                                    <table  class="table-responsive-xl" id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($vpAF)){ $c=1 ;   foreach ($vpAF as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring vp -->



                            <!-- scoring membres Event -->
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
                                    <table  class="table-responsive-xl " id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($vpRH)){ $c=1 ;   foreach ($vpRH as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring vp -->







                            <!-- scoring membres Marketing -->
                            <div class="col-lg-3 " >
                                <aside class="sidebar static right" >
                                <div class="widget">
                                <h4 class="widget-title">TOP 3 Tunimateurs Marketing</h4>
                                 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 30px;
                                            height: 30px;
                                        }
                                    </style> 
                                    <table  class="table-responsive-xl" id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($mM)){ $c=1 ;   foreach ($mM as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring membres Marketing -->

                            <!-- scoring membres Event -->
                            <div class="col-lg-3 " >
                                <aside class="sidebar static right" >
                                <div class="widget">
                                <h4 class="widget-title">TOP 3 Tunimateurs Evenmentiel</h4>
                                 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 30px;
                                            height: 30px;
                                        }
                                    </style> 
                                    <table  class="table-responsive-xl " id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($mE)){ $c=1 ;   foreach ($mE as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring membres -->

                             <!-- scoring membres AF -->
                            <div class="col-lg-3 " >
                                <aside class="sidebar static right" >
                                <div class="widget">
                                <h4 class="widget-title">TOP 3 Tunimateurs AF</h4>
                                 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 30px;
                                            height: 30px;
                                        }
                                    </style> 
                                    <table  class="table-responsive-xl" id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($mAF)){ $c=1 ;   foreach ($mAF as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring membres -->



                            <!-- scoring membres Event -->
                            <div class="col-lg-3 " >
                                <aside class="sidebar static right" >
                                <div class="widget">
                                <h4 class="widget-title">TOP 3 Tunimateurs RH</h4>
                                 <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 30px;
                                            height: 30px;
                                        }
                                    </style> 
                                    <table  class="table-responsive-xl " id="tableid" style="width: cover" >
                                      <thead>
                                          <th width="5%" >#
                                          </th>
                                          <th width="10%" >
                                            Badge
                                          </th>
                                          <th>
                                            Tunimateur
                                          </th>
                                          <th>
                                            Club
                                          </th>
                                          
                                     
                                          <th>
                                            Score
                                          </th>
                                          </thead>
                                    <?php  if(!empty($mRH)){ $c=1 ;   foreach ($mRH as $membre ) { ?>
                                      <tr>

                                        <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                    
                                        <td>
                                             <?php   if ($c== 1) { ?>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                        </td>
                                         

                                         <td>
                                      
                                         <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $membre->userId ?>"> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <small><?php echo $membre->name ?></small>                        
                                        </td>
                                        <td>
                                            <small><?php echo $membre->club ?></small>
                                        </td>

                                        <td> <b ><?php echo $membre->scores ?></b> </td>
                                      </tr>
                                      
                                 
                                    <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                                </table>
                            </div>
                            </aside>
                            </div>

                            <!-- end scoring membres -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>