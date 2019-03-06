<div class="">
	<div class="container">
		<div class="padding3">
			<div class="row mt-5">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<em class="t-color2"><?php echo $Cover; ?></em><h3 class="font-h3 t-color3"><?php echo $Phrase[3];?></h3>				
					<hr class="border3 float-left">				
				</div>
				<div class="row">
					<?php for($i=1;$i<=3;$i++){ ?>
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">						
							<div class="my-3">
								<div class="card">
								  <img class="card-img-top img-fluid" src="images/services/<?php echo $i;?>.jpg" alt="<?php echo $SN[1];?>">
								  <div class="card-body bg-color4 text-center">
								    <h3 class="card-title t-color3"><?php echo $SN[$i];?></h3>
								    <p class="card-text"><?php echo $ExSD[$i];?></p>
								    <div class="team-box">
								    	<hr class="mx-3 mb-4">
										<a href="services.php" class="boton2-hover boton1 font110">Read More</a>
									</div>
								  </div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>