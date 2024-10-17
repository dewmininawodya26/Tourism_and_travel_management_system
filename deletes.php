<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ttm";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM rating WHERE id = $id";
    $connection->query($sql);
}
header("location: /ttm/index.php");
exit;

?>