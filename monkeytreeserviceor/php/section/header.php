<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ExDescription;?>">
    <meta name="author" content="">
    <title><?php
    if($page_name=='index.php'){echo "Home";}
    elseif ($page_name=='about.php') {echo "About";}
    elseif ($page_name=='services.php') {echo "Services";}
    elseif ($page_name=='portfolio.php') {echo "Projects";}
    elseif ($page_name=='testimonials.php') {echo "Testimonials";}
    elseif ($page_name=='blog.php') {echo "Blog";}
    elseif ($page_name=='blog-page.php') {echo "$BlogEntryT1";}
    elseif ($page_name=='landing.php') {echo "$LN1";}
    elseif ($page_name=='thank-you.php') {echo "Thank You";}
    elseif ($page_name=='404.php') {echo "404 Error";}
    elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company";?></title>
    <?php include 'php/css_minified.php';?>
    <!-- <link rel="stylesheet" href="style-ham.css"> -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
  </head>
  <body id="page-top">
    <div class="header-top-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 t-white">
            <div>

              <MARQUEE>
              <i class="fa fa-check-square-o"></i> <em><?php echo $Services;?></em> &nbsp &nbsp
              <!-- <i class="fa fa-home"></i> <span><?php echo $Address;?></span> &nbsp &nbsp -->
              <i class="fa fa-handshake-o"></i> <span><?php echo $Experience;?></span> &nbsp &nbsp
              <i class="fa fa-map-marker"></i> <span><?php echo $Cover;?></span> &nbsp &nbsp
              
              <!-- <i class="fa fa-flag-o"></i> <span><?php echo $Bilingual;?></span> &nbsp &nbsp -->
              </MARQUEE>
            </div>
          </div>
          <div class="col-lg-2 d-none d-lg-block">
            <div class="info-top2">
              <!-- <a href="<?php echo $PhoneRef;?>" class="t-white mr-3"><i class="fa fa-phone mr-2"></i> <?php echo $Phone;?></a> -->
              <a href="<?php echo $facebook;?>" class="icons-sm fb-ic ml-0"><i class="fa fa-facebook t-white mr-lg-4 sr-contact"> </i></a>
              <a href="<?php echo $googleplus;?>" class="icons-sm gplus-ic"><i class="fa fa-google-plus t-white mr-lg-4 sr-contact"> </i></a>
              <a href="https://www.homeadvisor.com/rated.MonkeyTreeService.71834656.html#ratingsReviews" target="blank" class="icons-sm gplus-ic" title="HomeAdvisor - Testimonials"><img src="images/homeadvisor.png" width="20px"/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu-bg" id="mainNav">
      <div class="container">
        <span class="t-black navbar-brand d-sm-block d-md-block d-lg-none">Main Menu</span>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='index.php')?'active':'';?>" href="index.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='about.php')?'active':'';?>" href="about.php"><i class="fa fa-user"></i> About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='services.php')?'active':'';?>" href="services.php"><i class="fa fa-calendar"></i> Services</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo ($page_name=='services.php' || $page_name=='landing.php')?'active':'';?>" data-toggle="dropdown" href="services.php" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="landing.php">Landing Pages</a>
                <a class="dropdown-item" href="404.php">404</a>
                <a class="dropdown-item" href="thank-you.php">Thank You</a>
                <div class="dropdown-divider"></div>
                <a class=" dropdown-item" href="services.php">All Services</a>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='portfolio.php')?'active':'';?>" href="portfolio.php"><i class="fa fa-image"></i> Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='testimonials.php')?'active':'';?>" href="testimonials.php"><i class="fa fa-user"></i> Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='contact.php')?'active':'';?>" href="contact.php"><i class="fa fa-address-book-o"></i> Contact</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link btn-menu t-Color2" href="<?php echo $PhoneRef;?>">Call us Today!</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-center d-none d-md-block">
            <div class="info-top">
                <span><i class="fa fa-home info-top-phone"></i> <?php echo $Address;?></span>
            </div>
          </div>
          <div class="col-lg-4 mx-auto col-12 text-center">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="<?php echo $Company;?>" class="logo-position img-fluid"></a>
          </div>
          <div class="col-lg-4 text-center d-none d-md-block">
            <div class="info-top">
              <a href="<?php echo $PhoneRef;?>" class="t-Color1"><i class="fa fa-phone info-top-phone"></i> <?php echo $Phone;?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if ($page_name!="index.php" && $page_name!="landing.php" && $page_name!="404.php" && $page_name!="thank-you.php") {?>
    <div class="banner-top">
      <img src="images/elements/banner-top.jpg" class="" alt="top-banner" />
    </div>
    <?php include 'php/section/pagename.php';?>
    <?php } ?>