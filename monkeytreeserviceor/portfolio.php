<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<section class="bar2">
  <div class="container text-center">
    <h2 class="t-Color1">Portfolio</h2>
    <p class="t-black"><?php echo $Phrase[2] ?></p>
    <hr class="mb-5">
  </div>
  <div class="container">
<?php 
  require_once('portfoliopaginacion.php');
  $urlImagenes = 'images/portfolio/min/'; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
  paginacionDePortafolio($urlImagenes);
?>

<?php if ($numero_paginas > 1) {?>
<ul class="pagination">
  <li ><a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
  <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
  <li><a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
</ul>
<?php } ?>

    <div class="row popup-gallery">
      <?php for ($i=$inicio; $i>=$final; $i--) { ?>
      <div class="col-lg-4 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/min/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                <i class="fa fa-search-plus"></i>
              </div>
              <!-- <div class="project-name">
                <?php echo $Company; ?>
              </div> -->
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
<?php if ($numero_paginas > 1) {?>
<ul class="pagination">
  <li ><a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
  <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
  <li><a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
</ul>
<?php } ?>
  </div>
</section>

<section class="bar2">
  <div class="container text-center">
    <h2 class="t-Color1">Stump Grinding</h2>
    <hr class="mb-5">
  </div>
  <div class="container">

    <div class="row popup-gallery">
      <?php for ($i=1; $i<=6; $i++) { ?>
      <div class="col-lg-4 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/stump_griding/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/stump_griding/min/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                <i class="fa fa-search-plus"></i>
              </div>
              <!-- <div class="project-name">
                <?php echo $Company; ?>
              </div> -->
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
</section>

<?php include 'php/section/social.php';?>
<?php include 'php/section/footer2.php';?>