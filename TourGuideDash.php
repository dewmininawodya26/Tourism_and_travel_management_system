<!DOCTYPE html>
<html>
  <head>
    <title>Adventura</title>
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <link rel= "stylesheet" type ="text/css" href = "css/TourGuide.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/myjs.js"></script>
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
    
      <button class="butn1">Log out</button>
      <img src="images/logo.png" alt="Login Logo" class="login_logo">
        <div class="topnav">
          <a href="#home">Home</a>
          <a class="active" href="#Dashboard">Dashboard</a>
          <a href="#Tour Guides">Tour Guides</a>
          <a href="#Vehicle">Vehicle</a>
          <a href="#My Account">My Account</a>  


          <input type="text" placeholder="Search..">
        </div>

        <div class="bgcontainer">
          <p> Guide Booking Confirmation</p>
            <div class="row">
                <div class="tableFixHead">
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Action</th>
                      <th>Assignee</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>A45</td>
                      <td>James Corner</td>
                      <td>james@gmail.com</td>
                      <td>(527) 589-6759 </td>
                      <td><button type="button">View</button>
                      </td>
                      <td>
                        <label for="Guide">Select Guide:</label>
                          <select name="Guide">
                            <option value="James">James</option>
                            <option value="Will">Will</option>
                            <option value="David">David</option>
                            <option value="Saige">Saige</option>
                          </select>
                      </td>
                    </tr>
                    <tr>
                      <td>A29</td>
                      <td>Will Smith</td>
                      <td>Will@gmail.com</td>
                      <td>(527) 589-6759 </td>
                      <td><button type="button">View</button></td>
                      <td>
                        <label for="Guide">Select Guide:</label>
                          <select name="Guide">
                            <option value="James">James</option>
                            <option value="Will">Will</option>
                            <option value="David">David</option>
                            <option value="Saige">Saige</option>
                          </select>
                      </td>
                    </tr>
                    <tr>
                      <td>A56</td>
                      <td>David Mitchell</td>
                      <td>David@gmail.com</td>
                      <td>(700) 612-9100 </td>
                      <td><button type="button">View</button></td>
                      <td>
                        <label for="Guide">Select Guide:</label>
                          <select name="Guide">
                            <option value="James">James</option>
                            <option value="Will">Will</option>
                            <option value="David">David</option>
                            <option value="Saige">Saige</option>
                          </select>
                      </td>
                    </tr>
                    <tr>
                      <td>A57</td>
                      <td>Saige Fuentes</td>
                      <td>Saige@gmail.com</td>
                      <td>(545) 677-6339 </td>
                      <td><button type="button">View</button></td>
                      <td>
                        <label for="Guide">Select Guide:</label>
                          <select name="Guide">
                            <option value="James">James</option>
                            <option value="Will">Will</option>
                            <option value="David">David</option>
                            <option value="Saige">Saige</option>
                          </select>
                      </td>
                    </tr>
                    <tr>
                      <td>A52</td>
                      <td>Warner Stark</td>
                      <td>Warner@gmail.com</td>
                      <td>(700) 612-9852 </td>
                      <td><button type="button">View</button></td>
                      <td>
                        <label for="Guide">Select Guide:</label>
                          <select name="Guide">
                            <option value="James">James</option>
                            <option value="Will">Will</option>
                            <option value="David">David</option>
                            <option value="Saige">Saige</option>
                          </select>
                      </td>
                    </tr>
                  </tbody>
                  </table>
                </div>

                <div class="row">
                  <p> Vehical Booking Confirmation</p>
                  <div class="tableFixHead">
                  <table>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>V667</td>
                        <td>Jaylen Blackwell</td>
                        <td>Jaylen@gmail.com</td>
                        <td>(427) 589-8759 </td>
                        <td><button type="button">View</button></td>
        
                      </tr>
                      <tr>
                        <td>V668</td>
                        <td>Marceline Avila</td>
                        <td>Marceline@gmail.com</td>
                        <td>(827) 691-2589 </td>
                        <td><button type="button">View</button></td>
                        
                      </tr>
                      <tr>
                        <td>V669</td>
                        <td>Franklin Sierra</td>
                        <td>Franklin@gmail.com</td>
                        <td>(700) 612-8754 </td>
                        <td><button type="button">View</button></td>
                        
                      </tr>
                      <tr>
                        <td>V670</td>
                        <td>Amelie Griffith</td>
                        <td>Amelie@gmail.com</td>
                        <td>(545) 877-6339 </td>
                        <td><button type="button">View</button></td>
                      </tr>

                      <tr>
                        <td>V699</td>
                        <td>Kylan Gentry</td>
                        <td>Kylan@gmail.com</td>
                        <td>(545) 677-1297 </td>
                        <td><button type="button">View</button></td>
                      </tr>

                      <tr>
                        <td>V625</td>
                        <td>Megan Gomez</td>
                        <td>Megan@gmail.com</td>
                        <td>(548) 589-5462 </td>
                        <td><button type="button">View</button></td>
        
                      </tr>
                    </tbody>
                    </table>
                  </div>
                </div>

        </div>
        </div>
        <hr>
    <a href="#">
    <img src="images/cart.png" alt="cart Logo" class="logo2"></a>
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