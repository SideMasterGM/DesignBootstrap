<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <div class="bg-color1">
        <div class="py-5">
            <div class="container px-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h2 class="t-color3 font-h3"><?php echo $Company;?></h2><hr class="border3 float-left">
                    </div>
                    <div class="col-12 col-sm-12 col-md-7">                        
                        <p class="t-color2"><?php echo "$About[0]";?></p>
                        <p class="t-color2"><?php echo "$About[1]";?></p>                    
                        <p class="t-color2"><?php echo "$About[2]";?></p>
                       
                    </div>
                    <div class="col-12 col-sm-12 col-md-5">
                        <h3 class="t-color3 font-h3"><?php echo $Estimates;?></h3>
                        <p><i class="fa fa-check-circle t-color4"></i> <?php echo $Phrase[0]; ?></p>
                        <p><i class="fa fa-check-circle t-color4"></i> <?php echo $Phrase[1]; ?></p>
                        <p><i class="fa fa-check-circle t-color4"></i> <?php echo $Phrase[2]; ?></p>
                        <p><i class="fa fa-check-circle t-color4"></i> <?php echo $Phrase[3]; ?></p>
                        <p><i class="fa fa-check-circle t-color4"></i> <?php echo $Phrase[4]; ?></p>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include 'php/section/footer3.php'; ?>