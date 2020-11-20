<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-12">
								<div class="search-meta">
									<span>Your search result for " <i>jack carter</i> " 30</span>
								</div>
							</div>
							
							<div class="col-lg-10">
								<div class="search-tab">
									<ul class="nav nav-tabs tab-btn">
		                                 <li class="nav-item"><a class="active" href="#All" data-toggle="tab">Tous</a></li>
		                                 <li class="nav-item"><a class="" href="#tunimateus" data-toggle="tab">Tunimateurs</a></li>
		                                 <li class="nav-item"><a class="" href="#clubs" data-toggle="tab">Clubs</a></li>
		                                 
		                            </ul>

									<!-- Tab panes -->
									<div class="tab-content">
									  	<div class="tab-pane active show fade" id="All">

											<div class="central-meta item">
												<span class="create-post">Tunimateurs<a title="" href="#">See All</a></span>
												
												<?php foreach ($users as $user ) { ?>
												<div class="pit-friends">
													<figure><a href="#" title=""><img src="images/resources/searching1.jpg" alt=""></a></figure>
													<div class="pit-frnz-meta">
														<a href="#" title=""><?php echo $user->name ?></a>
														<i><?php if ($club->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$club->name ; ?></i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
															</li>
															<li class="remove-frnd">
																<a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<?php } ?>
												
											</div><!-- searched peoples -->
											<div class="central-meta item">
												<span class="create-post">Clubs<a title="" href="#">See All</a></span>
												
												<?php foreach ($clubs as $club ) { ?>
												<div class="pit-groups">
													<figure><a href="#" title=""><img src="images/resources/jackgroup3.jpg" alt=""></a></figure>
													<div class="pit-groups-meta">
														<a href="#" title=""><?php if ($club->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$club->name ; ?></a>
														<i>Group · 4.2K members · 510 posts a day</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-plus"></i> Consulter</a>
															</li>
														</ul>
													</div>
												</div>
												<?php } ?>

											</div><!-- searched groups -->
											<div class="central-meta item">
												<span class="create-post">Pages<a title="" href="#">See All</a></span>

												<?php foreach ($projets as $projet ) { ?>
												<div class="pit-pages">
													<figure><a href="#" title=""><img src="images/resources/jackpage1.jpg" alt=""></a></figure>
													<div class="pit-pages-meta">
														<a href="#" title=""><?php echo $user->titre ?></a>
														<i><?php if ($club->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$club->name ; ?></i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
															<li class="remove-frnd">
																<a title="Follow" href="#"><i class="fa fa-star"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<?php } ?>
												
											</div><!-- searched pages -->
									    </div>


									    <div class="tab-pane fade" id="people">
									    	<div class="central-meta item">
												<span class="create-post">People<a title="" href="#">See All</a></span>
												<div class="pit-friends">
													<figure><a href="#" title=""><img src="images/resources/searching1.jpg" alt=""></a></figure>
													<div class="pit-frnz-meta">
														<a href="#" title="">Jack Carter</a>
														<i>Tornoto</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
															</li>
															<li class="remove-frnd">
																<a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-friends">
													<figure><a href="#" title=""><img src="images/resources/searching2.jpg" alt=""></a></figure>
													<div class="pit-frnz-meta">
														<a href="#" title="">Jack Carter jackson</a>
														<i>Tornoto</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
															</li>
															<li class="remove-frnd">
																<a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-friends">
													<figure><a href="#" title=""><img src="images/resources/searching3.jpg" alt=""></a></figure>
													<div class="pit-frnz-meta">
														<a href="#" title="">Jack jackson</a>
														<i>manitoba</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
															</li>
															<li class="remove-frnd">
																<a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-friends">
													<figure><a href="#" title=""><img src="images/resources/searching4.jpg" alt=""></a></figure>
													<div class="pit-frnz-meta">
														<a href="#" title="">Jack william</a>
														<i>Nova Scotia</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
															</li>
															<li class="remove-frnd">
																<a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</div><!-- searched peoples -->
									    </div>
									    <div class="tab-pane fade" id="photos">
											<div class="central-meta item">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> Post Album</ins>
															<span><i class="fa fa-globe"></i> published: September,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta">		
															<figure>
																<div class="img-bunch">
																	<div class="row">
																		<div class="col-lg-4 col-md-4 col-sm-4">
																			<figure>
																				<a class="strip" href="images/resources/album6.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																				<img src="images/resources/album6.jpg" alt="">
																				</a>
																			</figure>
																		</div>	
																		<div class="col-lg-4 col-md-4 col-sm-4">	
																			<figure>
																				<a class="strip" href="images/resources/album5.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																				<img src="images/resources/album5.jpg" alt="">
																				</a>
																			</figure>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4">
																			<figure>
																				<a class="strip" href="images/resources/album4.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																				<img src="images/resources/album4.jpg" alt="">
																				</a>
																				<div class="more-photos">
																					<span>+15</span>
																				</div>
																			</figure>
																		</div>
																	</div>
																</div>
															</figure>	
														</div>
													</div>

												</div>
											</div>
											<div class="central-meta item">
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly1.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Silly</a> Picture</ins>
															<span><i class="fa fa-globe"></i> published: September,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta">		
															<figure>
																<div class="img-bunch">
																	<div class="row">
																		<div class="col-lg-4 col-md-4 col-sm-4">
																			<figure>
																				<a class="strip" href="images/resources/album6.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																				<img src="images/resources/album6.jpg" alt="">
																				</a>
																			</figure>
																		</div>	
																		<div class="col-lg-4 col-md-4 col-sm-4">	
																			<figure>
																				<a class="strip" href="images/resources/album5.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																				<img src="images/resources/album5.jpg" alt="">
																				</a>
																			</figure>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4">
																			<figure>
																				<a class="strip" href="images/resources/album4.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																				<img src="images/resources/album4.jpg" alt="">
																				</a>
																			</figure>
																		</div>
																	</div>
																</div>	
															</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
									    <div class="tab-pane fade" id="videos">
									    	<div class="central-meta item">
												<span class="create-post">Videos<a title="" href="#">See All</a></span>
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> video</ins>
															<span><i class="fa fa-globe"></i> published: August,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta searched">
															<div class="linked-image align-right">
																<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
																<img src="images/resources/search-1.jpg" alt="">
																<i>
																	<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="30px" width="30px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																  <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
																	C97.3,23.7,75.7,2.3,49.9,2.5"></path>
																  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"></path>
																	</svg>
																</i>
															</a>
															</div>
															<div class="detail">
																<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit...</p>
															</div>		
															
														</div>
													</div>
												</div>
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> video</ins>
															<span><i class="fa fa-globe"></i> published: August,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta searched">
															<div class="linked-image align-right">
																<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
																<img src="images/resources/search-2.jpg" alt="">
																<i>
																	<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="30px" width="30px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																  <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
																	C97.3,23.7,75.7,2.3,49.9,2.5"></path>
																  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"></path>
																	</svg>
																</i>
															</a>
															</div>
															<div class="detail">
																<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit...</p>
															</div>		
															
														</div>
													</div>
												</div>
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> video</ins>
															<span><i class="fa fa-globe"></i> published: August,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta searched">
															<div class="linked-image align-right">
																<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
																<img src="images/resources/search-3.jpg" alt="">
																<i>
																	<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="30px" width="30px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																  <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
																	C97.3,23.7,75.7,2.3,49.9,2.5"></path>
																  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"></path>
																	</svg>
																</i>
															</a>
															</div>
															<div class="detail">
																<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit...</p>
															</div>		
															
														</div>
													</div>
												</div>
											</div><!-- post with video -->
									    </div>
									    <div class="tab-pane fade" id="posts">
									    	<div class="central-meta item">
												<span class="create-post">Posts<a title="" href="#">See All</a></span>
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> Post</ins>
															<span><i class="fa fa-globe"></i> published: September,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta searched">
															<div class="linked-image align-right">
																<a href="#" title=""><img src="images/resources/search-2.jpg" alt=""></a>
															</div>
															<div class="detail">
																<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labor... </p>
															</div>		
															
														</div>
													</div>
												</div>
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> Post</ins>
															<span><i class="fa fa-globe"></i> published: September,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta searched">
															<div class="linked-image align-right">
																<a href="#" title=""><img src="images/resources/search-1.jpg" alt=""></a>
															</div>
															<div class="detail">
																<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labor... </p>
															</div>		
															
														</div>
													</div>
												</div>
												<div class="user-post">
													<div class="friend-info">
														<figure>
															<img src="images/resources/nearly2.jpg" alt="">
														</figure>
														<div class="friend-name">
															<div class="more">
																<div class="more-post-optns"><i class="ti-more-alt"></i>
																	<ul>
																		<li><i class="fa fa-comment"></i>Send Message</li>
																	</ul>
																</div>
															</div>
															<ins><a href="time-line.html" title="">Jack Carter</a> Post</ins>
															<span><i class="fa fa-globe"></i> published: September,15 2020 19:PM </span>
															
														</div>
														<div class="post-meta searched">
															<div class="linked-image align-right">
																<a href="#" title=""><img src="images/resources/search-3.jpg" alt=""></a>
															</div>
															<div class="detail">
																<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labor... </p>
															</div>		
															
														</div>
													</div>
												</div>
											</div><!-- post with image -->
									    </div>
									    <div class="tab-pane fade" id="pages">
									    	<div class="central-meta item">
												<span class="create-post">Pages<a title="" href="#">See All</a></span>
												<div class="pit-pages">
													<figure><a href="#" title=""><img src="images/resources/jackpage1.jpg" alt=""></a></figure>
													<div class="pit-pages-meta">
														<a href="#" title="">Jack Cafe</a>
														<i>Nova Scotia</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
															<li class="remove-frnd">
																<a title="Follow" href="#"><i class="fa fa-star"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-pages">
													<figure><a href="#" title=""><img src="images/resources/jackpage2.jpg" alt=""></a></figure>
													<div class="pit-pages-meta">
														<a href="#" title="">Jack's Cola</a>
														<i>Washington DC</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
															<li class="remove-frnd">
																<a title="Follow" href="#"><i class="fa fa-star"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-pages">
													<figure><a href="#" title=""><img src="images/resources/jackpage3.jpg" alt=""></a></figure>
													<div class="pit-pages-meta">
														<a href="#" title="">Jack's Jim</a>
														<i>USA</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Like" href="#"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
															<li class="remove-frnd">
																<a title="Follow" href="#"><i class="fa fa-star"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</div><!-- searched pages -->
									    </div>
									    <div class="tab-pane fade " id="groups">
									    	<div class="central-meta item">
												<span class="create-post">Groups<a title="" href="#">See All</a></span>
												<div class="pit-groups">
													<figure><a href="#" title=""><img src="images/resources/jackgroup1.jpg" alt=""></a></figure>
													<div class="pit-groups-meta">
														<a href="#" title="">Jack Cooler</a>
														<i>Group · 4.2K members · 510 posts a day</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-plus"></i> Join</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-groups">
													<figure><a href="#" title=""><img src="images/resources/jackgroup2.jpg" alt=""></a></figure>
													<div class="pit-groups-meta">
														<a href="#" title="">Jack Carter</a>
														<i>Group · 4.2K members · 510 posts a day</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-plus"></i> Join</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="pit-groups">
													<figure><a href="#" title=""><img src="images/resources/jackgroup3.jpg" alt=""></a></figure>
													<div class="pit-groups-meta">
														<a href="#" title="">Jack &amp; Jack</a>
														<i>Group · 4.2K members · 510 posts a day</i>
														<ul class="add-remove-frnd">
															<li class="add-tofrndlist">
																<a title="Add friend" href="#"><i class="fa fa-plus"></i> Join</a>
															</li>
														</ul>
													</div>
												</div>
											</div><!-- searched groups -->
									    </div>
									</div>
									<div class="central-meta item">
										<span class="create-post">Related Searches</span>
										<ul class="related-searches">
											<li><a href="#" title="">jack carter jr.</a></li>
											<li><a href="#" title="">jack carter Pool</a></li>
											<li><a href="#" title="">jack carter fdny </a></li>
											<li><a href="#" title="">jack carter chevrolet cadillac </a></li>
											<li><a href="#" title="">jack jack </a></li>
										</ul>
									</div><!-- Related Searches -->
								</div>	
							</div>
							<div class="col-lg-2">
								<aside class="sidebar">
									<div class="wiki-box">
										<h4>
											<img src="images/wiki.png" alt="">
											Content from the Wikipedia article <a href="https://en.wikipedia.org/wiki/Jack_Carter_(politician)" title="" target="_blank">Jack Carter</a> 
										</h4>
										<p>
											John William Carter is an American businessman and politician who unsuccessfully ran for the United States Senate in Nevada in 2006.
											<span>Born:</span> July 3, 1947 (age 72) <span>Education:</span> Emory University, Georgia Institute of Technology, Georgia Southwestern State University
											<a class="underline" href="https://en.wikipedia.org/wiki/Jack_Carter_(politician)" target="_blank" title="">Read More</a>
										</p>
										<div class="helpful">
											<span>Was this information helpful?</span>
											<ul class="add-remove-frnd">
												<li class="add-tofrndlist">
													<a href="#" title="Add friend"><i class="fa fa-thumbs-up"></i></a>
												</li>
												<li class="remove-frnd">
													<a href="#" title="Send Message"><i class="fa fa-thumbs-down"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="advertisment-box stick-widget" style="">
										<h4 class="">advertisment</h4>
										<figure><a href="#" title=""><img src="images/ad-baner.jpg" alt=""></a></figure>
									</div>
								</aside>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>