<div class="bg bg-4">
	<div class="container-fluid background-opaque padding1">
		<div class="container">			
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto text-center padding2">				
				<h3  class="mt-3 font-h2 t-color1">Our Portfolio</h3>
				<p class="t-color4"><?php echo $Home[2];?></p>
				<!-- <p class="t-color1"><?php echo $Phrase[3];?></p> -->
				<hr class="border2">
			</div>			
		
	        <div class="row">
	            <?php for($i=6;$i>=1;$i--){ ?>
	                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 padding2">
	                    <div class="container-overlay">
	                        <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid img-thumbnail" alt="image">
	                        <div class="overlay overlay-dark">
	                            <div class="text-overlay">
	                                <a href="images/portfolio/full/<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
	                                    <div class="t-color3">
	                                        <!-- <span><?php echo $Services?></span><br>-->
	                                        <em class="font-h3"><i class="fa fa-search-plus"></i></em>
	                                    </div>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	             <?php }?>
	        </div>
             <p class="text-center mt-3 mb-5">
				<a href="portfolio.php" class="boton4 font100"><i class="fa fa-image"></i> View All Portfolio</a>
			</p>
    	</div>
    </div>
</div>