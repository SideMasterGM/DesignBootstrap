<footer class="footer" id="footer">
				<?php if ($page_name!="contact.php") {?>
				<div class=" b_gray-7 t_white">
					<div class="container bars">
						<div class="row">
							<div class="col-md-12">
								<br>
								<h2 class="t_white">Get In Touch</h2>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-9 text-left">
								<p>
									<a href="<?php echo $PhoneRef;?>" class="t_gray-1-hover t_white"><i class="fa fa-phone"></i> <?php echo $Phone;?></a>
									&nbsp;|&nbsp;
									<a href="<?php echo $LinkGoogleMap;?>" title="Open in Google Maps" target="_blank" class="t_gray-1-hover t_white"><i class="fa fa-home"></i> <?php echo $Address;?></a>
									&nbsp;|&nbsp;
									<a href="contact.php" class="t_gray-1-hover t_white"><i class="fa fa-user"></i> <?php echo $Experience;?></a>
									<br><br>
									<a href="contact.php" class="t_gray-1-hover t_white"><i class="fa fa-clock-o"></i> <?php echo $Schedule;?></a>
									&nbsp;|&nbsp;
									<!--<a href="contact.php" class="t_gray-1-hover t_white"><i class="fa fa-map-marker"></i> <?php echo $Cover;?></a>-->
									<br><br>
									<a href="<?php echo $MailRef;?>" class="t_gray-1-hover t_white"><i class="fa fa-envelope"></i> <?php echo $Mail;?></a>
									&nbsp;|&nbsp;
									<a href="contact.php" class="t_gray-1-hover t_white"><i class="fa fa-check"></i> <?php echo $Services;?></a>
								</p>
							</div>
							<div class="col-md-3 text-center"><p><img src="images/logo-white.png" class="img-responsive"></p></div>
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
										<!--<li><a href="<?php echo "$twitter";?>" title="twitter" target="_blank" class="b_blue-1"><i class="fa fa-twitter t_white"></i></a></li>-->
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
	<script async="async" src="js/jquery-3.1.0.min.js"></script>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script async="async" src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script async="async" src="vendor/modernizr.js"></script>
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

	<script src="js/hotkey.js"></script>
	<script src="js/custom.js"></script>


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
</body>
</html>