<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <div class="">
        <div class="padding3">
            <div class="container">
                <!-- <div class="row padding2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h2 class="text-center font-h1 t-color3"><?php echo $Company;?></h2><hr>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 mt-3 px-3">
                        <h2 class="t-color5"><?php echo $Company;?></h2><hr class="border3 float-left"><br><br>
                        <p class="t-color2 text-justify"><?php echo "$About[0]";?></p>
                        <p class="t-color2 text-justify"><?php echo "$About[1]";?></p>                    
                        <p class="t-color2 text-justify"><?php echo "$About[2]";?></p>                       
                        <!-- <h3><i class="fa fa-check-circle t-color3"></i> <?php echo $Phrase[2]; ?></h3>
                        <h3><i class="fa fa-check-circle t-color3"></i> <?php echo $Phrase[3]; ?></h3>
                        <h3><i class="fa fa-check-circle t-color3"></i> <?php echo $Phrase[4]; ?></h3> -->
                       
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 px-3">                       
                        <div class="bg-color1 border bordering border-color1 text-center mb-3 p-3">
                            <h3 class="t-color1"><i class="fa fa-rocket"></i> Why Choose Us?</h3>
                            <span class="t-color1 font100"><?php echo $Why;?></span>
                        </div>
                        <div class="bg-color4 border bordering border-color1 text-center mb-3 p-3">
                            <h3 class="t-color2"><i class="fa fa-check"></i> Vision</h3>
                            <span class="t-color2 font100"><?php echo $Vision;?></span>
                        </div>
                        <div class="bg-color2 border bordering border-color1 text-center mb-3 p-3">
                            <h3 class="t-color1"><i class="fa fa-star"></i> Mission</h3>
                            <span class="t-color1 font100"><?php echo $Mission;?></span>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="bg-color2">&nbsp;</div> -->
<?php include 'php/section/footer3.php'; ?>