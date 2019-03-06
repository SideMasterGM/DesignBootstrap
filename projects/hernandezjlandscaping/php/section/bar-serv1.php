<div class="container-fluid bg-color3"><!-- margin-negativo -->
	<div class="row">
		<?php for ($i=1; $i<=3; $i++) { ?>
			<div class="col-md-4 col-xs-12 col-sm-12 no-padding">
				<div class="container-overlay">					
					<img src="images/services/<?php echo $i;?>.jpg" alt="image" class="bg img-fluid1">
					<div class="overlay-main overlay-dark">
						<div class="text-overlay1">
							<a href="services.php">
								<div class="width-interior">
									<h3 class="uppercase t-color5 stroke2 font-h4">
										<!-- <img src="images/services/icon<?php echo $i;?>.png" class="img-icon"><br> -->
										<strong><?php echo $SN[$i];?></strong>
									</h3>
									<!-- <p class="t-color1 d-none d-lg-block"><?php echo $ExSD[$i];?></p> -->
									<h3><a href="services.php" class="font100 borderWhite mt-5 t-color1 t-color5-hover bordercolor2"><i class="fa fa-eye"></i> Read More</a></h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>