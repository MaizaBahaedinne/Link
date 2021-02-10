<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   
</div>
<!-- end:: Content Head -->                 
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first">
    <!--begin: Form Wizard Nav -->
   
    <!--end: Form Wizard Nav -->

    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-grid">
                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                    <!--begin: Form Wizard Form-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    
    <section class="kt-container">
    <br>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Reunion/editReunion/<?php echo $reunionRecord->reunionId  ?>" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">

                            



                              

                            <br>
                            <div class="row">
                            <div class="col-md-4">                                
                             </div>

                            <div class="col-md-4">                                
                            <h1><?php echo $reunionRecord->Sujet  ?></h1>
                                 </div>

                            <div class="col-md-4">                                
                                 </div>

                            <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Le</label>
                                        <label for="fname"> <?php echo $reunionRecord->dateDo  ?> </label>
                                        <label for="fname"> <?php echo $reunionRecord->timeDo  ?> </label>
                                        <label for="fname"> à <?php echo $reunionRecord->local  ?> </label>
                                    </div>
                                </div>

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname"> Moderé par <?php echo $reunionRecord->userName  ?></label>
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                         <h4> Sujet : <span> <?php echo  $reunionRecord->Sujet ?> </span> </h4>
                                       
                                    </div>
                                    
                                </div>
                                
                                


                              
                            
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <h6>procès-verbal</h6>
                                        <br>
                                       <?php echo $reunionRecord->PV; ?>   

                                    </div>
                                </div>

                                <div class="col-md-12">
                                <h3> Absence </h3>
                                </div>
                                <hr>
                                <style type="text/css">
                                                           .alligator-turtle {
                                                      object-fit: cover;
                                                      object-position: 50% 0;

                                                      width: 25px;
                                                      height: 25px;
                                                    }
                                                    </style>
                                     <div class="row">                       
                                    <?php foreach ($Absences as $a ) {
                                    ?>
                                    <div class="col-md-6">
                                    <img class="kt-radius-100 alligator-turtle" src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $a->avatar?>"> &nbsp; <span><?php echo  $a->name ?></span>  
                                    </div>
                                    <?php
                                    }
                                    ?>                                
                                </div>
                                </div>
                            
                               

                             </div>   
                                

                            </div>
                            
                           

                           
         
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            
                        </div>
                    </form>
                </div>
            </div>

        </div>  



  
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end:: Content -->              
</div>

<script src="<?php echo base_url(); ?>custom/apps/user/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>custom/apps/user/assets/js/demo12/scripts.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>custom/apps/user/assets/js/demo12/pages/custom/user/add-user.js" type="text/javascript"></script>
<script type="text/javascript">
    function submit_by_id() {
    document.getElementById('kt_apps_user_add_user_form').submit() ;
    }
</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
