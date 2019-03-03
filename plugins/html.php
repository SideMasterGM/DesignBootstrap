<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php

            ini_set('display_errors', 1);
	        ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $Path = $_SERVER['DOCUMENT_ROOT']."/".explode("/", $_SERVER['REQUEST_URI'])[1];
            if (explode("/", $_SERVER['REQUEST_URI'])[1] != "DesignBootstrap"){
                $Path = $_SERVER['DOCUMENT_ROOT'];
            }
        ?>

        <script src="../libs/js/jquery-3.3.1.slim.min.js"></script>
        <script src="../libs/js/bootstrap.min.js"></script>
        <!-- <script src="../libs/js/jquery.mousewheel.min.js"></script> -->

        <?php include ("../libs/php/lightgallery/lg-head.php"); ?>
    </head>

    <body>
        <?php include ("../libs/php/lightgallery/lg-body.php"); ?>
        <?php include ("../libs/php/lightgallery/lg-foot.php"); ?>
    </body>
</html>