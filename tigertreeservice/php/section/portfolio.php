<section id="portfolio" class="b_white">
		<div class="container bars">
		  <div class="row wow fadeInUp animated visible">
		  	<div class="col-md-12">
		  		<h2 class="uppercase t_green-5">Recent Projects</h2>
		  		<br>
		  	</div>
		    <div class="col-lg-12">
		      <div class="carousel slide" id="portfolio-carousel" itemscope itemtype="http://schema.org/ImageGallery">
		        <div class="carousel-inner">
		          	<div class="item active">
		            	<div class="row">
		            		<?php for ($i=1; $i <=4; $i++) {?>
							<div class="col-xs-6 col-sm-3 col-md-3">   
								<div class="thumbnail">
								    <div class="caption">
								    	<div class="caption-content">
									    	<span>
												<a href="images/portfolio/full/<?php echo $i;?>.jpg" data-rel="prettyPhoto" title="Portfolio-<?php echo $i;?>">
												    <i class="fa fa-search"></i>              
												</a>
									        	<a href="portfolio.php" title="Our Portfolio"><i class="fa fa-link"></i></a>
									        </span>
								    	</div>
								    </div>
								    <img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="Portfolio-<?php echo $i;?>">
								</div>
							</div>
							<?php } ?>
		            	</div>
		          	</div>
		          	<div class="item">
		            	<div class="row">
		            		<?php for ($i=5; $i <=8; $i++) {?>
							<div class="col-xs-6 col-sm-3 col-md-3">   
								<div class="thumbnail">
								    <div class="caption">
								    	<div class="caption-content">
									    	<span>
												<a href="images/portfolio/full/<?php echo $i;?>.jpg" data-rel="prettyPhoto" title="portfolio-<?php echo $i;?>">
												    <i class="fa fa-search"></i>              
												</a>
									        	<a href="portfolio.php" title="Our Portfolio"><i class="fa fa-link"></i></a>
									        </span>
								    	</div>
								    </div>
								    <img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio">
								</div>
							</div>
							<?php } ?>
		            	</div>
		          	</div>
		        </div>
	        	<div class="dart-carousel-controller">
			        <a href="#portfolio-carousel" data-slide="prev" class="left b_green-4 t_white"><i class="fa fa-chevron-left"></i></a>
			        &nbsp;<span><a class="btn b_green-5 t_white" href="portfolio.php"><i class="fa fa-picture-o"></i> All Portfolio</a></span>&nbsp;
			        <a href="#portfolio-carousel" data-slide="next" class="right b_green-4 t_white"><i class="fa fa-chevron-right"></i></a>
		    	</div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>