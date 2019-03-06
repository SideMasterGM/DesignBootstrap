<div class="bg-color2-1 d-block d-sm-none">&nbsp;</div>
<div class="container-fluid bg-color3"><!-- margin-negativo -->
	<div class="row">
		<?php for ($i=4; $i<=5; $i++) { ?>
			<div class="col-md-4 col-xs-12 col-sm-12 no-padding">
				<div class="container-overlay">					
					<img src="images/services/box<?php echo $i;?>.jpg" alt="image" class="img-fluid1 bg">
					<div class="overlay-main overlay-dark">
						<div class="text-overlay1">
							<a href="services.php" class="text-white">
								<div class="width-interior">
									<img src="images/services/icon<?php echo $i;?>.png" class="img-icon"><br>
									<p class="uppercase font-h4"><strong><?php echo $SN[$i];?></strong></p> 
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="col-md-4 col-xs-12 col-sm-12 bg-color4 no-padding">
			<div class="container">
				<div class="col-xl-10"><div class="padding4 d-none d-xl-block">&nbsp;</div>
					<h3 class="t-color5 pt-1 pt-sm-3 pt-lg-5"><i class="fa fa-rocket"></i> Why Choose Us?</h3>
					<span class="t-color1 font100"><?php echo $Why;?></span><br class="d-block d-md-none"><br class="d-block d-md-none">
				</div>
			</div>
		</div>
	</div>
</div>