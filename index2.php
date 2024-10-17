<?php include('header.php'); ?>
<?php include('db.php'); ?>

    <div class="box1-items" style="background-color:Lightblue">
    
        
      <h2>Vehicles & Owners</h2>
      
        <table class="tbl">
        
          <thead class="thd">
          
            <tr>
              <th>id</th>
              <th>Type</th>
              <th>Year</th>
              <th>Vehicle Registration No</th>
              <th>Vehicle Model</th>
              <th>Color</th>
              <th>Mileage</th>
              <th>VIN</th>
              <th>Owner Name</th>
              <th>Owner Address</th>
              <th>NIC</th>
              <th>Contact Number</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $query = "SELECT * FROM `vehicle_registration`";

            $result = mysqli_query($connection, $query);

            if(!$result){
              die("quiry Failed".mysqli_error());
            }
            else{
              while($row = mysqli_fetch_assoc($result)){
                ?>

            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['Type']; ?></td>
              <td><?php echo $row['Year']; ?></td>
              <td><?php echo $row['Vehicle_No']; ?></td>
              <td><?php echo $row['Vehicle_Model']; ?></td>
              <td><?php echo $row['Color']; ?></td>
              <td><?php echo $row['Mileage']; ?></td>
              <td><?php echo $row['VIN']; ?></td>
              <td><?php echo $row['Owner_Name']; ?></td>
              <td><?php echo $row['Owner_address']; ?></td>
              <td><?php echo $row['NIC']; ?></td>
              <td><?php echo $row['Contact_No']; ?></td>
              <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button type="submit" class="addvehiclebtn">Update</button></a></td>
              <td><a href="delete.php?id=<?php echo $row['id']; ?>"><button type="submit" class="adddeletebtn">Delete</button></a></td>
            </tr>


                <?php
              }
            }

            ?>
          
          </tbody>
        </table>

        <div class="center">
          <button id="show-register" onclick="openform()">Vehicle Registration</button>
        </div>
      <div class="popup">
        <div class="close-btn">&times;</div>
          <form action="create.php" method="post">
            <h2 class="title"><b>Vehicle Registration Form </b></h2>
         
            <div class="vehicle-details">
              <div class="input-box">
              <span class="details">Type of vehicle</span>
              <input type="text" name="Type" placeholder="Ex:car / van / etc.." required>
              </div>

              <div class="input-box">
              <span class="details">Registered year</span>
             <input type="text" name="Year" placeholder="Enter registered year" required>
              </div>

              <div class="input-box">
              <span class="details">Vehicle number</span>
              <input type="text" name="Vehicle_No" placeholder="Enter number" required>
              </div>

              <div class="input-box">
             <span class="details">Vehicle model</span>
              <input type="text" name="Vehicle_Model" placeholder="Enter model" required>
              </div>

              <div class="input-box">
              <span class="details">Vehicle colour</span>
              <input type="text" name="Color" placeholder="Enter colour" required>
              </div>

              <div class="input-box">
              <span class="details">Mileage</span>
              <input type="text" name="Mileage" placeholder="Enter mileage" required>
              </div>

              <div class="input-box-vin">
              <span class="details">Vehicle identification number</span>
              <input type="text" name="VIN" placeholder="VIN" required>
              </div>

            </div>
        
            <hr>

            <div class="user-details">
            
              <h3 class="owner-topic">Vehicle owner information</h3>
              <div class="input-box">
                <span class="details">Name</span>
                <input type="text" name="Owner_Name" placeholder="Enter owner's name" required>
              </div>

              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="Owner_address" placeholder="Enter owner's address" required>
              </div>

              <div class="input-box">
                <span class="details">NIC</span>
                <input type="text" name="NIC" placeholder="Enter owner's NIC" required>
              </div>

              <div class="input-box">
                <span class="details">Contact number</span>
                <input type="text" name="Contact_No" placeholder="Enter owner's contact number" required>
              </div>

              <div class="submit-button">
              <button type = "submit" name = "sbmt" id = "sbmt">Submit</button>
              </div>
              <img src="images/vehicle.jpg" alt="car" class="glogo">
            </div>
        </form>

        </div>
        <center>
        <img src="images/vehicles.jpg" alt="vehicle" class="vehicles" width="98%" height="100%" margin-bottom="10px">
          </center>
      
      </div>

      
    

    </div>


      
    <?php include('footer.php'); ?>
    