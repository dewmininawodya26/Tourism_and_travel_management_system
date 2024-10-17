<!DOCTYPE html>
<html>
  <head>
    <title>Adventura</title>
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
    right: 30px; /* Adjust the left position as needed */
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

 .fcard-hedding {
            text-align: center;
            padding: 20px;
        }

        .fcard-hedding h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .flip-card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 10px;
        }

        .flip-card {
            background-color: transparent;
            width: 240px;
            height: 340px;
            margin: 10px;
            border: 1px solid #f1f1f1;
            perspective: 1000px;
            
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
            
        }

        .flip-card-back {
            background-color: dodgerblue;
            color: white;
            transform: rotateY(180deg);
        }

        img {
            width: 80px;
          
        }

  .vtcontainer {
    /* max-width: 1000px; */
    height: 300px;
    width: 1000px;
    margin: 50px auto;
    margin-top: 100px; 
    padding: 80px ;
    border: 1px solid #ccc;
    border-radius: 5px;
    background:linear-gradient(135deg, #71b7e6, #9b59b6);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="number"] {
    width: 250px;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select {
    width: 50%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.addcartbtn {
    background-color: #0e1466;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}

.addcartbtn:hover {
    background-color: black; 
    color: #fff; 
}



.body {
  display: grid;
  justify-content: end;
  align-content: end;
  min-height: calc(100vh - 160px);
  background: rgb(255, 255, 255);
  padding: 50px;
}

.footer {
  margin-top: 80px;
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
  margin-right: 50px;
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
      <!-- <link rel="stylesheet" type="text/css" href="/css/styles.css">
      <link rel="stylesheet" type="text/css" href="/css/hotelbooking.css"> -->
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
          <a href="#home">Home</a>
          <a class="active" href="#Start planning">Start planning</a>
          <a href="#Community">Community</a>
          <a href="#More">More</a>        
          <input type="text" placeholder="Search..">
        </div>


<div class="fcard-hedding">
        <h2>Book Accomadations</h2>
        <div class="flip-card-container">
            <!-- First row -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage1.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Mountain View</h1>
                        <p>per night rs3000</p>
                        <p>free wifi / breakfast / swimming pool</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage2.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Belmond</h1>
                        <p>per night RS 5000</p>
                        <p>free wifi / breakfast/swimming pool/resturent / Pets allowed /24-hour front desk / bar / Fitness centre</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage3.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Aman Resorts</h1>
                        <p>per night RS 1000</p>
                        <p>free wifi / breakfast / Air conditioning / Pets allowed / 24-hour front desk / sauna</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage4.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Seaside Resort</h1>
                        <p>per night RS 2500</p>
                        <p>pool and ocean view / free wifi / breakfast / Pets allowed</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage5.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Luxury Retreat</h1>
                        <p>per night RS 4500</p>
                        <p>spa and gourmet dining / Pets allowed/ free wifi / swimming pool / breakfast</p>
                    </div>
                </div>
            </div>
            <!-- Second row -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage6.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Ocean Paradise</h1>
                        <p>per night RS 3500</p>
                        <p>private beach access / Sauna / free wifi / pets allowed / resturent / bar</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage7.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>City Lights</h1>
                        <p>per night RS 2800</p>
                        <p>downtown convenience / Sauna / breakfast / bar / resturent / 24-hour front desk</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage8.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Tranquil Retreat</h1>
                        <p>per night RS 3200</p>
                        <p>mountain views / Fitness centre / bar / sauna / resturent / pets allowed</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage9.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Historic Charm</h1>
                        <p>per night RS 2700</p>
                        <p>century-old elegance / Private parking / Tea/coffee maker in all rooms / breakfast/ swimming pool </p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="hotelimage10.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Serene Garden</h1>
                        <p>per night RS 3100</p>
                        <p>lush garden retreat / breakfast / bar / free wifi / pets allowed / Fitness centre</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="vtcontainer">
      <center><h2>Accomadation book Form</h2></center>
      <form action="process_form.php" method="post">
          <div class="form-group">
              <label for="vehicleType">Hotel Name:</label>
              <select  name ="fname">
                  <!-- <option value="vehicletype" disabled selected>Select vehicle type</option> -->
                  <option value="car">Car</option>
                  <option value="van">Van</option>
                  <option value="motorbike">Motorbike</option>
                  <option value="bus">Bus</option>
              </select>
          </div>
          <div class="form-group">
              <label for="price">Price per Night:</label>
              <input type="number" id="price" name="price" placeholder="Enter price">
          </div>
          <div class="form-group">
              <label for="quantity">How many days:</label>
              <input type="number" id="quantity" name="quantity" placeholder="Enter quantity">
          </div>
          <a href="cart.php"> <button type="submit"  class="addcartbtn">Add to Cart</button></a>
      </form>
      
  </div>


        </div>








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
  

    

    








      
        



      

    



  </body>
</html>  