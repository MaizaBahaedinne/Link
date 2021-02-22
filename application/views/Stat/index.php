
<section>
		<div class="page-header">
			<div class="header-inner">
				<h2>T.link statistique </h2>
				<p>
					
				</p>
			</div>
			<figure><img src="<?php echo base_url() ?>assets/images/resources/baner-statics.png" alt=""></figure>
		</div>
	</section>

<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
				<div class="col-lg-12">
					<div class="info-section">
						<div class="row">
										
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="stat-box">
									<i class="fa fa-user"></i>
									<div class="anlytc-meta">
										<h4><?php $tuni = (count($TunimateursA) + count($TunimateursHS) + count($TunimateursU)) ; echo $tuni ;  ?></h4>
										<p>40%</p>
										<span>Tunimateurs</span> 
									</div>
									<div class="progress" style="height:6px">
										<div class="progress-bar bg-valvot" style="width:60%"></div>
									</div> 
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="stat-box">
									<i class="fas fa-users"></i>
									<div class="anlytc-meta">
										<h4><?php  $clubs = (count($clubsU) + count($clubsHS)) ; echo $clubs ;  ?></h4>
										<p>40%</p>
										<span>Clubs </span> 
									</div>
									<div class="progress" style="height:6px">
										<div class="progress-bar bg-valvot" style="width:60%"></div>
									</div> 
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="stat-box">
									<i class="fas fa-project-diagram"></i>
									<div class="anlytc-meta">
										<h4><?php  echo (count($projetA) + count($projetU) + count($projetHS) ) ?></h4>
										<p>40%</p>
										<span>Projets </span> 
									</div>
									<div class="progress" style="height:6px">
										<div class="progress-bar bg-valvot" style="width:60%"></div>
									</div> 
								</div>
							</div>





						</div>
					</div>
				</div>


				<div class="col-lg-2">
								<aside class="sidebar static">
									<div class="widget">
									<h4 class="widget-title">Membres Alumni</h4>
										<div class="static-meta"> 
											<i class="fa fa-user"></i>
											<div class="info-meta">
												<h4><?php  echo count($TunimateursA) ?></h4>
												<i><?php echo round((count($TunimateursA)/$tuni)*100) ?>%</i>
											</div>
											<div class="spark">
				                            <div class="sparkline12"><canvas width="158" height="40" style="display: inline-block; width: 158px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									<div class="widget">
									<h4 class="widget-title">Membres University</h4>
										<div class="static-meta"> 
											<i class="fa fa-user"></i>
											<div class="info-meta">
												<h4><?php  echo count($TunimateursU) ?></h4>
												<i><?php echo round((count($TunimateursU)/$tuni)*100) ?>%</i>
											</div>
											<div class="spark">
				                            <div class="sparkline12"><canvas width="158" height="40" style="display: inline-block; width: 158px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									<div class="widget">
									<h4 class="widget-title">Membres High School</h4>
										
										<div class="static-meta"> 
											<i class="fa fa-user"></i>
											<div class="info-meta">
												<h4><?php  echo count($TunimateursHS) ?></h4>
												<i><?php echo round((count($TunimateursHS)/$tuni)*100) ?>%</i>
											</div>
											<div class="spark">
				                            <div class="sparkline_three"><canvas width="200" height="40" style="display: inline-block; width: 200px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
																		
								</aside>
							</div>

							<div class="col-lg-2">
								<aside class="sidebar static">
									<div class="widget">
									<h4 class="widget-title">Unité Alumni</h4>
										<div class="static-meta"> 
											<i class="fas fa-archway"></i>
											<div class="info-meta">
												<h4><?php  echo $clubA ?></h4>
												<i></i>
											</div>
											<div class="spark">
				                            <div class="sparkline12"><canvas width="158" height="40" style="display: inline-block; width: 158px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									<div class="widget">
									<h4 class="widget-title">Clubs University</h4>
										<div class="static-meta"> 
											<i class="fas fa-university"></i>
											<div class="info-meta">
												<h4><?php  echo count($clubsU) ?></h4>
												<i></i>
											</div>
											<div class="spark">
				                            <div class="sparkline12"><canvas width="158" height="40" style="display: inline-block; width: 158px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									<div class="widget">
									<h4 class="widget-title">Membres High School</h4>
										
										<div class="static-meta"> 
											<i class="fas fa-school"></i>
											<div class="info-meta">
												<h4><?php  echo count($clubsHS) ?></h4>
												<i></i>
											</div>
											<div class="spark">
				                            <div class="sparkline_three"><canvas width="200" height="40" style="display: inline-block; width: 200px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
																		
								</aside>
							</div>


							




																		
						


						<div class="col-lg-2">
									<aside class="sidebar static">
									<div class="widget">
									<h4 class="widget-title">Projet National</h4>
										<div class="static-meta"> 
											<i class="fas fa-project-diagram"></i>
											<div class="info-meta">
												<h4><?php  echo count($projetA) ?></h4>
												<i></i>
											</div>
											<div class="spark">
				                            <div class="sparkline12"><canvas width="158" height="40" style="display: inline-block; width: 158px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									<div class="widget">
									<h4 class="widget-title">Projet University</h4>
										<div class="static-meta"> 
											<i class="fas fa-project-diagram"></i>
											<div class="info-meta">
												<h4><?php  echo count($projetU) ?></h4>
												<i></i>
											</div>
											<div class="spark">
				                            <div class="sparkline12"><canvas width="158" height="40" style="display: inline-block; width: 158px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									<div class="widget">
									<h4 class="widget-title">Projet High School</h4>
										
										<div class="static-meta"> 
											<i class="fas fa-project-diagram"></i>
											<div class="info-meta">
												<h4><?php  echo count($projetHS) ?></h4>
												<i></i>
											</div>
											<div class="spark">
				                            <div class="sparkline_three"><canvas width="200" height="40" style="display: inline-block; width: 200px; height: 40px; vertical-align: top;"></canvas></div>
				                          </div>
										</div>
									</div>
									</aside>
								</div>


							</div>

				</div>
			</div>
		</div>
	</div>
</div>
</section>



	
    <script src="<?php echo base_url() ?>assets/js/echarts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/world.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.sparkline.min.js"></script> 
