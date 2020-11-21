
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

    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

</head>
<body onload="getLocation()" >
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
                                    <figure><img src="<?php echo base_url() ?>assets/images/resources/Barcode.jpg" alt=""></figure>
                                    <div class="app-download">
                                        <span>Patager le T-Link avec vos amis</span>
                                        <ul class="colla-apps">
                                            <li><a title="" href="https://play.google.com/store?hl=en"><img src="<?php echo base_url() ?>assets/images/android.png" alt="">android</a></li>
                                            <li><a title="" href="https://www.apple.com/lae/ios/app-store/"><img src="<?php echo base_url() ?>assets/images/apple.png" alt="">iPhone</a></li>
                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img src="<?php echo base_url() ?>assets/images/windows.png" alt="">Windows</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="we-login-register">
                                <div class="form-title">
                                    <i class="fa fa-key"></i>Se Connecter
                                    <span>Connectez-vous maintenant et rencontrez les super amis de Tunivisions.</span>
                                </div>
                                <form class="we-form" id="myForm" method="post" action="<?php echo base_url() ?>Login/loginMe">
								<?php
                                        $this->load->helper('form');
                                        $error = $this->session->flashdata('error');
                                        if($error)
                                        {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                
                                                <?php echo $error; ?>                    
                                            </div>
                                        <?php }
                                        $success = $this->session->flashdata('success');
                                        if($success)
                                        {
                                            ?>
                                            <div class="alert alert-success alert-dismissable">
                                                
                                                <?php echo $success; ?>                    
                                            </div>
                                      <?php } ?>
                                    <input type="text" name="mail" placeholder="E-Mail">
                                    <input type="password" name="password" placeholder="Mot de passe">
                                    <input type="checkbox"><label>remember me</label>
                                    <input type="submit" data-ripple="" value="Login">
                                    
                                </form>
                                <br>
                                    <a class="forgot underline" href="<?php echo base_url() ?>Register/MotDePasse" title="">Mot de passe oublié ?</a>
                               <br>

                                <span>vous n'avez pas de compte? <a class="we-account underline" href="<?php echo base_url() ?>" title=""> S'inscrire maintenant</a></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
         
    </div>
    
    	<script src="<?php echo base_url() ?>assets/js/main.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/script.js"></script>

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

                        document.getElementById("myForm").action =  a+"/"+ position.coords.longitude+"/"+position.coords.latitude ;


                        x.innerHTML = "Latitude: " + position.coords.latitude + 
                        "<br>Longitude: " + position.coords.longitude;
          }

          function showError(error) {
            switch(error.code) {
              case error.PERMISSION_DENIED:
                  alert("l'activation de service de géolocalisation est obligatoir") ;
                  window.location.replace("<?php echo base_url() ?>logout")
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
         window.addEventListener("load", function(event) {
          getLocation();
            console.log("Toutes les ressources sont chargées !");

          });
     </script>   

		


</body>
</html>
		
		
		

     


