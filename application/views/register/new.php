
<html lang="en" class=" "><!-- Mirrored from wpkixx.com/html/pitnik/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:52:01 GMT --><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
  <title>Tunivisions Link | Se connecter</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/weather-icon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/color.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151434993-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-151434993-1');
        </script>

        
</head>
<body>

  <div class="www-layout">
        <section>
          <div class="gap no-gap signin whitish medium-opacity">
                <div class="bg-image" style="background-image:url(<?php echo base_url() ?>assets/images/resources/81382847_979373362434357_6461190259974602752_o.jpg)"></div>
                <div class="container">
                  <div class="row">
                        <div class="col-lg-8">
                            <div class="big-ad">
                                <figure><img src="<?php echo base_url() ?>assets/images/logo2.svg" width="25%" alt=""></figure>
                                <h1>Bienvenue au T-Link</h1>
                                <p>
                                     T.Link est une réseau social qui peut être utilisé pour connecter les Tunimateurs. utilisez ce réseau pour des activités associatif polyvalentes telles que les rencontres, la publication, les blogs et bien plus encore. Rejoignez maintenant &amp; Faites-vous des amis sympas dans le monde de Tunivisions Foundation !!!                            
                                </p>
                                
                                <div class="fun-fact">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-check-box"></i>
                                                <h6>Personnes inscrites</h6>
                                                <span>5 000 </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-layout-media-overlay-alt-2"></i>
                                                <h6>Articles publiés</h6>
                                                <span>210</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-user"></i>
                                                <h6>Utilisateurs en ligne</h6>
                                                <span>20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="barcode">
                                  <!--
                                    <figure><img src="<?php echo base_url() ?>assets/images/resources/Barcode.jpg" alt=""></figure>
                                    <div class="app-download">
                                        <span>Patager le T-Link avec vos amis</span>
                                        <ul class="colla-apps">
                                            <li><a title="" href="https://play.google.com/store?hl=en"><img src="<?php echo base_url() ?>assets/images/android.png" alt="">android</a></li>
                                            <li><a title="" href="https://www.apple.com/lae/ios/app-store/"><img src="<?php echo base_url() ?>assets/images/apple.png" alt="">iPhone</a></li>
                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img src="<?php echo base_url() ?>assets/images/windows.png" alt="">Windows</a></li>
                                        </ul>
                                    </div>
                                  -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="we-login-register">
                                <div class="form-title">
                                    <i class="fa fa-key"></i>S'inscrire
                                    <span> Club : <?php echo $club->name ?> <br> parrain : <?php echo $parrain->name ?> </span>
                             
                                </div>
                                   <?php
            $this->load->helper('form');
             $var1 = $this->input->get('var1');
             $var2 = $this->input->get('var2');
             $var3 = $this->input->get('var3');
             $date = $this->input->get('var4');
            ?>
          <!--begin::Form-->
          <?php if (date($date) < date() ) { ?>
            <form  role="form" class="we-form" runat="server" action="<?php echo base_url() ?>Register/registerNewUser?var1=<?php echo $var1 ?>&var2=<?php echo $var2 ?>&var3=<?php echo $var3 ?>"     method="post" enctype="multipart/form-data"  >
      
           
            

            <?php if ($var1!=Null &&   $var2 != Null  &&  $var3 == 1  ) { ?> 

            
       
                
              <input  type="text" placeholder="cin" name="cin" maxlength="8" minlength="8" required>
              <input  type="text" placeholder="Nom" name="fname" required>
              <input   type="text" placeholder="Prenom" name="lname" required> 
              <input   type="date" placeholder="Date de naissance" name="birth" placeholder="sexe" required>
              <input  type="email" placeholder="Email" name="email"  required>
              <input  type="text" pattern="[0-9]{2}\d{6}" placeholder="mobile" name="mobile" required>
              <input type="checkbox"><label>j'accepte  <a href="<?php echo base_url(); ?>Register/reglement" class="kt-link kt-login__link kt-font-bold">le reglement</a> </label> 
              <br>
             <?php } ?>
                  

             <?php if ($var1!=Null || $var2!=Null ) { ?> 
                <input type="submit" value="S'inscrire" data-ripple="" > &nbsp;&nbsp;

              <?php } else { ?>
                <div class="alert alert-danger alert-dismissable">
                            Tu doit ètre parrainé par un responsable des club Tunivisions                    
                </div> 
            <?php }   ?>
             
           


          </form>
          <?php } else  { ?>
            <h1>Code d'inscription expiré </h1>
          <?php } ?>


                               
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
         
    </div>
    
      <script src="<?php echo base_url() ?>assets/js/main.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>


<!-- Mirrored from wpkixx.com/html/pitnik/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:52:09 GMT -->

    
    

     




      <script type="text/javascript">
         
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

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

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        
      </script>
       <script>


             var x = document.getElementById("demo");

              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else { 
                  x.innerHTML = "Geolocation is not supported by this browser.";
                }
              }

              function showPosition(position) {

                var  a = document.getElementById("myForm").action ;

                document.getElementById("myForm").action =  a+"?Latitude="+ position.coords.latitude + "&Longitude="+ position.coords.longitude ;


                x.innerHTML = "Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude;
              }

              function showError(error) {
                switch(error.code) {
                  case error.PERMISSION_DENIED:
                                Swal.fire({
                                  title: 'il est strictement obligatoire d\'activer la géolocalisation.',
                                  width: 600,
                                  allowOutsideClick: false,
                                  padding: '3em',
                                  background: '#fff url(/images/trees.png)',
                                  backdrop: `
                                    rgba(0,0,123,0.4)
                                    url("/images/nyan-cat.gif")
                                    left top
                                    no-repeat
                                  `
                                })
                    break;
                  case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable."
                    break;
                  case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out."
                    break;
                  case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred."
                    break;
                }

            }
      </script>

      <script type="text/javascript">
          $( document ).ready( function()
          {
              var json ;
              var gouvernorat = $( '#gouvernorat' );
              var delegation = $( '#delegation' );
              
             $('#gouvernorat').select2();
             $('#delegation').select2();

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



                  
              });
          </script>

   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:48 GMT -->
</html>
