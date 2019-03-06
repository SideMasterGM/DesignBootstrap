
<div class="bg-color2">
	<!-- <div class="container">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center px-3 padding1">				
			<h3  class="mt-3 font-h2 t-color2">Our Portfolio</h3>
			<p class="t-color2"><?php echo $Home[2];?></p>
			<hr class="border3">
		</div>
	</div> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 no-padding">
				<div class="row no-padding">
					<?php for($i=1;$i<=8;$i++){ ?>
						<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 no-padding">
							<div class="container-overlay">
								<img src="images/portfolio/min/her<?php echo $i;?>.jpg" class="img-fluid1" alt="image">
								<div class="overlay overlay-dark">
									<div class="text-overlay">
										<a href="images/portfolio/full/her<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
											<div class="t-color1">
												<em class="font-h3"><i class="fa fa-search-plus"></i></em>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
