<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            
                           

                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-8">
                               <div class="central-meta">
                                <h4> Passage obligatoire </h4>
                                <?php if($clubID > 5 ) { ?>
                                
                                <!--
                                <section id="activation" >
                                    <h6> Activation de compte </h6>
                                <hr>
                                merci d'introduite le code récu par l'adresse :<b> <a class="text-primary"><?php echo $user->email ?></a></b>
                                <br><br>
                             
                                <label>code d'activation :</label>
                                <input type="text" id="code"  class="form-control" required> 
                                <span><small>si vous n'avez pas trouvé le mail merci de consulter le SPAM </small></span>
                                <br>
                                <br>
                                <button id="sendCode" class="btn btn-danger">Envoyer</button> 
                            
                                </section>
                                -->

                                <section id="video"   >
                                <div class="central-meta">
                                <h6> Info session et quiz </h6>
                                  <iframe id="ytplayer" type="text/html" width="1980" height="400" 
                                    src="https://www.youtube.com/embed/QwrBWK07RnU?autoplay=1&cc_load_policy=1&controls=0&fs=0&loop=1&color=white"
                                    frameborder="0" allowfullscreen></iframe>
                                  <hr>
                                  <br>
                                  <span>
                                      Tunivisions Foundation est offert par Media Visions Editing. Une communauté de plus de 157 universités et 40 clubs lycéen à travers le pays qui offre des expériences où les jeunes apprennent par la pratique. Les étudiants réalisent des événements et des projets pratiques dans des domaines comme les activités culturelles, artistiques, sportives et la citoyenneté, dans un environnement positif où ils sont encouragés à assumer des rôles de leadership proactifs. Les étudiants font l’expérience des Tunimateurs dans chaque club du pays – par le biais de programmes de formation durable, de clubs universitaires et camp Tunivisions.
                                  </span>
                                </div><!-- suggested friends -->
                                <button id="videoEnd"  hidden class="btn btn-danger">Lancer le quiz</button>
                                </section>
                                <section id="quiz" hidden >
                                <h6> Info session et quiz </h6>
                                
                                Vous avez 8 min pour répondre : 

                                <br><br><br>
                                <b>Q1 . Tunivisions a été fondé en  </b><br><br>
                                <input type="radio" name="q1" value="f"  > 2016<br>
                                <input type="radio" name="q1" value="f" > 1995 <br>
                                <input type="radio" name="q1" value="f" > 2017 <br>
                                <input type="radio" name="q1" id="q1-1" value="f" > 1997 <br>
                                <hr>
                                <b>Q2 . Tunivisions Foundation est :  </b><br><br>
                                <input type="radio" name="q2" value="f"  > Magazine <br>
                                <input type="radio" name="q2" value="f" > Start-Up <br>
                                <input type="radio" name="q2" id="q2-1" value="f" > RSE <br>
                                <input type="radio" name="q2" value="t" > Fondation nationale <br>
                                <hr>
                                <b>Q3 . Tunivisions Foundation a des clubs dans :  </b><br><br>
                                <input type="radio" name="q3" value="f"  > les regions , les écoles primaires , les lycées et les facultées <br>
                                <input type="radio" name="q3" value="f" > les écoles primaires , les lycées et les facultées <br>
                                <input type="radio" name="q3" id="q3-1" value="t" > les lycées et les facultées <br>
                                <input type="radio" name="q3" value="f" > les regions , les lycées et les facultées <br>
                                <hr>
                                <b>Q4 . Les valeurs de Tunivisions Foundation:  </b><br><br>
                                <input type="radio" name="q4" value="f" > Innovation , Partage , Croissance <br>
                                <input type="radio" name="q4" id="q4-1" value="f" > Innovation , Travail , Partage   <br>
                                <input type="radio" name="q4" value="f" >  Partage , Travail , Créativité  <br>
                                <input type="radio" name="q4" value="f" > Innovation , Compétence , Partage  <br>
                                <hr>
                                <b>Q5 . Les missions de Tunivisions Foundation:  </b><br><br>
                                <input type="checkbox" id="q5-1" value="f" > Formation des jeunes en Soft-Skills <br>
                                <input type="checkbox" id="q5-2" value="t" > Promouvoir la culture entrepreneuriale  <br>
                                <input type="checkbox" id="q5-4" value="t" > Organiser des actions de charité <br>
                                <input type="checkbox" id="q5-3" value="t" > La mise en valeur des régions <br>
                                <hr>
                                <b>Q6 . La vision de Tunivisions Foundation:  </b><br><br>
                                <input type="radio" name="q6" value="f"  > La création des jeunes leaders<br>
                                <input type="radio" name="q6" id="q6-1" value="t" > La création des jeunes leaders tunisiens <br>
                                <input type="radio" name="q6" value="f" > Organiser des évenements et des conférence <br>
                                


                                <br>
                                 <button id="test"  class="btn btn-success">Envoyer</button>
                                 <button>il vous reste : <span id="horloge" ></button></p>
                                
                                </section>
                                <?php } ?>
                                <section id="info" <?php if($clubID > 5 ) { ?> hidden <?php } ?>  >
                                
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
                        
                                    
                                
                                </div>
                               
                                
                                
                            </div><!-- centerl meta -->
                            <div class="col-lg-2">
                                <div class="central-meta widget stick-widget">
                                    <h4 id="horloge"></h4>
                                </div>
                            </div>
                            </div>

                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>


    <script type="text/javascript">



        var countDownDate = new Date().getTime() + 2 * 60000;

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                  // Get today's date and time
                                  var now = new Date().getTime();
                                    
                                  // Find the distance between now and the count down date
                                  var distance = countDownDate - now;
                                    
                                  // Time calculations for days, hours, minutes and seconds
                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                  // Output the result in an element with id="demo"
                                  
                                     
                                  // If the count down is over, write some text 
                                  if (distance < 0) {
                                    clearInterval(x);
                                   
                                   
                                    $("#videoEnd").removeAttr("hidden");
                                    
                                  }
                                }, 1000);

           
           
  


        $("#sendCode").click(function test(argument) {
            if($( "#code" ).val() == '<?php echo $user->userId ;?>-<?php echo $user->clubID ;?>/2020' ){
            $("#video").removeAttr("hidden");
            $("#activation").hide();
           }
        })



        $("#test").click(function test(argument) {

                 
             if (
                $("#q1-1").is(':checked') 
                && $("#q2-1").is(':checked') 
                && $("#q3-1").is(':checked')
                && $("#q4-1").is(':checked')
                && $("#q5-1").is(':checked') 
                && $("#q5-2").is(':checked') 
                && $("#q5-3").is(':checked')  
                && $("#q6-1").is(':checked')                
                )
                 {
                    $("#info").removeAttr("hidden");
                    $("#quiz").hide();
                     
                 }else
                 {
                    alert("Vous avez des mauvaise réponses !");
                 }

         }) 

        $("#videoEnd").click(function test(argument) {
            
            $("#quiz").removeAttr("hidden");
            $("#video").hide();


             var countDownDate = new Date().getTime() + 8 * 60000;

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                  // Get today's date and time
                                  var now = new Date().getTime();
                                    
                                  // Find the distance between now and the count down date
                                  var distance = countDownDate - now;
                                    
                                  // Time calculations for days, hours, minutes and seconds
                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                  // Output the result in an element with id="demo"
                                  document.getElementById("horloge").innerHTML =  minutes + "m " + seconds + "s ";
                                    
                                  // If the count down is over, write some text 
                                  if (distance < 0) {
                                    clearInterval(x);
                                    $("#test").hide();
                                    
                                  }
                                }, 1000);

           
        })

        $("#quizzEnd").click(function test(argument) {
            
            $("#info").removeAttr("hidden");
            
            $("#quiz").hide();
           
        })

        

    </script>






<script>
            $(document).ready(function(){
                
              // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux',
                        'fileSize': 'The file size is too big ({{ value }} max).',
                        'maxWidth': 'The image width is too small ({{ value }}}px min).',
                        'maxHeight': 'The image height is too big ({{ value }}px max).',
                        'imageFormat': 'The image format is not allowed ({{ value }} only).'
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


