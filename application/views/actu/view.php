<head>

<meta property="og:url"                content="<?php echo base_url() ;  ?>Actu/show/<?php echo $actuInfo->actuID ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $actuInfo->titre ?> " />
<meta property="og:description"        content="<?php echo $actuInfo->description ?> " />
<meta property="og:image"              content="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" />

</head>

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
                    
                    <div class="card">
                        <div class="card-title">
                            <h2><?php echo $actuInfo->titre ?>       </h2>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="col-md-6"> 
                        
                        
                        <div style="line-height: 2;font-size: 16">
                        <?php echo $actuInfo->description ?>
                        <br>
                         publié le : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->createdDate ?> </a>
                        
                        par : <a href="https://tunivisions.link/User/ProfileShow/<?php echo $actuInfo->userId ?>" > <?php echo $actuInfo->name ?> </a>
                        <br>
                        <?php echo $actuInfo->lien ?>

                        </div>
                   </div>
                    <div class="col-md-6"> 
                         <img src="<?php echo base_url() ;  ?>uploads/Actu/<?php echo $actuInfo->image ?>" class="img-fluid w-100 rounded rounded" alt="profile-bg">
                         <div class="card" >


                         </div>
                   </div>

               </div>



                   

    

                </div>
        </div>
    </div>