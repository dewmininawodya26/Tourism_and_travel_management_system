<?php

    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","tourism_and_travel_management_system");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$connection){
        die("connection failed");
    }
?>