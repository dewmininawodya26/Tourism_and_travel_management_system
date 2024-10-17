<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   echo "hiiii";
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

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
    text-decoration: none; /* Remove underline */
}

.butn1:hover {
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
    text-decoration: none; /* Remove underline */
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

:root{
   --red:tomato;
   --orange:orange;
}
/* 
*{
   font-family: sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
} */

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.cartbgcontainer{
   width: 100%;
  height: 80vh;
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(../back.jpg) ;
  margin-top:-20px;
  background-position: center;
  background-size: cover;
  padding-left: 3%;
  padding-right: 3%;
  box-sizing: border-box;
}


.maincartcontainer{
width: 1400px;
height:auto;
margin-left: auto;
margin-top:10px;
background-color:#a6d5f5;
}

.cartcontainer{
   max-width: 1300px;
   margin: 100px auto;
   margin-left: 230px;
   padding-bottom: 5rem;
}

section{
   padding:4rem;
}

 .heading{
   text-align: center;
   line-height: normal;
   /* text-align: 70%; */
   font-size: 3.5rem;
   /* text-transform: uppercase; */
   color:#ced2d9;
   font-weight: bolder;
   margin-bottom: 2rem;
}

.btn,
.option-btn,
.delete-btn{
   display: block;
   width: 180px;
   text-align: center;
   background-color: #2980b9;
   color:#fff;
   font-size: 1.7rem;
   /* padding:1.2rem 3rem; */
   padding: 8px 15px;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
   text-decoration: none; 
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: #473a3b;
   
   font-style: bold;
}

.option-btn i{
   padding-right: .5rem; 
}
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: #b50d23;
   
}

.delete-btn{
   margin-top: 0;
   background-color: #b50d23;
}   


.shopping-cart table{
   text-align: center;
   width: 100%;
   margin-left:-150px;
}

.shopping-cart table thead th{
   padding:1rem;
   font-size: 2rem;
   color:#fff;
   background-color:#333;
}

.shopping-cart table tr td{
   border-bottom: .1rem solid #999;
   padding:0.5rem;
   font-size: 2rem;
   color:#333;
}

.shopping-cart table input[type="number"]{
   border: .1rem solid #999;
   padding:1rem 2rem;
   font-size: 15px;
   color:#333;
   width: 10rem;
}

.shopping-cart table input[type="submit"]{
   padding:6px 10px;
   cursor: pointer;
   font-size: 15px;
   background-color: #c9a632;
   color:#fff;
}

.shopping-cart table input[type="submit"]:hover{
   background-color: #333;
}

.shopping-cart table .table-bottom{
   background-color: #eee;
}

.shopping-cart .checkout-btn{
   text-align: center;
   margin-top: 1rem;
   margin-left:-100px;
}

.shopping-cart .checkout-btn a{
   display: inline-block;
   width: auto;
}

.shopping-cart .checkout-btn a.disabled{
   pointer-events: none;
   opacity: .5;
   user-select: none;
   background-color: #e61025;
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
  text-align: center; 
  margin-top: -50px; 
}

</style>
</head>
<body >

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


   <!--cart-->
   <div class="cartbgcontainer">
      

   <h1 class="heading">Shopping Cart</h1>
   <div class="maincartcontainer">
   <div class="cartcontainer">
   

<section class="shopping-cart">

   
   <table>

      <thead>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total price</th>
         <th>Action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
            $sub_total = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total += $sub_total;
         ?>

         <tr>
           
            <td><?php echo $fetch_cart['fname']; ?></td>
            <td>Rs.<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
               <form  method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Update" name="update_update_btn" class="update_update_btn">
               </form>   
            </td>
            <td>Rs.<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?Remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></td>
         </tr>
         <?php
          
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="transportationmain.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
            <td colspan="2">Amount to pay</td>
            <td>Rs.<?php echo $grand_total; ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> Delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Procced to Checkout</a>
   </div>

</section>
</div>
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
   
<!-- custom js file link  -->
<!-- <script> src="jscript.js"></script> -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const quantityInputs = document.querySelectorAll("input[name='update_quantity']");

        quantityInputs.forEach(function (input) {
            input.addEventListener("change", function () {
                const value = parseInt(this.value);

                if (isNaN(value) || value < 1) {
                    alert("Please enter a valid quantity (greater than or equal to 1).");
                    this.value = 1; // Reset the value to 1 if an invalid quantity is entered.
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const checkoutButton = document.querySelector(".checkout-btn a");

        checkoutButton.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the default behavior of the link
            const grandTotal = <?php echo $grand_total; ?>;

            if (grandTotal > 1) {
                // Proceed to checkout
                const confirmationMessage = "Do the payment at checkout.";
                if (confirm(confirmationMessage)) {
                    alert("Thank you for choose us for travelling.");
                  //   window.location.href = "transportationmain.php"; // Redirect to the checkout page
                }
            } else {
                alert("Your cart is empty. Add items to your cart before proceeding to checkout.");
            }
        });
    });
</script>

</body>
</html>
