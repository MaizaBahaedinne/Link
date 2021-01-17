
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>


<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
              <div class="user-profile">
                
                <figure>
                <!--
                  <div class="edit-pp">
                    <label class="fileContainer">
                      <i class="fa fa-camera"></i>
                      <input type="file">
                    </label>
                  </div>
                -->
                  <img src="<?php echo base_url()?>assets/images/resources/couverture.jpg" alt=""> 
                  <!--                 
                  <ul class="profile-controls">
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Like"><i class="fa fa-thumbs-up"></i></a></li>
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Follow"><i class="fa fa-star"></i></a></li>
                    <li><a class="send-mesg" href="#" title="" data-toggle="tooltip" data-original-title="Send Message"><i class="fa fa-comment"></i></a></li>
                    <li>
                      <div class="edit-seting" title="" data-toggle="tooltip" data-original-title="Edit Profile image"><i class="fa fa-sliders"></i>
                        <ul class="more-dropdown">
                          <li>
                            <a href="#" title="">Share this Page</a>
                          </li>
                          <li>
                            <a href="#" title="">Update Profile Photo</a>
                          </li>
                          <li>
                            <a href="#">Update Header Photo</a>
                          </li>
                          <li>
                            <a href="setting.html" title="" data-toggle="tooltip" data-original-title="">Account Settings</a>
                          </li>
                          <li>
                            <a href="timeline-friends.html" title="">Invite Friends</a>
                          </li>
                          <li>
                            <a href="support-and-help.html" title="">Find support</a>
                          </li>
                          <li>
                            <a href="setting.html" title="">Block Page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  -->
                  <!--
                  <ol class="pit-rate">
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class=""><i class="fa fa-star"></i></li>
                    <li><span>4.7/5</span></li>
                  </ol>
                -->
                </figure>
                
                <div class="profile-section">

                  <div class="row">
                    <div class="col-lg-2">
                      <div class="profile-author">
                        <a class="profile-author-thumb" href="about.html">
                          <img alt="author" src="<?php echo base_url()?>assets/images/resources/profile.png">
                          <div class="edit-dp">
                            <label class="fileContainer">
                              <i class="fa fa-camera"></i>
                              <input type="file">
                            </label>
                          </div>
                        </a>
                        <div class="author-content">
                          <a class="h4 author-name" href="#"><?php echo $clubInfo->name ?></a>
                          <div class="country"><?php echo $clubInfo->city ?></div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-7">

                      <ul class="nav nav-tabs  nav-tabs--left" >
                        <li class="nav-item">
                          <a href="#ProjetBlock" class="nav-link active" data-toggle="tab" ><i class="fas fa-project-diagram"></i> Projets</a>
                        </li>
                        <li class="nav-item">
                          <a href="#membresBlock" class="nav-link" data-toggle="tab" ><i class="fa fa-users"></i> Membres</a>
                        </li>
                        <li class="nav-item">
                          <a href="#membresClassment" class="nav-link" data-toggle="tab" ><i class="fas fa-flag-checkered"></i> Classement</a>
                        </li>

                      </ul>

                    </div>
                    <div class="col-md-3">
                      <ol class="folw-detail">
                        <li><span>Projets</span><ins><?php echo count($projectRecords) ?></ins></li>
                        <li><span>Membres</span><ins><?php echo count($members) ?></ins></li>
                        <li><span>Points</span><ins><?php echo $score->points ?></ins></li>
                      </ol>
                    </div>

                  </div>
                </div>  
              </div><!-- user profile banner  -->



             <!-- sidebar -->
              <div class="col-lg-12 tab-content" >
                <div class="tab-pane fade show active"  id="ProjetBlock" >

                
                    <div class="row">
                      <div class="col-lg-4">
                          <aside class="sidebar static right">
                            <div class="widget">
                              <h4 class="widget-title">Mon club</h4>
                              <ul class="fav-community">
                                <li><i class="fas fa-birthday-cake"></i> <?php echo $clubInfo->birthday ?> </li>
                                <?php if ($role == 1 || $role == 3  || $role == 6 ){ ?>
                                <li><i class="fas fa-user-plus"></i><a data-toggle="modal" data-target="#TuniFan" >invitez vos amis</a> pour rejoindre le club</li>
                                <?php } ?>
                                <li><i class="fas fa-users"></i><?php echo count($members) ?> Membre actif</li>
                                
                                <li><i class="fab fa-facebook-square"></i><a href="<?php echo $clubInfo->email ?>" title="">club Tunivisions <?php echo $clubInfo->name ?></a></li>
                                <li><i class="fas fa-at"></i><?php echo $clubInfo->facebook ?></li>
                                
                              </ul>
                            </div>
                          </aside>
                        </div><!-- sidebar -->
                      <div class="col-lg-8">
                      <?php foreach ($projectRecords as $projet ) { ?>
                       <div class="central-meta">
                            <div class="row">
                        <div class="col-lg-12">
                            <div class="event-box">
                                <div class="row merged20">
                                    <div class="col-lg-12 col-md-4 col-sm-5">
                                        <img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" class="alligator-projects " alt=""> 
                                    </div>
                                    <div class="col-lg-9 col-md-6 col-sm-5">
                                        <div class="event-title">
                                            <span class="ba"><?php echo $projet->type ?></span>
                                            <h4><a href="<?php echo base_url() ?>Project/projectDetails/<?php echo $projet->projectId ?>" title=""><?php echo $projet->titre ?></a></h4>
                                            <label class="text-mute" >by <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $projet->ClubID  ?>"> <?php if ($projet->ClubID > 5 ) {echo "club ";}  echo "Tunivisions ".$projet->ClubName; ?></a></label>
                                            <span>de <i class="fa fa-clock-o" style="color: green"></i> <?php echo $projet->startDate ?></span>
                                            <span>à <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $projet->endDate ?></span>
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $projet->local ?></span>
                                            <span><i class="fa fa-money" aria-hidden="true"></i> <?php echo $projet->prix ?> DT</span>
                                            <hr>
                                                <a title="" href="<?php echo $projet->eventFB ?>" ><i class="fa fa-facebook"></i>  Evenement Facebook</a>     
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-2">
                                        <div class="event-time">
                                           <span class="">
                                             
                                            <?php if (empty($projet->score )){  ?>
                                              <?php if( (($role == 1 || $role == 2  || $role == 3  || $SA == 1 || $role == 2  ) && $projet->ClubID == $clubID ) || $SA == 1  ){
                                               if( strtotime('+24 hours',strtotime($projet->endDate))  < strtotime("now")  && strtotime('+24 hours',strtotime($projet->endDate)) >  strtotime("15-09-2020")  ) { ?>
                                                  <a class="btn main-btn" data-toggle="modal" data-target="#ProjectScore<?php echo $projet->projectId ?>" >Collecter les points</a>
                                              <?php } } ?>

                                               <div class="modal fade" id="ProjectScore<?php echo $projet->projectId ?>">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                          <!-- Modal Header -->
                                                          <div class="modal-header">
                                                            <h6 class="modal-title">Rapport du projet : <?php echo $projet->titre ?> </h6>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>

                                                          <!-- Modal body -->
                                                          <div class="modal-body">

                                                          
                                                            <form class="c-form" action="<?php echo base_url() ?>Project/addNewScore1/<?php echo $projet->projectId ?>" method="POST" >
                                                            

                                                            <div class="uzer-nam">
                                                            <label><br>Album photos </label>
                                                            <small>https://www.facebook.com/ClubtunivisionsX/photos/</small>
                                                              <input type="text" 
                                                             name="album" width="100%" id="album" pattern="(\w)?(\.)?(\d.*)" required placeholder="a.5619848191981" >

                                                           </div>
                                                           


                                                        
                                                        
                                                           <div class="uzer-nam">
                                                            <label><br>Video after movie </label>
                                                            <small>https://www.facebook.com/ClubTunivisionsX/videos/</small>
                                                              <input type="text" 
                                                             name="video" width="100%" id="video"  pattern="\d.*"  placeholder="5619848191981" >
                                                           </div>
                                                           
                                                            <br><br>
                                                            <b>Objectif du projet</b>
                                                            <a href="https://www.undp.org/content/undp/fr/home/sustainable-development-goals.html" target="_blank">
                                                              <img src="https://www.undp.org/content/dam/undp/sdg/sdg-header-fr.png" width="20%"  >
                                                            </a>
                                                            <select name="objectif" required>
                                                              <option value="Autre">
                                                                Autre
                                                              </option>
                                                              <option value="Pas de pauvreté" >
                                                                Pas de pauvreté
                                                              </option>
                                                              <option value="Zéro faim">
                                                                Zéro faim
                                                              </option>
                                                              <option value="Bonne santé et bien-être">
                                                                Bonne santé et bien-être
                                                              </option>
                                                              <option value="Éducation de qualité">
                                                                Éducation de qualité
                                                              </option>
                                                              <option value="Égalité des sexes">
                                                                Égalité des sexes
                                                              </option>
                                                              <option value="Eau propre et assainissement">
                                                               Eau propre et assainissement
                                                              </option>
                                                              <option value="Énergie propre et abordable">
                                                                Énergie propre et abordable
                                                              </option>
                                                              <option value="Travail décent et croissance économique">
                                                                Travail décent et croissance économique
                                                              </option>
                                                              <option value="Industries, innovation et infrastructure">
                                                                Industries, innovation et infrastructure
                                                              </option>
                                                              <option value="Réduction des inégalités">
                                                                Réduction des inégalités
                                                              </option>
                                                              <option value="Réduction des inégalités">
                                                                Réduction des inégalités
                                                              </option>
                                                              <option value="Villes et communautés durables">
                                                                Villes et communautés durables
                                                              </option>
                                                              <option value="Consommation et production responsables">
                                                                Consommation et production responsables
                                                              </option>
                                                              <option value="Action climatique">
                                                                Action climatique
                                                              </option>
                                                              <option value="La vie sous l'eau">
                                                                La vie sous l'eau
                                                              </option>
                                                              <option value="La vie sur terre">
                                                                La vie sur terre
                                                              </option>
                                                              <option value="Paix, justice et institutions solides">
                                                                Paix, justice et institutions solides
                                                              </option>
                                                              <option value="Partenariats pour les objectifs">
                                                                Partenariats pour les objectifs
                                                              </option>
                                                              
                                                          </select>


                                                          <br><br>
                                                          <b>Type de présence</b>
                                                          <select required name="typeP" >
                                                            <option value="" ></option>
                                                            <option value="présentiel" >présentiel</option>
                                                            <option value="En ligne" >En ligne</option>
                                                          </select>

                                                          <br><br>
                                                          <b>nom de formateur</b>
                                                          <input id="myInput" type="text" name="nomF" placeholder="formateur" list="suggests">
                                                            <datalist id="suggests">
                                                                <option value="Dorra Eltaief Baltagi">
                                                                <option value="Ahmed Ben ghanem">
                                                                <option value="Malek Belghaib">
                                                                <option value="Wael Ayadi">
                                                                <option value="Ala Mesfar">
                                                                <option value="Ahmed Kilani Hafi">
                                                                <option value="Houssem Eddine Hammami">
                                                            </datalist>
                                          

                                                            <br><br>
                                                            <input type="submit" name="" value="envoyer" class="btn btn-primary">
                                                            <br>
                                                            <small style="color: red" >Faite attention à la déclaration de ce rapport <br>
                                                              Toute tentative de tricherie risque de pénaliser le club jusqu'à  x-10  du note de projet<br> 
                                                              
                                                             
                                                            </small>

                                                            </form>

                                                          </div>

                                                          <!-- Modal footer -->
                                                          <div class="modal-footer">

                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div><!-- fade Modal -->

                                            <?php }else{  $p = $projet->score  ; echo $p->points.' points' ; } ?>

                                           </span> 
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } ?>
                </div>
                </div>
                </div>           
                            
                 <div class="central-meta tab-pane fade " id="membresBlock" >
                    <div class="row">
                      <?php foreach ($members as $member ) { ?>
                      <div class="col-lg-4 ">
                        <div class="friend-box">
                          <figure>
                            <img src="<?php echo base_url() ?>assets/images/resources/frnd-cover3.jpg" style="height: 50px" alt="">
                            <span></span>
                          </figure>
                          <div class="frnd-meta">
                            <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $member->avatar ?>" class="alligator-profile-member" alt="">
                            <div class="frnd-name">
                              <a href="<?php echo base_url()?>User/ProfileShow/<?php echo $member->userId?>" title=""><?php echo $member->name ?></a>
                              <span><?php echo $member->role ?></span>
                            </div>
                            <ul class="frnd-info">
                              <li><span>Cellule:</span><?php echo $member->cellule ?></li>
                              <li><span>née le:</span> <?php echo $member->birthday ?></li>
                              <li><span>Sexe :</span> <?php echo $member->sexe ?></li>
                              <li><span>E-Mail:</span><?php echo $member->email ?></li>
                              <li><span>mobile:</span><?php if($SA == 1 ){echo $member->mobile ; } ?></li>
                            </ul>
                            <!--
                            <a class="btn-main align-left" href="#" title="">Vister</a>
                            <a class="send-mesg" href="#" title="">Message</a>
                            -->
                            <div class="more-opotnz">
                              <i class="fa fa-ellipsis-h"></i>
                              <ul>
                                <li><a href="#" title="">Bloquer</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                       <?php }  ?>
                    </div>
     
                  </div>



                  <div class="central-meta tab-pane fade " id="membresClassment" >
                                    <style type="text/css">
                                        .pro-turtle {
                                            object-fit: cover;
                                            border-radius : 100% ;
                                            object-position: 50% 50%;
                                            width: 40px;
                                            height: 40px;
                                        }
                                    </style> 
                    <table  class="table table-striped table-responsive-xl" id="tableid" style="width: cover" >
                      <thead>
                          <th width="10%" >Rang
                          </th>

                       
                          <th>
                            Tunimateur
                          </th>
                          <th width="10%" >
                            Badge
                          </th>
                          <th>
                            Taches
                          </th>
                          <th>
                            Formation
                          </th>
                          <th>
                            Conférence
                          </th>
                          <th>
                            Score
                          </th>
                          </thead>
                                        <?php  if(!empty($RateMember)){ $c=1 ;   foreach ($RateMember as $membre ) { ?>
                                          <tr>

                                            <td  ><h4> <?php echo   $c   ?> </h4> </td>

                                        
                                            <td>
                                             

                                            
                                            <span>
                                             <p> <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $membre->avatar ?>" class="pro-turtle " alt="user">
                                            <?php echo $membre->name ?> 
                                            </p> 
                                            
                                            </span>
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
                                            <td>  </td>
                                            <td>  </td>

                                            <td > </td>

                                         

                                            <td> <b ><?php echo $membre->scores ?> Points</b> </td>
                                          </tr>
                                          
                                     
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>

     
                  </div>
              </div><!-- centerl meta -->


              

                  
                  
                  

            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section>



  <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}


/*An array containing all the country names in the world:*/
var countries = ["Dorra Eltaief Baltagi","Ahmed Ben ghanem","Malek Belghaib","Wael Ayadi","Ala Mesfar","Ahmed Kilani Hafi"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>