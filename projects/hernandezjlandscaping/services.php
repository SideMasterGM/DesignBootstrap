<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <div class="py-5 bg-color1">
        <div class="container px-3">         
           <div class="row">         
                <div class="col-12 col-sm-12 col-md-10 offset-md-1" itemscope itemtype="http://schema.org/Service">
                <?php for ($i=1; $i <=6; $i++) { ?>
                    <div class="row align-items-center">
                        <meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
                        <div class="col-12 col-sm-6 col-md-4 text-center"> 
                            <img src="images/services/<?php echo $i; ?>.jpg" alt="<?php echo "$SN[$i]";?>" class="img-fluid img-thumbnail mb-2"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8">
                            <h3 class="t-color4"><?php echo "$SN[$i]";?></h3>
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
<?php include 'php/section/footer3.php'; ?>