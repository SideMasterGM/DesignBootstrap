<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" class="bg-color1">
    <div class="container py-5 px-3">
       
        <?php 
          require_once('portfoliopaginacion.php');
          $urlImagenes = 'images/portfolio/min/'; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
          paginacionDePortafolio($urlImagenes);
        ?>

        <?php if ($numero_paginas > 1) {?>
            <ul class="pagination-pic">
              <li  class="btn bg-color4 bg-color2-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
              <li class="<?php if($pagina_actual==$i){ echo "active"; }?> btn bg-color4 bg-color2-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } ?>
              <li class="btn bg-color4 bg-color2-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
            </ul>
        <?php } ?>

        <div class="row">
            <?php for($i=$inicio;$i<=$final;$i++){ ?>

                <?php
                  if (file_exists("images/portfolio/min/her".$i.".jpg")){
                    ?>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="container-overlay">
                            <img src="images/portfolio/min/her<?php echo $i;?>.jpg" class="img-fluid img-thumbnail" alt="image">
                            <div class="overlay overlay-dark">
                                <div class="text-overlay">
                                    <a href="images/portfolio/full/her<?php echo $i;?>.jpg" class="text-white" data-toggle="lightbox" data-gallery="home-portfolio">
                                        <div class="t-color1">
                                            <em><i class="fa fa-search-plus"></i> Zoom</em>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                  }
                ?>
             <?php }?>
        </div>

        <?php if ($numero_paginas > 1) {?>
            <ul class="pagination-pic">
              <li  class="btn bg-color4 bg-color2-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
              <li class="<?php if($pagina_actual==$i){ echo "active"; }?> btn bg-color4 bg-color2-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } ?>
              <li class="btn bg-color4 bg-color2-hover"><a class="t-color1" href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
            </ul>
        <?php } ?>

    </div> 

    
</div>

<?php include 'php/section/footer3.php'; ?>