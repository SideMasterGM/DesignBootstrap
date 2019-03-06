<!DOCTYPE html>
<?php include 'php/text.php'; ?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=edge">
	<meta charset="utf-8">
	<title><?php echo $page_name2; ?> &nbsp;-&nbsp; <?php echo $Company; ?></title>
	<meta name="description" content="<?php echo $ExDescription;?>">
	<meta name="author" content="<?php echo $$EOMLink;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	  
	<?php //include 'php/css_minified.php';?>
	<link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="fonts/mainfont/stylesheet.css">
  
	<!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom fonts for this template -->
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>
  
  <nav  class="<?php echo ($page_name=='index.php')?'navbar navbar-expand-lg headerTop navbar-light container-fluid':'navbar navbar-expand-lg  navbar-light bg-color4 container-fluid';?>" >
   
    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center">      
      <a href="index.php"><img src="images/logo.png" class="img-fluid" alt=""></a>
    </div>

    <div class="col-12 col-sm-12 col-md-12 offset-md-0 col-lg-7 offset-lg-1 col-xl-7 offset-xl-1">
      <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
        <a class="navbar-brand d-xs-block d-sm-block d-md-block d-lg-none d-lg-none t-color1" href="#">Main Menu</a>
        <button class="navbar-toggler bg-color4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li itemprop="name" class="nav-item <?php echo ($page_name=='index.php')?'active':'';?>">
                <a href="index.php" itemprop="url" title="Home" class="nav-link t-color1 t-color5-hover">Home</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='about.php')?'active':'';?>">
                <a href="about.php" itemprop="url" title="About Us" class="nav-link t-color1 t-color5-hover">About</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='services.php')?'active':'';?>">
                <a href="services.php" itemprop="url" title="Our Services" class="nav-link t-color1 t-color5-hover">Services</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='portfolio.php')?'active':'';?>">
                <a href="portfolio.php" itemprop="url" title="Our Portfolio" class="nav-link t-color1 t-color5-hover">Portfolio</a>
              </li>
             <!--  <li itemprop="name" class="nav-item <?php echo ($page_name=='testimonials.php')?'active':'';?>">
                <a href="testimonials.php" itemprop="url" title="Reviews" class="nav-link t-color1 t-color3-hover">Testimonials</a>
              </li> -->
              <li itemprop="name" class="nav-item <?php echo ($page_name=='contact.php')?'active':'';?>">
                <a href="contact.php" itemprop="url" title="Contact" class="nav-link t-color1 t-color5-hover">Contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="landing-page.php">Landing Page</a>
                  <a class="dropdown-item" href="blog.php" class="<?php echo ($page_name=='blog.php')?'active':'';?>">Blog Page</a>
                   <a class="dropdown-item" href="contact-variante2.php" class="<?php echo ($page_name=='contact-variante2.php')?'active':'';?>">Contact Variante 2</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="thank-you.php" class="<?php echo ($page_name=='thank-you.php')?'active':'';?>">Thank-You Page</a>
                </div>
              </li> -->
              <li class="d-none d-xl-block"><a href="<?php echo $PhoneRef;?>"><p class="font-h4 t-color1 mt-2 pl-1"><i class="fa fa-phone"></i> <?php echo $Phone;?></p></a></li>
            </ul>
        </div>
      </nav>
    </div>

    <!-- <div class="col-5 col-sm-5 col-md-6 col-lg-5 col-xl-4 d-none d-sm-none d-md-block d-lg-block d-xl-block social"> -->
      <!-- <a href="<?php echo $PhoneRef;?>"><h3 class="t-color1 t-color5-hover">Call Us: <?php echo $Phone;?></h3></a> -->
     <!-- <a href="<?php echo $facebook;?>"><i class="fa fa-facebook t-color1 t-color5-hover" aria-hidden="true"></i></a>
     <a href="<?php echo $googleplus;?>"><i class="fa fa-google-plus t-color1 t-color5-hover" aria-hidden="true"></i></a>
     <a href="<?php echo $youtube;?>"><i class="fa fa-youtube t-color1 t-color5-hover" aria-hidden="true"></i></a> -->
    <!-- </div> -->
  </nav>
