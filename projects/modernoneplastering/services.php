<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <!-- <div class="container">
        <div class="padding3">
            <div class="row padding2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="text-center t-color3">Our Services</h1>
                    <p class="text-center t-color2"><?php echo "$Phrase[4]";?></p><hr>
                </div>
            </div>
            <div class="row text-center">
                <?php for ($i=1; $i <=5; $i++) { ?>
                    <div class="col-12 col-sm-12 col-md-6 col-sm-4 col-lg-4 col-xl-4" itemscope itemtype="http://schema.org/Service">
                        <meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>   
                        <img src="images/services/<?php echo $i?>.jpg" alt="<?php echo "$SN[$i]";?>" class="img-fluid border-color2"/>
                        <div class="padding2">
                            <h3 class="t-color5"><?php echo "$SN[$i]";?></h3><hr>
                            <p class="t-color2"><?php echo "$SD[$i]";?></p>
                        </div>
                    </div>
                    <br>
                <?php } ?>
                 <div class="col-12 col-sm-12 col-md-6 col-sm-4 col-lg-4 col-xl-4" itemscope itemtype="http://schema.org/Service">
                        <meta itemprop="serviceType" content="<?php echo $SN[6];?>"/> -->   
                       <!-- <img src="images/services/<?php echo $i?>.jpg" alt="<?php echo "$SN[$i]";?>" class="img-fluid border-color2"/> -->
                        <!-- <div class="padding2 mt-5">
                            <h3 class="t-color5"><?php echo "$SN[6]";?></h3><hr>
                            <p class="t-color2"><?php echo "$SD[6]";?></p>
                        </div>
                    </div>
                    <br>
            </div>
        </div>
    </div> -->

     <div class="padding3">
        <div class="container">
            <div class="row padding2">
                 <div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto">
                    <h2 class="text-center t-color3 font-h2">Our Services</h2>
                    <p class="text-center t-color2"><?php echo "$Mission";?></p><hr class="border3">
                </div>
            </div>
           <div class="row">         
                <div class="col-12 col-sm-12 col-md-10 offset-md-1 pt-2" itemscope itemtype="http://schema.org/Service">
                <?php for ($i=1; $i <=5; $i++) { ?>
                    <div class="row">
                        <meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
                        <div class="col-12 col-sm-6 col-md-4 text-center"> 
                            <img src="images/services/<?php echo $i; ?>.jpg" alt="<?php echo "$SN[$i]";?>" class="img-fluid img-thumbnail"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 padding3">
                            <h3 class="t-color2"><?php echo "$SN[$i]";?></h3>
                            <p class="t-color2"><?php echo "$SD[$i]";?></p>
                        </div>
                    </div>
                    <br>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="bg-1 padding1"></div> -->

<?php include 'php/section/bar2-1.php';include 'php/section/footer3.php'; ?>