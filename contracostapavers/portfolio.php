<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<section class="bar2">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jssor.slider.min.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function ($) {
  var jssor_1_options = {
  $AutoPlay: 1,
  $SlideWidth: 720,
  $ArrowNavigatorOptions: {
  $Class: $JssorArrowNavigator$
  },
  $BulletNavigatorOptions: {
  $Class: $JssorBulletNavigator$
  }
  };
  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
  /*#region responsive code begin*/
  var MAX_WIDTH = 980;
  function ScaleSlider() {
  var containerElement = jssor_1_slider.$Elmt.parentNode;
  var containerWidth = containerElement.clientWidth;
  if (containerWidth) {
  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
  jssor_1_slider.$ScaleWidth(expectedWidth);
  }
  else {
  window.setTimeout(ScaleSlider, 30);
  }
  }
  ScaleSlider();
  $(window).bind("load", ScaleSlider);
  $(window).bind("resize", ScaleSlider);
  $(window).bind("orientationchange", ScaleSlider);
  /*#endregion responsive code end*/
  });
  </script>
  <style>
  /* jssor slider loading skin spin css */
  .jssorl-009-spin img {
  animation-name: jssorl-009-spin;
  animation-duration: 1.6s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  }
  @keyframes jssorl-009-spin {
  from {
  transform: rotate(0deg);
  }
  to {
  transform: rotate(360deg);
  }
  }
  .jssorb051 .i {position:absolute;cursor:pointer;}
  .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
  .jssorb051 .i:hover .b {fill-opacity:.7;}
  .jssorb051 .iav .b {fill-opacity: 1;}
  .jssorb051 .i.idn {opacity:.3;}
  .jssora051 {display:block;position:absolute;cursor:pointer;}
  .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
  .jssora051:hover {opacity:.8;}
  .jssora051.jssora051dn {opacity:.5;}
  .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
  </style>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:550px;overflow:hidden;visibility:hidden;">
          <!-- Loading Screen -->
          <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
          </div>
          <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:550px;overflow:hidden;border: 5px solid #fbb040;">
            <?php for ($i=1; $i<=23; $i++) { ?>
            <div>
              <img data-u="image" src="images/portfolio/full/<?php echo $i;?>.jpg" style="border: 2px solid #fbb040;" />
            </div>
            <?php } ?>
          </div>
          <!-- Bullet Navigator -->
          <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
              <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
              </svg>
            </div>
          </div>
          <!-- Arrow Navigator -->
          <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
          </div>
          <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
          </div>
        </div>
        <!-- #endregion Jssor Slider End -->
      </div>
    </div>
  </div>
  <div class="container mt-5">    
    <div class="row">
      <div class="col-md-12">
        <h2 class="t-Color2">Landscape</h2>
      </div>
    </div>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=58; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/landscape/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/landscape/min/<?php echo $i;?>.jpg" alt="">
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

    <div class="row">
      <div class="col-md-12">
        <h2 class="t-Color2">Hardscape</h2>
      </div>
    </div>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=27; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/hardscape/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/hardscape/min/<?php echo $i;?>.jpg" alt="">
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

    <div class="row">
      <div class="col-md-12">
        <h2 class="t-Color2">Pavers</h2>
      </div>
    </div>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=8; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/pavers/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/pavers/min/<?php echo $i;?>.jpg" alt="">
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
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="t-Color2">Fire Pits, Kitchens, Water Features and Mail Boxes</h2>
      </div>
    </div>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=44; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/firepit/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/firepit/min/<?php echo $i;?>.jpg" alt="">
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
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="t-Color2">Turf</h2>
      </div>
    </div>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=7; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/turf/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/turf/min/<?php echo $i;?>.jpg" alt="">
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
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="t-Color2">Walls</h2>
      </div>
    </div>
    <div class="row popup-gallery">
      <?php for ($i=1; $i<=9; $i++) { ?>
      <div class="col-lg-3 col-sm-6 col-6 mb-4">
        <a class="portfolio-box" href="images/portfolio/walls/full/<?php echo $i;?>.jpg">
          <img class="img-fluid" style="width: 100%;" src="images/portfolio/walls/min/<?php echo $i;?>.jpg" alt="">
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
  </div>
  <div class="container mt-5">
    <div class="row align-items-center text-center">
      <div class="col-md-12">
        <h4 class="t-Color2"><?php echo $Phrase[8];?></h4>
        <h4 class="t-Color2" style="font-size: 140%;">Call us for a free estimate today</h4>
        
      </div>
    </div>
  </div>
</section>
<?php include 'php/section/footer.php';?>