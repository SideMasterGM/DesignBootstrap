<div class="container" style="margin-top: 40px;">
    <h3 style="text-align: center;">Recently Jobs</h3>
    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row">
            <?php
                for ($i = 1; $i <= $count_img; $i++){
                    ?>
                        <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="src/client/full/her<?php echo $i; ?>.jpg" data-src="src/client/full/her<?php echo $i; ?>.jpg" data-sub-html="&lt;h4&gt;Fading Light&lt;/h4&gt;&lt;p&gt;Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.&lt;/p&gt;">
                            <a href="">
                                <img class="img-responsive" src="src/client/min/her<?php echo $i; ?>.jpg">
                            </a>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>
</div>