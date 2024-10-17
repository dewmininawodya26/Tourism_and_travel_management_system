<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Adventura</title>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../vehicle/myjs.js"></script>

  </head>
  <body>
    
    <img src="images/unnamed.jpg" alt="Adventura Logo" class="logo">
      <div class = "header">
        <h1>Adventura</h1>
      </div>
          <div class ="a">
            <h3>Happiness is not a destination</h3></div>
              <div class ="b">
                <h3 class="moved-text">it's a way of travel...</h3>
            </div>
          
    <hr>
      <button class="butn1">Logout</button>
      <span class="usericon"><i class="fa-solid fa-user"></i></span>   
        <div class="topnav">
          <a class="active" href="#home">Home</a>
          <a href="#dashboard">Start Planning</a>
          <a href="#tourguide">Community</a>
          <a href="#vehicles">More</a>        
          <input type="text" placeholder="Search..">
        </div>
    <a href="#">
    <img src="images/cart.png" alt="cart Logo" class="logo2"></a>

    <!-- contactuspage -->

  <div class="bodyclass">
  <div class="contactUs">
    <div class="con-title">
      <h2>Get in Touch</h2>
    </div>
    <div class="box">
      <!--form-->
      <div class="contact f-form">
        <h3>Send a Message</h3>
        <form>
          <div class="formbox">
            <div class="row50">
              <div class="inputBOX">
                <span>First Name</span>
                <input type="text" placeholder="John">
              </div>
              <div class="inputBOX">
                <span>Last Name</span>
                <input type="text" placeholder="Fernando">
              </div>
            </div>

            <div class="row50">
              <div class="inputBOX">
                <span>Email</span>
                <input type="text" placeholder="JohnFernando@email.com">
              </div>
              <div class="inputBOX">
                <span>Mobile</span>
                <input type="text" placeholder="+94 711 543 320">
              </div>
            </div>

            <div class="row100">
              <div class="inputBOX">
                <span>Message</span>
                <textarea placeholder="Write your message here..."></textarea>
              </div>
            </div>

            <div class="row100">
              <div class="inputBOX">
                <input type="submit" value="Send">
              </div>
            </div>
          </div>
        </form>
      </div>
        
      <!--info box-->
      <div class="contact info">
        <h3>Contact Info</h3>
        <div class="infoBOX">
          <div>
            <span><i class="fa-solid fa-location-dot"></i></span>
            <p>Dharmapala Mw, Colombo 3 <br>  Sri Lanka</p>
          </div>
          <div>
            <span><i class="fa-solid fa-envelope"></i></span>
            <a href="mailto:adventura123@emial.com">adventura123@emial.com</a>
          </div>
          <div>
            <span><i class="fa-solid fa-phone"></i></span>
            <a href="tel:+947253450000">+94 725 345 0000</a>
          </div>
          <ul class="social">
            <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
          </ul>
        </div>
      </div>

      <!--map-->
      <div class="contact map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.5612983717!2d79.8583946091145!3d6.
        903717231212261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2594226a0ffbb%3A0xa413c5b33bf575f6!
        2sKollupitiya%2C%20Colombo!5e0!3m2!1sen!2slk!4v1697406307389!5m2!1sen!2slk" 
         style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>
</div>

<!--end contactuspage -->

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