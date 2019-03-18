<?php include 'php/section/header2.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>
<div class="container bars" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="row">
		<div class="col-md-8 border-right">
			<h1 class="uppercase" itemprop="name"><?php echo "$SN1";?> - <a href="<?php echo $PhoneRef;?>" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i> <?php echo "$Phone";?></a></h1>
			<div itemprop="text">
				<p><img src="images/services/1.jpg" itemprop="image" class="img-responsive img-thumbnail" alt="<?php echo "$LN1".'-'."$Company";?>"/></p>
				<?php echo "$SD1";?>
				<p>&nbsp;</p>
				<div class="title-accent">
					<h3>LATEST PROJECTS</h3>
				</div>
				<div class="prev-next-holder text-right">
					<a title="prev" class="prev-btn" id="carousel-prev"><i class="fa fa-angle-left"></i></a>
					<a title="next" class="next-btn" id="carousel-next"><i class="fa fa-angle-right"></i></a>
				</div>
				<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
					<div id="owl-carousel" class="owl-carousel">
						<?php for ($i=1; $i <=12 ; $i++) {?>
						<div class="project-item">
							<div class="project-item-inner">
								<figure class="alignnone project-img">
									<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
									<div class="overlay">
										<a href="portfolio.php" title="Go To: Portfolio" class="dlink"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
									</div>
								</figure>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<br>
			</div>
		</div>
		<div class="col-md-4">
			<?php include 'php/widgets/call.php';?>
			<?php include 'php/widgets/contact.php';?>
		</div>
	</div>
</div>
<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>