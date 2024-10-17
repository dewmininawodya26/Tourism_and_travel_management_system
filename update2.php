<?php

include "connect.php";

$username=$_POST['username'];
$comment =$_POST['comment'];
$ID=$_POST['Cid'];

$sql = "UPDATE comments SET Comments='$comment' WHERE Comment_ID='$ID' ";

if ($conn->query($sql) === TRUE) {
    function_alert("sucsessfully updated");
} else {
    function_alert("error while updating");
    echo "Error: " . $sql . "<br>" . $conn->error; 
}
function function_alert($message) {      
    // Display the alert box  
    echo "<script>alert('$message'); window.location.href = 'new.php';</script>";
} 

$conn->close();
?>