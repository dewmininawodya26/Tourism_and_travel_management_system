<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
/*header*/
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

.butn1:hover{
  background-color: #ddd;
    color: black;
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
/*card*/
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border: 2px solid black;
  transition: 0.3s;
  width: 30%; /* Adjusted card width to fit three cards in one row */
  border-radius: 5px;
  text-align: center; /* Center-align the contents */
  display: inline-block; /* Display cards inline to place them side by side */
  margin: 10px; /* Added margin for spacing between cards */
  height: 400px; /* Set a fixed height for all cards */
  overflow: hidden; /* Hide overflowing content */
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

img {
  border-radius: 5px 5px 0 0;
  width: 100%;
  height: 60%; /* Set a fixed height for the image */
}

.explorecontainer {
  padding: 2px 16px;
}

.explore {
  background-color: rgb(115, 129, 129);
  font-weight: bold;
  padding: 8px 10px;
  border-radius: 5px;
  display: inline-block;
  margin-bottom: 10px;
  text-decoration: none; /* Remove the underline from the button */
  color: white; /* Change text color to white */
  text-align: center; /* Center-align button text */
  width: 80px; /* Set button width to 100% */
  transition: background-color 0.3s; /* Add transition for hover effect */
}

.explore:hover {
  background-color: #473a3b;
  font-weight: bold;
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
  margin-top: 100px;
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

</head>
<body>
<!--header-->
<img src="images_project/unnamed.jpg" alt="Adventura Logo" class="logo">
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
    <a href="#home">Home</a>
    <a class="active" href="#Start planning">Start planning</a>
    <a href="#Community">Community</a>
    <a href="#More">More</a>        
    <input type="text" placeholder="Search..">
  </div>
<a href="#">
<img src="images_project/cart.png" alt="cart Logo" class="logo2"></a>

<!--cards-->
<div class="card">
  <img src="images_project/hotel2.jpg" alt="Avatar" class="img">
  <div class="explorecontainer">
    <h4><b>Book Accommodation</b></h4>
    <a class="explore" href="hotelbooking.php">Explore</a>
  </div>
</div>

<div class="card">
  <img src="images_project/vehicle.jpg" alt="Avatar" class="img">
  <div class="explorecontainer">
    <h4><b>Book Transportation</b></h4> 
    <a class="explore" href="transportationmain.php">Explore</a>
  </div>
</div>

<div class="card">
  <img src="images_project/guide.jpg" alt="Avatar" class="img">
  <div class="explorecontainer">
    <h4><b>Book a Guide</b></h4>
    <a class="explore" href="guides.php">Explore</a>
  </div>
</div>

 <!--footer-->
 <footer class="footer">
  <div class="container">
      <div class="sec logo">
          <img src="images_project/unnamed.jpg" alt="Logo" class="logo">
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
