
<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des clubs 
                       
                    </h4>
            <!--begin: Datatable -->
                        <ul class="faved-page">

<div class="row">
	

	<div class="card col-md-6">
		<div class="card">

			<form action="<?php echo base_url() ?>TFM/partanTfmPaiement1" method="post">
			<div class="card-header">
				<h5>Liste des membre participant au TFM | <?php echo count($userRecords) ?> </h5>		
			</div>
			<div class="card-body">
				
				<?php foreach ($userRecords as $record ) { ?>
					<div class="form-check form-check-flat form-check-primary">
						<label class="form-check-label">
							<?php if($uid == 2 || $uid ==  181 || $uid ==  556 
							                   || $uid ==  1031 || $uid ==  2616   ){ ?>
							<input class="form-check-input" type="checkbox" name="participant[]" value="<?php echo $record->id ; ?>" >
							<?php } ?> <?php echo ' '.$record->name ;  ?>
						</label>
					</div>
				<?php } ?>



				
			</div>
			<div class="card-footer">
				<input type="submit" class="btn btn-primary" value="Valider">
				<input type="reset" class="btn btn-danger" value="Anuler">
			</div>
			</form>
		</div>
	</div>
	
	

	<div class="card col-md-6">
		<div class="card">
			
			<div class="card-header">
				<h5>Liste des membre validé   | <?php echo count($userRecordsT2) ?> </h5>				
			</div>
			<div class="card-body">
				<?php foreach ($userRecordsT2 as $record ) { ?>
					 <?php echo ' '.$record->name ;  ?> 
					 <?php if($record->remb == 2 ){ ?>
								<i class="ri-checkbox-circle-fill" style="color:#05BD53 "></i>
						   	<?php } ?>
							<?php if($record->remb == 1 ){ ?>
								<i class="ri-checkbox-circle-fill" style="color:#ff1a1a "></i>
						   	<?php } ?>
					 <br>
				<small><small> <?php echo ' '.$record->recp2 ;  ?> le  <?php echo ' '.$record->dateTranche2 ;  ?>  </small></small>
				<br>
				<?php } ?>
			</div>
			<div class="card-footer">
				
			</div>
			
		</div>

	</div>	
		
</div>

</ul></div></aside></div></div></div></div></div></div></section>