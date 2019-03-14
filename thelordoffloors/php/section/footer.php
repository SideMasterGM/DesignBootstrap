<footer class="footer" id="footer">
				<?php if ($page_name!="contact.php") {?>
				<div class="footer-widgets b_brown-7 t_white">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="widget_categories widget widget__footer">
									<h3 class="widget-title">About Us</h3><hr>
									<div class="widget-content">
										<!-- <img src="images/logo.png" class="img-responsive"><br> -->
										<?php echo $AbF;?><p></p>
										<a href="about.php" class="btn btn-block t_brown-7 b_gold  btn-sm"><b>Read More</b></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Contact Us</h3><hr>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-home b_gold"></i>
												<div class="info-item">
													<?php echo "$Address" ?>
												</div>
											</li>
											<li>
												<i class="fa fa-phone b_gold"></i>
												<div class="info-item">
													<a href="<?php echo "$PhoneRef";?>" title="<?php echo "$Phone";?>"> <?php echo "$Phone";?></a>
												</div>												
											</li>
											<!-- <li>
												<i class="fa fa-phone b_gold"></i>
												<div class="info-item">
													<a href="<?php echo "$PhoneRef2";?>" title="<?php echo "$Phone2";?>"> <?php echo "$Phone2";?></a>
												</div>
											</li> -->
											<!-- <li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													<a href="<?php echo "$PhoneRef3";?>" title="<?php echo "$Phone3";?>"><?php echo "$Phone3";?></a>
												</div>
											</li> -->
											
											<li>
												<i class="fa fa-envelope b_gold"></i>
												<span class="info-item">
													<a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>"><?php echo "$Mail";?></a>
												</span>
											</li>
											<li>
												<i class="fa fa-envelope b_gold"></i>
												<span class="info-item">
													<a href="mailto:<?php echo "$Mail2";?>" title="<?php echo "$Mail2";?>"><?php echo "$Mail2";?></a>
												</span>
											</li>
											<li>
												<i class="fa fa-map-marker b_gold"></i>
												<span class="info-item">
													<?php echo "$Cover";?>
												</span>
											</li>
																
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix visible-sm"></div>
							<div class="col-sm-6 col-md-3">
								<div class="contacts-widget widget widget__footer">
									<p>&nbsp;</p>
									<br>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<!-- <li>
												<i class="fa fa-money b_gold"></i>
												<div class="info-item">
													<?php echo "$Payment";?>
													 <img src="images/cards.png" class="img-responsive"> 
												</div>
											</li> -->	
											<li>
												<i class="fa fa-clock-o b_gold"></i>
												<div class="info-item">
													<?php echo "$Schedule";?>
												</div>
											</li>
											<li>
												<i class="fa fa-file b_gold"></i>
												<div class="info-item">
													<?php echo "$License";?>
												</div>
											</li>
											<li>
												<i class="fa fa-check b_gold"></i>
												<div class="info-item">
													<?php echo "$Estimates";?>
												</div>
											</li>
											<li>
												<i class="fa fa-money b_gold"></i>
												<div class="info-item">
													<?php echo "$Payment";?>
													<img src="images/cards.png" class="img-responsive">
												</div>
											</li>	
										</ul>
									</div>
								</div>
							</div>
							
							
							<div class="col-sm-6 col-md-3">	
									<div class="widget_categories widget widget__footer">
										<h3 class="widget-title t_white">Our Services</h3><hr>
										<div class="widget-content">
											<ul>
												<li><a href="services.php"><?php echo $SN1;?></a></li>
												<li><a href="services.php"><?php echo $SN2;?></a></li>
												<li><a href="services.php"><?php echo $SN3;?></a></li>
												<li><a href="services.php"><?php echo $SN4;?></a></li>
												<li><a href="services.php"><?php echo $SN5;?></a></li>
												<li><a href="services.php">AND MORE</a></li>
											</ul>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="footer-copyright b_black" itemscope itemtype="http://schema.org/WPFooter">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-8" itemprop="copyrightHolder">
								Copyright &copy; <span itemprop="copyrightYear"><?php echo @date('Y');?></span>  <a href="index.php" title="Home" itemprop="creator"><?php echo "$Company";?></a> &nbsp;| &nbsp;All Rights Reserved
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="social-links-wrapper">
									<span class="social-links-txt">Connect with us</span>
									<ul class="social-links social-links__dark">
										<li><a href="<?php echo "$facebook";?>" title="facebook" target="_blank" class="b_blue-2"><i class="fa fa-facebook t_white"></i></a></li>
										<li><a href="<?php echo "$twitter";?>" title="twitter" target="_blank" class="b_blue-1"><i class="fa fa-twitter t_white"></i></a></li>
										<li><a href="<?php echo "$googleplus";?>" rel="publisher" title="googleplus" target="_blank" class="b_red-2"><i class="fa fa-google-plus t_white"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<?php if($page_name=='about.php' || $page_name=="services.php"){?>

	<!-- Javascript Files
	================================================== -->
	<!-- <script src="vendor/jquery-1.11.0.min.js" async></script> -->
	<!-- <script src="vendor/jquery-migrate-1.2.1.min.js" async></script> -->
	<script src="vendor/bootstrap.js" async></script>
	<script src="vendor/bootstrap-hover-dropdown.js" async></script>
	<!-- <script src="vendor/jquery.hoverIntent.minified.js" async></script> -->
	<script src="vendor/jquery.flickrfeed.js" async></script>
	<script src="vendor/isotope/jquery.isotope.min.js" async></script>
	<!-- <script src="vendor/isotope/jquery.isotope.sloppy-masonry.min.js" async></script> -->
	<!-- <script src="vendor/isotope/jquery.imagesloaded.min.js" async></script> -->
	<script src="vendor/magnific-popup/jquery.magnific-popup.js" async></script>
	<!-- <script src="vendor/owl-carousel/owl.carousel.min.js" async></script> -->
	<script src="vendor/jquery.fitvids.js" async></script>
	<script src="vendor/jquery.appear.js" async></script>
	<!-- <script src="vendor/jquery.stellar.min.js" async></script> -->
	<!-- <script src="vendor/snap.svg-min.js" async></script> -->
	<!-- <script src="vendor/mediaelement/mediaelement-and-player.min.js" async></script> -->

	<script src="js/custom.js" async></script>
	<script src="js/hotkey.js" async></script>


	<!-- jQuery REVOLUTION Slider  -->
	<!-- <script src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js" async></script> -->
	<!-- <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js" async></script> -->

	<script>
		// jQuery(document).ready(function() {
			// jQuery('.tp-banner').revolution({
				// dottedOverlay:"filled",
				// delay:6000,
				// startwidth:1140,
				// startheight:556,
				// hideThumbs:10,
				// fullWidth:"on",
				// forceFullWidth:"off",
				// hideCaptionAtLimit:480,
				// soloArrowLeftHOffset:20,
				// soloArrowRightHOffset:20,
				// navigationType:"bullet",
				// navigationArrows:"solo", // nexttobullets, solo (old name verticalcentered), none
				// navigationStyle:"round"  // round, square, navbar, round-old, square-old, navbar-old 
			// });
	  //  });
	</script>

	<?php } else{?>
	<!-- Javascript Files
	================================================== -->
	<script src="vendor/jquery-1.11.0.min.js"></script>
	<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/bootstrap.js"></script>
	<script src="vendor/bootstrap-hover-dropdown.js"></script>
	<script src="vendor/jquery.hoverIntent.minified.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.sloppy-masonry.min.js"></script>
	<script src="vendor/isotope/jquery.imagesloaded.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/jquery.fitvids.js"></script>
	<script src="vendor/jquery.appear.js"></script>
	<script src="vendor/jquery.stellar.min.js"></script>
	<script src="vendor/snap.svg-min.js"></script>
	<script src="vendor/mediaelement/mediaelement-and-player.min.js"></script>

	<script src="js/custom.js"></script>
	<script src="js/hotkey.js" async></script>


	<!-- jQuery REVOLUTION Slider  -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script>
		jQuery(document).ready(function() {
			jQuery('.tp-banner').revolution({
				dottedOverlay:"filled",
				delay:6000,
				startwidth:1140,
				startheight:556,
				hideThumbs:10,
				fullWidth:"on",
				forceFullWidth:"off",
				hideCaptionAtLimit:480,
				//navigationType: "none",
				soloArrowLeftHOffset:20,
				soloArrowRightHOffset:20,
				navigationType:"bullet",
				navigationArrows:"solo", // nexttobullets, solo (old name verticalcentered), none
				navigationStyle:"round"  // round, square, navbar, round-old, square-old, navbar-old 
			});
	   });
	</script>
	<?php }?>
	
</body>
</html>