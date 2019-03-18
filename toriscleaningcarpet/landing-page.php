<?php include 'php/section/header.php'; include 'php/section/pagename.php';?>
<div class="container padding4 content">
	<div class="row">
		<div class="col-md-3 bg-light p-1 sidebar">
			<?php include 'php/widgets/call.php';?>
			<?php include 'php/widgets/coupon.php';?>
			<?php include 'php/widgets/contact-button-2.php';?>	
			<?php include 'php/widgets/services.php';?>	
		</div>
		<div class="col-md-9 service-height">
			<h1 class="font-weight-light"><?php echo $LandingName[1]?></h1>
			<img src="images/landing/<?php echo $LandingURL[1].'.jpg';?>" class="img-fluid mb-3">
			<div class="text-justify"><?php echo $LandingDesc[1];?></div>
		</div>
	</div>
</div>
</div>
<?php include 'php/section/footer.php';?>