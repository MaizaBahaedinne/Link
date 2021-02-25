<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">

<div class="col-lg-12">
<div class="row merged20" id="page-contents">
                  
                  

               
              <!-- sidebar -->
              <div class="col-lg-3">
                <aside class="sidebar static right">
                 

                  <div class="advertisment-box">
                              <h4 class="">publicité</h4>
                              <figure>
                                 
                                 <a  title="Advertisment" >
                                  <img src="<?php echo base_url() ;?>/assets/images/resources/phoenix2021.jpeg" 
                                   href="https://tunivisions.link/Project/projectDetails/2500" title="Advertisment"  > ></a>
                              </figure>
                  </div>
                   


                   <div class="widget">
                    <h4 class="widget-title">Ma calendarier</h4>
                    <div class="full-calendar">
                      <div id="yourId" class="jalendar mid">
                        <?php foreach ($taches as $tache ) { 
                          $date= date_create($tache->deadline); 
                          $dateF =date_format($date,'d-m-Y');
                          $timeF =date_format($date,'H:i'); 
                           ?> 
                          <div 
                            class="added-event"
                            data-type="task"
                            data-date="<?php echo  $dateF ?>" 
                            data-time="<?php echo  $timeF ?>"
                            data-link="<?php echo base_url() ?>task/tasksListing/<?php echo  $tache->projectId ?>" 
                            data-title="Tache : <?php echo  $tache->titre ?>"
                              >
                            
                          </div>
                      
                        <?php }?>

                        <?php foreach ($Projets as $Projet ) { 

                          $date= date_create($Projet->startDate); 
                          $dateF =date_format($date,'d-m-Y');   
                          $timeF =date_format($date,'H:i');   
                           ?> 

                          <div class="added-event"
                          data-type="event"
                          data-date="<?php echo  $dateF ?>" 
                          data-time="<?php echo  $timeF ?>"
                          data-link="<?php echo base_url() ?>Project/projectDetails/<?php echo  $Projet->projectId ?>" 
                          data-title="<?php echo  $Projet->type ?> : <?php echo  $Projet->titre ?>">
                            
                          </div>
                      
                        <?php }?>

                      </div>
                    </div>
                  </div><!-- calendar -->
                  
                  <div class="advertisment-box">
                        <h4 class="">publicité</h4>
                        <figure>
                           
                           <a  title="Advertisment" data-toggle="modal" data-target="#AlumniGO" ><img src="<?php echo base_url() ;?>/assets/images/resources/anigif.gif"  ></a>
                        </figure>
                  </div>
                  
                 
                 
                  
                  <!-- recent links -->

                </aside>
              </div><!-- sidebar -->
              <div class="col-lg-6">
                <div class="central-meta postbox">
                  <span class="create-post">Créer un post</span>
                  <form method="post" action="<?php echo base_url() ?>Posts/addNewP" enctype="multipart/form-data" >
                  <div class="new-postbox">
                    <figure>
                      <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>"  class="alligator-profile-header" alt="">
                    </figure>
                    <div class="newpst-input">
                      
                        <textarea rows="2" name="postText" placeholder="Partagez ce que vous pensez?"  required></textarea>
                      
                    </div>
                    <div class="attachments">
                      <ul>
                        <!--
                        <li>
                          <span class="add-loc">
                            <i class="fa fa-map-marker"></i>
                          </span>
                        </li>
                        -->
                        <li  >
                          <a id="imageclick" >
                            <i class="fa fa-image"></i>
                          </a>
                          <script type="text/javascript">


                                  $("#imageclick").click(function test(argument) {
            
                                      $("#FileDown").toggle();
                                      
                                 
                                     
                                  })
                          </script>
                        </li>

                        <li class="preview-btn">
                          
                        </li>
                      </ul>
                      <div style="display: none" id="FileDown" >
                        <br>
                      <input type="file" 
                              name="fileT"   
                              class="dropify-fr"  
                              data-max-file-size="500K"                                      
                              
                       >

                    </div>
                      <input class="post-btn" type="submit" data-ripple="" value="Post" >
                    </div>
                    <div class="add-location-post">
                      <span>Faites glisser le point de la carte vers la zone sélectionnée</span>
                      <div class="row">

                          <div class="col-lg-6">
                              <label class="control-label">Lat :</label>
                              <input type="text" class="" id="us3-lat">
                          </div>
                          <div class="col-lg-6">
                              <label>Long :</label>
                              <input type="text" class="" id="us3-lon">
                          </div>
                      </div>
                        <!-- map -->
                        <div id="us3" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="overflow: hidden;"></div><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -244, -53);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -244, -53);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div title="Drag Me" style="width: 43px; height: 59px; overflow: hidden; position: absolute; opacity: 0.0001; cursor: pointer; touch-action: none; left: -22px; top: -51px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 43px; height: 59px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Impossible de charger Google&nbsp;Maps correctement sur cette page.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Ce site Web vous appartient&nbsp;?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
                    </div>


                  </div>  
                </form>
                </div><!-- add post new box -->
                <!--
                <div class="advertisment-box">
                              <h4 class="">publicité</h4>
                              <figure>
                                 <a href="<?php echo base_url() ?>Project/projectDetails/1269" ><img src="<?php echo base_url() ;?>/uploads/projet/Projet_TUM 2020_TUM2020.jpg"  ></a>
                              </figure>
                  </div>
                -->
                <!-- top stories -->
                <div class="loadMore">
                  <!-- album post -->
                  <!-- digital sponsors -->
                  <!-- love post -->
                  <!-- without image -->
                  <!-- map location post -->
                  <!--
                  <div class="central-meta item" style="display: inline-block;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-1/p200x200/131101472_102744248384664_1283307394407895766_o.jpg?_nc_cat=100&ccb=2&_nc_sid=7206a8&_nc_ohc=DLXURn6w-GkAX-pQj02&_nc_ht=scontent.ftun3-1.fna&tp=6&oh=54e63ffb55bd0dd1398e7907f8175142&oe=5FFBB02E" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title="">MrGo Tunivisions</a></ins>
                          <span>Alert <i class="fa fa-globe"></i></span>
                          
                        </div>
                        <div class="post-meta">
                          <figure>
                            <img src="https://127.0.0.1/Link3/uploads/post/Post___paiement%20correction.jpg" alt="">
                            <ul class="like-dislike">
                             
                            </ul>
                          </figure> 
                          <div class="description">
                            <a href="#" class="learnmore" data-ripple="">Learn More</a>
                            <p>
                              Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc.

                            </p>
                          </div>
                          <div class="we-video-info">
                            
                        
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
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

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                    -->

                    <div class="advertisment-box">
                              <h4 class="">publicité</h4>
                              <figure>
                                 
                                 <a  href="https://tunivisions.link/Project/projectDetails/2499" title="Advertisment"  ><img src="https://tunivisions.link/uploads/projet/xProjet_TUM,P202021_154466687_435636880995820_2271702379345649587_n_1_.jpeg.pagespeed.ic.aFo9CGvsb9.webp"  ></a>
                              </figure>
                  </div>
                  <?php foreach ($postRecords as $post ) { ?>
                                  
                  <div class="central-meta item" style="display: inline-block;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $post->avatar ?>" class="alligator-profile-header" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <?php if ($uid == $post->userId || $SA == 1  ) { ?>
                                <li><i class="fa fa-pencil-square-o"></i>Modifier le message</li>
                                <li><a href="<?php echo base_url() ?>Posts/deletePost/<?php echo $post->postId ?>"><i class="fa fa-trash"></i>Supprimer le message</a></li>
                                <?php } ?>
                              </ul>
                            </div>
                          </div>
                          <ins>
                            <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $post->userId  ?>" >
                            <?php echo $post->name ?></a> a publié 
                            <a href="<?php echo base_url() ?>Posts/post//<?php echo $post->postId ?>" title="">
                            une publication
                          </a>
                          </ins>
                          <span><i class="fa fa-globe"></i> il y a <?php echo xTimeAgo ($post->DatePosted, date('Y-m-d H:i:s') )  ?> </span>
                        </div>
                        <div class="post-meta">
                          <?php if ($post->photo != 'Post___' ){ ?>
                          <figure>
                            <a href="<?php echo base_url() ?>uploads/post/<?php echo $post->photo ?>" title="" data-strip-group="mygroup" class="strip vdeo-link" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
                            <img src="<?php echo base_url() ?>uploads/post/<?php echo $post->photo ?>" alt="">
                              
                              <h2><!-- Titre  --></h2>
                            </a>
                            <!--
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>
                              -->
                          </figure>     
                          <?php } ?>                  
                          <div class="description" >
                            <p id="Cpntent<?php $post->postId ?>" >
                             <?php echo $post->Content ?>
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
                                <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>" class="alligator-profile-likes" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post" action="<?php echo base_url() ?>Posts/addNewComment/<?php echo $post->postId ?>">
                                  <textarea name="comment"  placeholder="Commentaire .."></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file" name="fileC">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="icon"></span>
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

                                  <input  class="btn  " type="submit" value="" ><i class="fa fa-paper-plane" aria-hidden="true"></i></input>
                                  
                                </div>
                                  
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php }?>

                </div>
             </div><!-- centerl meta -->
             <div class="col-lg-3">
                <aside class="sidebar static right">


                  <div class="widget">
                    <h4 class="widget-title">Mon Club</h4> 
                    <div class="your-page">
                      <figure>
                        <a href="#" title><img alt="author" src="<?php echo base_url()?>assets/images/resources/profile.png"></a>
                      </figure>
                      <div class="page-meta">
                        <a href="#" title="" class="underline"><?php if ($clubInfo->clubID > 5 ) {echo "club Tunivisions ";}  echo $clubInfo->name ; ?></a>
                        
                      </div>
                      <?php if (($role == 1 ||  $role == 3 ||  $role == 6 ||  $role == 7  )|| $SA== 1 ) { ?>
                      <ul class="page-publishes">
                        <li>
                          <span> <a href="<?php echo base_url()?>Club/clubInfo/<?php echo $clubInfo->clubID ?>">  <i class="fas fa-door-open"></i></i>Visiter</a></span>
                        </li>
                        <li>
                          <span> <a href="<?php echo base_url()?>Club/clubInfo/<?php echo $clubInfo->clubID ?>"> <i class="fas fa-project-diagram"></i> </i>Projets</a></span>
                        </li>
                        <li>
                          <span> 
                             <a  data-toggle="modal" data-target="#TuniFan">
                                <i class="fa fa-user-plus"></i>Inviter
                            </a>
                          </span>
                        </li>
                        <li>
                          <span> <a href="<?php echo base_url()?>Club/myTeam">  <i class="fa fa-users"></i>Equipes</a></span>
                        </li>
                      </ul>
                      <?php } ?>
                      <div class="page-likes">
                        <ul class="nav nav-tabs likes-btn">
                          <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">Membres</a></li>
                           <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">Projets</a></li>
                        </ul>
                        
                        <div class="tab-content">
                          <div class="tab-pane active fade show" id="link1">
                          <span><i class="ti-heart"></i><?php echo count($members)?></span>
                           <!-- <a href="#" title="weekly-likes">35 new likes this week</a> -->
                            <div class="users-thumb-list">
                            
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">  
                            </a>
                            
                            </div>
                          </div>
                          <div class="tab-pane fade" id="link2">
                            <span><i class="fa fa-eye"></i><?php echo count($Projets)?></span>
                           <!--
                            <a href="#" title="weekly-likes">440 new views this week</a>
                          -->
                            <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">  
                            </a>
                            </div>
                          </div>  
                        </div>
                      </div>
                    </div>
                  </div><!-- page like widget -->
                   <div class="widget stick-widget" style="">
                    <h4 class="widget-title">Actualités <a title="" href="#" class="see-all">Lire plus</a></h4>
                    <ul class="recent-links">
                      <?php foreach ($ActuRecords as $ac ) {?>
                      <li>
                        <figure><img src="<?php echo base_url() ?>uploads/Actu/<?php echo $ac->image ?>" alt=""></figure>
                        <div class="re-links-meta">
                          <h6><a href="#" title=""><?php echo $ac->titre ?></a></h6>
                          <span> il y a <?php echo xTimeAgo ($ac->createdDate , date('Y-m-d H:i:s') )  ?> </span>
                        </div>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </aside>
             </div>
              
            </div>

          </div>


  
        </div>
      </div>
    </div>  
  </section>


<script>
            $(document).ready(function(){
                
              // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });



                


            });
        </script>