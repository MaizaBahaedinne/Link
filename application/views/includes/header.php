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


<html lang="en" class=""><!-- Mirrored from wpkixx.com/html/pitnik/search-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:50:46 GMT --><head>
	
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
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">



    <style type="text/css">
    .alligator-profile {
        object-fit: cover;
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
        object-position: 20% 50%;
        width: 40px;
        height: 40px;
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
        height: 350px;
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
	<div class="wavy-wraper">
		<div class="wavy">
		  <span style="--i:1;">T</span>
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


	<nav id="shoppingbag" class="mm-menu mm-offcanvas mm-right" aria-hidden="true"><div class="mm-panels"><div class="mm-panel mm-hasnavbar mm-opened" id="mm-13"><div class="mm-navbar"><a class="mm-title">General Setting</a></div>
				<div class="">
					<a data-toggle="modal" data-target="#qrscanner" > Scanner QR</a>
					<!--
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"> 
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"> 
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"> 
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"> 
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"> 
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6"> 
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7"> 
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8"> 
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9"> 
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10"> 
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11"> 
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					-->
				</div>
			</div></div>
			
		</nav>
		<nav id="menu" class="res-menu">
			<ul>
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
						<li><a href="pittube-detail.html" title="">Nos projet</a></li>
						<li><a href="pittube-category.html" title="">Taches</a></li>
						<li><a href="pittube-channel.html" title="">Historiques</a></li>
					</ul>
				</li>
				<li><span>Statistique</span> 
					<ul>
						<li><a href="pitpoint.html" title="">Dashboard</a></li>
						<li><a href="pitpoint-detail.html" title="">Sondage</a></li>
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
				<a href="<?php echo base_url() ?>" title=""><img src="<?php echo base_url()?>assets/images/logo.svg" width="35%" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search">
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		
		
	</div><!-- responsive header -->
	
	<div class="topbar stick" style="">
		<div class="logo">
			<a title="" href="<?php echo base_url() ?>"><img src="<?php echo base_url()?>assets/images/logo.svg" width="45%" alt=""></a>
		</div>
		<div class="top-area">
			
			<div class="top-search">
				<form method="post" class="">
					<input type="text" placeholder="Search People, Pages, Groups etc">
					<button data-ripple=""><i class="ti-search"></i></button>
				</form>
			</div>
			<div class="page-name">
			    <span><?php echo $pageTitle ?></span>
			 </div>
			<ul class="setting-area">
				<li><a href="<?php echo  base_url() ?>" title="Home" data-ripple=""><i class="fa fa-home"></i></a></li>
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="fa fa-bell"></i><em class="bg-purple">7</em>
					</a>
					<div class="dropdowns ps-container ps-theme-default ps-active-y" data-ps-id="ffcc5b9a-91d7-35c0-e615-eed1e002b8c0">
						<span>Notifications </span>
						<ul class="drops-menu">
							<!-- Notification
							<li>
								<a href="notifications.html" title="">
									<figure>
										<img src="images/resources/thumb-1.jpg" alt="">
										<span class="status f-online"></span>
									</figure>
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>commented on your new profile status</span>
										<i>2 min ago</i>
									</div>
								</a>
							</li>
						-->
						</ul>
						<a href="notifications.html" title="" class="more-mesg">afficher tous</a>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 340px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 266px;"></div></div></div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="fa fa-commenting"></i>
						<em class="bg-blue">9</em>
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
						</form>
						<span>Help with this page</span>
						<ul class="help-drop">
							<li><a href="forum.html" title=""><i class="fa fa-book"></i>Community &amp; Forum</a></li>
							<li><a href="faq.html" title=""><i class="fa fa-question-circle-o"></i>FAQs</a></li>
							<li><a href="career.html" title=""><i class="fa fa-building-o"></i>Carrers</a></li>
							<li><a href="privacy.html" title=""><i class="fa fa-pencil-square-o"></i>Terms &amp; Policy</a></li>
							<li><a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a></li>
							<li><a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a></li>
						</ul>d
					-->
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
						<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
				</li>
			</ul>
			<div class="user-img">
				<h5><?php echo $name ?></h5>
				<img class="alligator-profile" src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>"  alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					<span class="seting-title">Parametre <a href="#" title="">afficher tous</a></span>
					<ul class="log-out">
						<li><a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $uid ?>" title=""><i class="ti-user"></i> Profile</a></li>
						<li><a href="<?php echo base_url() ?>logout" title=""><i class="ti-power-off"></i>log out</a></li>
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
						<li><a href="pittube-detail.html" title="">Nos projet</a></li>
						<li><a href="pittube-category.html" title="">Taches</a></li>
						<li><a href="pittube-channel.html" title="">Historiques</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-line-chart"></i> Statistique</a>
					<ul>
						<li><a href="pitpoint.html" title="">Dashboard</a></li>
						<li><a href="pitpoint-detail.html" title="">Sondage</a></li>
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
					<div class="author-thmb">
						<a title="<?php echo $userCon->name ?>" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $userCon->name ?>">
							<img src="<?php echo base_url() ?>uploads/avatar/<?php echo $userCon->avatar ?>" class="alligator-profile" alt="">
							<span class="status f-online"></span>
						</a>
					</div>
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
					<a href="<?php echo base_url() ?>Club/clubInfo/<?php echo $clubID ?>" title="" data-toggle="tooltip" data-placement="right" data-original-title="Mon club">
						<i class="ti-heart"></i>
					</a>
				</li>

				
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 502px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 442px;"></div></div></ul>
		</div>
		<div class="left-menu-full">
			<ul class="menu-slide ps-container ps-theme-default" data-ps-id="c2e36ecf-88c9-df82-fa23-4f736ae2d32b">
				<li><a class="closd-f-menu" href="#" title=""><i class="ti-close"></i> close Menu</a></li>
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
						<li><a  title="">Calendrier</a></li>
						<li><a  title="">Nos projet</a></li>
						<li><a  title="">Taches</a></li>
						<li><a title="">Historiques</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-line-chart"></i>Statestique</a>
					<ul class="submenu">
						<li><a href="pitpoint.html" title="">Dashboard</a></li>
						<li><a href="pitpoint-detail.html" title="">Sondage</a></li>
					</ul>
				</li>
			</ul>
			<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
		</div>
	</div><!-- left sidebar menu -->
		
	
	<!--

	<a title="" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip" data-original-title="Your Cart Items">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>

	-->