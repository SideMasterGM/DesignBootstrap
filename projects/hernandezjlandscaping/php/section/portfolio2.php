<div class="bg-fixed bg bg-3 bg-fixed">
	<div class="container-fluid background-opaque padding1">
		<div class="container">			
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center padding2">				
				<h3  class="mt-3 font-h2 t-color5">Our Portfolio</h3>
				<p class="t-color1"><?php echo $Phrase[2];?></p>
				<!-- <p class="t-color1"><?php echo $Phrase[3];?></p> -->
				<hr class="border3">
			</div>			
		
	        <div class="row">
	            <?php for($i=6;$i>=1;$i--){ ?>
	                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 padding2">
	                    <div class="container-overlay">
	                        <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid img-thumbnail" alt="image">
	                        <div class="overlay overlay-dark">
	                            <div class="text-overlay">
	                                <a href="images/portfolio/full/<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
	                                    <div class="t-color1">
	                                        <!-- <span><?php echo $Services?></span><br>-->
	                                        <em><i class="fa fa-search-plus"></i> Zoom</em>
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