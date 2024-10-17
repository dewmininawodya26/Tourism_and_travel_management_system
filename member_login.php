<?php
include "config.php";

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $account_type = $_POST['account_type'];

    $sql = "SELECT * FROM formregister WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        session_start();
        $_SESSION['username'] = $username;
        if($account_type === 'TravelAgent'){
           header("Location: member_profile.php");
        }else{
             header("Location:Touristmember_profile.php");
        }
       
        exit();
    } else {
        $login_error = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member Login</title>
    <style>
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


.login-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f3f3f3;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-align: center;
}

.login-form h2 {
    font-size: 24px;
    color: #333;
}

.login-form label {
    display: block;
    margin-top: 10px;
    text-align: left;
    font-weight: bold;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin: 6px 0;
}

.login-form button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-top: 10px;
}

.login-form button[type="submit"]:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    margin-top: 10px;
}

/* Style the "Register" link */
.login-form p {
    font-size: 14px;
    margin-top: 10px;
}

.login-form a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.login-form a:hover {
    text-decoration: underline;
}

/* Add more styles as needed */


  






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
   
    <link
      rel="stylesheet"
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


        <div class="login-form">
    <h2>Member Login</h2>
    <form action="member_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
           <label for="account_type">Account Type:</label>
        <select name="account_type" required>
            <option value="Tourist">Tourist</option>
            <option value="TravelAgent">Travel Agent</option>
        </select>
        <?php
        if (isset($login_error)) {
            echo "<p class='error'>$login_error</p>";
        }
        ?>

        <button type="submit" name="login">Login</button>

        <!-- Add a "Register" button/link here -->
        <p>Are you not registered yet?</p>
        <a href="formregister.php">Register</a>
    </form>
</div>

   <footer class="footer">
      <div class="container">
        <div class="sec logo">
          <img src="unnamed.jpg" alt="Logo" class="logo" />
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
              <span><i class="fa-solid fa-phone"></i></span>
              <p><a href="tel:+9412222211">011-2222211</a></p>
            </li>
            <li>
              <span><i class="fa-solid fa-location-dot"></i></span>
              <p><a href="#">No.34, Flower Road, Colombo 5</a></p>
            </li>
          </ul>
        </div>
        <div class="sec Email">
          <button>
            <i class="fa-regular fa-envelope"></i> Subscribe to Email
          </button>

          <ul class="sci">
            <li>
              <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-square-google-plus"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="copyrightText">
        <p>Copyright<i class="fa-regular fa-copyright"></i>2023</p>
      </div>
    </footer>
  </body>
</html>