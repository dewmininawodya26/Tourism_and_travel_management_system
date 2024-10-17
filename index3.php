<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>

<form action="login.php" method="post">

<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Adventura</h1>
		<p>Experience a New Era of Travel! Say Good Bye to all your worries!
		<ul>
		<li>Seamless Planning</li>
		<li>Community Connections</li>
		<li>Endless Personalization</li>
		</ul>

		Embark on a transformative journey with our state-of-the-art <br> Tourism and Travel Management System!</br> Explore the world in a whole new way, as we revolutionize everything!<br> From seamless travel arrangements to building a vibrant travel community, </br>and from personalized itineraries to collaboration opportunities, <br>We're here to make every adventure uniquely yours!</br><br> Join a dynamic ecosystem of travelers, employees, guides, and operators, </br>and let us be your compass to unforgettable journeys.
			
		<br>Join us on a journey like no other!</br></p>
		<span>
			
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Log in with Facebook </a>
			<a href="#"><i class="fa fa-google" aria-hidden="true"></i>  Log in with Google </a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Log in</h5>
		<p>Don't have an account? <br><a href="#">Create New Account</a>
        <!--</br> it takes less than a minute</p> -->

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
		<div class="inputs">
			<input type="text" name="uname" placeholder="user name">
			<br>
			<input type="password" name="password" placeholder="password">
		</div>
			<br><br>
			
		<div class="remember-me--forget-password">
	
    <label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me </span>
	</label>
    
			<p> forgot password?</p>
		</div>
			
			<br>
			<button type="submit">Log in</button>
	</div>
	
</div>
  
</body>
</html>
