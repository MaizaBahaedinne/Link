
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
	

	<div class="card col-md-4">
		<div class="card">

		<form action="<?php echo base_url() ?>TFM/partanTfmPaiement1/<?php echo $clubID ?>/<?php echo $projectId ?>" method="post">
			<div class="card-header">
				<h5>Tranche 1 | <?php echo count($userRecordsT1) ?> </h5>		
			</div>
			<div class="card-body">
				
				<?php foreach ($userRecordsT1 as $record ) { ?>
					<div class="form-check form-check-flat form-check-primary">
						<label class="form-check-label">
							<?php if($uid == 2 || $uid ==  181 || $uid ==  556 
							                   || $uid ==  1031 || $uid ==  2616 || $uid ==  237    ){ ?>
							<input class="form-check-input" type="checkbox" name="participant[]" value="<?php echo $record->id ; ?>" >
							<?php } ?> <?php echo ' '.$record->name ;  ?><small><small> #<?php echo ' '.$record->id ;  ?></small></small>
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


	<div class="card col-md-4">
		<div class="card">

		<form action="<?php echo base_url() ?>TFM/partanTfmPaiement2/<?php echo $clubID ?>/<?php echo $projectId ?>" method="post">
			<div class="card-header">
				<h5>Tranche 2  | <?php echo count($userRecordsT2) ?> </h5>		
			</div>
			<div class="card-body">
				
				<?php foreach ($userRecordsT2 as $record ) { ?>
					<div class="form-check form-check-flat form-check-primary">
						<label class="form-check-label">
							<?php if($uid == 2 || $uid ==  181 || $uid ==  556 
							                   || $uid ==  1031 || $uid ==  2616 || $uid ==  237    ){ ?>
							<input class="form-check-input" type="checkbox" name="participant[]" value="<?php echo $record->id ; ?>" >
							<?php } ?> <?php echo ' '.$record->name ;  ?><small><small> #<?php echo ' '.$record->id ;  ?></small></small>
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
	
	

	<div class="card col-md-4">
		<div class="card">
			
			<div class="card-header">
				<h5>Liste des membre validé   | <?php echo count($userRecordsT1) ?> </h5>				
			</div>
			<div class="card-body">
				<?php foreach ($userRecordsT1 as $record ) { ?>
					 <?php echo ' '.$record->name ;  ?>  <small><small> #<?php echo ' '.$record->id ;  ?></small></small>
					 
					 <br>
				<small><small> 
					<?php echo ' '.$record->recp1 ;  ?> le  <?php echo ' '.$record->dateTranche1 ;  ?>  
				</small></small>
				<br>
				<?php } ?>
			</div>
			<div class="card-footer">
				
			</div>
			
		</div>

	</div>	
		
</div>

</ul></div></aside></div></div></div></div></div></div></section>