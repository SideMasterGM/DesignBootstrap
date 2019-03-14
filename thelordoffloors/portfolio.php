<?php include 'php/section/header2.php';include 'php/section/click2call.php';include 'php/section/pagename.php';?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="bars">
		<div class="container">
			<div id="content" itemprop="text">
				<div class="">
					<div class="container">
<?php 
  require_once('portfoliopaginacion.php');
  $urlImagenes = 'images/portfolio/min/'; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
  paginacionDePortafolio($urlImagenes);
?>
<div class="text-center">
<?php if ($numero_paginas > 1) {?>
<ul class="pagination-pic pagination">
  <li ><a href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
  <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a class="btn b_brown-3 b_brown-6-hover t_gray-1" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
  <li><a href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
</ul>
<?php } ?>
</div>
						<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
							<?php for ($i=$inicio; $i>=$final; $i--) { ?>
								<div class="col-md-3 col-sm-6 text-center">
									<div class="project-item">
										<div class="project-item-inner">
											<figure class="alignnone project-img">
												<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
												<div class="overlay">
													<a href="contact.php" title="Go To: Contact Us" class="dlink"><i class="fa fa-link"></i></a>
													<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
												</div>
											</figure>
											<!--<div class="project-desc b_gray-7">
												<h4 class="title uppercase"><a href="contact.php" title="<?php echo "$Company";?>" class="t_white" ><?php echo "$Company";?></a></h4>
												<span class="desc t_gray-2"><i class="fa fa-phone"></i> <?php echo "$Phone";?></span>
											</div>-->
										</div>
									</div>
								</div>
							<?php }?>	
						</div>
<div class="text-center">
<?php if ($numero_paginas > 1) {?>
<ul class="pagination-pic pagination">
  <li ><a href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
  <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a class="btn b_brown-3 b_brown-6-hover t_gray-1" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
  <li><a href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
</ul>
<?php } ?>
</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>