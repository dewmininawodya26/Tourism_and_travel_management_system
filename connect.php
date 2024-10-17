<?php

$sname= "localhost";  
$uname= "root";
$password = "";

$db_name = "communitypage";

$conn = new mysqli($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
