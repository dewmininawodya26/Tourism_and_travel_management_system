<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recommendation</title>
    <link rel= "stylesheet" type ="text/css" href = "index.css">
    <link rel= "stylesheet" type ="text/css" href = "header.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<img src="adventura/images/unnamed.jpg" alt="Adventura Logo" class="logo">
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

    <div class = "bg">
    <div class="container">
        <h2>Recommendation By Guides</h2>
        <a href="/ttm/create.php" role="button" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; margin-bottom:10px">Add Recommendation</a>

        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Place</th>
                    <th>Review</th>
                    <th>Rate</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "ttm";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection Failed: " . $connection->connect_error);
                }

                // Read all rows from the database table
                $sql = "SELECT * FROM rating";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                // Read data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[place]</td>
                    <td>$row[review]</td>
                    <td>$row[rate]</td>
                    <td>
                        <a href='/ttm/edit.php?id=$row[id]' class='edit'>Edit</a>
                        <a href='/ttm/delete.php?id=$row[id]' class='delete'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <a href="#">
    <img src="adventura/images/cart.png" alt="cart Logo" class="logo2"></a>
    <footer class="footer">
      <div class="fcontainer">
          <div class="sec logo">
              <img src="adventura/images/unnamed.jpg" alt="Logo" class="logo">
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
