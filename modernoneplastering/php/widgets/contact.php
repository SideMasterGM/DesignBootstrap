<div class="padding3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12">
				<h3 class="t-color5 mt-3 text-center1 font-h2">Contact Us</h3>
				<hr class="border3">
				<div class="row">
					<div class="col-md-6 t-color4 text-right1">
						<p><i class="fa fa-home btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Address" ?></p>
						<p><i class="fa fa-phone btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$PhoneRef";?>" class="t-color2 t-color3-hover" title="<?php echo "$Phone";?>"><?php echo "$Phone";?> - English</a></p>
						<p><i class="fa fa-phone btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$Phone2Ref";?>" class="t-color2 t-color3-hover" title="<?php echo "$Phone2";?>"><?php echo "$Phone2";?> - Español</a></p>
						
						<p><i class="fa fa-clock-o btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Schedule";?></p>
						<!-- <p><i class="fa fa-group btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Experience";?></p> -->
						<p><i class="fa fa-envelope btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color2 t-color3-hover font-info"><?php echo "$Mail";?></a></p>
					</div>
					<div class="col-md-6 t-color4">
						<p><i class="fa fa-file btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Estimates";?></p>
						<p><i class="fa fa-user btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Bilingual";?></p>
						<p><i class="fa fa-map-marker btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Cover";?></p>
						<!-- <p><i class="fa fa-file btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Estimates";?></p> -->
						<p><i class="fa fa-money btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Payment";?></p>
						<!-- <p><img src="images/elements/cards.png" class="img-fluid"/></p> -->
						<p><i class="fa fa-envelope btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$Mail2Ref";?>" title="<?php echo "$Mail2";?>" class="t-color2 t-color3-hover font-info"><?php echo "$Mail2";?></a></p>
					</div>
				</div>
			</div>
		</div>		
		<div class="row padding3">
			<div class="col-12 col-sm-12 col-md-7 border bordering bg-color4 border-radius-3 padding1">
				<div class="row widget bordering">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h3 class="text-center t-color3"><?php echo "$Experience";?></h3><hr class="border3">
						<?php @session_start();?>
						<style>
						.customclass{
							display:none;
						}
						</style>
						<?php include 'php/section/formulario.php';?>
					</div>
				</div>
			</div>
			<div class="col-md-5 mt-3">
				<?php echo $GoogleMap;?>
			</div>
		</div>
	</div>
</div>