<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
            <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
            <meta content="width=device-width" name="viewport"/>
            <!--[if !mso]><!-->
            <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/responsive.css">
      <link rel="stylesheet" href="https://www.tunivisions.link/assets/css/dropify.min.css">

</head>

<body>
      <div class="row" >

            <div class="col-md-4" >
                  
            </div>


            <div class="col-md-4"  >
                  <img src="https://www.tunivisions.link/images/logo%20rouge.svg" width="150px" ></img>
                  
                  <br>
                  
                  <h1 style="text-align:center">Bonjour , <?php echo $name ?></h1>
                  
                  </br></br>
                  
                  <p>	
                  Vous avez récemment demandé la réinitialisation de votre mot de passe. Il vous suffit de cliquer sur le bouton ci-dessous pour en définir un nouveau.</p>
                  

                  <center>
                        </br>
                        <a href="<?php echo base_url() ?>Register/Passechange/<?php echo $userId ?>?userID=<?php echo $userId ?>&tokenId=<?php echo date('Y-m-d H:i:s') ?>" style="border-radius:50px;background-color:#d92829;display:inline-block;font-size:13px;border:none;margin:0px;font-family:Circular,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;text-align:left;text-decoration:none;padding:12px 45px!important;color:white!important;font-weight:bold!important" bgcolor="#1ED760" align="center" target="_blank" >
                              DÉFINIR UN NOUVEAU MOT DE <span class="il">PASSE</span>
                        </a>
                        </br>
                  </center>

                  

                  <p>	
                  Si vous n'avez pas demandé la réinitialisation de votre mot de passe, vous pouvez ignorer cet e-mail.
                  </p>

                  </br>

                  <p>L'équipe T-Link</p>
            </div>

            <div class="col-md-4" >
                  
            </div>

      </div>
</body>

  <script    src="https://www.tunivisions.link/assets/js/bootstrap.min.js"></script>
  
</html>