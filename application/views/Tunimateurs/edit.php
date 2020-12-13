<?php if ($SA== 1 || $SA == 2   ) {  ?>
<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des utilisateurs 
                       
                       </h4>

                    <ul class="faved-page">                                    

                                    <section>
                                    <h6> Informations Personnelle </h6>

                                    <form  
                                   
                                    action="<?php echo base_url() ?>User/editUserAdmin/<?php echo $userInfo->userId ?>" 
                                    method="POST" enctype="multipart/form-data" class="c-form"  >
                                    
                                    <label>Photo de profil<br></label>
                                    
                                    <div style="height: 200px;width: 200px">
                                    <img src="<?php echo $userInfo->cin ?>" >
                                    
                                    </div>
                                    <span>Taille recommandé 800x800 px et une taille de 200 ko</span>
                                     <hr>
                                     <label>CIN</label>
                                     <input type="text" name="cin" value="<?php echo $userInfo->cin ?>" class="form-control" required >
                                     <label>Nom</label>
                                     <input type="text" name="nom" value="<?php echo $userInfo->nom ?>" class="form-control" required >
                                     <label>Prenom</label>
                                     <input type="text" name="prenom" value="<?php echo $userInfo->prenom ?>" class="form-control" required >
                                     <label>Date de naissance</label>
                                     <input type="date" name="birthday" value="<?php echo $userInfo->birthday ?>" class="form-control" required >
                                     <label>Sexe</label>
                                     <select  name="sexe" id="sexe" required>
                                        <option value=""></option>
                                        <option value="Femme" 
                                        <?php if ($userInfo->birthday=="Femme" )
                                        { echo "selected" ; }  ?>  >  Femme</option>
                                        <option value="Homme" <?php if ($userInfo->birthday=="Homme" )
                                        { echo "selected" ; }  ?> >Homme</option>
                                    </select>
                                     <hr>
                                     <label>Adresse</label>
                                     <input type="text" name="adresse" value="<?php echo $userInfo->adresse ?>" class="form-control" required >
                                     <label>Gouvernourat</label>
                                     <select  name="gouvernorat"  required>
                                        <option value=""></option>
                                        <option value="Ariana" <?php if($userInfo->gouvernorat == "Ariana" ){ ?> selected <?php } ?> >Ariana</option>
                                        <option value="Béja" <?php if($userInfo->gouvernorat == "Béja" ){ ?> selected <?php } ?>>Béja</option>
                                        <option value="Ben Arous" <?php if($userInfo->gouvernorat == "Ben Arous" ){ ?> selected <?php } ?> >Ben Arous</option>
                                        <option value="Bizerte" <?php if($userInfo->gouvernorat == "Bizerte" ){ ?> selected <?php } ?> >Bizerte</option>
                                        <option value="Gabes" <?php if($userInfo->gouvernorat == "Gabès" ){ ?> selected <?php } ?> >Gabès</option>
                                        <option value="Gafsa" <?php if($userInfo->gouvernorat == "Gafsa" ){ ?> selected <?php } ?> >Gafsa</option>
                                        <option value="Jendouba"  <?php if($userInfo->gouvernorat == "Jendouba" ){ ?> selected <?php } ?>  >Jendouba</option>
                                        <option value="Kairouan" <?php if($userInfo->gouvernorat == "Kairouan" ){ ?> selected <?php } ?>   >Kairouan</option>
                                        <option value="Kasserine"  <?php if($userInfo->gouvernorat == "Kasserine" ){ ?> selected <?php } ?>  >Kasserine</option>
                                        <option value="Kébili"  <?php if($userInfo->gouvernorat == "Kébili" ){ ?> selected <?php } ?> >Kébili</option>
                                        <option value="Kef"   <?php if($userInfo->gouvernorat == "Kef" ){ ?> selected <?php } ?> >Kef</option>
                                        <option value="Mahdia" <?php if($userInfo->gouvernorat == "Mahdia" ){ ?> selected <?php } ?> >Mahdia</option>
                                        <option value="Manouba"  <?php if($userInfo->gouvernorat == "Manouba" ){ ?> selected <?php } ?>  >Manouba</option>
                                        <option value="Médenine" <?php if($userInfo->gouvernorat == "Médenine" ){ ?> selected <?php } ?>  >Médenine</option>
                                        <option value="Monastir" <?php if($userInfo->gouvernorat == "Monastir" ){ ?> selected <?php } ?> >Monastir</option>
                                        <option value="Nabeul" <?php if($userInfo->gouvernorat == "Nabeul" ){ ?> selected <?php } ?> >Nabeul</option>
                                        <option value="Sfax"  <?php if($userInfo->gouvernorat == "Sfax" ){ ?> selected <?php } ?>  >Sfax</option>
                                        <option value="Sidi Bouzid" <?php if($userInfo->gouvernorat == "Sidi Bouzid" ){ ?> selected <?php } ?>  >Sidi Bouzid</option>
                                        <option value="Siliana" <?php if($userInfo->gouvernorat == "Siliana" ){ ?> selected <?php } ?>  >Siliana</option>
                                        <option value="Sousse" <?php if($userInfo->gouvernorat == "Sousse" ){ ?> selected <?php } ?>   >Sousse</option>
                                        <option value="Tataouine"  <?php if($userInfo->gouvernorat == "Tataouine" ){ ?> selected <?php } ?>  >Tataouine</option>
                                        <option value="Tozeur" <?php if($userInfo->gouvernorat == "Tozeur" ){ ?> selected <?php } ?> >Tozeur</option>
                                        <option value="Tunis"  <?php if($userInfo->gouvernorat == "Tunis" ){ ?> selected <?php } ?>  >Tunis</option>
                                        <option value="Zaghouan"  <?php if($userInfo->gouvernorat == "Zaghouan" ){ ?> selected <?php } ?> >Zaghouan</option>
                                     </select>
                                     <label> code postale </label>
                                     <input name="delegation" class="form-control" id="delegation" type="number"  >
                                     <hr>
                                     <div class="uzer-nam">
                                      <label><br>Facebook </label>
                                      <span>https://www.facebook.com/</span>
                                        <input type="url" class="form-control" placeholder="exemple : Tunivisions.Foundation" name="facebook" width="30%" id="facebook"   >
                                     </div>
                                     <div class="uzer-nam">
                                      <label><br>Instgram </label>
                                      <span>https://www.instgram.com/</span>
                                        <input type="url" class="form-control" placeholder="exemple : Tunivisions.Foundation" name="instagram" width="30%" value="<?php echo $user->instagram ?>"  >
                                     </div>
                                     <div class="uzer-nam">
                                      <label><br>Linkedin </label>
                                      <span>https://www.Linkedin.com/in/</span>
                                        <input type="url"  class="form-control"  placeholder="exemple : Tunivisions.Foundation" name="linkedin" width="30%"  value="<?php echo $user->linkedin ?>">
                                     </div>
                                     
                                     
                                     <hr>
                                     <label>Club/chapitre</label>
                                     <select>
                                        <?php foreach ($clubs as $club) {?>
                                            <option value="<?php echo $club->name ?>" 
                                                <?php if($club->clubID == $clubID){ ?> selected <?php }?> >
                                                <?php echo $club->name ?>
                                            </option>
                                        <?php } ?>
                                     </select>
                                     <label>Poste</label>
                                     <input type="text"  value="<?php echo $user->role ?>" class="form-control" readonly >
                                     <?php if ($user->roleId != 1 ) { ?>
                                     <label>Departement/Unité</label>
                                     <?php if($clubID != 2) { ?>
                                         <select class="form-control" name="cellule" required>
                                            <option value=""  ></option>
                                             <option value="Ressource humaine" >Ressource humaine </option>
                                             <option value="Marketing" >Marketing </option>
                                             <option value="Evenmentiel" >Evenmentiel </option>
                                             <option value="Administration et finance" >Administration et finance </option>
                                         </select>
                                     <?php } else { ?>
                                        <select class="form-control"  name="cellule" required>
                                         <option value="" ></option>
                                         <option value="Unité developement T-Link" >Unité developement T-Link </option>
                                         <option value="Unité developement site web" >Unité developement site web </option>
                                         <option value="Unité developement strategique" >Unité developement strategique </option>
                                         <option value="Unité création de contenu" >Unité création de contenu </option>
                                         <option value="Unité communication" >Unité communication </option>
                                         <option value="Unité reglementation et proccess" >Unité reglementation et proccess </option>
                                         <option value="Unité juridique" >Unité juridique </option>
                                         <option value="Unité accadémique" >Unité accadémique </option>
                                         <option value="Unité des partenariats" >Unité des partenariats </option>
                                         <option value="Unité des relations internationale" >Unité des relations internationale </option>
                                         <option value="Unité we are campers" >Unité we are campers </option>
                                         <option value="Unité we are carthage" >Unité we are carthage </option>
                                         <option value="Unité incubateur" >Unité incubateur </option>
                                         <option value="Unité Fund raising" >Unité Fund raising </option>
                                         <option value="Unité statistique" >Unité statistique </option>
                                     </select>
                                     <?php } }  ?>
                                     <br>

                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                                            </div>
                                            <div class="col-lg-6">
                                            <input type="reset" class="btn btn-secondary" value="Reset" />
                                            </div>
                                        </div>  

                                     </form>
                                    </section>
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