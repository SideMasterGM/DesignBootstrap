<?php include 'php/section/header.php';include 'php/section/pagename.php';?>
	<div class="container padding4 content">
		<?php 
		  require_once('portfoliopaginacion.php');
		  $urlImagenes = 'images/portfolio/min/';
		  paginacionDePortafolio($urlImagenes);
		?>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if ($numero_paginas > 1) {?>
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-center">
					  <li class="page-item"><a class="page-link" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
					  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
					  <li class="page-item <?php if($pagina_actual==$i){ echo "active"; }?>"><a class="page-link" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					  <?php } ?>
					  <li class="page-item"><a class="page-link" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
				  </ul>
				</nav>
				<?php } ?>
			</div>
		</div>
		<div class="row text-center">
			<?php for ($i=$inicio; $i>=$final; $i--) { ?>
			<div class="col-md-3">
				<div class="container-overlay">
				  <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid d-inline-block">
				  <div class="overlay-main overlay-dark">
				    <div class="text-overlay">
				    	<a href="images/portfolio/full/<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
				    		<p><i class="material-icons">zoom_in</i> <strong>Zoom</strong></p>
				    	</a>
					</div>
				  </div>
				</div>
				<p>&nbsp;</p>
			</div>	
			<?php } ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if ($numero_paginas > 1) {?>
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-center">
					  <li class="page-item"><a class="page-link" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
					  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
					  <li class="page-item <?php if($pagina_actual==$i){ echo "active"; }?>"><a class="page-link" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					  <?php } ?>
					  <li class="page-item"><a class="page-link" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
				  </ul>
				</nav>
				<?php } ?>
			</div>
		</div>
	</div>
<?php include 'php/section/footer.php';?>