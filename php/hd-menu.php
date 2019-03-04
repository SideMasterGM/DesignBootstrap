<div class="container-fluid first-container-fluid">
    <div class="container">
        <ul class="nav nav-pills">

            <?php
                $filename = basename($_SERVER['PHP_SELF']);

                if ($filename == "index.php"){
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
    </div>
</div>