<?php
session_start();
include "config.php";

if (!isset($_SESSION['username'])) {
    header("Location: member_login.php");
    exit();
}

$username = $_SESSION['username'];

// Fetch the user's current profile details
$sql = "SELECT * FROM formregister WHERE username = '$username'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST["update_profile"])) {
        // Update profile details
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
        $languages = isset($_POST['language']) ? implode(", ", $_POST['language']) : "";
        $account_type = $_POST['account_type'];

        $update_sql = "UPDATE members SET
            first_name='$first_name',
            last_name='$last_name',
            email='$email',
            address='$address',
            country='$country',
            gender='$gender',
            language='$languages',
            account_type='$account_type'
            WHERE username='$username'";

        mysqli_query($conn, $update_sql);

        header("Location: Touristmember_profile.php?msg=Profile updated successfully");
    }

    if (isset($_POST["change_password"])) {
        // Handle password change
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Verify the current password with the one stored in the database
        $password_check_sql = "SELECT * FROM members WHERE username = '$username' AND password = '$current_password'";
        $password_check_result = mysqli_query($conn, $password_check_sql);

        if (mysqli_num_rows($password_check_result) == 1) {
            // Update the password if the current password is correct
            $update_password_sql = "UPDATE members SET password='$new_password' WHERE username='$username'";
            mysqli_query($conn, $update_password_sql);
            header("Location: Touristmember_profile.php?msg=Password changed successfully");
        } else {
            $password_error = "Invalid current password. Please try again.";
        }
    }
    if (isset($_POST["delete_profile"])) {
        // Delete the user's profile and associated data row
        $delete_sql = "DELETE FROM members WHERE username='$username'";
        mysqli_query($conn, $delete_sql);
    
        // After deletion, you can log the user out and redirect to a different page
        session_destroy();
        header("Location: member_login.php"); // Redirect to a confirmation page or any other desired page
        exit();
    }
    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile</title>
    <style>
        /* CSS styles for your Book Hub Library homepage */
         .header{
    line-height: 25%;
    padding: 2px;
    margin-left: 150px;
    background-color: white;
    font-size: 30px;
}
/* Style the second h3 */
.moved-text {
    text-align: right; /* Align the text to the right */
    margin-top: 5px; /* Add some top margin for spacing */
    margin-right: 520px; /* Add right margin to move it slightly to the right */
}
/* Style the logo */
.logo {
    position: absolute;
    top: 5px; /* Adjust the top position as needed */
    left:10px; /* Adjust the left position as needed */
    width: 90px; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
}
.a{
    line-height: 5%;
    margin-left: 580px;
    margin-top: -70px;
    font-size: large;
}
.butn1{
    font-size: 15px;
    border-radius: 12px;
    position: absolute;
    padding: 12px 28px;
    top: 40px; /* Adjust the top position as needed */
    right: 180px; /* Adjust the left position as needed */
    width: 120px; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
}
.b{
    line-height: 5%;
    font-size: large;
}
.butn2{
    font-size: 15px;
    border-radius: 12px;
    position: absolute;
    padding: 12px 28px;
    top: 40px; /* Adjust the top position as needed */
    right: 50px; /* Adjust the left position as needed */
    width: 120px; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
}
/* Add a black background color to the top navigation */
.topnav {
    background-color: rgba(38, 53, 134, 0.5);
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    color: #101010;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    font-weight: bold;
    font-style: oblique;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #046daa;
    color: white;
  }
  .topnav input[type=text] {
    border-radius: 12px;
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 100px;
    font-size: 17px;
    width: 400px;
  }
  .logo2 {
    position: absolute;
    top: 111px; /* Adjust the top position as needed */
    right:25px; /* Adjust the left position as needed */
    width: 38px; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
    color: rgb(7, 7, 7);
}



/* Container for the profile forms */
.profilee-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
}

/* Profile form container */
.profilee {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    width: 400px;
}

.profilee h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Form input styles */
.profilee-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.profilee-form input[type="text"],
.profilee-form input[type="email"],
.profilee-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Success message */
.profilee-form .success {
    color: #4CAF50;
    margin-top: 10px;
}

/* Button style */
.profilee-form button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.profilee-form button:hover {
    background-color: #45a049;
}

/* Change Password and Delete Profile form styles */
.change-password-form, .delete-profile-form {
    margin-top: 20px;
}

.change-password-form, .delete-profile-form h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

.change-password-form input[type="checkbox"] {
    margin-right: 5px;
}

/* Error message for password change */
.change-password-form .error {
    color: #f44336;
    margin: 10px 0;
}

/* Delete Profile button style */
.delete-profile-form button {
    background-color: #f44336;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.delete-profile-form button:hover {
    background-color: #d32f2f;
}


  






/*footer*/
.body {
  display: grid;
  justify-content: end;
  align-content: end;
  min-height: calc(100vh - 160px);
  background: rgb(255, 255, 255);
  padding: 50px;
}

.footer {
  margin-top: 600px;
  position: relative;
  width: 100%;
  height: 160px;
  padding: 10px 4px; /* Adjusted padding to keep it centered */
  background: rgba(38, 53, 134, 0.5);
}

.container {
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr 2fr 1fr;
  grid-gap: 20px;
}

.container .logo {
  position: relative;
  width: 90px;
  height: 90px;
  top: 10px;
  margin-left: 20px;
}

.container .sec h3 {
  position: relative;
  top: 2px;
  text-align: center;
  margin-left: 31px;
  font-size: larger;
}

.support {
  font-weight: bold;
  top: 2px;
}

.Email {
  position: relative;
}

.Email button {
  background: rgb(62, 61, 61);
  border: 2px solid #fff;
  color: white;
  border-radius: 100px;
  padding: 10px 30px;
  font-size: 15px;
  margin-top: 15px;
}

.Email button:hover {
  color: rgb(216, 13, 13);
  background-color: white;
}

.container .sci {
  margin-top: 30px;
  display: grid;
  grid-template-columns: repeat(4, 50px);
  margin-left: -29px;
}

.container .sci li {
  list-style: none;
}

.sci li a {
  display: inline-block;
  width: 40px;
  height: 40px;
  background: rgb(38, 37, 37);
  display: grid;
  align-content: center;
  justify-content: center;
  text-decoration: none;
}

.sci li a i {
  color: white;
  font-size: 25px;
}

.sci li a i:hover {
  color: blue;
  background-color: white;
  padding-left: 2px;
}

.support {
  position: relative;
}

.support ul li {
  list-style: none;
}

.support ul li a {
  color: #070707;
  text-decoration: none;
  margin-bottom: 15px;
  display: inline-block;
  font-family: sans-serif;
  
}

.support ul li a:hover {
  color: blue;
  padding-left: 2px;
}

.contact {
  position: relative;
  
}

.contact li {
  display: grid;
  grid-template-columns: 40px 2fr;
  margin-bottom: 5px;
  line-height: 5%;
  
}

.contact li span {
  color: rgb(10, 10, 10);
  font-size: 15px;
  margin-top: 9px;
  
}

.contact li a {
  color: #151414;
  text-decoration: none;
}

.contact li a:hover {
  color: blue;
  padding-left: 2px;
}

.contact li span:hover {
  color: blue;
  padding-left: 2px;
}

.copyrightText {
  position: relative;
  text-align: center; /* Center the copyright text */
  margin-top: -50px; /* Adjust as needed */
}






    </style>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <img src="unnamed.jpg" alt="Adventura Logo" class="logo" />
    <div class="header">
      <h1>Adventura</h1>
    </div>
    <div class="a">
      <h3>Happiness is not a destination</h3>
    </div>
    <div class="b">
      <h3 class="moved-text">it's a way of travel...</h3>
    </div>

    <hr />
    <button class="butn1">login</button>
    <button class="butn2">Sign Up</button>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#Start planning">Start planning</a>
      <a href="#Community">Community</a>
      <a href="#More">More</a>
      <input type="text" placeholder="Search.." />
    </div>


        <div class="profilee-container">
            <div class="profilee">
        <div class="profilee-form">
            <h2>My Profile</h2>
            <form action="Touristmember_profile.php" method="POST">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required>
    
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

                <label for="address">Address:</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>">

                <label for="country">country:</label>
                <input type="text" name="country" value="<?php echo $row['country']; ?>">

                <label for="gender">Age:</label>
                <input type="gender" name="gender" value="<?php echo $row['gender']; ?>">

            

                <?php
                if (isset($_GET['msg'])) {
                    echo "<p class='success'>" . $_GET['msg'] . "</p>";
                }
                ?>

                <button type="submit" name="update_profile">Update Profile</button>
            </form>
        </div>
            </div>

        <!-- Change Password Section -->
        <div class="change-password-form">
            <h2>Change Password</h2>
            <form action="member_profile.php" method="POST">
                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" required>

                <label for="new_password">New Password:</label>
                <input type="password" name="new_password" required>

                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" name="confirm_password" required>

                <?php
                if (isset($password_error)) {
                    echo "<p class='error'>$password_error</p>";
                }
                ?>

                <button type="submit" name="change_password">Change Password</button>
            </form>
        </div>
        <div class="delete-profile-form">
    <h2>Delete Profile</h2>
    <form action="Touristmember_profile.php" method="POST">
        <label for="confirm_delete">
            <input type="checkbox" name="confirm_delete" required>
            I confirm that I want to delete my profile.
        </label>

        <button type="submit" name="delete_profile" onclick="return confirm('Are you sure you want to delete your profile? This action cannot be undone.');">Delete Profile</button>
            </div>
            </div>
    </form>
    </main>

    <footer class="footer">
      <div class="container">
          <div class="sec logo">
              <img src="images/unnamed.jpg" alt="Logo" class="logo">
                  <h3>Adventura</h3>
          </div>
          <div class="support">
              <ul>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Privacy Policy</a></li>
              </ul>
          </div>
  
          <div class="sec contact">
              <ul>
                  <li>
                      <span><i class="fa-solid fa-phone"></i></span><p><a href="tel:+9412222211">011-2222211</a></p>
                  </li>
                  <li>
                      <span><i class="fa-solid fa-location-dot"></i></span><p><a href="#">No.34, Flower Road, Colombo 5</a></p>
                  </li>
              </ul>
          </div>
          <div class="sec Email">
              <button><i class="fa-regular fa-envelope"></i> Subscribe to Email</button>
  
              <ul class="sci">
                  <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-square-google-plus"></i></a></li>
              </ul>
          </div>
          
      </div>
  <div class="copyrightText">
      <p>Copyright<i class="fa-regular fa-copyright"></i>2023</p>
  </div>
  </footer>
  