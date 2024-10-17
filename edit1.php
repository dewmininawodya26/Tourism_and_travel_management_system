<?php
session_start();
include 'db.php';

        $id=$_GET['id'];
//execute the query
        $query = "SELECT * FROM `vehicle_registration` WHERE `id` = '$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        //connecting the datase
        $Type = $row['Type'];
        $Year = $row['Year'];
        $Vehicle_No = $row['Vehicle_No'];
        $Vehicle_Model = $row['Vehicle_Model'];
        $Color = $row['Color'];
        $Mileage = $row['Mileage'];
        $VIN = $row['VIN'];
        $Owner_Name = $row['Owner_Name'];
        $Owner_address = $row['Owner_address'];
        $NIC = $row['NIC'];
        $Contact_No = $row['Contact_No'];

?>
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <script src="../vehicle/myjs.js"></script>
    <title>Edit Vehicle Registration</title>

   <style>
    .new-register{
      position: absolute;
      top: 85px;
      left: 22%;
      width: 800px;
      padding: 25px 30px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
      border-radius: 10px;
    }

    .new-register form{
      position: relative;
      max-width: 700px;
      width: 100%;
      padding: 20px 25px;
      border-radius: 5px;
    }

    form title{
      font-size: 25px;
      text-align: center;
      padding: 7px;

    }

    .vehicle-details{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .vehicle-details .input-box{
      margin: 10px 0 10px 0;
      width: calc(100% / 3 - 20px);
    }

    .vehicle-details input-box .details{
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .vehicle-details .input-box input{
      height: 20px;
      width: 100%;
      outline: none;
      border-radius: 5px;
      border: 1px solid #ccc;
      padding-left: 15px;
      font-size: 14px;
      border-bottom-width: 2px;
    }

    .vehicle-details .input-box-vin{
      margin: 10px 0 10px 0;
    }

    .vehicle-details .input-box-vin details{
      font-weight: 500;
      margin-bottom: 5px;
      display: block;
    }

    .vehicle-details .input-box-vin input{
      height: 20px;
      width: 100%;
      outline: none;
      border-radius: 5px;
      border: 1px solid #ccc;
      padding-left: 15px;
      font-size: 16px;
      border-bottom-width: 2px;
    }



    .user-details{
      display: flexbox;
    }

    .user-details .input-box{
      margin: 5px 0 5px 0;
    }


    .user-details .input-box .details{
      display: contents ;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .user-details .input-box input{
      height: 15px;
      width: 40%;
      outline: none;
      border-radius: 5px;
      border: 1px solid #ccc;
      padding-left: 15px;
      font-size: 13px;
      border-bottom-width: 2px;
    }

    .submit-button button{
      position: absolute;
      width: 25%;
      height: 40px;
      left: 70%;
      bottom: 50px;
      outline: none;
      color: #e6e1e1;
      border: 2px solid black;
      font-size:10px;
      font-weight: 900;
      border-radius: 5px;
      letter-spacing: 1px;
      background: #6e1a74;
    }

    .submit-button button:hover{
      background: linear-gradient(135deg, #74378d, #195c83);
    }



  </style>

</head>


    <!-- Your form and HTML content here -->
    <body>
        
        <div class="new-register">
          <form action="update.php" method="post">
            <h2 class="title"><b>Edit Vehicle Registration <br> Form </b></h2>

            
         
            <div class="vehicle-details">
            

            <div class="input-box">
              <span class="details">Type of vehicle</span>
              <input type="text" id="Type" name="Type" value="<?php echo $Type; ?>" required>
              </div>

              <div class="input-box">
              <span class="details">Registered year</span>
             <input type="text" id="Year" name="Year" value="<?php echo $Year; ?>" required>
              </div>

              <div class="input-box">
              <span class="details">Vehicle number</span>
              <input type="text" id="Vehicle_No" name="Vehicle_No" value="<?php echo $Vehicle_No; ?>" required>
              </div>

              <div class="input-box">
             <span class="details">Vehicle model</span>
              <input type="text" id="Vehicle_Model" name="Vehicle_Model" value="<?php echo $Vehicle_Model; ?>" required>
              </div>

              <div class="input-box">
              <span class="details">Vehicle colour</span>
              <input type="text" id="Color" name="Color" value="<?php echo $Color; ?>" required>
              </div>

              <div class="input-box">
              <span class="details">Mileage</span>
              <input type="text" id="Mileage" name="Mileage" value="<?php echo $Mileage; ?>" required>
              </div>

              <div class="input-box-vin">
              <span class="details">Vehicle identification number</span>
              <input type="text" id="VIN" name="VIN" value="<?php echo $VIN; ?>" required>
              </div>

            </div>
        
            <hr>

            <div class="user-details">
            
              <h3 class="owner-topic">Vehicle owner information</h3>
              <div class="input-box">
                <span class="details">Name</span>
                <input type="text" id="Owner_Name" name="Owner_Name" value="<?php echo $Owner_Name; ?>" required>
              </div>

              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" id="Owner_address" name="Owner_address" value="<?php echo $Owner_address; ?>" required>
              </div>

              <div class="input-box">
                <span class="details">NIC</span>
                <input type="text" id="NIC" name="NIC" value="<?php echo $NIC; ?>" required>
              </div>

              <div class="input-box">
                <span class="details">Contact number</span>
                <input type="text" id="Contact_No" name="Contact_No" value="<?php echo $Contact_No; ?>" required>
              </div>

              <br>
                Applicant ID:
            <input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly><br>
            <br>

              <div class="submit-button">
              <button type = "submit" name = "sbmt" id = "sbmt">Submit</button>
              </div>
              </div>
        </form>
        </div>

        
    </body>

</html>
