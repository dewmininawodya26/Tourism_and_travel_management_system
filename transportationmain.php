<!DOCTYPE html>
<html>
  <head>
    <title>Adventura</title>
      <!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->
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
    text-align: right; 
    margin-top: 5px; 
    margin-right: 520px;

/* Style the logo */
.logo {
    position: absolute;
    top: 5px; 
    left:10px; 
    width: 90px; 
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
    top: 40px;  
    right: 180px; 
    width: 120px; 
    height: auto; 
}

.butn1 :hover{
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
    top: 40px; 
    right: 50px; 
    width: 120px; 
    height: auto; 
}

.topnav {
    background-color: rgba(38, 53, 134, 0.5);
    overflow: hidden;
  }
  
  
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
    top: 111px; 
    right:25px; 
    width: 38px; 
    height: auto; 
    color: rgb(7, 7, 7);
}

/*transportationmain*/
.theader1{
  font-family: 'Times New Roman', Times, serif;
}

.theader2{
  font-style: italic;
  line-height: 10%;
}

/*card*/
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
            background-color: #1c59c9;
            color: white;
            transform: rotateY(180deg);
        }

        img {
            width: 80px;  
        }

/*tran*/
.vtcontainer {
    /* max-width: 800px; */
    width: 1000px;
    height: 400px;
    margin: 50px auto; 
    padding: 20px;
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
  padding: 10px 4px; 
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
  text-align: center; 
  margin-top: -50px; 
}



    </style>
  </head>
  
  <body>
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



    <!--transport-->
    <div class="theader1">
        <h2>Hire a vehicle for any kind of trip</h2>
    </div>
    <div class="theader2">
        <h4>Great deals for great prices, choose any kind of vehicle you want</h4>
    </div>

    <!-- flipcard -->
    <div class="fcard-hedding">
        <h2>Featured Vehicals</h2>
        <div class="flip-card-container">
            <!-- First row -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../images_project/bus1.jpg" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Luxury Bus</h1>
                        <p>Per day Rs.60000.00 </p>
                        
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../images_projects/bus2.jpg" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Semi-luxury Bus</h1>
                        <p>Per day Rs.40000.00</p>
                        
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../images_projects/bike.jpg" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Motor-bike</h1>
                        <p>Per day Rs.20000.00</p>
                        
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images_projects/bike2.jpg" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Motor-bike2</h1>
                        <p>Per day Rs.5000.00</p>
                       
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/hotel5.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Luxury Retreat</h1>
                        <p>per night RS 4500</p>
                        <p>spa and gourmet dining</p>
                    </div>
                </div>
            </div>
            <!-- Second row -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/hotel6.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Ocean Paradise</h1>
                        <p>per night RS 3500</p>
                        <p>private beach access</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/hotel7.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>City Lights</h1>
                        <p>per night RS 2800</p>
                        <p>downtown convenience</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                    <img src="/images/hotel8.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Tranquil Retreat</h1>
                        <p>per night RS 3200</p>
                        <p>mountain views</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/hotel9.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Historic Charm</h1>
                        <p>per night RS 2700</p>
                        <p>century-old elegance</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/images/hotel10.png" alt="Avatar" style="width:240px; height:240px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Serene Garden</h1>
                        <p>per night RS 3100</p>
                        <p>lush garden retreat</p>
                    </div>
                </div>
            </div>
        </div>

     <!-- form -->
    <div class="vtcontainer">
      <h2>Vehicle Booking Form</h2>
      <form action="process_form.php" method="post">
          <div class="form-group">
              <label for="vehicleType">Vehicle Type:</label>
              <select  name ="fname">
                  <!-- <option value="vehicletype" disabled selected>Select vehicle type</option> -->
                  <option value="car">Car</option>
                  <option value="van">Van</option>
                  <option value="motorbike">Motorbike</option>
                  <option value="bus">Bus</option>
              </select>
          </div>
          <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" id="price" name="price" placeholder="Enter price">
          </div>
          <div class="form-group">
              <label for="quantity">Quantity:</label>
              <input type="number" id="quantity" name="quantity" placeholder="Enter quantity">
          </div>
          <a href="cart.php"> <button type="submit"  class="addcartbtn">Add to Cart</button></a>
      </form>
      
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