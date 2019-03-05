<?php
    $Mission = "Be the best service provider in the world. To achieve this, we have established a culture that supports the members of our team so that they can provide exceptional service to our customers.";
    $SN[1] = "Landscaping Design and Maintenance";
    $SD[1] = "A green and lush landscape not only improves your home’s exterior but also enhances the rest of the neighborhood. Hernandez J Landscaping can help you bring to life the design that you have in mind for your landscape. After we have designed and installed your beautiful landscape we can also help you give it the proper maintenance to keep it healthy all the time.";
    $SN[2] = "Mulching";
    $SD[2] = "Mulching is one of the best ways to keep your landscape in the best shape possible. The benefits that come with mulching are effective weed control, soil temperature regulation, the addition of essential nutrients to the soil, and much more! If you want to apply mulch to your landscape you can call our experts to properly do it!.";
    $SN[3] = "Lawn Mowing";
    $SD[3] = "If you want to make sure that your lawn remains clean and is also free from any kind of dirt or other contamination then you need proper and regular mowing services. When your lawn looks unruly or has grown beyond the limits you have set out for it, then your entire landscape can look dirty and disorderly. Our team provides professional mowing services to keep your lawn in top condition.";
    $SN[4] = "Sod Installation";
    $SD[4] = "When looking for the quickest way to have a lush and beautiful yard we recommend sod installation. Whether you are changing your lawn type or there’s new construction going on, sod installation can give you immediate results. You can count on our experts for the most efficient and proper way to install sod to make your landscape thrive!.";
    $SN[5] = "Patios";
    $SD[5] = "Are you looking for the perfect addition that will complement your landscape? At Hernandez J Landscaping we believe that a well-designed patio can add that touch of beauty that your landscape needs. Whatever your needs are you can expect the most exceptional results when working with our skilled team.";
    $SN[6] = "Other services";
    $SD[6] = "1. Pine Straw <br/>2. Flower Bed Design<br/>3. Sprinkler System Installation and Repair<br/>4. Gardening<br/>5. Tree Services<br/>6. And more!";
?>

<div class="padding3">
    <div class="container">
        <div class="row padding2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto">
                <br/>
                <h2 class="text-center t-color3 font-h2">Our Services</h2>
                <p class="text-center t-color2"><?php echo "$Mission";?></p><hr class="border3">
            </div>
        </div>
        <div class="row">         
            <div class="col-12 col-sm-12 col-md-10 offset-md-1 pt-2" itemscope itemtype="http://schema.org/Service">
            <?php for ($i=1; $i <=6; $i++) { ?>
                <div class="row">
                    <meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
                    <div class="col-12 col-sm-6 col-md-4 text-center"> 
                        <img src="src/client/full/her<?php echo $i; ?>.jpg" alt="<?php echo "$SN[$i]";?>" class="img-fluid img-thumbnail"/>
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