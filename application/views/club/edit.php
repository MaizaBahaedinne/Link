
                              
<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Modification du club <?php echo $clubInfo->name ?> </h4>
                    <ul class="faved-page">
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
                              <?php $this->load->helper("form"); ?>
                    <form role="form"  id="editClub" action="<?php echo base_url() ?>Club/edit/<?php echo $clubInfo->clubID ?>" method="post" class="c-form" enctype="multipart/form-data">
                        


                        <label>Nom</label>
                        <input type="text" name="name" value="<?php echo $clubInfo->name ?>" class="form-control" >
                       
                        <label>Region</label>
                        <input type="text" name="city" value="<?php echo $clubInfo->city ?>" class="form-control" >
                       
                        <label>Date création</label>
                        <input type="date" name="birthday" value="<?php echo $clubInfo->birthday ?>" class="form-control" >
                        
                        <label>facebook</label>
                        <input type="url" name="email" value="<?php echo $clubInfo->email ?>" class="form-control" >
                        
                        <label>email</label>
                        <input type="email" name="facebook" value="<?php echo $clubInfo->facebook ?>" class="form-control" >
                        
                        <label>Actif</label>
                        <select name="is_Actif" class="form-control" >
                          <option value="1" <?php if ($clubInfo->is_Actif=="1"){ echo "selected" ;} ?> >Actif</option>
                          <option value="0" <?php if ($clubInfo->is_Actif=="0"){ echo "selected" ;} ?> >Inactif</option>
                        </select>


                        <label>Président</label>
                        <select name="President" class="form-control" >
                          <?php foreach ($members as $key ) {?>

                          <option value="<?php echo  $key->userId ?>" > <?php echo  $key->name ?> </option>
                            <?php } ?>
                        </select>



                                    <hr>
                        <div class="row">
                            <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            </div>
                            <div class="col-lg-6">
                            <input type="reset" class="btn btn-secondary" value="Annuler" />
                            </div>
                        </div> 
                   
                       
                    </form>

                    </ul>
                  </div>
                </aside>
              </div><!-- sidebar -->
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section> 