<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="user-profile">
                                <figure>
                                   <img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" class="alligator-projects-banner" alt="">                                 
                                    <ul class="profile-controls">
                                        <li><a href="#" title="" data-toggle="tooltip" data-original-title="Like"><i class="fa fa-thumbs-up"></i></a></li>
                                        <li><a href="#" title="" data-toggle="tooltip" data-original-title="Follow"><i class="fa fa-star"></i></a></li>
                                        <li><a class="send-mesg" href="#" title="" data-toggle="tooltip" data-original-title="Send Message"><i class="fa fa-comment"></i></a></li>
                                        <li>
                                            <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                                                <ul class="more-dropdown">
                                                    <li><a href="setting.html" title="">Update Profile Photo</a></li>
                                                    <li><a href="setting.html" title="">Update Header Photo</a></li>
                                                    <li><a href="setting.html" title="">Account Settings</a></li>
                                                    <li><a href="support-and-help.html" title="">Find Support</a></li>
                                                    <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                                                    <li><a href="#" title="">Block Profile</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </figure>
                                <div class="profile-section">
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                             <h4><?php echo $projet->type ?> : <?php echo $projet->titre ?></h4>
                                        </div>
                                        <div class="col-lg-5">
                                            <ul class="align-right user-ben">
                                            <li class="search-for">
                                                <a href="#" title="" class="circle-btn search-data" data-ripple=""><i class="ti-search"></i></a>
                                                <form method="post" class="searchees">
                                                    <span class="cancel-search"><i class="ti-close"></i></span>
                                                    <input type="text" placeholder="Search in Posts">
                                                    <button type="submit"></button>
                                                </form>
                                            </li>
                                            <li class="more">
                                                <a href="#" title="" class="circle-btn" data-ripple=""><i class="fa fa-ellipsis-h"></i>
                                                </a>
                                                <ul class="more-dropdown">
                                                    <li>
                                                        <a href="#">Statics</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Events</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Report Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Block Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" title="Folow us" class="circle-btn" data-ripple=""><i class="fa fa-star"></i></a>
                                            </li>
                                            <li><a href="#" title="" class="main-btn create-pst" data-ripple="">Add New Post</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                    <br>
                                </div>  
                            </div><!-- user profile banner  -->
                            
                        
                            <div class="col-lg-9">
                                <div class="central-meta">
                                    <span class="create-post">Description <a href="#" title=""></a></span>
                                    <?php echo $projet->description ?> 
                                </div><!-- suggested friends -->
                                
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static right">
                                    <div class="widget">
                                        <h4 class="widget-title">Your page</h4> 
                                        <div class="your-page">
                                            <figure>
                                                <a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a href="#" title="" class="underline">My Creative Page</a>
                                                <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em class="bg-blue">9</em></a></span>
                                                <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em class="bg-purple">2</em></a></span>
                                            </div>
                                            <ul class="page-publishes">
                                                <li>
                                                    <span><i class="ti-pencil-alt"></i>Publish</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti-camera"></i>Photo</span>
                                                </li>
                                                <li>
                                                    <span><i class="ti-video-camera"></i>Live</span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-user-plus"></i>Invite</span>
                                                </li>
                                            </ul>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
                                                     <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                  <div class="tab-pane active fade show" id="link1">
                                                    <span><i class="ti-heart"></i>884</span>
                                                      <a href="#" title="weekly-likes">35 new likes this week</a>
                                                      <div class="users-thumb-list">
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                                                            <img src="images/resources/userlist-1.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                                                            <img src="images/resources/userlist-2.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                                                            <img src="images/resources/userlist-3.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                                                            <img src="images/resources/userlist-4.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                                                            <img src="images/resources/userlist-5.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                                                            <img src="images/resources/userlist-6.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                                                            <img src="images/resources/userlist-7.jpg" alt="">  
                                                        </a>  
                                                      </div>
                                                  </div>
                                                  <div class="tab-pane fade" id="link2">
                                                      <span><i class="fa fa-eye"></i>440</span>
                                                      <a href="#" title="weekly-likes">440 new views this week</a>
                                                      <div class="users-thumb-list">
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                                                            <img src="images/resources/userlist-1.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                                                            <img src="images/resources/userlist-2.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                                                            <img src="images/resources/userlist-3.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                                                            <img src="images/resources/userlist-4.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                                                            <img src="images/resources/userlist-5.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                                                            <img src="images/resources/userlist-6.jpg" alt="">  
                                                        </a>
                                                        <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                                                            <img src="images/resources/userlist-7.jpg" alt="">  
                                                        </a>  
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- page like widget -->
                                   
                               
                                  
                                   
                                </aside>
                            </div><!-- sidebar -->
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>