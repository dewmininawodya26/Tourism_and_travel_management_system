<!DOCTYPE html>
<html>
  <head>
    <title>Adventura</title>
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <img src="unnamed.jpg" alt="Adventura Logo" class="logo">
      <div class = "header">
        <h1>Adventura</h1>
      </div>
          <div class ="a">
            <h3>Happiness is not a destination</h3></div>
              <div class ="b">
                <h3 class="moved-text">it's a way of travel...</h3>
            </div>
          
    <hr>
      <button class="butn1">login</button>
      <button class="butn2">Sign Up</button>
        <div class="topnav">
          <a class="active" href="#home">Home</a>
          <a href="#Start planning">Start planning</a>
          <a href="#Community">Community</a>
          <a href="#More">More</a>        
          <input type="text" placeholder="Search..">
        </div>
    <a href="#">
    <img src="cart.png" alt="cart logo" class="logo2"></a>    

    <!-- body -->
    <header>
		<div class= "headerx">
        <h1>My Account</h1>
        <img src="user.png" alt="User Image">
		</div>
    </header>
	<form action="crud.php" method="post">

    <main>
        <div class="left-column">
            <h2>About Me</h2>
            <div class="about-me">
                <textarea id= "aboutme" name="aboutme" placeholder="Add something about yourself"></textarea>
            <!--</div>-->
            <h2>Favourite Destinations</h2>
            <!--<div class="favorites">-->
                <textarea id= "fdestin" name="fdestin" placeholder="Add Your Favourite Destinations"></textarea>
                <!-- Users' favorite destinations will be displayed here -->
            <!--</div>-->
            <h2>Travel History</h2>
            <!--<div class="travel-history">-->
                <textarea id= "thistory" name="thistory" placeholder="Add Your Travel History"></textarea>
                <!-- User's travel history will be displayed here -->
            </div>
        </div>
        <div class="right-column">
            <input type="text" id= "fname" name="fname" placeholder="First Name">
            <input type="text" id= "lname" name="lname" placeholder="Last Name">
            <input type="text" id= "uname" name="uname" placeholder="User Name">
            <input type="text" id= "email" name="email" placeholder="Email Address">
            <input type="text" id= "dob" name="dob" placeholder="Date of Birth">
            <input type="text" id= "nic" name="nic" placeholder="NIC No/ Passport Number">
            <input type="text" id="num" name="num" placeholder="Contact Number">


            <button type="submit" style="background-color: #1a0a3fb2; color: white; padding: 10px 20px; border: none; border-radius: 5px; display: block; margin: 0 auto;">Save</button>



            <h2> <br>"The World Is a Book and Those Who Travel Read One Page At A Time.. Let us immerse you in a world where dreams become a reality! Sky is the only Limit! Be among the lucky few who experience paradise on Earth!!! Welcome to Adventura!!!" </h2> <br>


            
            <!-- <div class="change-password">
                <button type="button" value="Change Password">
                <button type="button" value="Log Out">
            </div> -->

            <div class="change-password">
                <button type="Change_password" style="background-color: #1a0a3fb2; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Change Password</button>
                <button type="Log Out" style="background-color: #1a0a3fb2; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Log out</button>
            </div>
            
            <input type="password" id= "oldpassword" name="oldpassword" placeholder="Enter Old Password">
            <input type="password" id= "newpassword" name="newpassword" placeholder="New Password">
            <input type="password" id= "cnewpassword" name="cnewpassword" placeholder="Confirm New Password">
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <footer class="footer">
      <div class="container">
          <div class="sec logo">
              <img src="unnamed.jpg" alt="Logo" class="logo">
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
  
 </body>
</html>