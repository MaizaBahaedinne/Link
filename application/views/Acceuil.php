<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">

<div class="col-lg-12">
<div class="row merged20" id="page-contents">


              <!-- sidebar -->
              <div class="col-lg-3">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Authentifier vous via facebook</h4>
                    <div class="your-page">

                    <fb:login-button 
                      scope="public_profile,email"
                      onlogin="checkLoginState();">
                    </fb:login-button>
                    </div>
                  </div>
                  <div class="widget">
                     <h4 class="widget-title">Groupe Facebook</h4>
                    <div class="your-page">
                   
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0&appId=2993377220885022&autoLogAppEvents=1" nonce="Jp5mUCF2"></script>
                    <div class="fb-group" data-href="https://www.facebook.com/groups/1325115014502168"  data-show-social-context="true" data-show-metadata="true"><blockquote cite="https://www.facebook.com/groups/1325115014502168" class="fb-xfbml-parse-ignore">Tunivisions Family</blockquote></div>
                    <br>
                    <br>
                  </div>
                  </div> 
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
                             <a  data-toggle="modal" data-target="#TuniFan">
                                <i class="fa fa-user-plus"></i>Inviter
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
                    <h4 class="widget-title">Ma calendarier</h4>
                    
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
                                    data-link="<?php echo base_url() ?>task/tasksListing/<?php echo  $tache->projectId ?>" 
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
                                    data-link="<?php echo base_url() ?>Project/projectDetails/<?php echo  $Projet->projectId ?>" 
                                    data-title="<?php echo  $Projet->type ?> : <?php echo  $Projet->titre ?>">
                                      
                                    </div>
                                
                                  <?php }?>

                                </div>
                              </div>
                  </div><!-- calendar -->
                 
                  
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
                      
                        <textarea rows="4" name="postText" placeholder="Partagez ce que vous pensez?" maxlength="265" required></textarea>
                      
                    </div>
                    <div class="attachments">
                      <ul>
                        <li>
                          <span class="add-loc">
                            <i class="fa fa-map-marker"></i>
                          </span>
                        </li>

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
                      <input type="file" name="fileT"   class="dropify-fr"                                     data-max-file-size="200K"                                      
                      id="input-file-events"
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
                          <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $post->avatar ?>" class="alligator-profile-header" alt="">
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
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>

                          </figure>     
                          <?php } ?>                  
                          <div class="description">
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
                                <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $post->avatar ?>" class="alligator-profile" alt="">
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

                                  <input  class="btn  " type="submit" value="" ></input>
                                  
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


                   <div class="widget stick-widget" style="">
                    <h4 class="widget-title">Actualité <a title="" href="#" class="see-all">Lire plus</a></h4>
                    <ul class="recent-links">
                      <!--
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
                      -->
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