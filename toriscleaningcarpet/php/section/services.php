<div class="bg-color4">
	<div class="container pt-5 pb-5">
		<div class="row mb-4">
			<div class="col-12">
				<h3 class="text-center display-5 font-weight-light t-color1"><span><?php echo $Services;?></span></h3>
				<p class="text-center mb-0"><?php echo $Cover;?></p>
			</div>
		</div>
		<div class="row">
			<?php for ($i=3; $i <=5; $i++) {?>
			<div class="col-md-4 col-sm-12 col-12">
				<div class="container-overlay">
				  <img src="images/services/<?php echo $i;?>.jpg" class="img-fluid">
				  <div class="overlay-main overlay-color">
				    <div class="text-overlay text-white"><a href="services.php" class="t-blanco"><i class="material-icons">insert_link</i> <small><?php echo $SN[$i];?></small></a></div>
				  </div>
				</div>
				<div class="p-3 text-center t-negro mb-2 b-blanco">
					<h5 class="t-color1"><?php echo $SN[$i];?></h5>
					<p><?php echo $ExSD[$i];?></p>
					<p><a href="services.php" class="btn btn-light btn-sm p-1 bg-color3 t-negro">Read More</a></p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>