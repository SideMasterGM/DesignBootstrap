<?php
    $Company = "Hernandez J Landscaping";
    $Why = "Our team will work together with you to understand your specific needs and how you want your landscape to look. You can count on us to help your landscape thrive and remain healthy.";
    $Vision = "Our vision at Hernandez J Landscaping is to be the main contractors of Landscaping Design and Maintenance through work that promotes value, service and quality.";
    $Mission = "Be the best service provider in the world. To achieve this, we have established a culture that supports the members of our team so that they can provide exceptional service to our customers.";

    $About[0] = "With more than two decades of experience in the industry, Hernandez J Landscaping serves customers in Clarkston, Georgia and surrounding areas with the highest quality workmanship. We have worked on several landscapes and have created beautiful outdoor spaces. Our hope is that we can do the same for your dream landscape.";
    $About[1] = "We take pride in our innovative designs and beautiful creations and how we have been able to take our clients’ visions and make them a reality. Our team will work together with you to understand your specific needs and how you want your landscape to look. You can count on us to help your landscape thrive and remain healthy.";
    $About[2] = "You can count on Hernandez J Landscaping to deliver the highest quality services as we abide by the following core values: <br/>1. Honesty<br/>2. Punctuality<br/>3. Responsibility<br/>4. Quality work<br/>5. Reliability";
?>

<div class="padding3">
    <div class="container">
        <!-- <div class="row padding2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="text-center font-h1 t-color3"><?php echo $Company;?></h2><hr>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 mt-3 px-3">
                <br/>
                <h2 class="t-color5"><?php echo $Company;?></h2><hr class="border3 float-left"><br><br>
                <p class="t-color2 text-justify"><?php echo "$About[0]";?></p>
                <p class="t-color2 text-justify"><?php echo "$About[1]";?></p>                    
                <p class="t-color2 text-justify"><?php echo "$About[2]";?></p>                       
                <!-- <h3><i class="fa fa-check-circle t-color3"></i> <?php echo $Phrase[2]; ?></h3>
                <h3><i class="fa fa-check-circle t-color3"></i> <?php echo $Phrase[3]; ?></h3>
                <h3><i class="fa fa-check-circle t-color3"></i> <?php echo $Phrase[4]; ?></h3> -->
                <br/>
            </div>
            
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 px-3">         
                <br/>              
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