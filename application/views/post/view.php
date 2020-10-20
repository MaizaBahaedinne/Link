<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">

<div class="col-lg-12">
<div class="row merged20" id="page-contents">
              <!-- sidebar -->
              <div class="col-lg-8">
                
                <!-- top stories -->
                <div class="loadMore">
                  <!-- album post -->
                  <!-- digital sponsors -->
                  <!-- love post -->
                  <!-- without image -->
                  <!-- map location post -->

                  <?php foreach ($postRecords as $post ) { ?>
                                  
                  <div class="central-meta item" style="display: inline-block;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $post->avatar ?>" class="alligator-profile" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Modifier le message</li>
                                <li><i class="fa fa-trash-o"></i>Supprimer le message</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title=""><?php echo $post->name ?></a> a publié <a href="#" title="">une publication</a></ins>
                          <span><i class="fa fa-globe"></i> il y a <?php echo xTimeAgo ($post->DatePosted, date('Y-m-d H:i:s') )  ?> </span>
                        </div>
                        <div class="post-meta">
                          <?php if ($post->photo != 'Post___' ){ ?>
                          <figure>
                            <a href="<?php echo base_url() ?>uploads/post/<?php echo $post->photo ?>" title="" data-strip-group="mygroup" class="strip vdeo-link" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
                            <img src="<?php echo base_url() ?>uploads/post/<?php echo $post->photo ?>" alt="">
                              
                              <h2><!-- Titre  --></h2>
                            </a>
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>

                          </figure>     
                          <?php } ?>                  
                          <div class="description">
                            <p id="Cpntent<?php $post->postId ?>" >
                              <?php  
                              
                             
                              $string = strip_tags($post->Content);
                              if (strlen($string) > 500) {

                                  // truncate string
                                  $stringCut = substr($string, 0, 500);
                                  $endPoint = strrpos($stringCut, ' ');

                                  //if the string doesn't contain any space then it will cut without word basis.
                                  $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                  $string .= '... <a href="/this/story">Afficher la suite</a>';
                              }
                              echo $string;
                              ?>
                            </p>
                          </div>
                          <div class="we-video-info">
                            <ul>
                              
                              <li>
                                <div class="likes heart <?php if(count($post->likeCheck) > 0 ){echo "happy" ;} ?>" id="<?php echo $post->postId ?>" title="Like/Dislike">❤ <span><?php echo count($post->likeRecords) ?></span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins><?php echo count($post->commentsRecords) ?></ins>
                                </span>
                              </li>

                              
                            </ul>
                            <div class="users-thumb-list">
                              <?php $i=1 ; foreach ($post->likeRecords  as $like ) { $i++ ;
                              if ($i>6)
                                        {
                                        break;
                                        }
                                ?>
                              <a data-toggle="tooltip" title="<?php echo $like->name ?>" href="#" data-original-title="<?php echo $like->name ?>">
                                <img alt=""  class="alligator-profile-likes" src="<?php echo base_url() ?>uploads/avatar/<?php echo $like->avatar ?>">  
                              </a>
                              <?php  } ?>

                              <?php $i=1 ; foreach ($post->likeRecords  as $like ) { $i++ ;
                              if ($i>3)
                                        {
                                        break;
                                        }
                                ?>
                              <span> <b><?php echo $like->name ?> </b> 
                              <?php  } ?> et <a href="#" title=""> +<?php  echo  count($post->likeRecords) ?> </a> j'aimes</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">

                            <?php foreach ($post->commentsRecords as $comment ) { ?>
                            <li>
                              <div class="comet-avatar">
                                <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $comment->avatar ?>" class="alligator-profile-likes" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title=""><?php echo $comment->name ?></a></h5>
                                <p><?php echo $comment->content ?>
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>  il y a <?php echo xTimeAgo ($comment->createdDTM,  date('Y-m-d H:i:s') )  ?> </span>
                                  <!--
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                  -->
                                </div>
                              </div>
                            </li>
                            <?php } ?>

                            
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $post->avatar ?>" class="alligator-profile" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post" action="<?php echo base_url() ?>Posts/addNewComment/<?php echo $post->postId ?>">
                                  <textarea  placeholder="Commentaire .."></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file" name="fileC">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>
                                  <div class="text-right">
                                  <input  class="btn btn-primary " type="submit">
                                  </div>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php $user = $post ; }?>

                </div>
             </div><!-- centerl meta -->


             <div class="col-lg-4">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Mon Club</h4> 
                    <div class="your-page">
                      <figure>
                        <a href="#" title><img alt="author" src="<?php echo base_url()?>assets/images/resources/profile.png"></a>
                      </figure>
                      <div class="page-meta">
                        <a href="#" title="" class="underline"><?php if ($clubInfo->clubID > 5 ) {echo "club Tunivisions ";}  echo $clubInfo->name ; ?></a>
                        <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
                        <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                      </div>
                      <ul class="page-publishes">
                        <li>
                          <span> <a href="<?php echo base_url()?>Club/clubInfo/<?php echo $clubInfo->clubID ?>">  <i class="ti-pencil-alt"></i>Projets</a></span>
                        </li>
                        <li>
                          <span> 
                             <a href="<?php echo base_url()?>Club/clubInfo/<?php echo $clubInfo->clubID ?>">
                                <i class="fa fa-user-plus"></i>Invite
                            </a>
                          </span>
                        </li>
                      </ul>



                      <!--
                      <div class="page-likes">
                        <ul class="nav nav-tabs likes-btn">
                          <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
                           <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
                        </ul>
                        
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

                      </div>-->
                    </div>
                  </div><!-- page like widget -->
                  <!-- explore events -->
                  <div class="widget">
                    <h4 class="widget-title">Calendar</h4>
                    
                    <div class="full-calendar">
                                <div id="yourId" class="jalendar mid">
                                  <?php foreach ($taches as $tache ) { 

                                    $date= date_create($tache->deadline); 
                                    $dateF =date_format($date,'d-m-Y');
                                    $timeF =date_format($date,'H:i'); 
                                     ?> 

                                    <div class="added-event"
                                    data-date="<?php echo  $dateF ?>" 
                                    data-time="<?php echo  $timeF ?>"
                                    data-link="" 
                                    data-title="Tache : <?php echo  $tache->titre ?>">
                                      
                                    </div>
                                
                                  <?php }?>

                                  <?php foreach ($Projets as $Projet ) { 

                                    $date= date_create($Projet->startDate); 
                                    $dateF =date_format($date,'d-m-Y');   
                                    $timeF =date_format($date,'H:i');   
                                     ?> 

                                    <div class="added-event"
                                    data-date="<?php echo  $dateF ?>" 
                                    data-time="<?php echo  $timeF ?>"
                                    data-link="" 
                                    data-title="<?php echo  $Projet->type ?> : <?php echo  $Projet->titre ?>">
                                      
                                    </div>
                                
                                  <?php }?>

                                </div>
                              </div>
                  </div><!-- calendar -->
                  <!--
                  <div class="widget stick-widget" style="">
                    <h4 class="widget-title">Recent Links <a title="" href="#" class="see-all">See All</a></h4>
                    <ul class="recent-links">
                      <li>
                        <figure><img src="images/resources/recentlink-1.jpg" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title="">moira's fade reaches much farther than you think.</a></h6>
                          <span>2 weeks ago </span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="images/resources/recentlink-2.jpg" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title="">daniel asks if we want him to do the voice of doomfist</a></h6>
                          <span>3 months ago </span>
                        </div>
                      </li>
                      <li>
                        <figure><img src="images/resources/recentlink-3.jpg" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title="">the pitnik overwatch scandals.</a></h6>
                          <span>1 day before</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  -->
                  <!-- recent links -->

                </aside>
              </div><!-- sidebar -->

           
            </div>

          </div>


  
        </div>
      </div>
    </div>  
  </section>