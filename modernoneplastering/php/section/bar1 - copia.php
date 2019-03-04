<div class="bg-fixed">	
		<div class="container-fluid">	
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-6">
					<div class="container padding3 px-lg-5">						
						<div class="row my-3 px-3">
							<h3 class="t-color3"><i class="fa fa-map-marker t-color2"></i> <?php echo $Cover; ?></h3><br>
							<h3 class="t-color3"><i class="fa fa-clock-o t-color2"></i> <?php echo $Schedule; ?></h3><br>
							<h3 class="t-color3"><i class="fa fa-user t-color2"></i> <?php echo $Experience; ?></h3>
						</div>
						<div id="accordion" role="tablist">
						  <div class="card borderWhite bg-color3">
						    <div class="card-header border-none" role="tab" id="headingOne">
						      <h5 class="mb-0">
						        <a class="collapsed bloque" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
						          <span class="t-color1">Mission</span>					          
						        </a>
						      </h5>
						    </div>
						    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body t-color1">
						        <p><?php echo $Mission;?></p>
						      </div>
						    </div>
						  </div>
						  <div class="card bg-color3 borderWhite my-2">
						    <div class="card-header" role="tab" id="headingTwo">
						      <h5 class="mb-0 t-color5">
						        <a class="collapsed bloque" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
						         <span class="t-color1">Vision</span>
						        </a>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body t-color1">
						        <p><?php echo $Vision;?></p>
						      </div>
						    </div>
						  </div>
						  <div class="card bg-color3 borderWhite my-2">
						    <div class="card-header" role="tab" id="headingThree">
						      <h5 class="t-color5">
						        <a class="collapsed bloque" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
						         <span class="t-color1">Why Choose Us?</span>
						        </a>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
						      <div class="card-body t-color1">
						       	<p><?php echo $Why;?></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12  col-lg-6 col-xl-6 bg bg-4 no-padding">			
					<div class="background-opaque bgSec">
						<div class="container mt-5 px-4 px-lg-5">
							<em class="t-color1"><?php echo $Phrase[0];?></em>
							<h2 class="t-color1 stroke2 font-h3"><?php echo $Estimates;?></h2> 
							<hr class="border3 float-left">
							<p class="t-color1 mt-5 text-justify"><?php echo $About[0]; ?></p>
							<p class="t-color1 text-justify"><?php echo $About[1]; ?></p>
							<h3 class="mt-4"><a href="contact.php" class="boton3 font100"><i class="fa fa-eye"></i> Read More</a><div class="dot"></div></h3>
						</div>						
					</div>				
				</div>			
			</div>
		</div>
	</div>
</div>