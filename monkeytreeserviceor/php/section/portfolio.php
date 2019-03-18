<section class="py-5" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading t-Color1">Our Portfolio</h2>
        <p class="t-black"><?php echo $Phrase[4];?></p>
        <hr class="my-4">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row popup-gallery">
          <?php for ($i=1; $i <=6 ; $i++) { ?>
          <div class="col-lg-4 col-sm-6 col-6 mb-4">
            <a class="portfolio-box" href="images/portfolio/full/<?php echo $i;?>.jpg">
              <img class="img-fluid" style="width: 100%;" src="images/portfolio/min/<?php echo $i;?>.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    <i class="fa fa-search-plus"></i>
                  </div> -->
                  <div class="project-name">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
      
    </div>
  </div>
</section>