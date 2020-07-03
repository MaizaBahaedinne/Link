<html>
<head>
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/responsive.css">
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/dropify.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>

<body>
<div class="row" >
      <div class="col-md-4" ></div>
      <div class="col-md-4" >
<img src="https://www.tunivisions.link/images/logo%20rouge.svg" width="150px" ></img>
<br>
<h1 style="text-align:center">Bonjour , <?php echo $name ?></h1>
<br><br>
<p>	
Vous avez récemment demandé la réinitialisation de votre mot de passe. Il vous suffit de cliquer sur le bouton ci-dessous pour en définir un nouveau.</p>
<br>
<center>
<a href="<?php echo base_url() ?>Register/Passechange/<?php echo $userId ?>" style="border-radius:50px;background-color:#d92829;display:inline-block;font-size:13px;border:none;margin:0px;font-family:Circular,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;text-align:left;text-decoration:none;padding:12px 45px!important;color:white!important;font-weight:bold!important" bgcolor="#1ED760" align="center" target="_blank" >DÉFINIR UN NOUVEAU MOT DE</span> <span class="il">PASSE</span></a>
</center>
<br><br>
<p>	
Si vous n'avez pas demandé la réinitialisation de votre mot de passe, vous pouvez ignorer cet e-mail.
</p>
<br><br>
<p>L'équipe T-Link</p>

</div>
<div class="col-md-4" ></div>
</body>

  <script    src="<?php echo base_url() ;  ?>assets/js/bootstrap.min.js"></script>
  
</html>