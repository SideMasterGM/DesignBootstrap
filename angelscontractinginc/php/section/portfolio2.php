<div class="bg_2 bg_fixed">
	<div class="background-opaque">
	<div class="container bars">
		<p>&nbsp;</p>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title-accent">
					<h3 class="t_white" style="font-size:180%">LATEST PROJECTS</h3>
					<hr style="border-color:white;">
					<br>
				</div>
			</div>
		</div>
		<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
			<?php for ($i=5; $i <=12; $i++) {?>
				<div class="col-md-3">
					<div class="project-item">
						<div class="project-item-inner">
							<figure class="alignnone project-img">
								<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image" class="bottom-shadow" />
								<div class="overlay">
									<a href="portfolio.php" title="Go To: Portfolio" class="dlink"><i class="fa fa-picture-o"></i></a>
									<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
								</div>
							</figure>
						<!--<div class="project-desc b_gray-7">
								<h4 class="title uppercase"><a href="contact.php" title="<?php echo "$Company";?>" class="t_white" ><?php echo "$Company";?></a></h4>
								<span class="desc t_gray-2"><i class="fa fa-phone"></i> <?php echo "$Phone";?></span>
							</div>-->
						</div>
					</div>
				</div>
			<?php }?>	
		</div>
		<p>&nbsp;</p>
	</div>
	</div>
	</div>
</div>
</div>