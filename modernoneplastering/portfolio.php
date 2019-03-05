<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" class="bg bg-6 bg-fixed">
    <div class="container padding3">
        <?php 
          require_once('portfoliopaginacion.php');
          $urlImagenes = 'images/portfolio/min/'; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
          paginacionDePortafolio($urlImagenes);
        ?>

        <?php if ($numero_paginas > 1) {?>
            <ul class="pagination-pic">
              <li  class="btn bg-color4 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
              <li class="<?php if($pagina_actual==$i){ echo "active"; }?> btn bg-color4 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } ?>
              <li class="btn bg-color4 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
            </ul>
        <?php } ?>

        <div class="row">
            <?php for($i=$inicio; $i<=$final;$i++){ ?>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 padding2">
                    <div class="container-overlay">
                        <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid img-thumbnail" alt="image">
                        <div class="overlay overlay-dark">
                            <div class="text-overlay">
                                <a href="images/portfolio/full/<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
                                    <div class="t-color3">
                                       <em class="font-h3"><i class="fa fa-search-plus"></i></em>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
             <?php }?>
        </div>

        <?php if ($numero_paginas > 1) {?>
            <ul class="pagination-pic">
              <li  class="btn bg-color4 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
              <li class="<?php if($pagina_actual==$i){ echo "active"; }?> btn bg-color4 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } ?>
              <li class="btn bg-color4 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
            </ul>
        <?php } ?>

    </div> 

    <!-- <div class="container-fluid bg-color1">
        <div class="container">
            <div class="col-12 col-sm-6 offset-0 col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1 padding3">
                <div class="row">
                    <div class="text-center">
                        <h1 class="text-center t-color3 font-h2">Our Projects</h1>
                        <p class="mt-3 px-5 t-color2"><?php// echo $About[1];?></p><hr class="border3">
                    </div>                      
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
              //require_once('portfoliopaginacion.php');
              //$urlImagenes = 'images/portfolio/min/'; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
             // paginacionDePortafolio($urlImagenes);
            ?>
            <div class="col-12 col-sm-12 col-md-10 offset-md-1 text-center">
                <?php// if ($numero_paginas > 1) {?>
                    <ul class="pagination-pic">
                      <li  class="btn bg-color2 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php// echo $prev; ?>">&laquo;</a></li>
                      <?php// for ($i = 1; $i <= $numero_paginas; $i++) { ?>
                      <li class="<?php// if($pagina_actual==$i){ echo "active"; }?> btn bg-color2 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php// echo $i; ?>"><?php// echo $i; ?></a></li>
                      <?php// } ?>
                      <li class="btn bg-color2 bg-color3-hover"><a class="t-color1" href="portfolio.php?page=<?php// echo $next; ?>">&raquo;</a></li>
                    </ul>
                <?php// } ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 no-padding">
                <div class="row no-padding">
                    <?php// for($i=$inicio;$i<=$final;$i++){ ?>
                        <div class="col-12 col-sm-6 col-md-3 no-padding">
                            <div class="container-overlay">
                                <img src="images/portfolio/min/<?php// echo $i;?>.jpg" class="img-fluid1" alt="image">
                                <div class="overlay overlay-dark">
                                    <div class="text-overlay">
                                        <a href="images/portfolio/full/<?php// echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
                                            <div class="t-color5">
                                                <em><i class="fa fa-search-plus"></i> View Image</em>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php// }?>
                </div>
            </div>
        </div>
    </div> -->



</div>

<?php include 'php/section/bar2.php';include 'php/section/footer3.php'; ?>