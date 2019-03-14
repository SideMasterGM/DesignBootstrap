<div class="b_brown-7 bg_fixed">
		<div class="">
	<div class="container bars">
		<p>&nbsp;</p>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title-accent">
					<h2 class="t_white title uppercase wow bounceIn animated visible">LATEST PROJECTS</h2>
					<hr>
					<br>
				</div>
			</div>
		</div>
		<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
			<?php for ($i=185; $i <=192; $i++) {?>
				<div class="col-md-3 col-sm-6">
					<div class="project-item">
						<div class="project-item-inner">
							<figure class="alignnone project-img">
								<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
								<div class="overlay">
									<a href="portfolio.php" title="Go To: Portfolio" class="dlink"><i class="fa fa-picture-o"></i></a>
									<a href="images/portfolio/full/<?php echo $i;?>.png" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
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