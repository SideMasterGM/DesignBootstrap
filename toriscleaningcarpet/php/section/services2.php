<div class="container padding3">
	<div class="row mb-4">
		<div class="col-12"><h3 class="text-left display-5 font-weight-normal text-dark"><span>Make Selectors</span></h3></div>
	</div>
	<div class="row">
		<?php for ($i=4; $i <=9; $i++) {?>
		<div class="col-md-4 col-md-6 col-sm-12 col-12">
			<div class="container-overlay mb-3">
			  <img src="images/services/home/<?php echo $i;?>.jpg" class="img-fluid">
			  <div class="overlay-main overlay-color">
			    <div class="text-overlay text-white"><a href="services.php" class="t-blanco"><i class="material-icons">insert_link</i></a></div>
			  </div>
			</div>
			<div class="padding3 mb-2">
				<h5><?php echo $SN[$i];?></h5>
				<p class="text-dark"><?php echo $ExSD[$i];?></p>
			</div>
		</div>
		<?php } ?>
	</div>
</div>