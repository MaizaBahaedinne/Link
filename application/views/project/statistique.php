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

                            <div class="row"> 
                            	<div class="col-md-5">

								<div class="stat-box">
									<i class="fa fa-user"></i>
									<div class="anlytc-meta">
										<h4><?php echo count($countINSNotConfirmed) + count($countINSConfirmed)  ?></h4>
										<p>40%</p>
										<span>iscriptions</span> 
									</div>
									<div class="progress" style="height:6px">
										<div class="progress-bar bg-valvot" style="width:60%"></div>
									</div> 
								
								</div>

								<div class="stat-box">
									<i class="fa fa-user"></i>
									<div class="anlytc-meta">
										<h4><?php echo count($countINSConfirmed) ?></h4>
										<p>40%</p>
										<span>iscriptions validée</span> 
									</div>
									<div class="progress" style="height:6px">
										<div class="progress-bar bg-valvot" style="width:60%"></div>
									</div> 
								
								</div>

								<div class="stat-box">
									<i class="fa fa-user"></i>
									<div class="anlytc-meta">
										<h4><?php echo count($countINSNotConfirmed) ?></h4>
										<p>40%</p>
										<span>iscriptions non validée</span> 
									</div>
									<div class="progress" style="height:6px">
										<div class="progress-bar bg-valvot" style="width:60%"></div>
									</div> 
								
								</div>
                            	</div>

                            	<div class="col-md-7">
                            		<aside class="sidebar ">

                                 	 <div class="widget">
                                        <h4 class="widget-title">Statistique de participant par région</h4>
                                        <div class="your-page">
			                        	<canvas id="myChart" width="600" height="400" ></canvas>
										<script>
										var ctx = document.getElementById('myChart').getContext('2d');
										var myChart = new Chart(ctx, {
										    type: 'bar',
										    data: {
										        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
										        datasets: [{
										            label: '# of Votes',
										            data: [12, 19, 3, 5, 2, 3],
										            backgroundColor: [
										                'rgba(255, 99, 132, 0.2)',
										                'rgba(54, 162, 235, 0.2)',
										                'rgba(255, 206, 86, 0.2)',
										                'rgba(75, 192, 192, 0.2)',
										                'rgba(153, 102, 255, 0.2)',
										                'rgba(255, 159, 64, 0.2)'
										            ],
										            borderColor: [
										                'rgba(255, 99, 132, 1)',
										                'rgba(54, 162, 235, 1)',
										                'rgba(255, 206, 86, 1)',
										                'rgba(75, 192, 192, 1)',
										                'rgba(153, 102, 255, 1)',
										                'rgba(255, 159, 64, 1)'
										            ],
										            borderWidth: 1
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
										<span>les chiffre sont trés confidentiels merci de ne pas faire des capture d'écran </span>
									</div>


									
							</div>
							
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




                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


