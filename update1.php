<?php
include_once'db.php';
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
  $id = $_POST['id'];
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

    
  $query = "UPDATE `vehicle_registration` SET `Type`='$Type', `Year`='$Year', `Vehicle_No`='$Vehicle_No', 
  `Vehicle_Model`='$Vehicle_Model', `Color`='$Color', `Mileage`='$Mileage', `VIN`='$VIN', `Owner_Name`='$Owner_Name', 
  `Owner_address`='$Owner_address', `NIC`='$NIC', `Contact_No`='$Contact_No' WHERE `id`='$id'";

  if (mysqli_query($connection, $query))
  {
      echo"<script>alert('Record inserted suceesfully')</script>";
      header("Location:index2.php");
    
  }
  else{
      echo"<script>alert('Error')</script>";
  }
 


mysqli_close($connection);

}
?>