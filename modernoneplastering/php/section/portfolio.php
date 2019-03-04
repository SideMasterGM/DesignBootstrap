
<div class="bg bg-6 bg-fixed padding3">
	<div class="container">
		<div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto text-center px-3">				
			<h3  class="mt-3 font-h2 t-color1">Our Portfolio</h3>
			<p class="t-color1 d-none d-md-block"><?php echo $Home[2];?></p>
			<hr class="border2">
		</div>
	</div>
	<div class="container pb-5">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="row no-padding">
					<?php for($i=1;$i<=6;$i++){ ?>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 no-padding">
							<div class="container-overlay">
								<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid1" alt="image">
								<div class="overlay overlay-dark">
									<div class="text-overlay">
										<a href="images/portfolio/full/<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
											<div class="t-color1">
												<span class="font100"><?php echo $Phone;?></span><br>
												<em class="t-color1 font100"><i class="fa fa-search-plus"></i> View Image</em>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
				<p class="text-center mt-5">
					<a href="portfolio.php" class="boton4 font100"><i class="fa fa-image"></i> View All Portfolio</a>
				</p>
			</div>
		</div>
	</div>
</div>
