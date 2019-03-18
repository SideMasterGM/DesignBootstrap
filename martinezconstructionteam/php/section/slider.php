<header class="d-sm-block d-none">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/slider/1.jpg')">
        <div class="carousel-caption d-none d-md-block text-center">
          <div class="font-slide shadow-text-slider"><!-- ancho-texto-slide -->
            <h3 class="t-white"><?php echo $Phrase[1];?></h3>
            <p class="t-white subtitulo"><?php echo $Phrase[0];?></p>
          </div>
          <a href="portfolio.php" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill">PORTFOLIO</a>
          <a href="contact.php" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill">CONTACT US</a>
                  
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('images/slider/2.jpg')">
        <div class="carousel-caption d-none d-md-block text-center">
          <div class="font-slide shadow-text-slider">
            <h3 class="t-white"><?php echo $Phrase[2];?></h3>
            <p class="t-white subtitulo"><?php echo $Estimates;?></p>
          </div>
          <a href="portfolio.php" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill">PORTFOLIO</a> 
          <a href="contact.php" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill">CONTACT US</a> 
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('images/slider/3.jpg')">
        <div class="carousel-caption d-none d-md-block text-center">
          <div class="font-slide shadow-text-slider">
            <h3 class="t-white"><?php echo $Phrase[3];?></h3>
            <p class="t-white subtitulo"><?php echo $Payment;?></p>
          </div>
          <a href="portfolio.php" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill">PORTFOLIO</a>
          <a href="contact.php" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill">CONTACT US</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>