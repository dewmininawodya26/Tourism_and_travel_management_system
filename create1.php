<?php
include_once'db.php';
?>
<?php


if(isset($_POST['sbmt'])){

    $Type = $_POST['Type'];
    $Year = $_POST['Year'];
    $Vehicle_No = $_POST['Vehicle_No'];
    $Vehicle_Model = $_POST['Vehicle_Model'];
    $Color = $_POST['Color'];
    $Mileage = $_POST['Mileage'];
    $VIN = $_POST['VIN'];
    $Owner_Name = $_POST['Owner_Name'];
    $Owner_address = $_POST['Owner_address'];
    $NIC = $_POST['NIC'];
    $Contact_No = $_POST['Contact_No'];

    $create = "INSERT INTO `vehicle_registration` (`Type`, `Year`, `Vehicle_No`, `Vehicle_Model`, `Color`, `Mileage`, `VIN`, `Owner_Name`,
    `Owner_address`, `NIC`, `Contact_No`) VALUES ('$Type', '$Year', '$Vehicle_No', '$Vehicle_Model', '$Color', '$Mileage', '$VIN', '$Owner_Name', '$Owner_address',
    '$NIC', '$Contact_No')";

    if (mysqli_query($connection, $create)) {
        echo"<script>alert('Record inserted suceesfully')</script>";
        echo "<script>window.location.href = './index2.php';</script>";
        exit;
    } else {
        echo"<script>alert('Error')</script>";
    }

}

mysqli_close($connection);


?>