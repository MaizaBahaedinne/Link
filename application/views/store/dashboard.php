
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
                    <h4 class="widget-title">Les Reservations</h4>
                    <div class="your-page">
                      <table class="table table-striped table-responsive-xl">
                        <thead>
                          <th>ID</th>
                          <th>Produit</th>
                          <th>Quantité</th>
                          <th>Taille</th>
                          <th>Contact</th>
                          <th>Staut</th>
                        </thead>
                        <tbody>
                        <?php foreach ($ReservationRecords as $res ) { ?>
                          <tr>
                            <td><?php echo $res->storeId ?></td>
                            <td><?php echo $res->produit ?></td>
                            <td><?php echo $res->nombre ?></td>
                            <td><?php echo $res->taille ?></td>
                            <td><b><?php echo $res->name ?></b>
                            <br><a href="tel:<?php echo $res->mobile ?>"><?php echo $res->mobile ?></a>
                            <br>Club : <?php echo $res->clubName ?> </td>
                            <td> 
                              <?php if($res->statut == 0) { ?>
                            <span class="btn btn-sm btn-primary" >Livrée</span>
                        <?php }   ?>
                        <?php if($res->statut == 1) { ?>
                            <span class="btn btn-sm btn-warning " >Livraison</span>
                        <?php } ?>

                        <?php  if($res->statut== 2) {  ?>
                            <span class="btn btn-sm btn-danger"  >Production</span>
                        <?php } ?></td>
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



          </div>


  
        </div>
      </div>
    </div>  
  </section>


