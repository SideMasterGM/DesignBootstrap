<div class="bg bg_5">
	<div class="container padding4">
		<div class="row text-center mt-4">
			<div class="col-md-12"><h3 class="font-weight-normal text-warning">Testimonials</h3></div>
			<div class="col-md-4 offset-md-4"><hr class="border border-light"></div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div id="carouseltestimonials" class="carousel slide mt-4" data-ride="carousel">			  
				  <div class="carousel-inner text-center">
				    <div class="carousel-item active">
				    	<blockquote class="blockquote">
						  <p class="mb-3 text-light"><em><?php echo $Testimonial[1][3];?></em></p>
						  <footer class="blockquote-footer"><cite class="text-white font-weight-bold"><?php echo $Testimonial[1][1];?></cite></footer>
						</blockquote>
				    </div>
				    <?php for ($i=2; $i <=3; $i++) {?>
				    <div class="carousel-item">
				    	<blockquote class="blockquote">
						  <p class="mb-3 text-light"><em><?php echo $Testimonial[$i][3];?></em></p>
						  <footer class="blockquote-footer"><cite class="text-white font-weight-bold"><?php echo $Testimonial[$i][1];?></cite></footer>
						</blockquote>
				    </div>
				    <?php } ?>
				</div>  
			</div>
			<div class="col-md-12">
				<div class="padding3"></div>
				<ol class="carousel-indicators">
				    <li data-target="#carouseltestimonials" data-slide-to="0" class="active"></li>
				    <li data-target="#carouseltestimonials" data-slide-to="1"></li>
				    <li data-target="#carouseltestimonials" data-slide-to="2"></li>
				 </ol>
			</div>
		</div>
	</div>
	</div>
</div>