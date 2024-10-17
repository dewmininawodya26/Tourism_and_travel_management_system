<?php

include "connect.php";

$ID =$_POST['ID'];

// sql to delete a record
$sql = "DELETE FROM comments WHERE Comment_ID ='$ID'";

if ($conn->query($sql) === TRUE) {
    function_alert("Comment deleted sucssfully");
} else {
    function_alert("error while deleting");
    echo "Error: " . $sql . "<br>" . $conn->error; 
}
function function_alert($message) {      
    // Display the alert box  
    echo "<script>alert('$message'); window.location.href = 'new.php';</script>";
} 
$conn->close();
?>