<section class="py-5" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading t-Color2 mb-5">Our Project</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row popup-gallery">
          <?php for ($i=1; $i <=6; $i++) { ?>
          <div class="col-lg-4 col-sm-6 col-6 mb-4">
            <a class="portfolio-box" href="images/portfolio/home/full/<?php echo $i;?>.jpg">
              <img class="img-fluid" style="width: 100%;" src="images/portfolio/home/min/<?php echo $i;?>.jpg" alt="">
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
        <div class="col-md-12">
            <p class="text-center">
              <a href="portfolio.php" class="hbtn hb-fill-middle2-rev-bg hb-fill-middle2-rev-bg2 hpad2 hpill mt-2">View More</a>
            </p>
          </div>
      </div>
      
    </div>
  </div>
</section>