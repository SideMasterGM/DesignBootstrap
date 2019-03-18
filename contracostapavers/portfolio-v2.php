<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<section class="bar2">
  <div class="container text-center">
    <h2 class="t-Color1">Portfolio</h2>
    <p class="t-black"><?php echo $Phrase[2] ?></p>
    <hr class="mb-5">
  </div>
  <div class="container">

    <h2 class="t-Color1">Ceramic Tile</h2>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=4; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/ceramic-tile/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/ceramic-tile/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                <?php echo $Phone; ?>
              </div>
              <div class="project-name">
                <?php echo $Company; ?>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>

    <h2 class="t-Color1">Concrete</h2>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=8; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/concrete/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/concrete/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                <?php echo $Phone; ?>
              </div>
              <div class="project-name">
                <?php echo $Company; ?>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>

    <h2 class="t-Color1">Roofing</h2>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=18; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/roofing/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/roofing/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                <?php echo $Phone; ?>
              </div>
              <div class="project-name">
                <?php echo $Company; ?>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>

    <h2 class="t-Color1">More Projects</h2>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=6; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/more-projects/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/more-projects/<?php echo $i;?>.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
              <div class="project-category text-faded">
                <?php echo $Phone; ?>
              </div>
              <div class="project-name">
                <?php echo $Company; ?>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>

  </div>
</section>

<?php include 'php/section/bar3.php';?>
<?php include 'php/section/footer.php';?>