<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<div class="bar2">
	<div class="container text-center">
		<h2 class="t-Color2"><?php echo $Company;?></h2>
		<p class="t-black"><?php echo $Phrase[2] ?></p>
		<hr class="mb-5">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="t-Color1"><?php echo $Phrase[1];?></h3>
				
				<p class="t-black"><?php echo $About[0];?></p>
				<p class="t-black"><?php echo $About[1];?></p>
				<p class="t-black"><?php echo $About[2];?></p>
			</div>
			<div class="col-md-6">
				<div class="row popup-gallery">
					<?php for ($i=1; $i <=6 ; $i++) { ?>
					<div class="col-lg-5 col-sm-4 col-6 mb-4">
						<a class="portfolio-box" href="images/portfolio/full/<?php echo $i;?>.jpg">
							<img class="img-fluid" style="width: 100%;" src="images/portfolio/min/<?php echo $i;?>.jpg" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<!-- <div class="project-category text-faded">
										<?php echo $Phone; ?>
									</div> -->
									<div class="project-name">
										<i class="fa fa-search-plus"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //include 'php/section/why2.php';?>

<?php //include 'php/section/bar3.php';?>
<?php include 'php/section/social.php';?>
<?php include 'php/section/footer3.php';?>