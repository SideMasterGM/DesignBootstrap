<div id="carouselExampleIndicators" class="carousel slide d-none d-sm-block d-md-block d-lg-block d-xl-block" data-ride="carousel">  
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-sm-none d-md-block d-lg-block d-xl-block">
          <div class="container2 mx-auto mt-4">
            <h3 class="t-color5 stroke"><?php echo $Experience;?></h3>
            <h1 class="font-h2 t-color1 stroke2"><?php echo $Phrase[0];?></h1>
            <a href="contact.php" class="btn btn-md boton2 font110 my-4"><i class="fa fa-address-book"></i> Contact Us</a>
            <a href="about.php" class="btn btn-md boton4 font110 my-4"><i class="fa fa-user"></i> About Us</a>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-sm-none d-md-block d-lg-block d-xl-block"> 
          <div class="container2 mx-auto mt-4">         
            <h3  class="t-color5 stroke"><?php echo $Services;?></h3>
            <h1 class="font-h2 t-color1 stroke2"><?php echo $Phrase[4];?></h1>
            <a href="services.php" class="btn btn-md boton4 font110 my-4"><i class="fa fa-eye"></i> Our Portfolio</a>
            <a href="about.php" class="btn btn-md boton2 font110 my-4"><i class="fa fa-user"></i> About Us</a>
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-sm-none d-md-block d-lg-block d-xl-block">          
          <div class="container2 mx-auto mt-4">
            <h3  class="t-color5 stroke"><?php echo $Bilingual;?></h3>
            <h1 class="font-h2 t-color1 stroke2"><?php echo $Phrase[1];?></h1>
            <a href="contact.php" class="btn btn-md boton2 font110 my-4"><i class="fa fa-envelope"></i> Send Message</a>
            <a href="portfolio.php" class="btn btn-md boton4 font110 my-4"><i class="fa fa-eye"></i> Our Portfolio</a>
          </div>
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
