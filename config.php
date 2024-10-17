<?php
//The connection object
	
$con=new mysqli("localhost","root","","guides");
// Check connection
	if($con->connect_error){
		die("Connection failed: " . $con->connect_error);
	}

?>