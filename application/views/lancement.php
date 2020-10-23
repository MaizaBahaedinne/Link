<script  type="text/javascript">
    var json ;
              var gouvernorat = $( '#gouvernorat' );
              var delegation = $( '#delegation' );
              
  

              var d = $.ajax({
              url: '<?php echo base_url(); ?>assets/json/tunisia.json',
              type: "GET",
              dataType: 'json',
              success: function (data) {
                  console.log(data);
                     $.each( data , function (index, value)
                  {
                  gouvernorat.append('<option value="' + index + '">' +  index  + '</option>');
                  });

                  gouvernorat.change( function()
                  {
                  var gouv = $(this).val();
                  var deleg = data[ gouv ];

                  $('option', delegation).remove();
                  delegation.append('<option value="">-- Delegation --</option>');

                  $.each( deleg, function (index, value)
                  {
                  delegation.append('<option value="' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '">' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '</option>');
                  });
                  });    

              } 
              });

</script>



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
                                merci d'introduite le code récu par l'adresse :<b> <a class="text-primary"><?php echo $user->email ?></a></b>
                                <br><br>
                             
                                <label>code d'activation :</label>
                                <input type="text" id="code"  class="form-control" required> 
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


                                 <button id="quizzEnd" class="btn btn-danger">Enregistrer</button>
                                </section>
                                <section id="info" hidden  >
                                
                                    <h6> Informations Personnelle </h6>

                                    <form  methode="post" action="<?php echo base_url() ?>User/MAJUser" enctype="multipart/form-data" >
                                    <label>Avatar</label>
                                    <div style="height: 200px">
                                    <input type="file" 
                                    id="input-file-events" 
                                    class="dropify" 
                                    data-height="200" 
                                    data-default-file="<?php echo base_url() ?>uploads/avatar/<?php echo $user->avatar ?>"
                                    data-max-file-size="200K"
                                    name="fileToUpload"
                                     />
                                    </div>
                                     <hr>
                                     <label>Nom</label>
                                     <input type="text" name="nom" value="<?php echo $user->nom ?>" class="form-control" >
                                     <label>Prenom</label>
                                     <input type="text" name="prenom" value="<?php echo $user->prenom ?>" class="form-control" >
                                     <label>Date de naissance</label>
                                     <input type="date" name="birthday" value="<?php echo $user->birthday ?>" class="form-control" >
                                     <hr>
                                     <label>Adresse</label>
                                     <input type="adresse" name="nom" value="<?php echo $user->adresse ?>" class="form-control" >
                                     <label>Gouvernourat</label>
                                     <select  name="gouvernorat" id="gouvernorat" ></select>
                                     <label>Delegation / cité </label>
                                     <select  name="delegation" id="delegation"  ></select>
                                     <hr>
                                     <label>Facebook</label>
                                     <input type="url" name="facebook" value="<?php echo $user->facebook ?>" class="form-control" >
                                     <label>Instagram</label>
                                     <input type="url" name="instagram" value="<?php echo $user->instagram ?>" class="form-control" >
                                     <label>Linkedin</label>
                                     <input type="url" name="linkedin" value="<?php echo $user->linkedin ?>" class="form-control" >
                                     
                                     <hr>
                                     <label>Club/chapitre</label>
                                     <input type="text"  value="<?php echo $user->ClubName ?>" class="form-control" readonly >
                                     <label>Poste</label>
                                     <input type="text"  value="<?php echo $user->role ?>" class="form-control" readonly >
                                     <label>Departement/Unité</label>
                                     <?php if($clubID != 2 ) { ?>
                                     <select class="form-control"  required>
                                        <option value="" ></option>
                                         <option value="Ressource humaine" >Ressource humaine </option>
                                         <option value="Marketing" >Marketing </option>
                                         <option value="Evenmentiel" >Evenmentiel </option>
                                         <option value="Administration et finance" >Administration et finance </option>
                                     </select>
                                     <?php } else { ?>
                                        <select class="form-control"  required>
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
                                     <?php }  ?>

                                    </section>
                        
                                    </form>
                                
                                </div>
                               
                                
                                
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
            if($( "#code" ).val() == '<?php echo $user->userId ;?>-<?php echo $user->clubID ;?>/2020' ){
            $("#video").removeAttr("hidden");
          
            $("#activation").hide();
           }
        })


        $("#videoEnd").click(function test(argument) {
            
            $("#quiz").removeAttr("hidden");
            
            $("#video").hide();
           
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


