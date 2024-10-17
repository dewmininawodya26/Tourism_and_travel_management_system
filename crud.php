<?php 

session_start(); 

include "connect.php";

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM userdata WHERE id = $id"; // Adjust SQL query to retrieve the user's data based on their user_id
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result); // Fetch user data
    } else {
        // Handle the case where the user is not found
        $user_data = [];
    }
} else {
    // Handle the case where the user is not logged in
    $user_data = [];
}


$fname = $_POST['fname'];   //assigning php names to html names
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$nic = $_POST['nic'];
$num = $_POST['num'];
$aboutme = $_POST['aboutme'];
$fdestin = $_POST['fdestin'];
$thistory = $_POST['thistory'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$cnewpassword = $_POST['cnewpassword'];

//taking user data into the database
$sql = "INSERT INTO userdata (First_Name, Last_Name, User_Name, Email, Date_Of_Birth, NIC_Number, Contact_Number, About_Me, Favourite_Destinations, Travel_History, Password) VALUES ('$fname', '$lname', '$uname', '$email', '$dob', '$nic', '$num', '$aboutme', '$fdestin', '$thistory', '$password')";

//connecting database tables into the above data
$rs = mysqli_query($conn, $sql);

if($conn -> query($sql) === TRUE)
{
    Alert("Success!");
}
else
{
    Alert("Error!");
}

function Alert($message)
{
    echo "<script> alert('$message'); window.location.href = 'index.php'; </script>";
}

// function PasswordCheck($password)
// {
//     $sql2 = "SELECT * FROM userdata WHERE Password = '$oldpassword'";
// }



// // Check if the old password matches the one in the database
// $sql2 = "SELECT Password FROM userdata"; // This query will select all rows

// $result = mysqli_query($conn, $sql2);

// if ($result) {
//     // Assuming you have only one user in the database, or you've already verified the user's identity
//     $row = mysqli_fetch_assoc($result);
//     $storedPassword = $row['Password'];

//     if (password_verify($oldpassword, $storedPassword)) {
//         // The old password matches

//         if ($newpassword === $cnewpassword) {
//             // New password and confirmation match
//             // You should also add additional security checks and hashing here

//             // Update the user's password
//             $newpasswordHashed = password_hash($newpassword, PASSWORD_DEFAULT);
//             $updateSql = "UPDATE userdata SET Password = '$newpasswordHashed'";
//             $updateResult = mysqli_query($conn, $updateSql);

//             if ($updateResult) {
//                 // Password updated successfully
//                 Alert("Password updated successfully");
//             } else {
//                 // Password update failed
//                 Alert("Password update failed");
//             }
//         } else {
//             // New password and confirmation do not match
//             Alert("New password and confirmation do not match");
//         }
//     } else {
//         // Old password does not match
//         Alert("Old password is incorrect");
//     }
// } else {
//     // SQL query failed
//     Alert("Database error");

// Your existing code for user registration

// Assuming you want to retrieve the user data you just inserted



// $sql = "SELECT * FROM userdata";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
// 

// sql to select a record 
$sql = "SELECT first_name, last_name, email, dob, nic, contact_no  FROM userdata WHERE id=$last_id";
$result = mysqli_query($conn, $sql);

// sql to delete a record
$sql = "DELETE FROM userdata WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// sql to update a record
$sql = "UPDATE userdata SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

?>