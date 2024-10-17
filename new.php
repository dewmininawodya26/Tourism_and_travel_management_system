<!DOCTYPE html>
<html>
  <head>
    <title>Community Page</title>
      <link rel="stylesheet" type="text/css" href="full.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
        
      <!-- header -->  
  </head>

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
      <a href ="member_login.php"> <button class="butn1">login</button>
      <a href = "formregister.php"> <button class="butn2">Sign Up</button>
        <div class="topnav">
          <a class="active" href="home.php">Home</a>
          <a href="#Start planning">Start planning</a>
          <a href="new.php">Community</a>
          <a href="#More">More</a>        
          <input type="text" placeholder="Search..">
        </div>
    <a href="#">
    <img src="cart.png" alt="cart Logo" class="logo2"></a>


<!-- body -->
<body>
 <form action="backend.php" method="post"> 
    <div class="headerr">
        <h1>WRITE A REVIEW, MAKE SOMEONE'S TRIP</h1>
        <p>Stories like yours are what helps travelers have better trips. Share your experience and help out a fellow traveler!</p>
        <input type="text" class="review-bar" name="username" placeholder="Enter your user name here!">
        <input type="text" class="review-bar" name="rbcomment" placeholder="Add your review here!">

        <div class="images">
            <img src="hi.jpeg" alt="Image 1">
            <img src="https://thumbs.dreamstime.com/b/group-happy-friend-traveler-walking-having-fun-travel-lifestyle-vacation-concept-seasonal-200860260.jpg" alt="Image 2">
            <img src="https://i.pinimg.com/originals/ed/53/ba/ed53ba1e285ae4497d7237adabffb05a.jpg" alt="Image 3">
        </div>
        
          <!-- Your form fields go here -->
          <!-- <input type="submit" value="Posted Reviews"> -->
          <button type="submit" style="background-color: #1a0a3fb2; color: white; padding: 10px 20px; border: none; border-radius: 5px; display: block; margin: 0 auto;">Posted Reviews</button>

        <hr>
    </div>
    </form>
    <form method="POST" action="photo.php" enctype="multipart/form-data">
    <div class="lower">
      <div class="upload-photos">
          <h2>POST PHOTOS</h2>
          <!-- <input type="text" class="review-bar" placeholder="What would you like to post?"> -->
          <div class="drop-box">
              <p>Drag and Drop files from your Desktop</p>
              <input class="form-control" type="file" name="uploadfile" value="" />
              <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
          </div>
      </div>
</form>
<form action="photo.php">
          <!-- <input type="submit" value="Posted Photos"> -->
          <button type="submit" style="background-color: #211441af; color: white; padding: 10px 20px; border: none; border-radius: 5px; display: block; margin: 0 auto;">Posted Photos</button>
    </div>
    </form>
  </body>
  
<!-- footer -->
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

</html>