<div class="padding3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<em>Our services</em>
				<h2><?php echo $Experience;?></h2>
				<hr class="border3">
				<p class="my-5"><?php echo $Home[2];?></p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
				<?php for($i=1;$i<=3;$i++){ ?>
					<div class="mt-5 bg-color4 text-right style-box">
						<a href="services.php">
							<span class="t-color1"><?php echo $SN[$i];?> <i class="fa fa-check icon1 icon2-hover font110 px-2 py-2"></i></span>
							<a href="services.php" class="mr-auto d-block t-color3">-> Read More</a>
						</a>
					</div>
				<?php }?>				
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 offset-lg-1 offset-xl-1 d-none d-sm-block d-md-block d-lg-block d-xl-block">
				<?php include 'php/widgets/contact2.php';?>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
				<?php for($i=4;$i<=6;$i++){ ?>
					<div class="mt-5 bg-color3 text-left style-box">
						<a href="services.php">
							<a href="services.php">
							<span class="t-color1"> <i class="fa fa-star icon1 icon2-hover font110 px-2 py-2"></i> <?php echo $SN[$i];?></span>
							<a href="services.php" class="mr-auto d-block t-color3">-> Read More</a>
						</a>
						</a>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>