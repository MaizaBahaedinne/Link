<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>

<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">

                        	<div class="user-profile">
                                <figure>
                                   <img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" class="alligator-projects-banner" alt="">                                 
                                    
                                </figure>
                                <div class="profile-section">
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                             <a style="color: red" >DU 
                                                <?php echo date('d/m/Y H:i',strtotime('+0 hours',strtotime($projet->startDate))) ; ?> 
                                                AU <?php echo date('d/m/Y H:i',strtotime('+0 hours',strtotime($projet->endDate))) ; ?>   
                                                </a><br>
                                             <h4><?php echo $projet->type ?> : <?php echo $projet->titre ?></h4>
                                        </div>
                                        <div class="col-lg-8">
                                            
                                        
                                        </div>
                                    </div>
                                    <br>
                                </div>  
                            </div><!-- user profile banner  -->

                            
                    		
                        		<div class="col-lg-4 ">
									<div class="stat-box">
										<i class="fa fa-user"></i>
										<div class="anlytc-meta">
											<h4><?php echo count($countINSNotConfirmed) + count($countINSConfirmed)  ?></h4>

												<?php  $PatNC  = round(((count($countINSNotConfirmed)/(count($countINSNotConfirmed) + count($countINSConfirmed))) *100)) ?>

												<?php  $PatC  = round(((count($countINSConfirmed)/(count($countINSNotConfirmed) + count($countINSConfirmed))) *100)) ?>
											<p> <a  class="btn btn-primary" href="<?php echo base_url() ?>TFM/partantF/<?php echo $projet->projectId ?>" >List</a> </p>
											<span>inscriptions</span> 
										</div>
										<div class="progress" style="height:6px">
										</div>
									</div>
								</div>
								<div class="col-lg-4 ">
									<div class="stat-box">
										<i class="fa fa-user"></i>
										<div class="anlytc-meta">
											<h4><?php echo count($countINSConfirmed1) ?> | <?php echo count($countINSConfirmed) ?> = <?php echo count($countINSConfirmed) + count($countINSConfirmed1) ?></h4>
											<p> <?php echo $PatC ?>% </p>
											<span>inscriptions validées</span> 
										</div>
										<div class="progress" style="height:6px">
											<div class="progress-bar" style="background-color: green;width:<?php echo $PatC ?>%"></div>
										</div> 
									
									</div>
								</div>
								<div class="col-lg-4 ">	
									<div class="stat-box">
										<i class="fa fa-user"></i>
										<div class="anlytc-meta">
											<h4> <?php echo count($countINSNotConfirmed) ?> </h4>
											<p><?php echo $PatNC ?>%</p>
											<span>inscriptions non validées</span> 
										</div>
										<div class="progress" style="height:6px">
											<div class="progress-bar" style="background-color: red;width:<?php echo $PatNC ?>%"></div>
										</div> 
									
									</div>
								</div>


								<div class="col-lg-12">
								<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Rythme des inscription</h4>
		                                        <div class="your-page">	
													<canvas id="timeSeriesChart" width="400" height="200"></canvas>
													<script>
														const ctx = document.getElementById('timeSeriesChart').getContext('2d');
														/*
														const startDate = new Date(2020, 0, 1);
														const labels = [];
														for (let i = 0; i < 6; i++) {
														  const date = moment(startDate).add(i, 'days').format('YYYY-MM-DD');
														  labels.push(date.toString());
														}*/

														const chart = new Chart(ctx, {
														  type: 'bar',
														  data: {
														    labels: [<?php foreach ($countRythme as $key ) {
														      	 $date = 	date_create($key->dateInscrip);
														         echo 	"'".date_format($date, 'Y-m-d')."'," ;
														      }?>],
														    datasets: [{
														      label: '# d\'inscription',
														      
														      data: [<?php foreach ($countRythme as $key ) {
														         echo 	$key->nbr.',' ;
														      }?>],
														      borderWidth: 5,
														      fill: false,
														      backgroundColor : 'green'
														    }]
														  },
														      options: {
																        scales: {
																            yAxes: [{
																                ticks: {
																                    beginAtZero: true
																                }
																            }]
																        }
																    }
														});
														</script>
													</div>
												</div>
											</aside>
								</div>
							
      
                   

							
								<div class="col-lg-6 col-md-6 col-sm-6" >
									<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Statistique de participant par région (<?php echo count($partParReg) ?>)</h4>
		                                        <div class="your-page">
		                                        	<table class="table table-striped table-responsive-xl" style="width: cover" >
									                      <thead>
									                          <th>
									                              Region
									                          </th>
									                          <th>
									                              Nombre
									                          </th>
									                      </thead>
									                      <tbody>
									                          <?php foreach ($partParReg as $reg ) {
									                          ?>
									                          <tr>
									                              <td>
									                                  <?php echo $reg->city ?>
									                              </td>
									                              <td>
									                                  <?php echo $reg->countPart ?>
									                              </td>
									                          </tr>
									                          <?php
									                          }?>
									                      </tbody>

									                  </table>
												<span>les chiffre sont trés confidentiels merci de ne pas faire des capture d'écran </span>
											</div>
										</div>
									</aside>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6" >
									<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Statistique de participant par Club (<?php echo count($partParclub) ?>)</h4>
		                                        <div class="your-page">
		                                        	<table class="table table-striped table-responsive-xl" style="width: cover" >
									                     <thead>
									                                  <th>
									                                      Club
									                                  </th>
									                                  <th>
									                                      Homme
									                                  </th>
									                                  <th>
									                                      Femme
									                                  </th>
									                                  <th>
									                                      nombre
									                                  </th>
									                              </thead>
									                              <tbody>
									                                  <?php foreach ($partParclub as $reg ) {
									                                  ?>
									                                  <tr>
									                                      <td>
									                                          <?php echo $reg->name ?>
									                                      </td>
									                                      <td>
									                                          <?php echo $reg->homme ?>
									                                      </td>
									                                     <td>
									                                          <?php echo $reg->femme ?>
									                                      </td>
									                                      <td>
									                                          <?php echo $reg->countPart ?>
									                                      </td>
									                                  </tr>
									                                  <?php
									                                  }?>
									                              </tbody>

									                          </table>
												<span>les chiffre sont trés confidentiels merci de ne pas faire des capture d'écran </span>
											</div>
										</div>
									</aside>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6" >
									<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Statistique de participant par Sexe </h4>
		                                        <div class="your-page">
		                                        		<canvas id="chartjs-4" width="400" height="200"></canvas>

		                                        		<script>
		                                        		new Chart(document.getElementById("chartjs-4"),
		                                        		{"type":"doughnut",
		                                        			"data":{"labels":["Homme","Femme"],
		                                        			"datasets":[{"label":"My First Dataset",
		                                        			"data":[<?php echo $partParsexeH->hommec ?> , <?php echo $partParsexeF->femmec ?>],"backgroundColor":["rgb(54, 162, 235)","rgb(255, 99, 132)"]}]}});</script>



							<script>
								const ctx = document.getElementById('timeSeriesChart1').getContext('2d');

								// And for a doughnut chart
									var myDoughnutChart = new Chart(ctx, {
									    type: 'pie',
									    data = {
									    	datasets: [{
									        	data:[<?php echo $partParsexeH->hommec ?> , <?php echo $partParsexeF->femmec ?> ]
									    			}]

										};
									   
								      }) ;
								
								
								</script>

		    
												<span>les chiffre sont trés confidentiels merci de ne pas faire des capture d'écran </span>
											</div>
										</div>
									</aside>
									</div>





									<div class="col-lg-6 col-md-6 col-sm-6" >
									<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Statistique de participant par Club (<?php echo count($partParclub) ?>)</h4>
		                                        <div class="your-page">
		                                        	<table class="table table-striped table-responsive-xl" style="width: cover" >
									                     <thead>
									                                  <th>
									                                      Recepteur
									                                  </th>
									                                  <th>
									                                      Tranche 1
									                                  </th>
									                                  <th>
									                                      Tranche 2
									                                  </th>
									                                  <th>
									                                      Totale
									                                  </th>
									                              </thead>
									                              <tbody>
									                                  <?php
									                                  	$somme1=0 ; $somme2=0 ; $sommeT=0 ;  
									                                   foreach ($paiement as $reg ) {
									                                  ?>
									                                  <tr>
									                                      <td>
									                                          <?php echo $reg->recp1 ?> 

									                                      </td>
									                                      <td>
									                                          <?php echo $reg->p_tranch1 ; 
									                                           $somme1+= $reg->p_tranch1; ?>
									                                      </td>
									                                     <td>
									                                          <?php echo $reg->p_tranch2; 
									                                           $somme2+= $reg->p_tranch2; ?>
									                                      </td>
									                                      <td>
									                                          <?php echo $reg->p_tranch1 + $reg->p_tranch2 ; 
									                                           $sommeT+= $reg->p_tranch1 + $reg->p_tranch2 ; ?>
									                                      </td>
									                                  </tr>
									                                  <?php
									                                  }?>
									                                  
									                              </tbody>
									                              <tfoot>
									                              	<tr>
									                                      <td>
									                                          <b>Totale</b>

									                                      </td>
									                                      <td>
									                                          <b><?php echo $somme1 ?></b>
									                                      </td>
									                                     <td>
									                                          <b><?php echo $somme2 ?></b>
									                                      </td>
									                                      <td>
									                                          <b><?php echo $sommeT ?></b>
									                                      </td>									                                  	
									                                  </tr>
									                              </tfoot>

									                          </table>
												<span>les chiffre sont trés confidentiels merci de ne pas faire des capture d'écran </span>
											</div>
										</div>
									</aside>
									</div>
						


						<div class="col-lg-6 col-md-6 col-sm-6" >
									<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Point de départ (<?php echo count($PointDepart) ?>)</h4>
		                                        <div class="your-page">
		                                        	<table class="table table-striped table-responsive-xl" style="width: cover" >
									                     <thead>
									                                  <th>
									                                      Point de départ
									                                  </th>
									                                  <th>
									                                      nombre
									                                  </th>
									                                 
									                              </thead>
									                              <tbody>
									                                  <?php
									                                  	
									                                   foreach ($PointDepart as $reg ) {
									                                  ?>
									                                  <tr>
									                                      <td>
									                                          <?php echo $reg->pointDepart ?> 

									                                      </td>
									                                      <td>
									                                          <?php echo $reg->nombre ?> 

									                                      </td>

									                                  </tr>
									                                  <?php
									                                  }?>
									                                  
									                              </tbody>
									                              

									                          </table>
												<span>les chiffre sont trés confidentiels merci de ne pas faire des capture d'écran </span>
											</div>
										</div>
									</aside>
									</div>



                       
                    </div>
                </div>
            </div>
        </div>
</section>


