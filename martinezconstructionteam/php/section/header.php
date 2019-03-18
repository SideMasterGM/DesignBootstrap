<!DOCTYPE html>
<?php include 'php/text.php';?>
<?php @session_start();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ExDescription;?>">
    <meta name="author" content="">
    <title>
    <?php
    if($page_name=='index.php'){echo "Home";}
    elseif ($page_name=='about.php') {echo "About";}
    elseif ($page_name=='services.php') {echo "Services";}
    elseif ($page_name=='portfolio.php') {echo "Projects";}
    elseif ($page_name=='construction-services.php') {echo "Construction Services";}
    elseif ($page_name=='cleaning-services.php') {echo "Cleaning Services";}
    elseif ($page_name=='landscaping.php') {echo "Landscaping";}
    elseif ($page_name=='testimonials.php') {echo "Testimonials";}
    elseif ($page_name=='thank-you.php') {echo "Thank You";}
    elseif ($page_name=='blog.php') {echo "Blog";}
    elseif ($page_name=='blog-page.php') {echo "$BlogEntryT1";}
    elseif ($page_name=='landing.php') {echo "$LN1";}
    elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company";?>
    </title>
    <?php include 'php/css_minified.php';?>
    <!-- <link rel="stylesheet" href="style-ham.css"> -->
    
    <link rel="icon" type="image/png" href="images/favicon.png" />
  </head>
  <body id="page-top">
    <div class="header-top">
        <div class="container">
          <div class="row t-white">
            <div class="col-lg-6">
              <div class="info-top2">
                <!-- <i class="fa fa-flag"></i> <?php echo $Bilingual;?> -->
                <i class="fa fa-map-marker"></i> <?php echo $Cover;?>
                <!-- <a href="<?php echo $facebook;?>" class="icons-sm fb-ic ml-0"><i class="fa fa-facebook t-black mr-lg-4 sr-contact"> </i></a>
                <a href="<?php echo $googleplus;?>" class="icons-sm gplus-ic"><i class="fa fa-google-plus t-black mr-lg-4 sr-contact"> </i></a> -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-top">
                <i class="fa fa-envelope-o"></i> <a class="t-white" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a>
                
                <i class="fa fa-phone"></i> <a class="t-white" href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a>
              </div>
            </div>
            <!-- <div class="col-lg-12">
              <div class="info-top3">
                Call us Now and Get a Free Estimate! <i class="fa fa-phone"></i> <a class="t-white" href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu-bg" id="mainNav">
      
      <div class="container">
       <div class="row" style="width: 100%;">
         <!-- <div class="col-md-4"></div> -->
         <div class="col-md-12">
            <center>
              <a class='navbar-brand' href='index.php'><img src='images/logo.png' alt='<?php echo $Company;?>'></a>
        
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
            </center>
         </div>
         <!-- <div class="col-md-4"></div> -->
       </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu-bg" id="mainNav">
      
      <div class="container" style="margin: auto 0;">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='index.php')?'active':'';?>" href="index.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='about.php')?'active':'';?>" href="about.php"><i class="fa fa-user"></i> About Us</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='services.php')?'active':'';?>" href="services.php"><i class="fa fa-handshake-o"></i> Services</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='construction-services.php')?'active':'';?>" href="construction-services.php"><i class="fa fa-handshake-o"></i> Construction Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='cleaning-services.php')?'active':'';?>" href="cleaning-services.php"><i class="fa fa-handshake-o"></i> Cleaning Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='landscaping.php')?'active':'';?>" href="landscaping.php"><i class="fa fa-handshake-o"></i> Landscaping</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo ($page_name=='services.php' || $page_name=='<?php echo $LN1link;?>.php')?'active':'';?>" data-toggle="dropdown" href="services.php" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo $LN1link;?>"><?php echo $LN1;?></a>
                <a class="dropdown-item" href="<?php echo $LN2link;?>"><?php echo $LN2;?></a>
                <a class="dropdown-item" href="<?php echo $LN3link;?>"><?php echo $LN3;?></a>
                <a class="dropdown-item" href="<?php echo $LN4link;?>"><?php echo $LN4;?></a>
                <a class="dropdown-item" href="<?php echo $LN5link;?>"><?php echo $LN5;?></a>
                <a class="dropdown-item" href="<?php echo $LN6link;?>"><?php echo $LN6;?></a>
               
                <div class="dropdown-divider"></div>
                <a class=" dropdown-item" href="services.php">All Services</a>
              </div>
            </li> -->

            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='portfolio.php')?'active':'';?>" href="portfolio.php"><i class="fa fa-image"></i> Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php// echo ($page_name=='testimonials.php')?'active':'';?>" href="testimonials.php"><i class="fa fa-users"></i> Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='contact.php')?'active':'';?>" href="contact.php"><i class="fa fa-address-book-o"></i> Contact Us</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link btn-menu t-Color2" href="<?php echo $PhoneRef;?>">Call us Today!<br><?php echo $Phone;?></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <?php if ($page_name!="index.php" && $page_name!="landing.php" && $page_name!="404.php" && $page_name!="thank-you.php") {?>
    
    <?php include 'php/section/pagename.php';?>
    <?php } ?>