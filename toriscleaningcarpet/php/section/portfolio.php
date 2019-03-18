<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 bg_4 bg text-light padding4 d-none d-md-inline-block">
			&nbsp;
		</div>
		<div class="col-md-7 p-5 bg-color1 t-blanco">
			<div class="row align-items-center">
				<div class="col-md-1"></div>
				<div class="col-md-10 my-3">
					<h5 class="t-color2"><?php echo $License;?></h5>
					<h3 class="t-blanco d-none d-md-block"><?php echo $Phrase[2];?></h3>
					<h4 class="t-blanco d-block d-md-none"><?php echo $Phrase[2];?></h4>
					<p><?php echo $Home[2];?></p>
					<div class="row">
						<?php for ($i=1; $i <=3; $i++) {?>
							<div class="col-md-4 mb-4 text-center">
								<div class="container-overlay">
								  <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid img-thumbnail border border-danger d-inline-block">
								  <div class="overlay-main overlay-dark">
								    <div class="text-overlay">
								    	<a href="images/portfolio/full/<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
								    		<p><i class="material-icons">zoom_in</i> <strong>Zoom</strong></p>
								    	</a>
									</div>
								  </div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>
</div></div>