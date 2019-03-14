<?php
$link = mysqli_connect("localhost", "ortezcle_zzcv14z", "0nEWDK!2H[El", "ortezcle_zzcv14z");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>