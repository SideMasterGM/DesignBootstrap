	<section class="b_gray-6  t_white">
		<?php if ($page_name!='contact.php') { ?>
			<footer class="bars b_green-6">
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-about-us">
								<h3 class="t_white stroke2"><span>Our<strong> Company</strong></span></h3>
								<?php echo $Ex2About;?>
								<p class="bars2"><a href="about.php" class="btn btn-sm btn-default btn-block uppercase" title="About Us"><i class="fa fa-eye"></i> Read More</a></p>
								
								<p class="footer-social">
									<a class="btn-xs b_blue-2 t_white btn" style="width:30px;height:30px;padding:5px!important;" href="<?php echo $facebook;?>" target="_blank" title="Facebook"><i class="fa fa-facebook t_white"></i></a>
									<a class="btn-xs b_red-3 t_white btn" style="width:30px;height:30px;padding:5px!important;" href="<?php echo $googleplus;?>" target="_blank" title="GooglePlus" rel="publisher"><i class="fa fa-google-plus t_white"></i></a>
								</p>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="recent-post">
								<h3 class="t_white stroke2"><span>Our <strong>Services</strong></span></h3>
								<ul>
		                            <li><a href="services.php" title="<?php echo $SN1;?>" class="t_white"><?php echo $SN1;?></a></li>
		                            <li><a href="services.php" title="<?php echo $SN2;?>" class="t_white"><?php echo $SN2;?></a></li>
		                            <li><a href="services.php" title="<?php echo $SN3;?>" class="t_white"><?php echo $SN3;?></a></li>
		                            <li><a href="services.php" title="<?php echo $SN4;?>" class="t_white"><?php echo $SN4;?></a></li>
		                            <li><a href="services.php" title="<?php echo $SN5;?>" class="t_white"><?php echo $SN5;?></a></li>
		                            <li><a href="services.php" title="<?php echo $SN6;?>" class="t_white"><?php echo $SN6;?></a></li>
		                        </ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="twitter">
								<h3 class="t_white stroke2"><span>Our <strong>Location</strong></span></h3>
								<p><i class="fa fa-home"></i> <strong><?php echo $Address;?></strong></p>
								<p><i class="fa fa-money"></i> <?php echo $Payment;?> </p>
								<p><i class="fa fa-envelope"></i> <a href="<?php echo $MailRef;?>" class="t_white fontmail"><?php echo $Mail;?></a></p>
								<p><i class="fa fa-phone"></i> <a href="<?php echo "$PhoneRef";?>" class="t_white" title="<?php echo "$Phone";?>"><strong><?php echo "$Phone";?></strong></a></p>
								<p><i class="fa fa-phone"></i> <a href="<?php echo "$Phone2Ref";?>" class="t_white" title="<?php echo "$Phone2";?>"><strong><?php echo "$Phone2";?></strong></a></p>
								<p><i class="fa fa-clock-o"></i> <?php echo $Schedule;?></p>
								<p><i class="fa fa-check"></i> <?php echo $Bilingual;?></p>								
							</div>
						</div>
					</div>
				</div>
				</div>
			</footer>
		<?php } ?>
		<div class="footer-bottom b_black">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wow fadeInRight">
						<div class="bars2">
	         			 	<p>© <span><?php echo @date('Y');?></span> <span><?php echo $Company;?></span>  Copy Rights Reserved</p>
	        			</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" async></script>
	<script type="text/javascript" src="js/owl.carousel.js"  async></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"  async></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"  async></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js" async></script>
	<script type="text/javascript" src="js/wow.min.js"  async></script>
	<script type="text/javascript" src="js/smoothscroll.js" async ></script>
	<script type="text/javascript" src="js/jquery.easy-pie-chart.js" async ></script>
	<script type="text/javascript" src="js/custom.js"  async></script>
	<!--<script type="text/javascript" src="js/hotkey.js"  async></script>-->
	</div>
</body>
</html>