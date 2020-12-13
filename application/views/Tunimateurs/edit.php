                                    <section>
                                    <h6> Informations Personnelle </h6>

                                    <form  
                                   
                                    action="<?php echo base_url() ?>User/MAJUser" 
                                    method="POST" enctype="multipart/form-data" class="c-form"  >
                                    
                                    <label>Photo de profil<br></label>
                                    
                                    <div style="height: 200px;width: 200px">
                                    <input type="file" name="fileT"   
                                    class="dropify-fr" 
                                    data-max-file-size="300K"
                                    data-max-width="800" 
                                    data-max-height="800"                                     
                                    
                                    data-allowed-file-extensions="png jpg jpeg"
                                    required accept="image/*"
                                    >
                                    
                                    </div>
                                    <span>Taille recommandé 800x800 px et une taille de 200 ko</span>
                                     <hr>
                                     <label>CIN</label>
                                     <input type="text" name="cin" value="<?php echo $user->cin ?>" class="form-control" required >
                                     <label>Nom</label>
                                     <input type="text" name="nom" value="<?php echo $user->nom ?>" class="form-control" required >
                                     <label>Prenom</label>
                                     <input type="text" name="prenom" value="<?php echo $user->prenom ?>" class="form-control" required >
                                     <label>Date de naissance</label>
                                     <input type="date" name="birthday" value="<?php echo $user->birthday ?>" class="form-control" required >
                                     <label>Sexe</label>
                                     <select  name="sexe" id="sexe" required>
                                        <option value=""></option>
                                        <option value="Femme">Femme</option>
                                        <option value="Homme">Homme</option>
                                    </select>
                                     <hr>
                                     <label>Adresse</label>
                                     <input type="text" name="adresse" value="<?php echo $user->adresse ?>" class="form-control" required >
                                     <label>Gouvernourat</label>
                                     <select  name="gouvernorat"  required>
                                        <option value=""></option>
                                        <option value="Ariana">Ariana</option>
                                        <option value="Béja">Béja</option>
                                        <option value="Ben Arous">Ben Arous</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Gabes">Gabès</option>
                                        <option value="Gafsa">Gafsa</option>
                                        <option value="Jendouba">Jendouba</option>
                                        <option value="Kairouan">Kairouan</option>
                                        <option value="Kasserine">Kasserine</option>
                                        <option value="Kébili">Kébili</option>
                                        <option value="Kef">Kef</option>
                                        <option value="Mahdia">Mahdia</option>
                                        <option value="Manouba">Manouba</option>
                                        <option value="Médenine">Médenine</option>
                                        <option value="Monastir">Monastir</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                                        <option value="Siliana">Siliana</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Tataouine">Tataouine</option>
                                        <option value="Tozeur">Tozeur</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Zaghouan">Zaghouan</option>
                                     </select>
                                     <label> code postale </label>
                                     <input name="delegation" class="form-control" id="delegation" type="number"  >
                                     <hr>
                                     <div class="uzer-nam">
                                      <label><br>Facebook </label>
                                      <span>https://www.facebook.com/</span>
                                        <input type="text" class="form-control" placeholder="exemple : Tunivisions.Foundation" name="facebook" width="30%" id="facebook"   >
                                     </div>
                                     <div class="uzer-nam">
                                      <label><br>Instgram </label>
                                      <span>https://www.instgram.com/</span>
                                        <input type="text" class="form-control" placeholder="exemple : Tunivisions.Foundation" name="instagram" width="30%" value="<?php echo $user->instagram ?>"  >
                                     </div>
                                     <div class="uzer-nam">
                                      <label><br>Linkedin </label>
                                      <span>https://www.Linkedin.com/in/</span>
                                        <input type="text"  class="form-control"  placeholder="exemple : Tunivisions.Foundation" name="linkedin" width="30%"  value="<?php echo $user->linkedin ?>">
                                     </div>
                                     
                                     
                                     <hr>
                                     <label>Club/chapitre</label>
                                     <input type="text"  value="<?php echo $user->ClubName ?>" class="form-control" readonly >
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