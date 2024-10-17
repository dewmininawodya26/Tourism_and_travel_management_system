<!DOCTYPE html>
<html>
  <head>
    <title>Adventura</title>
      <link rel="stylesheet" type="text/css" href="/css/startplanning.css">
      <link rel="stylesheet" type="text/css" href="/css/tour guide list.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
      
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    right: 150px; /* Adjust the left position as needed */
    width: 120px; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
}
.b{
    line-height: 5%;
    font-size: large;
}


.icon1 img {
  width: 40px; /* Adjust the icon width as needed */
  height: 40px; /* Adjust the icon height as needed */
  vertical-align: middle; /* Align the icon vertically with the text */
  margin-top: -68px;
  margin-right: 30px
  
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



  .container{
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(../bg.jpg) ;
  max-width: 700px;
  width: 200%;
  background-color: #fff;
  margin-top: 5%;
  margin-left:390px;
  margin-bottom: 3%;
  padding: 10px 30px;
  border-radius: 5px;
  box-shadow: 5px 5px 10px rgba(0.15,0.15,0.15,0.15);
  display:flex;
  
  

}
.title{
  font-size: 29px;
  font-weight: 500;
  position: absolute;
  top:23%;
  left:45%;
}
/* .container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
} */
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }

  .input-box select {
  width: 110%;
  height: 45px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px;
  font-size: 16px;
  outline: none;
  transition: border-color 0.3s ease;
}

.input-box select:focus {
  border-color: #9b59b6; /* Change the border color when the select is focused */
}



  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

.title2{
  font-size: 29px;
  font-weight: 500;
  position: absolute;
  top:110%;
  left:45%;
}

.tableFixHead {
    overflow-y: auto;
    height: 200px;
    margin-top: 90px;
  }
  
  .tableFixHead thead th {
    position: sticky;
    top: 0px;
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    padding: 8px 16px;
    border: 1px solid #ccc;
  }
  
  th {
    background: #eee;
  }
/* Style the Update button */
a.update-button {
    display: inline-block;
    padding: 8px 16px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

a.update-button:hover {
    background-color: #45a049;
}

/* Style the Delete button */
button.delete-button {
    padding: 8px 16px;
    background-color: #f44336;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button.delete-button:hover {
    background-color: #d32f2f;
}



  
/* footer */
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
      <button class="butn1">logout</button>
      
      <a href="#" class="icon1">
      <img src="cart.png" alt="cart Logo" class="logo2"></a>
      </div>
    <div class="topnav">
          <a href="HomePage.php">Home</a>
          <a href="TourGuideDash.php">Dashboard</a>
          <a class="active"href="tourgiudslist.php">Tour Guide</a>
          <a href="#Community">Community</a>
          <a href="index2.php">Vehicals</a>
          <a href="member_profile.php">My Account</a>           
          <input type="text" placeholder="Search..">
        </div>
        <a href="#">
            <img src="cart.png" alt="cart Logo" class="logo2"></a>

    <div class="row">     
      <div class="title">Guide Registration</div>  
    <div class="container">
              <!-- <div class="title">Registration</div> -->
              <div class="content">
                <form id="registrationForm" action="registration.php" method = "post">
                  <div class="user-details">
                    <div class="input-box">
                      <span class="details">First Name</span>
                      <input type="text" id="firstName" name="firstName" placeholder="Enter your First name" >
                    </div>
                    <div class="input-box">
                      <span class="details">Last Name</span>
                      <input type="text" id="lastName" name="lastName" placeholder="Enter your Last Name" required>
                    </div>
                    <div class="input-box">
                      <span class="details">Email</span>
                      <input type="text" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                      <span class="details">Phone Number</span>
                      <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                      <span class="details">Language</span>
                      <input type="text" id="language" name="languages" placeholder="Enter Language" required>
                    </div>
                    <div class="input-box">
                      <span class="details">Country</span>
                      <select id="country" name="country" required>
                        <option value="Select">Select</option>
                        <option value="sri lanka">Sri Lanka</option>
                        <option value="india">India</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="china">China</option>
                      </select>
                    </div>
                    
                  </div>
                  <div class="gender-details">
                    <input type="radio" name="gender" value="male" id="dot-1">
                    <input type="radio" name="gender" value="female" id="dot-2">
                    <input type="radio" name="gender" value="preferNotToSay" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                      <label for="dot-1">
                      <span class="dot one"></span>
                      <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                      <span class="dot two"></span>
                      <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                      <span class="dot three"></span>
                      <span class="gender">Prefer not to say</span>
                      </label>
                    </div>
                  </div>
                  <div class="button">
                    <input type="submit" value="Register">
                  </div>
                </form>
              </div>
            </div>       




           <!-- Your table goes here -->
    <div class="tableFixHead">
        <div class="row">
          <div class="title2">Guide Registerd list</div> 
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>PhoneNumber</th>
                        <th>Language</th>
                        <th>Country</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="recordTable">
                    <!-- Table body rows will be updated by AJAX response -->
                </tbody>
            </table>
        </div>
    </div>




    
    <!-- <footer class="footer">
              <div class="containerss">
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
          </footer> -->
          
           <script>
            const form = document.getElementById('registrationForm');
            const firstName = document.getElementById('firstName');
            console.log("firstName",firstName.value)
            const lastName = document.getElementById('lastName');
            const email = document.getElementById('email');
            const phoneNumber = document.getElementById('phoneNumber');
            const language = document.getElementById('language');
            const country = document.getElementById('country');
            const genderOptions = document.querySelectorAll('input[name="gender"]');
      
            form.addEventListener('submit', function (event) {
              if (!validateForm()) {
                event.preventDefault();
              }
             
            });
          
            function loadInitialData() {
            $.ajax({
                type: 'GET',
                url: 'fetch_data.php',
                success: function (data) {
                    $('#recordTable').html(data);
                }
            });
        }

         // Function to refresh the table with new data
         function refreshTable() {
            $.ajax({
                type: 'GET',
                url: 'fetch_data.php',
                success: function (data) {
                    $('#recordTable').html(data);
                }
            });
        }
     
        // Call the function to load initial data
        
            $(document).ready(function () {
              loadInitialData();
            // Intercept the form submission and handle it via AJAX
            $('#registrationForm').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'registration.php',
                    data: $(this).serialize(),
                    success: function () {
                        refreshTable(); // Refresh the table after a new item is added
                        $('#registrationForm')[0].reset();
                    }
                });
            });

            $(document).on('click', '.delete-button', function () {
           var id = $(this).data('id'); // Get the ID of the record to delete
           var row = $(this).closest('tr'); // Get the table row to remove

        $.ajax({
        type: 'POST',
        url: 'delete.php',
        data: { id: id }, // Send the ID of the record to delete
        success: function (data) {
            if (data === 'success') {
                // Remove the row from the table
                row.remove();
            } else {
                // Handle errors or display messages
                console.log(data); // Print the message to the console
            }
        }
    });
});
        });
 
            function validateForm() {
              let isValid = true;
      
              if (firstName.value.trim() === '') {
                alert('First Name is required');
                isValid = false;
              }
      
              if (lastName.value.trim() === '') {
                alert('Last Name is required');
                isValid = false;
              }
      
              if (email.value.trim() === '') {
                alert('Email is required');
                isValid = false;
              } else if (!isValidEmail(email.value)) {
                alert('Please enter a valid email address');
                isValid = false;
              }
      
              if (phoneNumber.value.trim() === '') {
                alert('Phone Number is required');
                isValid = false;
              }
      
              if (language.value.trim() === '') {
                alert('Language is required');
                isValid = false;
              }
      
              if (country.value === '') {
                alert('Please select a country');
                isValid = false;
              }
      
              if (!isGenderSelected()) {
                alert('Please select a gender');
                isValid = false;
              }
      
              return isValid;
            }
      
            function isValidEmail(email) {
              const emailPattern = /\S+@\S+\.\S+/;
              return emailPattern.test(email);
            }
      
            function isGenderSelected() {
              for (const option of genderOptions) {
                if (option.checked) {
                  return true;
                }
              }
              return false;
            }
          </script>
        
          </body>
        </html>  