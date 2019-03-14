<?php include 'php/section/header2.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>

<div>

<br/><br/>
<div class="container mt-5">
		<div class="row">
			<style>
				.customclass{
					display:none!important;
				}
			</style>
			<?php
					$_SESSION['token'] = md5(microtime());
			?>
			<div class="col-md-6 t-white">
				<div id="map" itemscope itemtype="https://schema.org/LocalBusiness">
					<?php echo "$GoogleMap";?>
				</div> 
			</div>
			<div class="col-md-6 t-black">
				<h2 class="t-Color1">Contact Info</h2>
				<p><?php echo $Why;?></p>
				<ul class="icon-align-ul">
					<li><i class="fa fa-phone sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a></li>
					<?php if(!empty($Phone2)){ ?>
					<li><i class="fa fa-phone sr-contact icon-align"></i> Secondary: <a class="t-Color1" href="<?php echo $Phone2Ref;?>"><?php echo $Phone2;?></a> </li>
					<?php } ?>

					<li><span class="d-none d-sm-block"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a></span> </li>
					<li><span class="d-sm-none"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $Mail2Ref;?>"><?php echo $Mail2; ?></a></span> </li>
					<li><i class="fa fa-home sr-contact icon-align"></i> <?php echo $Address;?> </li>
					<li><span class="d-none d-sm-block"><i class="fa fa-map-marker sr-contact icon-align"></i> <?php echo $Cover;?></span> </li>
					<li><span class="d-none d-sm-block"><i class="fa fa-clock-o sr-contact icon-align"></i> <?php echo $Schedule;?></span> </li>
					
					<li><i class="fa fa-user sr-contact icon-align"></i> <?php echo $Services;?></li>
					<li><i class="fa fa-file"></i> <?php echo "$Estimates";?></li>
					<li><i class="fa fa-money"></i> <?php echo "$Payment";?></li>
				</ul>
				<br/>
				<!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid"> -->
				<div class="row">
					<div class="col-md-12 mt-3 text-center text-md-left">
						<h2 style="float: left;">YOU CAN ALSO FIND US ON:</h2>
						<div class="row">
							<div class="col-md-6 col-md-offset-0 col-sm-3 col-sm-offset-2" style="float: left;">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4"><a href="<?php echo "$facebook";?>" title="Facebook" target="_blank" class="b_blue-2 btn btn-sm"><i class="fa fa-facebook t_white"></i></a></div>
									<div class="col-md-4 col-sm-4 col-xs-4"><a href="<?php echo "$twitter";?>" title="Twitter" target="_blank" class="b_blue-1 btn btn-sm"><i class="fa fa-twitter t_white"></i></a></div>
									<div class="col-md-4 col-sm-4 col-xs-4"><a href="<?php echo "$googleplus";?>" title="Googleplus" target="_blank" class="b_red-2 btn btn-sm"><i class="fa fa-google-plus t_white"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<?php
				include ("contact-test.php");
			?>

	</div>
	<br/><br/>
<?php //include 'php/section/bar8.php';?>
<?php include 'php/section/footer.php';?>