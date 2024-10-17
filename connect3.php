<?php

$sname= "localhost";  
$usname= "root";
$password = "";

$db_name = "useracpage";

$conn = mysqli_connect($sname, $usname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>