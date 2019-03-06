<div class="bg-fixed">	
		<div class="container-fluid">	
			<div class="row">
				<div class="col-12 col-sm-5 offset-0 col-md-5 offset-md-1 col-lg-5 offset-lg-1 col-xl-5 offset-xl-1">
					<div class="container bgSec mt-2">
						<h3 class="t-color4"><?php echo $Experience;?></h3>
						<p class="t-color2"><?php echo $About[2];?></p> 
						<hr class="border3 float-left">	<br class="mt-5">			
						
						<div id="accordion" class="my-5" role="tablist">
						  <div class="card borderWhite bg-color4">
						    <div class="card-header border-none" role="tab" id="headingOne">
						      <h5 class="mb-0>
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
						  <div class="card bg-color4 borderWhite my-2">
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
						  <div class="card bg-color4 borderWhite my-2">
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
				<div class="col-12 col-sm-7 col-md-6 col-lg-6 col-xl-6 full-img2 padding3">				
					<div class="background-opaque pb-4 border-radius-3 col-12 offset-md-2 col-sm-12 col-md-7 col-lg-6 col-xl-6">
						<!-- <h5 class="pt-4"><em class="t-color1"><?php echo $Bilingual;?></em></h5> -->
						<br>
						<h2 class="t-color1 stroke2 font-h2"><?php echo $License;?></h2> 
						<hr class="border3 float-left">		
						<p class="t-color1 mt-5"> <i class="fa fa-check"></i> <?php echo $Phrase[3];?></p>
						<p class="t-color1 mb-5"> <i class="fa fa-check"></i> <?php echo $Phrase[4];?></p>
						<h3 class="mt-4"><a href="contact.php" class="boton1 boton2-hover t-color1 font100"><i class="fa fa-eye"></i> Read More</a><div class="dot"></div></h3>
					</div>				
				</div>			
			</div>
		</div>
	</div>
</div>