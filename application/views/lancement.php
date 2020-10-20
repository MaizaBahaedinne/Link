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
                                 <section id="activation" >
                                    <h6> Activation de compte </h6>
                                <hr>
                                merci d'introduite le code récu par l'adresse :<b> <a class="text-primary"><?php echo $email ?></a></b>
                                <br><br>
                                <label>code d'activation :</label>
                                <input type="text" id="code"  class="form-control">
                                <span><small>si vous n'avez pas trouvé le mail merci de consulter le SPAM </small></span>
                                <br>
                                <br>
                                <button id="sendCode" class="btn btn-danger">Envoyer</button>
                                </section>
                                <section id="video" hidden  >
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
                                <button id="videoEnd" class="btn btn-danger">Lancer le quiz</button>
                                </section>
                                <section id="quiz" hidden >
                                <h6> Info session et quiz </h6>
                                
                                Vous avez 5 min pour répondre :  



                                </section>
                                
                            </div><!-- centerl meta -->
                            <div class="col-lg-2">
                            </div>
                            </div>

                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>


    <script type="text/javascript">

  


        $("#sendCode").click(function test(argument) {
            if($( "#code" ).val() == '<?php echo $userId ;?>-<?php echo $clubID ;?>/2020' ){
            $("#video").removeAttr("hidden");
            animated = true;
            $("#activation").hide();
           }
        })


        $("#videoEnd").click(function test(argument) {
            
            $("#quiz").removeAttr("hidden");
            
            $("#video").hide();
           
        })

    </script>






