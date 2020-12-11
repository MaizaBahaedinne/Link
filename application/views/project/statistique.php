<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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
											<span>iscriptions</span> 
										</div>
										<div class="progress" style="height:6px">
										</div>
									</div>
								</div>
								<div class="col-lg-4 ">
									<div class="stat-box">
										<i class="fa fa-user"></i>
										<div class="anlytc-meta">
											<h4><?php echo count($countINSConfirmed) ?></h4>
											<p> <?php echo $PatC ?>% </p>
											<span>iscriptions validées</span> 
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
											<h4><?php echo count($countINSNotConfirmed) ?></h4>
											<p><?php echo $PatNC ?>%</p>
											<span>iscriptions non validées</span> 
										</div>
										<div class="progress" style="height:6px">
											<div class="progress-bar" style="background-color: red;width:<?php echo $PatNC ?>%"></div>
										</div> 
									
									</div>
								</div>


								<div class="col-lg-12">	
									<canvas id="timeSeriesChart" > </canvas>
									<script>
										const ctx = document.getElementById('timeSeriesChart').getContext('2d');
										const startDate = new Date(2020, 0, 1);
										const labels = [];
										for (let i = 0; i < 6; i++) {
										  const date = moment(startDate).add(i, 'days').format('YYYY-MM-DD');
										  labels.push(date.toString());
										}

										const chart = new Chart(ctx, {
										  type: 'line',
										  data: {
										    labels,
										    datasets: [{
										      label: '# of Votes',
										      data: [12, 19, 3, 5, 2, 3],
										      borderWidth: 5,
										      fill: false,
										      borderColor: 'green'
										    }]
										  },
										  options: {}
										});
										</script>
								</div>
							
      
                   

							
								<div class="col-lg-6 col-md-6 col-sm-6" >
									<aside class="sidebar ">
									<div class="widget">
		                                        <h4 class="widget-title">Statistique de participant par région (<?php echo count($partParReg) ?>)</h4>
		                                        <div class="your-page">
		                                        	<table class="table dataTable no-footer" style="width: cover" >
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
		                                        	<table class="table dataTable no-footer" style="width: cover" >
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
						



                       
                    </div>
                </div>
            </div>
        </div>
</section>


