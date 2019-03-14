<?php include 'php/section/header2.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>
<div class="container bars" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="row">
		<div class="col-md-8 border-right">
			<h1 class="uppercase" itemprop="name"><?php echo "$SN1";?></h1>- <a href="<?php echo $PhoneRef;?>" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i> <?php echo "$Phone";?></a>
			<div itemprop="text">
				<p><img src="images/landing/1.jpg" itemprop="image" class="img-responsive img-thumbnail" alt="<?php echo "$LN1".'-'."$Company";?>"/></p>
				<?php echo "$LD1";?>
				<?php include 'php/landing/portfolio-lp-1.php';?>
				<?php include 'php/landing/coupon-lp-1.php';?>
				<?php include 'php/landing/buttons-contact.php';?>
				<br>
			</div>
		</div>
		<div class="col-md-4">
			<?php include 'php/widgets/call.php';?>
			<?php include 'php/widgets/contact.php';?>
			<?php include 'php/widgets/coupon-1.php';?>
			<?php include 'php/widgets/services.php';?>
		</div>
	</div>
</div>
<?php include 'php/section/footer.php';?>