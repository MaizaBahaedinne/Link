<section>
    <div class="page-header">
      <div class="header-inner">
        <h2>Tunivisions Store</h2>
        <form method="post">
          <!--<input type="text" placeholder="Ask Question">
          <button type="submit"><i class="fa fa-search"></i></button>-->
        </form>
        <p>
          
        </p>
      </div>
      <figure><img src="<?php echo base_url() ;?>assets/images/resources/store.jpg" class="alligator-projects " alt=""></figure>
    </div>
  </section>

<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">

<div class="col-lg-12">
  <form class="c-form"  method="post" action="<?php echo base_url() ?>Store/addNewReservation">  
<div class="row merged20" id="page-contents">



   <!-- sidebar -->
              <div class="col-lg-12">
                <aside class="sidebar static right">
                   <div class="widget">
                    <h4 class="widget-title">Mes Reservations</h4>
                    <div class="your-page">
                      <table class="table table-striped table-responsive-xl">
                        <thead>
                          <th>ID</th>
                          <th>Produit</th>
                          <th>Quantité</th>
                          <th>Taille</th>
                          <th>Staut</th>
                        </thead>
                        <tbody>
                        <?php foreach ($ReservationRecords as $res ) { ?>
                          <tr>
                            <td><?php echo $res->storeId ?></td>
                            <td><?php echo $res->produit ?></td>
                            <td><?php echo $res->nombre ?></td>
                            <td><?php echo $res->taille ?></td>
                            <td></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div><!-- calendar -->
                  <!-- recent links -->
                </aside>
              </div><!-- sidebar -->

   </div>
   <div class="row merged20" id="page-contents">
                                    
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

             
              <!-- sidebar -->
              <div class="col-lg-4">
                <aside class="sidebar static right">
                   <div class="widget">
                    <h4 class="widget-title">Sweat à capuche rouge</h4>
                    <div class="your-page">
                      <div>
                       <img src="<?php echo base_url() ;?>assets/images/resources/store/pr.jpg" >
                       <small><small>Ce produit sera réservé au nom de votre club</small></small>
                      </div>
                        <br> 
                        <label>Quantité</label>
                        <input type="number"   min="0" name="PR" value="0" required>
                        <label>Taille</label>
                        <select name="TPR">
                          <option value=""></option>
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                          <option value="XXL">XXL</option>
                        </select>
                    </div>
                  </div><!-- calendar -->
                  <!-- recent links -->
                </aside>
              </div><!-- sidebar -->
                            <!-- sidebar -->
              <div class="col-lg-4">
                <aside class="sidebar static right">
                   <div class="widget">
                    <h4 class="widget-title">Sweat à capuche "Chaab El GO" rouge</h4>
                    <div class="your-page">
                      <div>
                       <img src="<?php echo base_url() ;?>assets/images/resources/store/gor.jpg" >
                      </div>
                        <br> 
                        <label>Quantité</label>
                        <input type="number" min="0" name="PGOR" value="0" required>
                        <label>Taille</label>
                        <select name="TPGOR" >
                          <option value=""></option>
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                          <option value="XXL">XXL</option>
                        </select>
                    </div>
                  </div><!-- calendar -->
                  <!-- recent links -->
                </aside>
              </div><!-- sidebar -->
                            <!-- sidebar -->
              <div class="col-lg-4">
                <aside class="sidebar static right">
                   <div class="widget">
                    <h4 class="widget-title">Sweat à capuche "Chaab El GO" bleu</h4>
                    <div class="your-page">
                      <div>
                       <img src="<?php echo base_url() ;?>assets/images/resources/store/gob.jpg" >
                      </div>
                        <br> 
                        <label>Quantité</label>
                        <input type="number" name="PGOB" min="0"  value="0" required>
                        <label>Taille</label>
                        <select name="TPGOB">
                          <option value=""></option>
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                          <option value="XXL">XXL</option>
                        </select>
                    </div>
                  </div><!-- calendar -->
                  <!-- recent links -->
                </aside>
              </div><!-- sidebar -->

</div>
<div class="row merged20" id="page-contents">
              <div class="col-lg-12">
                <aside class="sidebar static right">
                   
                    <div class="widget">
                      <div class="your-page">
                        <input type="submit" name="" value="Reserver" class="btn btn-primary btn-block">
                      </div>
                    </div>
                  <!-- recent links -->
                </aside>
              </div><!-- sidebar -->
              
          
              
            </div>
 </form>  
          </div>


  
        </div>
      </div>
    </div>  
  </section>


