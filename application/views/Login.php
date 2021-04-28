<html lang="fr">
    <head>
        <link rel="icon" href="https://127.0.0.1/store.tunivisions.link/assets/images/fav.png">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-01/fonts/icomoon/style.css" />
        <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-01/css/owl.carousel.min.css" />

        <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-01/css/bootstrap.min.css" />

        <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-01/css/style.css" />
        <title>Tunivisions.link</title>
    </head>
    <body>
        <div class="d-lg-flex half">
            
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <img src="<?php echo base_url()?>assets/images/logo3.svg" width="75%" alt="" />
                            <hr />
                            <h3>Se connecter</h3>
                            <p class="mb-4">Platforme N°1 dans la formation des jeunes tunisiens</p>
                            <form id="myForm" method="post" action="<?php echo base_url() ?>Login/loginMe">
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="emial" class="form-control" placeholder="Votre E-mail" id="username" name="mail" />
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Votre Mot de passe" id="password" name="password" />
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0">
                                        <span class="caption">Remember me</span>
                                        <input type="checkbox" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Mot de passe oublié ? </a></span>
                                </div>
                                <input type="submit" value="Se connecter" class="btn btn-block btn-primary" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg order-1 order-md-2" style="background-image: url('https://scontent-cdg2-1.xx.fbcdn.net/v/t1.6435-9/84613923_1006552716383088_6488676117933719552_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=cdbe9c&_nc_ohc=13t7hCiXs6YAX_S_Vm5&_nc_ht=scontent-cdg2-1.xx&oh=f3b287cf3d4adf5d6f7b677cbeb817a8&oe=60AD4BD9');"></div>
        </div>
        <script src="https://preview.colorlib.com/theme/bootstrap/login-form-01/js/jquery-3.3.1.min.js"></script>
        <script src="https://preview.colorlib.com/theme/bootstrap/login-form-01/js/popper.min.js"></script>
        <script src="https://preview.colorlib.com/theme/bootstrap/login-form-01/js/bootstrap.min.js"></script>
        <script src="https://preview.colorlib.com/theme/bootstrap/login-form-01/js/main.js"></script>
    </body>

    <script>
        var x = document.getElementById("alert");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            var a = document.getElementById("myForm").action;

            document.getElementById("myForm").action = a + "/" + position.coords.longitude + "/" + position.coords.latitude;
            document.getElementById("login").disabled = false;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("l'activation de service de géolocalisation est obligatoire");
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Les informations de localisation ne sont pas disponibles.";
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "La demande d’obtention de l’emplacement de l’utilisateur a expiré.";
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "Une erreur inconnue est survenue.";
                    break;
            }
        }
    </script>

    <script type="text/javascript">
        window.addEventListener("load", function (event) {
            getLocation();
            console.log("Toutes les ressources sont chargées !");
        });
    </script>
</html>
