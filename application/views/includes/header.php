<!DOCTYPE HTML>
<html lang="fr" class=""><!-- Mirrored from wpkixx.com/html/pitnik/search-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:50:46 GMT --><head>
<?php 
                     function xTimeAgo ($oldTime, $newTime) {
                      $timeCalc = strtotime($newTime) - strtotime($oldTime);
                      if ($timeCalc > (60*60*24)) {$timeCalc = round($timeCalc/60/60/24) . " jours";}
                      else if ($timeCalc > (60*60)) {$timeCalc = round($timeCalc/60/60) . " heures";}
                      else if ($timeCalc > 60) {$timeCalc = round($timeCalc/60) . " minutes";}
                      else if ($timeCalc > 0) {$timeCalc .= " seconds";}
                      return $timeCalc;
                      } 
                      ?>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<title>Tunivisions.link</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/images/fav.png"  > 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/calendar.css">    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/eventCalendar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dropify.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/color.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/calendar.css">    
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

	<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>




    <style type="text/css">
    .alligator-profile {
        object-fit: cover;
        border-radius : 100% ;
        object-position: 20% 50%;
        width: 100px;
        height: 100px;
    }
       .alligator-profile-mobile {
        object-fit: cover;
        border-radius : 100% ;
        object-position: 20% 50%;
        width: 60px;
        height: 60px;
    } 
    .alligator-profile-search {
        object-fit: cover;
        border-radius : 100% ;
        object-position: 20% 50%;
        width: 50px;
        height: 50px;
    }

    .alligator-profile-header {
        object-fit: cover;
        border-radius : 100% ;
        object-position: 20% 50%;
        width: 40px;
        height: 40px;
    }
    .alligator-profile-member {
        object-fit: cover;
        object-position: 20% 50%;
        width: 80px;
        height: 80px;
    }
    .alligator-profile-likes {
        object-fit: cover;
        border-radius : 100% ;
        object-position: 20% 50%;
        width: 30px;
        height: 30px;
    }
    .alligator-projects {
        object-fit: cover;
        object-position: 50% 50%;
        width: 100%;
        height: 250px;
    }
    .alligator-projects-banner {
        object-fit: cover;
        object-position: 50% 50%;
        width: 250px;
        height: 400px;
    }

</style>

  <script src="<?php echo base_url() ?>assets/js/main.min.js"></script>
  <script  src="<?php echo base_url() ?>assets/js/calendar.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
  <script defer src="<?php echo base_url() ?>assets/js/script.js"></script>
  <script defer src="<?php echo base_url() ?>assets/js/dropify.min.js"></script> 
  <script src="<?php echo base_url() ?>assets/js/jquery.eventCalendar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/qrcode.js"></script>
  <script src="<?php echo base_url() ?>assets/js/html5-qrcode.min.js"></script>
 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script >
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script >
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script >
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script >
     <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script >

  





        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151434993-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-151434993-1');
        </script>
     <script src="https://cdn.tiny.cloud/1/vqf4xobfz4h7owrwfo1qar98sig5s2yt4cgnuskbexcf8zqh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!--
  <script>


		window.fbAsyncInit = function() {
		    // FB JavaScript SDK configuration and setup
		    FB.init({
		      appId      : '2993377220885022', // FB App ID
		      cookie     : true,  // enable cookies to allow the server to access the session
		      xfbml      : true,  // parse social plugins on this page
		      version    : 'v3.2' // use graph api version 2.8
		    });
		    
		    // Check whether the user already logged in
		    FB.getLoginStatus(function(response) {
		        if (response.status === 'connected') {
		            //display user data
		            getFbUserData();
		             fbConn() ; 
		        }else{
		        	if (window.location.toString() != "<?php echo base_url()?>User/Facebook" ){
		        		<?php if ($SA != 1) {   ?>
		      	window.location.replace("<?php echo base_url()?>User/Facebook") ;
		        	
		       		<?php } ?>
		        }
		        }
		    });
		};

		// Load the JavaScript SDK asynchronously
		(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		// Facebook login with JavaScript SDK
		function fbLogin() {
		    FB.login(function (response) {
		        if (response.authResponse) {
		            // Get and display the user profile data
		            getFbUserData();
		             fbConn() ; 
		        } else {
		            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
		        }
		    }, {scope: 'email'});
		}

		// Fetch the user profile data from facebook
		function getFbUserData(){
		    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
		    function (response) {
		    	console.log(response) ;
		        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
		        document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
		        document.getElementById('status').innerHTML = '<p>Thanks for logging in, ' + response.first_name + '!</p>';
		        document.getElementById('userData').innerHTML = '<h2>Facebook Profile Details</h2><p><img src="'+response.picture.data.url+'"/></p><p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
		    });
		}

		// Logout from facebook
		function fbLogout() {
		    FB.logout(function() {
		        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
		        document.getElementById('fbLink').innerHTML = '<img src="images/fb-login-btn.png"/>';
		        document.getElementById('userData').innerHTML = '';
		        document.getElementById('status').innerHTML = '<p>You have successfully logout from Facebook.</p>';
		    });
		}
	</script>
 !-->
</head>
<body >
	<div class="wavy-wraper" onload="getLocation()" style="backdrop-filter: blur(6px);" >
		<div class="wavy" style=" background: #34465d ; ">
		  <span style="--i:1;">Tunivisions</span>
		  <span style="--i:2;">.</span>
		  <span style="--i:3;">L</span>
		  <span style="--i:4;">i</span>
		  <span style="--i:5;">n</span>
		  <span style="--i:6;">k</span>
		  <span style="--i:7;">.</span>
		  <span style="--i:8;">.</span>
		  <span style="--i:9;">.</span>
		</div>
	</div>


	<nav id="shoppingbag" class="mm-menu mm-offcanvas mm-right" aria-hidden="true"><div class="mm-panels"><div class="mm-panel mm-hasnavbar mm-opened" id="mm-13"><div class="mm-navbar"><a class="mm-title">Réglage général</a></div>
				<div class="setting-row">
					<a data-toggle="modal" data-target="#qrscanner" >Scanner QR</a>
				</div>
			
					 <div class="setting-row">
							<span>Activer la localisation</span>
							<input type="checkbox" id="localisation" onclick="getLocation()" checked> 
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
				
				</div>
			</div></div>
			
		</nav>
		<nav id="menu" class="res-menu">
			<ul>
				<li style="text-align: center; padding-top: 0.5cm" >
					<a  href="<?php echo base_url() ?>User/ProfileShow/<?php echo $uid ?>">
						<img class="alligator-profile-mobile"  src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>"  alt="">
						<h6><?php echo $name ?></h6>
						<p><?php echo $role_text ?> <?php echo $cellule ?> </p>
						<p><b>Tuni-ID</b> : <?php echo $uid ?> </p>
					</a>
					<i><a href="<?php echo base_url() ?>logout" title="" class="btn btn-danger btn-sm"><i class="ti-power-off"></i> Se deconnecter</a></i>
				</li>
				<br>
				<li><span>Foundation</span> 
					<ul>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/-1" title="">Board</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/0" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/1" title="">High School</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/2" title="">Alumni</a></li>
						<li><a href="<?php echo base_url() ?>Club" title="">Clubs</a></li>
					</ul>
				</li>
				<li><span>Projets</span> 
					<ul>
						<li><a href="<?php echo base_url() ?>Project" title="">Calendrier</a></li>
						<li><a href="" title="">Nos projet</a></li>
					</ul>
				</li>
				<li><span>Statistique</span> 
					<ul>
						<li><a href="<?php echo base_url() ?>Statistique" title="">Dashboard</a></li>
						<?php if($SA == 1 || $SA == 2 ){ ?><li><a href="<?php echo base_url() ?>Project/projectStats/3" title="">University</a></li><?php } ?>
						<?php if($SA == 1 || $SA == 2 ){ ?><li><a href="<?php echo base_url() ?>Project/projectStats/4" title="">High School</a></li><?php } ?>
					</ul>
				</li>
				<li><span>Classement</span>
					<ul>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/3" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/4" title="">High school</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/ClassementWeAre" title="">We are carthage</a></li>
					</ul>
				</li>
				<?php if($SA == 1 || $SA == 2 ){ ?>
				<li><span>Utilisateurs</span>
					<ul>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/3" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/3" title="">High School</a></li>
						<li><span>Leaders</span>
							<ul>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/3" title="">Foundation</a></li>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/3" title="">University</a></li>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/3" title="">High School</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<?php } ?>
				<li><span>Store</span>
					<ul>
						<li><a href="<?php echo base_url() ?>Store" title="Store">Store</a></li>
						<?php if($SA == 1 || $userC->userId == 3837  ) { ?>
						<li><a href="<?php echo base_url() ?>Store/dashboard" title="Dashboard">dashboard</a></li>
						<?php } ?>
					</ul>
				</li>
			</ul>
		</nav>

	</div><div class="theme-layout">
	
	<div class="responsive-header">
		<div class="mh-head first mm-sticky mh-btns-left mh-btns-right mh-sticky" style="">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">

				<a href="<?php echo base_url() ?>Posts" title="">
					<img src="<?php echo base_url()?>assets/images/logo2.svg" width="75%" alt="">
				</a>

			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form" method="post" action="<?php echo base_url() ?>Search" >
				<input placeholder="Chercher" type="text" name="text" required>
			</form>
		</div>
		
		
	</div><!-- responsive header -->
	
	<div class="topbar transparent stick" style="">
		<div class="logo">
			<a title="" href="<?php echo base_url() ?>Posts">
				<img src="<?php echo base_url()?>assets/images/logo3.svg"  width="90%" alt="">
			</a>
		</div>
		<div class="top-area">
			
			<div class="top-search">
				<form method="post"  action="<?php echo base_url() ?>Search" >
					<input type="text" name="text" placeholder="Tunimateurs,des clubs, des projets etc" required>
					<button data-ripple=""><i class="ti-search"></i></button>
				</form>
			</div>
			<div class="page-name">
			    <span><?php echo $pageTitle ?></span>
			 </div>
			<ul class="setting-area">
				<li><a href="<?php echo  base_url() ?>" title="Home" ><i class="fa fa-home"></i></a></li>
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="fa fa-bell"></i>
							<?php if ($notifRecordsNumber > 0){ ?>
								<em class="bg-purple"><?php echo $notifRecordsNumber  ?></em>
							<?php } ?>
					</a>
					<div class="dropdowns ps-container ps-theme-default ps-active-y" data-ps-id="ffcc5b9a-91d7-35c0-e615-eed1e002b8c0">
						<span>Notifications </span>
						<ul class="drops-menu">

							<?php foreach ($notifRecords as $notif ) {	?> 
							
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-1.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6><?php // echo $notif->name	?></h6>
										<span><?php echo $notif->text	?></span>
										<i>il y a <?php echo xTimeAgo ($notif->dateNotif, date('Y-m-d H:i:s') )  ?></i>
									</div>
								</a>
							</li>
						
						<?php 	} ?>
						</ul>
						<a href="" title="" class="more-mesg">afficher tous</a>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 340px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 266px;"></div></div></div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="fa fa-commenting"></i>
						<!--<em class="bg-blue">9</em>-->
					</a>
					<div class="dropdowns ps-container ps-theme-default ps-active-y" data-ps-id="7ee2fd1f-956e-f926-f7f7-8212f43bd51d">
						<span>New Messages </span>
						<ul class="drops-menu">
							<!--
							<li>
								<a class="show-mesg" href="#" title="">
									<figure>
										<img src="images/resources/thumb-1.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span><i class="ti-check"></i> Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
							</li>
							-->
						</ul>
						<a href="chat-messenger.html" title="" class="more-mesg">View All</a>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 340px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 323px;"></div></div></div>
				</li>
				
				<li><a href="#" title="Help" data-ripple=""><i class="fa fa-question-circle"></i></a>
					<div class="dropdowns helps ps-container ps-theme-default" data-ps-id="878c7c9b-24f9-5906-80c0-6b685dd4e566">
						<!--
						<span>Quick Help</span>
						<form method="post">
							<input type="text" placeholder="How can we help you?">
						</form>-->
						<span>Guide d'utilisation</span>
						<ul class="help-drop">
							<li><a href="<?php echo base_url() ?>Support/projet" title=""><i class="fa fa-book"></i>Gestion de projet</a></li>
							<!--<li><a href="faq.html" title=""><i class="fa fa-question-circle-o"></i>FAQs</a></li>
							<li><a href="career.html" title=""><i class="fa fa-building-o"></i>Carrers</a></li>
							<li><a href="privacy.html" title=""><i class="fa fa-pencil-square-o"></i>Terms &amp; Policy</a></li>
							<li><a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a></li>
							<li><a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a></li>-->
					
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
						<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
				</li>
			</ul>
			<div class="user-img">
				<h5><?php echo $name ?></h5>
				<img class="alligator-profile-header" src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>"  alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<span class="seting-title">Parametre <a href="#" title="">afficher tous</a></span>
					<ul class="log-out">
						<li> <a> <b>Tuni-ID :</b> <?php echo $uid?></a></li>
						
						<li>
							<a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $uid ?>" title="">
								<i class="ti-user"></i> Profile
							</a>
						</li>
						<li><a href="<?php echo base_url() ?>logout" title=""><i class="ti-power-off"></i>Se deconnecter</a></li>
					</ul>
				</div>
			</div>
			<span class="ti-settings main-menu" data-ripple=""></span>
		</div>
		<nav>
			<ul class="nav-list">
				<li><a class="" href="#" title=""><i class="fa fa-home"></i> Fondation</a>
					<ul>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/-1" title="">Board</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/0" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/1" title="">High School</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/2" title="">Alumni</a></li>
						<li><a href="<?php echo base_url() ?>Club" title="">Clubs</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-calendar"></i> Projet</a>
					<ul>
						<li><a href="<?php echo base_url() ?>Project" title="">Calendrier</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/2" title="">Nos projet</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-line-chart"></i> Statistique</a>
					<ul>
						<li><a href="<?php echo base_url() ?>Statistique" title="">Dashboard</a></li>
						<?php if($SA == 1 || $SA == 2 ){ ?><li><a href="<?php echo base_url() ?>Project/projectStats/3" title="">University</a></li><?php } ?>
						<?php if($SA == 1 || $SA == 2 ){ ?><li><a href="<?php echo base_url() ?>Project/projectStats/4" >High School</a></li><?php } ?>
					</ul>
				</li>
				<li><a class="" href="#" title=""><<i class="fa fa-line-chart"></i>Classement</a>
					<ul>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/3" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/4" title="">High school</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/ClassementWeAre" title="">We are carthage</a></li>
					</ul>
				</li>
				<?php if($SA == 1 || $SA == 2 ){ ?>
				<li><span>Utilisateurs</span>
					<ul>
						<li><a href="<?php echo base_url() ?>userListing/3" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>serListing/4" title="">High School</a></li>
						<li><span>Leaders</span>
							<ul>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/2" title="">Foundation</a></li>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/3" title="">University</a></li>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/4" title="">High School</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<?php } ?>

				<li><span>Store</span>
					<ul>
						<li><a href="<?php echo base_url() ?>Store" title="Store">Store</a></li>
						<?php if($SA == 1 || $userC->userId == 3837  ) { ?>
						<li><a href="<?php echo base_url() ?>Store/dashboard" title="Dashboard">dashboard</a></li>
						<?php } ?>
					</ul>
				</li>

			</ul>
			
		</nav><!-- nav menu -->
	</div><!-- topbar -->
	
	<div class="fixed-sidebar right">
		<div class="chat-friendz">
			<ul class="chat-users ps-container ps-theme-default ps-active-y" data-ps-id="fd5ebdca-9767-1b46-7fe2-89ffe41fb856">
				
				<?php foreach ($ConnrectedUser as $userCon ) {?>
				<li>
					<a href="<?php echo   base_url()  ?>User/ProfileShow/<?php echo $userCon->userId ?>">
						<div class="author-thmb">
							
								<img src="<?php echo base_url() ?>uploads/avatar/<?php echo $userCon->avatar ?>" class="alligator-profile-header"   title="<?php echo $userCon->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $userCon->name ?>">
								<span class="status f-online"></span>
							
						</div>
					</a>
				</li>
				<?php } ?>
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
			<div class="ps-scrollbar-y-rail" style="top: 0px; height: 502px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 424px;"></div></div>
		</ul>
			
		</div>
	</div><!-- right sidebar user chat -->
	
	<div class="fixed-sidebar left">
		<div class="menu-left">
			<ul class="left-menu ps-container ps-theme-default ps-active-y" data-ps-id="23d85d96-c0bc-e232-0eb2-c91766d61d3c">
				<li>
					<a class="menu-small" href="#" title="">
						<i class="ti-menu"></i>
					</a>
				</li>
				
				<li>
					<a href="<?php echo base_url() ?>Club" title="" data-toggle="tooltip" data-placement="right" data-original-title="liste des clubs">
						<i class="ti-list"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>project" title="Projets" data-toggle="tooltip" data-placement="right" data-original-title="Projets">
						<i class="ti-calendar"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>Club/clubInfo/<?php echo $clubID ?>" title="" data-toggle="tooltip" data-placement="right" data-original-title="<?php if ($userC->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$userC->ClubName ; ?>">
						<i class="ti-heart"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>Store" title="" data-toggle="tooltip" data-placement="right" data-original-title="Store">
						<i class="shopping-cart-full"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>Support/projet" title="" data-toggle="tooltip" data-placement="right" data-original-title="Support">
						<i class="ti-help">
						</i>
					</a>
				</li> 

				
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 502px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 442px;"></div></div></ul>
		</div>
		<div class="left-menu-full">
			<ul class="menu-slide ps-container ps-theme-default" data-ps-id="c2e36ecf-88c9-df82-fa23-4f736ae2d32b">
				<li><a class="closd-f-menu" href="#" title=""><i class="ti-close"></i> Fermer le menu</a></li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-home"></i> Fondation</a>
					<ul class="submenu">
						<li><a href="<?php echo base_url() ?>Club/clubInfo/-1" title="">Board</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/0" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/1" title="">High School</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/2" title="">Alumni</a></li>
						<li><a href="<?php echo base_url() ?>Club" title="">Clubs</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-calendar"></i> Projets</a>
					<ul class="submenu">
						<li><a  href="<?php echo base_url() ?>Project" >Calendrier</a></li>
						<li><a href="<?php echo base_url() ?>Club/clubInfo/<?php echo $clubID ?>" >Nos projet</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-line-chart"></i>Statistique</a>
					<ul class="submenu">
						<li><a href="<?php echo base_url() ?>Statistique" title="">Dashboard</a></li>
						<?php if($SA == 1 || $SA == 2 ){ ?><li><a href="<?php echo base_url() ?>Project/projectStats/3" title="">University</a></li><?php } ?>
						<?php if($SA == 1 || $SA == 2 ){ ?><li><a href="<?php echo base_url() ?>Project/projectStats/4" >High School</a></li><?php } ?>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-line-chart"></i>Classement</a>
					<ul class="submenu">
						<li><a href="<?php echo base_url() ?>Scoring/Classement/3" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/Classement/4" title="">High school</a></li>
						<li><a href="<?php echo base_url() ?>Scoring/ClassementWeAre" title="">We are carthage</a></li>
					</ul>
				</li>
				<?php if($SA == 1 || $SA == 2 ){ ?>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-users"></i>Utilisateurs</a>
					<ul>
						<li><a href="<?php echo base_url() ?>userListing/3" title="">University</a></li>
						<li><a href="<?php echo base_url() ?>serListing/4" title="">High School</a></li>
						
							
								<li><a href="<?php echo base_url() ?>User/userListingLeders/2" title="">Leaders Foundation</a></li>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/3" title="">Leaders University</a></li>
								<li><a href="<?php echo base_url() ?>User/userListingLeders/4" title="">Leaders High School</a></li>
						
						
					</ul>
				</li>
				<?php } ?>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fas fa-store"></i>Store</a>
					<ul>
						<li><a href="<?php echo base_url() ?>Store" title="Store">Store</a></li>
						<?php if($SA == 1 || $userC->userId == 3837  ) { ?>
						<li><a href="<?php echo base_url() ?>Store/dashboard" title="Dashboard">dashboard</a></li>
						<?php } ?>
					</ul>
				</li>

	
			</ul>
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
		</div>
	</div><!-- left sidebar menu -->
		
	
	<!--

	<a title="" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip" data-original-title="Your Cart Items">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>

	-->

