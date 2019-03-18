<section class="bg2 py-5" id="portfolio">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12 text-center mb-2">
        <h2 class="t-white">Portfolio</h2>
        <p class="t-white"><?php echo $Phrase[2];?></p>
        <hr class="light my-4">
      </div>
    </div>
    
  </div>
  <div class="container">
    <div class="row no-gutters popup-gallery">
      <?php for ($i=1; $i <=6 ; $i++) { ?>
      <div class="col-lg-4 col-sm-6 col-6">
        <a class="portfolio-box" href="images/portfolio/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/min/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <!-- <div class="project-category text-faded">
                <?php echo $Phone; ?>
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
</section>