<?php include 'php/section/header.php';include 'php/section/click2call.php';?>
<div class="">
	<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
		<div class="container bars ">
			<div itemprop="text">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 ">
						<p>&nbsp;</p>
						<?php include'php/section/formulario.php';?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<hr>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-phone"></i> <a href="<?php echo "$PhoneRef";?>" class="t_black" title="<?php echo "$Phone";?>"><strong><?php echo "$Phone";?></strong></a></p>
								<p><i class="fa fa-phone"></i> <a href="<?php echo "$Phone2Ref";?>" class="t_black" title="<?php echo "$Phone2";?>"><strong><?php echo "$Phone2";?></strong></a></p>
								<p><i class="fa fa-home"></i> <strong><?php echo $Address;?></strong></p>
								<p><i class="fa fa-envelope"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t_black"><?php echo "$Mail";?></a></p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-map-marker"></i> <?php echo $Services;?> </p>
								<p><i class="fa fa-clock-o"></i> <?php echo "$Schedule";?></p>
								<p><i class="fa fa-file"></i> <?php echo "$Estimates";?></p>
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-user"></i> <?php echo "$Bilingual" ?></p>
								<p><i class="fa fa-money"></i> <?php echo "$Payment";?></p>
								<a href="<?php echo "$facebook";?>" title="Facebook" target="_blank" class="b_blue-2 btn btn-sm"><i class="fa fa-facebook t_white"></i></a>
								<a href="<?php echo "$googleplus";?>" title="Googleplus" target="_blank" class="b_red-2 btn btn-sm"><i class="fa fa-google-plus t_white"></i></a>
							</div>
						</div>
					</div>
				</div>
				<p>&nbsp;</p>
				<div class="row">
					<div class="col-md-offset-1 col-md-10 ">
						<p>&nbsp;</p>
						<?php echo "$GoogleMap";?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'php/section/footer.php';?>