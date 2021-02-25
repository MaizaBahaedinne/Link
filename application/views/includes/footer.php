<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="widget">
            <div class="foot-logo">
              <div class="logo">
                <a href="<?php echo base_url()?>" title=""><img src="<?php echo base_url() ?>assets/images/logo2.svg" width="150" alt=""></a>
              </div>  
              <p>
                Le trio a pris cette simple idée et l'a intégrée dans la plate-forme du premier réseau estudiantin en Tunisie.
              </p>
            </div>
            <ul class="location">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Association Tunivisions , 32 B (2eme étage) centre Millenium route de la Marsa, Tunisie.</p>
              </li>
              <li>
                <i class="fa fa-phone"></i>
                <p>+216 58 465 249</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widget">
            <div class="widget-title"><h4>follow</h4></div>
            <ul class="list-style">
              <li><i class="fab fa-facebook"></i> <a href="https://www.facebook.com/Tunivisionsfoundation/" title="">facebook</a></li>
              <li><i class="fab fa-twitter"></i><a href="hhttps://twitter.com/TnvFoundation" title="">twitter</a></li>
              <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/tunivisions_foundation/" title="">instagram</a></li>
              <li><i class="fab fa-google-plus"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widget">
            <div class="widget-title"><h4>Naviguer</h4></div>
            <ul class="list-style">
              <!--
              <li>developé par </li>
              <li><a href="contact.html" title="">contact us</a></li>
              <li><a href="terms.html" title="">terms &amp; Conditions</a></li>
              <li><a href="#" title="">RSS syndication</a></li>
              <li><a href="sitemap.html" title="">Sitemap</a></li>
            -->
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widget">
            <div class="widget-title"><h4>Liens utiles</h4></div>
            <ul class="list-style">
             
              <li><a href="<?php echo base_url() ?>project" title="">Projets</a></li>
              <li><a href="<?php echo base_url() ?>Club/clubInfo/<?php echo $clubID?>" title=""><?php if ($userC->clubID > 5 ) {echo "club ";}  echo 'Tunivisions '.$userC->ClubName ; ?></a></li>
              <li><a href="<?php echo base_url() ?>Club" title="">Clubs</a></li>

            </ul>
            
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="widget">
            <div class="widget-title"><h4>Equipe</h4></div>
            <ul class="colla-apps">
              
              <li>
                <a href="https://tunivisions.link/User/ProfileShow/2"><img src="<?php echo base_url()?>uploads/avatar/xavatar__MAIZA,P20Bahaedinne_IMG_1257.jpg.pagespeed.ic.ZCoZ3Eb2B1.webp" class="alligator-profile-likes"> 
                  <div >Bahaedinne Maiza <br><small>Manager</small> <div>
                </a>
              </li>
              <li>
                <a href="https://tunivisions.link/User/ProfileShow/4320">
                  <img src="<?php echo base_url()?>uploads/avatar/FB_IMG_1581494137538.jpg27338373" class="alligator-profile-likes"> 
                  <div  >Ayman Karray <br><small>Collaborateur Dévelopement Web </small> <div>
                </a>
              </li>
              <li>
                <a href="https://tunivisions.link/User/ProfileShow/4875"><img src="<?php echo base_url()?>uploads/avatar/inbound4907866068062005621.jpg27847992" class="alligator-profile-likes"> 
                  <div  >Imen Abassi <br><small>Collaboratrice Dévelopement Mobile </small> <div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

<div class="bottombar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span class="copyright">© Tunivisions.link 2020. All rights reserved.</span>
          <i><img src="<?php echo base_url() ?>assets/images/logo2.svg" width="50" alt=""></i>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="side-panel">
    <h4 class="panel-title">Options</h4>

 
  <div class="setting-row">
        <a data-toggle="modal" data-target="#qrscanner" > Scanner QR</a>

  </div>
  <div class="setting-row">
         <a  onclick="getLocation()" >Activer la localisation</a>
  </div>
  <!--
    
    <form method="post">
      <div class="setting-row">
        <span>use night mode</span>
        <input type="checkbox" id="nightmode1"> 
        <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Notifications</span>
        <input type="checkbox" id="switch22"> 
        <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Notification sound</span>
        <input type="checkbox" id="switch33"> 
        <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>My profile</span>
        <input type="checkbox" id="switch44"> 
        <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Show profile</span>
        <input type="checkbox" id="switch55"> 
        <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
      </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
      <div class="setting-row">
        <span>Sub users</span>
        <input type="checkbox" id="switch66"> 
        <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>personal account</span>
        <input type="checkbox" id="switch77"> 
        <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Business account</span>
        <input type="checkbox" id="switch88"> 
        <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Show me online</span>
        <input type="checkbox" id="switch99"> 
        <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Delete history</span>
        <input type="checkbox" id="switch101"> 
        <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
      </div>
      <div class="setting-row">
        <span>Expose author name</span>
        <input type="checkbox" id="switch111"> 
        <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
      </div>
    </form>
  </div>
--> <div class="popup-wraper1">
    <div class="popup direct-mesg">
      <span class="popup-closed"><i class="ti-close"></i></span>
      <div class="popup-meta">
        <div class="popup-head">
          <h5>Send Message</h5>
        </div>
        <div class="send-message">
          <form method="post" class="c-form">
            <input type="text" placeholder="Sophia">
            <textarea placeholder="Write Message"></textarea>
            <button type="submit" class="main-btn">Send</button>
          </form>
          <div class="add-smiles">
            <div class="uploadimage">
              <i class="fa fa-image"></i>
              <label class="fileContainer">
                <input type="file">
              </label>
            </div>
            <span title="add icon" class="em em-expressionless"></span>
            <div class="smiles-bunch">
              <i class="em em---1"></i>
              <i class="em em-smiley"></i>
              <i class="em em-anguished"></i>
              <i class="em em-laughing"></i>
              <i class="em em-angry"></i>
              <i class="em em-astonished"></i>
              <i class="em em-blush"></i>
              <i class="em em-disappointed"></i>
              <i class="em em-worried"></i>
              <i class="em em-kissing_heart"></i>
              <i class="em em-rage"></i>
              <i class="em em-stuck_out_tongue"></i>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div><div class="strp-spinner-move" style="display: none;"><div class="strp-spinner" style="display: none;"><div class="strp-spinner-rotate" style="animation: 1s steps(80) 0s infinite normal none running strp-spinner-spin;"><div class="strp-spinner-frame" style="opacity: 0.01; transform: rotate(4.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.03; transform: rotate(9deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.04; transform: rotate(13.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.05; transform: rotate(18deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.06; transform: rotate(22.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.08; transform: rotate(27deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.09; transform: rotate(31.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.1; transform: rotate(36deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.11; transform: rotate(40.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.13; transform: rotate(45deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.14; transform: rotate(49.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.15; transform: rotate(54deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.16; transform: rotate(58.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.18; transform: rotate(63deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.19; transform: rotate(67.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.2; transform: rotate(72deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.21; transform: rotate(76.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.23; transform: rotate(81deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.24; transform: rotate(85.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.25; transform: rotate(90deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.26; transform: rotate(94.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.28; transform: rotate(99deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.29; transform: rotate(103.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.3; transform: rotate(108deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.31; transform: rotate(112.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.33; transform: rotate(117deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.34; transform: rotate(121.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.35; transform: rotate(126deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.36; transform: rotate(130.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.38; transform: rotate(135deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.39; transform: rotate(139.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.4; transform: rotate(144deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.41; transform: rotate(148.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.43; transform: rotate(153deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.44; transform: rotate(157.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.45; transform: rotate(162deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.46; transform: rotate(166.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.48; transform: rotate(171deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.49; transform: rotate(175.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.5; transform: rotate(180deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.51; transform: rotate(184.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.53; transform: rotate(189deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.54; transform: rotate(193.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.55; transform: rotate(198deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.56; transform: rotate(202.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.58; transform: rotate(207deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.59; transform: rotate(211.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.6; transform: rotate(216deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.61; transform: rotate(220.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.63; transform: rotate(225deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.64; transform: rotate(229.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.65; transform: rotate(234deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.66; transform: rotate(238.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.68; transform: rotate(243deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.69; transform: rotate(247.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.7; transform: rotate(252deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.71; transform: rotate(256.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.73; transform: rotate(261deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.74; transform: rotate(265.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.75; transform: rotate(270deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.76; transform: rotate(274.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.78; transform: rotate(279deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.79; transform: rotate(283.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.8; transform: rotate(288deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.81; transform: rotate(292.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.83; transform: rotate(297deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.84; transform: rotate(301.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.85; transform: rotate(306deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.86; transform: rotate(310.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.88; transform: rotate(315deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.89; transform: rotate(319.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.9; transform: rotate(324deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.91; transform: rotate(328.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.93; transform: rotate(333deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.94; transform: rotate(337.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.95; transform: rotate(342deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.96; transform: rotate(346.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.98; transform: rotate(351deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 0.99; transform: rotate(355.5deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div><div class="strp-spinner-frame" style="opacity: 1; transform: rotate(360deg);"><div class="strp-spinner-line" style="background: rgb(117, 122, 149);"></div></div></div></div></div><div class="strp-window strp-measured strp-window-skin-strip"><div class="strp-pages"></div><div class="strp-nav strp-nav-previous" style="display: none;"><div class="strp-nav-button" style="display: none;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-nav strp-nav-next" style="display: none;"><div class="strp-nav-button" style="display: none;"><div class="strp-nav-button-background"></div><div class="strp-nav-button-icon"></div></div></div><div class="strp-close"><div class="strp-close-background"></div><div class="strp-close-icon"></div></div></div><div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 0; cursor: pointer;"><i class="ti-arrow-up"></i></div></div>
  
  
  <!-- side panel -->
  
  <!-- send message popup -->
  
  

  

<!-- Mirrored from wpkixx.com/html/pitnik/search-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 12:50:51 GMT -->
<div id="mm-blocker" class="mm-slideout"></div></body>
  
<script type="text/javascript">
  
        $(function () {
          $('.table').DataTable(  {
             
          "language": {
              "sEmptyTable":     "Aucune donnée disponible dans le tableau",
              "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
              "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
              "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
              "sInfoPostFix":    "",
              "sInfoThousands":  ",",
              "sLengthMenu":     "Afficher _MENU_ éléments",
              "sLoadingRecords": "Chargement...",
              "sProcessing":     "Traitement...",
              "sSearch":         "Rechercher :",
              "sZeroRecords":    "Aucun élément correspondant trouvé",
              "oPaginate": {
                  "sFirst":    "Premier",
                  "sLast":     "Dernier",
                  "sNext":     "Suivant",
                  "sPrevious": "Précédent"
              },
              "oAria": {
                  "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                  "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
              },
              "select": {
                      "rows": {
                          "_": "%d lignes sélectionnées",
                          "0": "Aucune ligne sélectionnée",
                          "1": "1 ligne sélectionnée"
            } 
          }
        },        
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        } );
    } );

</script>



      <div class="modal fade" id="TuniFan">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Invitez des nouveaux membres</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             <?php if($userC->SenJun == 3 || $SA == 1 ){  ?>
                 
                 <h4 style="text-align: center;" >Les inscriptions sont clôturées</h4>
                 <p style="text-align: center;" >Si vous avez besoin de prolonger la date .<br>merci de la demande par un email : <a href="mailto:tunivisions.link@gmail.com"><b>tunivisions.link@gmail.com</b></a> avec <b>la date prévue et le Tuni-ID du président de club</b>  </p>
              <?php } if($userC->SenJun != 3  ) { ?>
              <p style="text-align: center;" >merci de scaner ce QR-code avec une application mobile<br> <b>Android / iOS / HarmonyOs</b>.</p>
              <div id="qrcode" style="text-align: center;"></div>
              
              
              <script type="text/javascript">
                  var qrcode = new QRCode(document.getElementById("qrcode"), {
                    width : 350,
                    height : 350
                  });

                  function makeCode1 () {    

                    qrcode.makeCode("<?php echo base_url() ;?>Register?var1=<?php echo $uid ?>&var4=<?php echo  Date('Y-m-d') ?>&var2=<?php echo $clubID ?>&var3=1");
                  }



                  makeCode1();

                  $("#text").
                    on("blur", function () {
                      makeCode1();
                    }).
                    on("keydown", function (e) {
                      if (e.keyCode == 13) {
                        makeCode1();
                      }
                    });


                   
                </script>


                <br>
                <div class="row">
                  <div class="col-md-2">
                    <a class="btn btn-primary" href="fb-messenger://share/?link=<?php echo base_url() ;?>Register?var1=<?php echo $uid ?>%26var4=<?php echo  Date('Y-m-d') ?>%26var2=<?php echo $clubID ?>%26var3=1" target="_blank" ><i class="fab fa-facebook-messenger"></i></a>
                  </div>
                  <div class="col-md-2">
                    <a class="btn btn-success" href="whatsapp://send?text=<?php echo base_url() ;?>Register?var1=<?php echo $uid ?>%26var4=<?php echo  Date('Y-m-d') ?>%26var2=<?php echo $clubID ?>%26var3=1" target="_blank" ><i class="fab fa-whatsapp"></i></a>
                  </div>  
                </div>
                <hr>
                <p style="text-align: center;">ce code reste valable jusqu'à<br> <b style="color: red"><?php echo date('d/m/Y')?> 23:59:00</b></p>
                

              <?php } ?>              
              
   



            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->

 <div class="modal fade" id="qrscanner">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Scanner QR Code</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div style="width: auto;" id="readerqr"></div>
              <div style="width: auto; display: none ; " id="readerValid"  >
                <h3 style="text-align: center;" >Bravo</h3>
                <p id="readerTxt" style="text-align: center;">Votre participation a été valider avec succées</p>
              </div>
              <script type="text/javascript">
  
                function onScanSuccess(qrCodeMessage) {
                  
                  $.ajax( "<?php echo base_url() ?>"+qrCodeMessage+"/<?php echo $uid ?>" )
                        .done(function(data) {
                          
                          alert( data );
                          alert( "On va actuliser cette page" );
                          location.reload();
                        })
                        .fail(function() {
                          alert( "error" );
                        });

                               

              }

                function onScanError(errorMessage) {
                    // handle on error condition, with error message
                }

                var html5QrcodeScanner = new Html5QrcodeScanner(
                    "readerqr", { fps: 10, qrbox: 250 });
                html5QrcodeScanner.render(onScanSuccess, onScanError);

          </script>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->





  <script>
    tinymce.init({
      selector: '#TinyMCE',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
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



     <div class="modal fade" id="AlumniGO">
        <div class="modal-dialog ">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Formulaire d'integration des nouveaux Alumni </h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
             
              <form class="c-form" method="post" action="<?php echo base_url()?>User/goAlumni" >
              <label> Choisir une unité : </label>
              <select class="form-control"  name="cellule" required>
                   <option value="" ></option>
                   <option value="Unité developement T-Link" >Unité developement T-Link </option>
                   <option value="Unité developement site web" >Unité developement site web </option>
                   <option value="Unité developement strategique" >Unité developement strategique </option>
                   <option value="Unité statistique" >Unité statistique </option>
                   <option value="Unité création de contenu" >Unité création de contenu </option>
                   <option value="Unité communication" >Unité communication </option>
                   <option value="Unité reglementation et proccess" >Unité reglementation et proccess </option>
                   <option value="Unité juridique" >Unité juridique </option>
                   <option value="Unité accadémique" >Unité accadémique </option>
                   <option value="Unité des partenariats" >Unité des partenariats </option>
                   <option value="Unité des relations internationale" >Unité des relations internationale </option>
                   <option value="Unité incubateur" >Unité incubateur </option>
                   <option value="Unité Fund raising" >Unité Fund raising </option>
                </select>
                <hr>
                <span><input type="checkbox" name="" required > &nbsp;Je suis <?php echo $name ?> je quitte mon club et je rejoins l'Alumni Chapter </span>
                <br><br>
                <input type="submit" value="valider">
              </form>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
    </div><!-- fade Modal -->

    <script type="text/javascript">
      <?php if($userC->facebook == '' ){ ?>
          $(window).on('load', function() {
              $('#Social').modal('show');
          });
      <?php } ?>
    </script>
  
 
    <div class="modal fade" id="Social">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Mise à jour des cordonnées</h3>
    </div>
    <div class="modal-body">
      <form class="c-form" method="post" action="<?php echo base_url() ?>User/updateSocialMedia">
       <label>Facebook</label>
       <input type="url" name="facebook" pattern="https://www\.facebook\.com\/(.+)" placeholder="Lien profile facebook"   required>
       <label>Instagram</label>
       <input type="url" name="instagram" pattern="https://www\.instagram\.com\/(.+)" placeholder="Lien profile instagram" >
       <label>Linkedin</label>
       <input type="url" name="linkedin" pattern="https://www\.linkedin\.com\/(.+)" placeholder="Lien profile linkedin" >
       <hr>
       <input type="submit"  class="btn btn-primary" value="Enregistrer">
       </form>
    </div>
    <div class="modal-footer">
        
       
    </div>
    
      
    </div>



</html>