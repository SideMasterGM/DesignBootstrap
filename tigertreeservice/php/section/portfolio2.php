<div class="b_white">

	<div class="container bars">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="uppercase t_green-5" style="font-size:220%;">recent projects</h3>
				<hr>
			</div>
		</div>
		<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
			<?php for ($i=1; $i <=8; $i++) {?>
			<div class="col-md-3 col-sm-6 bright">
				<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Portfolio-<?php echo $i;?>" data-rel="prettyPhoto">
					<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-responsive img-thumbnail" alt="Portfolio-<?php echo $i;?>">
				</a>
				<p>&nbsp;</p>
			</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p class="text-center"><a href="portfolio.php" title="Our Portfolio" class="btn btn-lg t_blue-3 b_orange-3 bottom-shadow"><i class="fa fa-picture-o"></i> View Our Portfolio</a></p>
			</div>
		</div>
	</div>

</div>