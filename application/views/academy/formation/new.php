<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Formation</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown show">
                                
                                 
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <?php $this->load->helper("form"); ?>
                    <form role="form"  id="addproject" action="<?php echo base_url() ?>Academy/addNewF" method="post" role="form"  enctype="multipart/form-data">
                        


                           

                    
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Affiche</label>
                                            <input type="file" name="affiche" id="affiche" class="dropify" required/>                                    
                                </div>
                            </div>
                            
                            
                               
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">type</label>
                                        <select class="form-control" id="type" name="type" >
                                            
                                        <?php foreach ($FromationsTypes as $type ) { ?>
                                            <option value="<?php echo $type->typeId ?>"><?php echo $type->name ?></option>
                                        <?php   } ?>
                             
                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="fname">label</label>
                                        <input type="text" class="form-control required" id="label" name="label" maxlength="255" required >
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                       <textarea class="form-control" name="description" id="tinymceExample" rows="20" required></textarea>

                                    </div>
                                    
                                </div>
                                  
                           

                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <br>
                            <br>
                        </div>
                    </form>

                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


 