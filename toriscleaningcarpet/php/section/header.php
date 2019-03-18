<!DOCTYPE HTML>
<?php @session_start();?>
<?php include 'php/text.php';?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";};?>>

  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta charset="utf-8">
      <title><?php echo $namepage;?> | <?php echo $Company;?></title>
      <meta name="description" content="<?php echo $ExDescription;?>">
      <meta name="author" content="<?php echo $EOMLink;?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" href="images/favicon.png">

      <link rel="stylesheet" type="text/css" href="source/fonts/mainfonts/stylesheet.css">
      <link rel="stylesheet" type="text/css" href="source/css/estilos.css">
      <link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="source/css/font.css">
      <link href="source/css/lightbox.css" rel="stylesheet">
    </head>
<body>
  <?php $_SESSION['token'] = md5(microtime()); ?>
<header>
  
  <div class="b-blanco">
    <div class="container  py-1 middle-header">
      <div class="row align-items-center pt-2 pb-2">
        
        <div class="col-lg-4 col-md-3 col-sm-12 text-center d-none d-md-block"><i class="material-icons">home</i> <?php echo $PhraseTop1;?></div>
        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
          <img src="images/logo.png" class="img-fluid">
          <a href="<?php echo $PhoneRef;?>" class="d-block d-sm-none btn btn-block btn-md bg-color1 text-white my-3"><i class="material-icons">phone</i> <?php echo $Phone; ?></a>
           <a href="<?php echo $Phone2Ref;?>" class="d-block d-sm-none btn btn-block btn-md bg-color1 text-white my-3"><i class="material-icons">phone</i> <?php echo $Phone2; ?></a>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 text-center d-none d-md-block"><i class="material-icons">error_outline</i> <?php echo $PhraseTop2;?></div>
      </div>
    </div>
  </div>
  <div class="bg-color1">
    <div class="container bottom-header">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"><?php include 'php/section/menu.php' ?></div>
        <div class="col-lg-6 col-md-2 col-sm-3 d-none d-lg-block text-right text-white">
          <a href="contact.php" class="t-negro btn btn-sm bg-color2"><i class="material-icons">email</i> CONTACT US</a>
        </div>
      </div>
    </div>
  </div>
</header>



