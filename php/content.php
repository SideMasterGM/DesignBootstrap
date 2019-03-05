<?php
    if ($filename == "index.php"){
        include ("php/ct-section-start.php");
        include ("php/ct-section-services.php");
        include ("php/ct-section-end.php");

        include ("libs/php/lightgallery/lg-body.php");
        include ("php/ct-section-about_us.php");
    }

    if ($filename == "services.php"){
        include ("services.php");
    }

    if ($filename == "portfolio.php"){
        include ("libs/php/lightgallery/lg-body.php");
    }

    if ($filename == "contact.php"){
        // include ("libs/php/lightgallery/lg-body.php");
        include ("php/contact-form.php");
    }

    if ($filename == "about.php"){
        // include ("libs/php/lightgallery/lg-body.php");
        include ("php/about.php");
    }

    include ("php/ct-section-contact.php");
?>