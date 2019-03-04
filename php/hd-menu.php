<div class="container-fluid first-container-fluid">
    <div class="container">
        <ul class="nav nav-pills">

            <?php
                if ($filename == "index.php"){
                    $count_img = 10;
                    ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./">HOME</a>
                        </li>
                    <?php
                } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./">HOME</a>
                        </li>
                    <?php
                }

                if ($filename == "services.php"){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./services.php">SERVICES</a>
                        </li>
                    <?php
                } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./services.php">SERVICES</a>
                        </li>
                    <?php
                }

                if ($filename == "portfolio.php"){
                    $count_img = 24;
                    ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./portfolio.php">PORTFOLIO</a>
                        </li>
                    <?php
                } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./portfolio.php">PORTFOLIO</a>
                        </li>
                    <?php
                }

                if ($filename == "contact.php"){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./contact.php">CONTACT</a>
                        </li>
                    <?php
                } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">CONTACT</a>
                        </li>
                    <?php
                }
            ?>
        </ul>

        <div class="social_network" title="Hernandez J landscaping">
            <a href="https://www.facebook.com/Hernandez-J-landscaping-1305435579559128/" target="_blank"><img src="src/credit-cards/fb.png" alt="Facebook Page"/></a>
        </div>
    </div>
</div>