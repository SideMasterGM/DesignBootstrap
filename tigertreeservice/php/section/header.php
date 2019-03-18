<?php @session_start();?>
<!DOCTYPE HTML>
<?php include 'php/text.php';?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta charset="utf-8">
          <title>
              <?php 
                if($page_name=='index.php'){echo "Home";}
                elseif ($page_name=='about.php') {echo "About";}
                elseif ($page_name=='services.php') {echo "Services";}
                elseif ($page_name=='portfolio.php') {echo "Portfolio";}
                elseif ($page_name=='thank-you.php') {echo "Thank You";}
                elseif ($page_name=='testimonials.php') {echo "Testimonials";}
                // elseif ($page_name=='blog.php') {echo "Blog";}
                // elseif ($page_name=='blog-page.php') {echo "$BlogEntryT1";}
                // elseif ($page_name=='landing-page.php') {echo "$LN1";}
                elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company";?>
          </title>
          <meta name="description" content="<?php $ExDescription;?>">
          <meta name="author" content="http://www.eliteonlinemedia.com/">
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <link rel="shortcut icon" href="images/favicon.png">
          
          <?php include 'php/css_minified.php';?>

          <!--<link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/font-awesome.min.css">
          <link rel="stylesheet" href="css/animate.css">
          <link rel="stylesheet" href="css/prettyPhoto.css">
          <link rel="stylesheet" href="css/owl.carousel.css">
          <link rel="stylesheet" href="css/jquery.bxslider.css">
          <link rel="stylesheet" href="fonts/mainfont/stylesheet.css">
          <link rel="stylesheet" href="css/custom.css">
          -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
  </head>
<body>
  <div class="body-inner">
  <header id="header" class="navbar-fixed-top main-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top-info">

          </div>
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" style="background: none!important">
               <img class="img-responsive hidden-sm" src="images/logo.png" alt="logo"> 
               <img class="visible-sm" src="images/logo.png" alt="logo" width="80%"> 
              </a>                    
          </div>
          <nav class="collapse navbar-collapse clearfix " role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li itemprop="name" class="<?php echo ($page_name=='index.php')?'active':'';?>">
                 <a href="index.php" itemprop="url" title="Home" class="t_white uppercase stroke2">Home</a>
              </li>
              <li itemprop="name" class="<?php echo ($page_name=='about.php')?'active':'';?>">
                 <a href="about.php" itemprop="url" title="About Us" class="t_white uppercase stroke2">About Us</a>
              </li>
              <li itemprop="name" class="<?php echo ($page_name=='services.php')?'active':'';?>" >
                    <a href="services.php" itemprop="url" title="Services" class="t_white uppercase stroke2">Services</a>
                  </li>
              <li itemprop="name" class="<?php echo ($page_name=='portfolio.php')?'active':'';?>" >
                    <a href="portfolio.php" itemprop="url" title="Portfolio" class="t_white uppercase stroke2">Portfolio</a>
                  </li>

               <li itemprop="name" class="<?php echo ($page_name=='videos.php')?'active':'';?>">
                <a href="videos.php" itemprop="url" title="Videos" class="t_white uppercase stroke2">Videos</a>
              </li>
              
             <!--  
             <li itemprop="name" class="<?php echo ($page_name=='testimonials.php')?'active':'';?>">
                    <a href="testimonials.php" itemprop="url" title="Testimonials" class="t_white uppercase stroke2">Testimonials</a>
                  </li>    
              <li itemprop="name" class="<?php echo ($page_name=='blog.php')?'active':'';?>">
                    <a href="blog.php" itemprop="url" title="Blog" class="t_white uppercase stroke2">Blog</a>
                  </li> -->
              <li itemprop="name" class="<?php echo ($page_name=='contact.php')?'active':'';?>">
                   <a href="contact.php" itemprop="url" title="Contact Us" class="t_white uppercase stroke2">Contact Us</a>
              </li>
              <!-- <li itemprop="name" class="dropdown <?php echo ($page_name=='landing-page.php')?'active':'';?>">
                  <a href="#" itemprop="url" title="DropDown" data-toggle="dropdown" class="dropdown-toggle t_white uppercase stroke2">Dropdown<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li itemprop="name" class="<?php echo ($page_name=='landing-page.php')?'active':'';?>"><a href="landing-page.php" itemprop="url" title="Landing Page" class="t_gray-3 uppercase">Landing Page</a></li>
                    <li itemprop="name" class="<?php echo ($page_name=='404.php')?'active':'';?>"><a href="404.php" itemprop="url" title="Error404" class="t_gray-3 uppercase">Error404</a></li>
                  </ul>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <?php if ($page_name!="index.php") {?>
    <div id="inner-header">
      <img src="images/elements/banner-top.jpg" alt="top-banner" />
    </div>
    <section id="inner-title" class="negative-40 text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-title-content">
                 <?php include 'php/section/pagename.php';?>
            </div>
          </div>
        </div>
        </div>
     </section>
  <?php } ?>
  