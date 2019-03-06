<div id="reviews" class="bg-color4 padding3">
	<div class="container">
		<div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1 padding3">
			<div class="row d-block">
				<div class="text-center">
					<em >Golden words</em>
					<h3 class="font-h3">Client testimonails</h3>
					<hr class="border3">
				</div>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide my-3" data-ride="carousel">
	 		<div class="carousel-inner">			  	
			    <div class="carousel-item active">
			      <div class="text-center d-block">
						<h4 class="t-color4"><?php echo $Comment.$Testimonial[1][3];?></h4>
						<p><?php echo $Review.$Testimonial[1][1];?>&nbsp; - <span class="t-color4"><?php echo $Date.$Testimonial[1][0];?></span></p>
					</div>
			    </div>
			    <?php for ($i=1; $i <=3 ; $i++) { ?>
			    	<div class="carousel-item">
				     	<div class="text-center d-block">
							<h4 class="t-color4"><?php echo $Comment.$Testimonial[$i][3];?></h4>
							<p><?php echo $Review.$Testimonial[$i][1];?>&nbsp; - <span class="t-color4"><?php echo $Date.$Testimonial[$i][0];?></span></p>
						</div>
				    </div>
			    <?php } ?>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide my-3 text-center" data-ride="carousel">
		  <a class="btn btn-sm bg-color1 bg-color2-hover t-color1-hover" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only t-color1">Previous</span>
		  </a>
		  <a class="btn btn-sm bg-color1 bg-color2-hover t-color1-hover" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only t-color1">Next</span>
		  </a>
		</div>
	</div>
</div>