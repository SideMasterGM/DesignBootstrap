<!DOCTYPE HTML>
<?php @session_start();?>

<?php include 'php/text.php';?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";};?>>
	<head>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta charset="utf-8">
	    <title><?php echo $namepage.'&nbsp;|&nbsp;'.$Company;?></title>
	    <meta name="description" content="<?php echo $ExDescription;?>">
	    <meta name="author" content="<?php echo $EOMLink;?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <link rel="shortcut icon" href="images/favicon.png">
      <!--<?php include 'minify.php';?>-->
      <link rel="stylesheet" type="text/css" href="source/fonts/mainfonts/stylesheet.css">
      <link rel="stylesheet" type="text/css" href="source/css/estilos.css">
      <link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="source/css/font.css">
      <link href="source/css/lightbox.css" rel="stylesheet">
  	</head>
<body>
  <?php $_SESSION['token'] = md5(microtime()); ?>
<header>
  <div class="bg-color1 p10px">
    <div class="container top-header">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
          <div class="dropdown">
            <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              GET IN TOUCH
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?php echo $PhoneRef;?>"><i class="material-icons">phone</i> Call Us</a>
              <a class="dropdown-item" href="contact.php"><i class="material-icons">chat</i> Send us a Mail</a>
              <a class="dropdown-item" href="portfolio.php"><i class="material-icons">insert_photo</i> Check Our Portfolio</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 t-negro d-none d-md-block"><span><?php echo $Phone;?> | <?php echo $Schedule;?> | <?php echo $Address;?></span></div>
        <div class="col-md-3 col-sm-6 text-center t-negro d-none d-sm-block">
          <div class="row text-center">
            <div class="col-lg-2 offset-lg-3 col-3 col-xs-3 col-sm-3 col-md-3"><a href="<?php echo $youtube;?>" title="Chek Our youtube" target="_blank"><img src="images/elements/socialmedia.png" class="rounded-circle social social-white youtube"></a></div>
            <div class="col-lg-2 col-3 col-xs-3 col-sm-3 col-md-3"><a href="<?php echo $instagram;?>" title="Chek Our instagram" target="_blank"><img src="images/elements/socialmedia.png" class="rounded-circle social social-white instagram"></a></div>
            <div class="col-lg-2 col-3 col-xs-3 col-sm-3 col-md-3"><a href="<?php echo $facebook;?>" title="Chek Our facebook" target="_blank"><img src="images/elements/socialmedia.png" class="rounded-circle social social-white facebook"></a></div>
            <div class="col-lg-2 col-3 col-xs-3 col-sm-3 col-md-3"><a href="<?php echo $googleplus;?>" title="Chek Our googleplus" target="_blank"><img src="images/elements/socialmedia.png" class="rounded-circle social social-white googleplus"></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container padding2 middle-header">
    <div class="row align-items-center">
    <div class="col-lg-3 col-md-6 offset-md-0 col-sm-8 offset-sm-2 col-xs-12">
      <img src="images/logo.png" class="img-fluid">
    </div>
    <div class="col-lg-5 offset-lg-2 col-md-6 text-right d-none d-md-block d-lg-block">
      <div class="row phrases-top">
        <div class="col-md-4 d-none d-sm-block"><i class="material-icons">error_outline</i> <?php echo $PhraseTop1;?></div>
        <div class="col-md-4 border-top-0 border-bottom-0 border d-none d-sm-block"><i class="material-icons">error_outline</i> <?php echo $PhraseTop2;?></div>
        <div class="col-md-4 d-none d-sm-block"><i class="material-icons">error_outline</i> <?php echo $PhraseTop3;?></div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 text-center d-none d-lg-block">
      <a href="contact.php" class="btn btn-md btn-warning"><strong>Get a Quote</strong></a>
    </div>
    </div>
  </div>
  <div class="f-negro">
  <div class="container p10px bottom-header">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-10 col-sm-9 col-xs-12"><?php include 'php/section/menu.php' ?></div>
      <div class="col-lg-4 col-md-2 col-sm-3 d-none d-sm-block text-right text-white d-none d-sm-block"><a href="contact.php" class="t-blanco"><i class="material-icons">speaker_notes</i></a> | <a href="<?php echo $PhoneRef;?>" class="t-blanco"><i class="material-icons">phone</i></a></div>
    </div>
  </div>
  </div>
</header>



