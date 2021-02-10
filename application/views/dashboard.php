<?php if ($SA == 1) { ?>

<div id="content-page" class="content-page">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">

                
                <div class="row ">
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background-color: #343a40; " >
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0 " style="color: #fff" ><i class="ri-group-fill mr-3"></i> Clubs Senior</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff" > <?php echo $clubscountS ; ?></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff"><i class="ri-group-2-fill mr-3"></i>Clubs Junior</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff"><?php echo $clubscountJ ; ?></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff"><i class="ri-group-2-fill mr-3"></i>Unités Alumni</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff">12</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background-color: #343a40;color: #fff " >
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff"><i class="ri-home-smile-2-fill mr-3"></i>Membres Junior</h6>
                                        <div class="dropdown mb-2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff" ><?php echo $tunimateursAppJ ;?></h3>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="sparklinePie"></div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff" ><i class="ri-building-2-fill mr-3"></i>Membres Senior</h6>
                                        <div class="dropdown mb-2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff"><?php echo $tunimateursApp ;?></h3>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="sparklinePie"></div>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff"><i class="ri-building-3-fill mr-3"></i> Membres Alumni</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff"><?php echo $tunimateursAppA ; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background-color: #343a40;color: #fff " >
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff"><i class="ri-archive-fill mr-3"></i> Projets</h6>
                                        <div class="dropdown mb-2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff" ><?php echo count($projets) + 170 ;?></h3>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="sparklinePie"></div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff" ></h6>
                                        <div class="dropdown mb-2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff"></h3>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="sparklinePie"></div>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0" style="color: #fff"></h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2" style="color: #fff"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

</div>
<!-- row -->
<?php  if ($countEval>0 && ($role ==1  ||  ($role == 3  && $cellule=='Gestion des talents' )) ){ ?>
                    <a href=" <?php echo base_url() ; ?>Evaluation/evaluationListing ">

                        <div class="alert alert-primary fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text"><strong>Alerte :  </strong> Vous avez
                                <?php echo $countEval ?> évaluation à valider !</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
<div class="row">

    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">10 Top Members</h6>
                    <div class="dropdown mb-2">

                    </div>
                </div>

                <style type="text/css">
                    .pro-turtle {
                        object-fit: cover;
                        object-position: 50% 50%;
                        width: 40px;
                        height: 40px;
                    }
                </style> 
               <?php if($clubID == 0){  ?>
                <table  class="table table-dark " >
                          <th>
                          </th>

                          <th>
                          </th>
                          <th>
                            Tunimateur
                          </th>
                          <th>
                            Score
                          </th>
                                        <?php  if(!empty($RateMember)){ $c=1 ;   foreach ($RateMember as $membre ) { ?>
                                          <tr>

                                            <td  > <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle " alt="user"> </td>

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
                                             <small><small>

                                            
                                            <span>
                                            <?php echo $membre->name ?> <br>
                                            <small><small><?php echo $membre->clubName ?></small></small>
                                            </span>

                                            </small></small> </td>

                                            <td> <p class="text-muted "><small><small><?php echo $membre->scores ?> Points</small></p> </td>
                                          </tr>
                                          
                                        </thead>
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-lg-7 col-xl-8 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Classement des clubs </h6>
                    <span class="text-muted"><b> Dernière mise à jour : </b>
                 <?php echo $LastRaitingClub->createdDate ; ?>  
                  </span>
                </div>
                <div class="table-responsive" style="height:834px ;overflow:auto;">
                    <?php if($clubID == 0){  ?>
                    <table class="table table-dark table-hover"  id="dtVerticalScrollExample">
                        <thead>
                            <tr>
                                <th ></th>
                                <th></th>
                                <th >Club</th>
                                <th>F</th>
                                <th>C</th>
                                <th>E</th>
                                <th>S</th>
                                <th>A</th>
                                <th >Score</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $c=0 ; if(!empty($RateClub)){ foreach ($RateClub as $club ) { ?>
                                <tr <?php if ($club->clubID == $MyclubID) { echo 'bgcolor="#ADD8E6" '; }?> >
                                    <td>
                                        <small> <?php $c++ ; echo $c ?></small>
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
                                    <td>
                                        
                                           <small> <?php echo $club->name ?></small> 


                                    </td>
                                     
                                    <td>
                                         <small> <?php echo $club->Formation ?></small> 
                                    </td>
                                    <td>
                                        <small> <?php echo $club->Conf ?></small>
                                    </td>
                                    <td>
                                        <small> <?php echo $club->Evenement ?></small>
                                    </td>
                                    <td>
                                        <small> <?php echo $club->Soir ?></small>
                                    </td>
                                    <td>
                                        <small> <?php echo $club->Action ?></small>
                                    </td>
                                    <td>
                                        <?php echo $club->scores ?>
                                    </td>
                                   
                                </tr>
                                <?php } }else { echo "Il y a pas de données";} ?>
                        </tbody>
                    </table>
                    <?php }  ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->



    <div class="row">


     
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0"> Top 3 VP Marketing</h6>
                    <div class="dropdown mb-2">

                    </div>
                </div>


               <?php if($clubID == 0){  ?>
                <table  class="table table-dark table-hover" >
                          <th>
                          </th>

                          <th>
                          </th>
                          <th>
                            Tunimateur
                          </th>
                          <th>
                            Score
                          </th>
                                        <?php  if(!empty($RateVPM)){ $c=1 ;   foreach ($RateVPM as $membre ) { ?>
                                          <tr>

                                            <td  > <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle " alt="user"> </td>

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
                                             <small><small>

                                            
                                            <span>
                                            <?php echo $membre->name ?> <br>
                                            <small><small><?php echo $membre->clubName ?></small></small>
                                            </span>

                                            </small></small> </td>

                                            <td> <p class="text-muted "><small><?php echo $membre->scores ?> Points</small></p> </td>
                                          </tr>
                                          
                                       
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>
                <?php } ?>
            </div>
        </div>


         
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0"> Top 3 VP Evenmentiel</h6>
                    <div class="dropdown mb-2">

                    </div>
                </div>


               <?php if($clubID == 0){  ?>
                <table  class="table table-dark table-hover" >
                          <th>
                          </th>

                          <th>
                          </th>
                          <th>
                            Tunimateur
                          </th>
                          <th>
                            Score
                          </th>
                                        <?php  if(!empty($RateVPE)){ $c=1 ;   foreach ($RateVPE as $membre ) { ?>
                                          <tr>

                                            <td  > <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle " alt="user"> </td>

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
                                             <small><small>

                                            
                                            <span>
                                            <?php echo $membre->name ?> <br>
                                            <small><small><?php echo $membre->clubName ?></small></small>
                                            </span>

                                            </small></small> </td>

                                            <td> <p class="text-muted "><small><?php echo $membre->scores ?> Points</small></p> </td>
                                          </tr>
                                          
                                      
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>
                <?php } ?>
            </div>
        </div>



       
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0"> Top 3 VP Evenmentiel</h6>
                    <div class="dropdown mb-2">

                    </div>
                </div>
 
               <?php if($clubID == 0){  ?>
                <table  class="table table-dark table-hover" >
                          <th>
                          </th>

                          <th>
                          </th>
                          <th>
                            Tunimateur
                          </th>
                          <th>
                            Score
                          </th>
                                        <?php  if(!empty($RateVPAF)){ $c=1 ;   foreach ($RateVPAF as $membre ) { ?>
                                          <tr>

                                            <td  > <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle " alt="user"> </td>

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
                                             <small><small>

                                            
                                            <span>
                                            <?php echo $membre->name ?> <br>
                                            <small><small><?php echo $membre->clubName ?></small></small>
                                            </span>

                                            </small></small> </td>

                                            <td> <p class="text-muted "><small><?php echo $membre->scores ?> Points</small></p> </td>
                                          </tr>
                                        
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>
                <?php } ?>
            </div>
        </div>


        
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0"> Top 3 VP RH</h6>
                    <div class="dropdown mb-2">

                    </div>
                </div>

                <style type="text/css">
                    .pro-turtle {
                        object-fit: cover;
                        object-position: 50% 50%;
                        width: 40px;
                        height: 40px;
                    }
                </style> 
               <?php if($clubID == 0){  ?>
                <table  class="table table-dark table-hover" >
                          <th>
                          </th>

                          <th>
                          </th>
                          <th>
                            Tunimateur
                          </th>
                          <th>
                            Score
                          </th>
                                        <?php  if(!empty($RateVPRH)){ $c=1 ;   foreach ($RateVPRH as $membre ) { ?>
                                          <tr>

                                            <td  > <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle " alt="user"> </td>

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
                                             <small><small>

                                            
                                            <span>
                                            <?php echo $membre->name ?> <br>
                                            <small><small><?php echo $membre->clubName ?></small></small>
                                            </span>

                                            </small></small> </td>

                                            <td> <p class="text-muted "><small><?php echo $membre->scores ?> Points</small></p> </td>
                                          </tr>
                                          
                                      
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>
                <?php } ?>
            </div>
        </div>



    </div>

<div class="row">
    
      
    <div class="col-md-12">
        <h4>Projets/Mois</h4>  
        <div id="chart"></div>
    </div>

    




    <div class="col-md-4"  >
        <div class="card">
            <div class="card-title">
                <h4 class="text-center" >Evenenement</h4>
            </div>
            <div class="card-body">
                <div id="Even"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4"  >
        <div class="card">
            <div class="card-title">
                <h4 class="text-center" >Conférence</h4>
            </div>
            <div class="card-body">
                <div id="Conf"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4"  >
        <div class="card">
            <div class="card-title">
                <h4 class="text-center" >Formation</h4>
            </div>
            <div class="card-body">
                <div id="Formation"></div>
            </div>
        </div>
    </div>



       <div class="col-md-4"  >
        <div class="card">
            <div class="card-title">
                <h4 class="text-center" >Type de projet (%) mandat 2019-2020)</h4>
            </div>
            <div class="card-body">
                <div id="chart2"></div>
            </div>
        </div>
    </div>


</div>

<!-- row -->

            </div>
        </div>
    </div>
    <!-- row -->

</div>
</div>

<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script type="text/javascript">
        var options = {
                      chart: {
                        type: 'bar',
                      },
                      width: 100,
                      series: [{
                        name: 'Projets',
                        data: [   
                        <?php foreach ($projetsStat as $key ) { 
                                    $date = new DateTime($key->dateS); 
                            echo '{ x: "'.date_format( $date , 'm-Y').' " , y: '. $key->Cproject.' } , ' ;  } ?>
                             ]
                      }
                      ],xaxis: {
                        type: "date",
                      }

                    }

                    var chart = new ApexCharts(document.querySelector("#chart"), options);

                    chart.render();

</script>

<script type="text/javascript">
    
     var options2 = {
          series: [<?php foreach ($projetsStatType as $key ) { echo $key->Cproject.',' ;  } ?>],
          chart: {
          width:  400,
          type: 'pie',
        },
        labels: [<?php foreach ($projetsStatType as $key ) { echo '"'.$key->type.'",' ;  } ?>],
        };

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();


</script>

<script type="text/javascript">





                var Conf = {
                      chart: {
                                      height: 350,
                                      type: 'bar',
                                      zoom: {
                                        enabled: false
                                      }
                                    },
                                    dataLabels: {
                                      enabled: false
                                    },
                                    stroke: {
                                      curve: 'straight'
                                    },
                      width: 100,
                      series: [
                     {
                        name: 'Conférence',
                        data: [   
                        <?php foreach ($projetsStatTypeDateConf as $key ) { 
                                    $date = new DateTime($key->dateS); 
                            echo '{ x: "'.date_format( $date , 'm-Y').' " , y: '. $key->Cproject.' } , ' ;  } ?>
                             ]
                      }, 


                      ],xaxis: {
                        type: "date",
                      }

                    }

                    var Conf = new ApexCharts(document.querySelector("#Conf"), Conf);

                    Conf.render();



             var Formation = {
                                    chart: {
                                      height: 350,
                                      type: 'bar',
                                      zoom: {
                                        enabled: false
                                      }
                                    },
                                    dataLabels: {
                                      enabled: false
                                    },
                                    stroke: {
                                      curve: 'straight'
                                    },
                      width: 100,
                      series: [
                     
                      {
                        name: 'Formation',
                        data: [   
                        <?php foreach ($projetsStatTypeDateFormation as $key ) { 
                                    $date = new DateTime($key->dateS); 
                            echo '{ x: "'.date_format( $date , 'm-Y').' " , y: '. $key->Cproject.' } , ' ;  } ?>
                             ]
                      }, 


                      ],xaxis: {
                        type: "date",
                      }

                    }

                    var FormationChart = new ApexCharts(document.querySelector("#Formation"), Formation);

                    FormationChart.render();



                    var Even = {
                                    chart: {
                                      height: 350,
                                      type: 'bar',
                                      zoom: {
                                        enabled: false
                                      }
                                    },
                                    dataLabels: {
                                      enabled: false
                                    },
                                    stroke: {
                                      curve: 'straight'
                                    },
                      width: 100,
                      series: [
                     
                      {
                        name: 'Formation',
                        data: [   
                        <?php foreach ($projetsStatTypeDateEvenement as $key ) { 
                                    $date = new DateTime($key->dateS); 
                            echo '{ x: "'.date_format( $date , 'm-Y').' " , y: '. $key->Cproject.' } , ' ;  } ?>
                             ]
                      }, 


                      ],xaxis: {
                        type: "date",
                      }

                    }

                    var Evenchart = new ApexCharts(document.querySelector("#Even"), Even);

                    Evenchart.render();

                    
                    

</script>

