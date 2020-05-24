
<meta property="og:url"                content="<?php echo base_url() ;  ?>Actu/show/<?php echo $actuInfo->actuID ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $actuInfo->titre ?> " />
<meta property="og:description"        content="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" />
<meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />


<div class="header-for-bg">
    <div class="background-header position-relative">
       
        <div class="title-on-header">
            <div class="data-block">
                <h2><?php echo $actuInfo->titre ?>
                    
                </h2>
            </div>
        </div>
    </div>
</div>

<div id="content-page" class="content-page">
    <div class="container">
                <div class="row" style="background-color: white ">
                    
                 
                    <div class="col-md-6"> 
                        <h2><?php echo $actuInfo->titre ?>       </h2>
                        <hr>
                        <div style="line-height: 1.8;">
                        <?php echo $actuInfo->description ?>
                        </div>
                   </div>
                    <div class="col-md-6"> 
                         <img src="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" class="img-fluid w-100 rounded rounded" alt="profile-bg">
                   </div>





                    <div class="col-md-6"> 
                        
                        publié le : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->createdDate ?> </a>
                        
                        par : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->name ?> </a>

                   </div>


    

                </div>
        </div>
    </div>