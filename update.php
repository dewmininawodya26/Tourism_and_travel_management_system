<?php
require 'config.php';

// Check if an ID is provided for the record to update
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the current data for the selected record
    $sql = "SELECT * FROM guide WHERE id = $id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "Record ID not provided.";
    exit;
}

// Check if the form has been submitted for updating
if (isset($_POST['update'])) {
    $firstName = $_POST['firstName'];
    echo "firstName".$firstName;
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $languages = $_POST['languages'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    echo "id".$id;

    $sql = "UPDATE guide SET firstName = '$firstName', lastName = '$lastName', email = '$email', phoneNumber = '$phoneNumber', languages = '$languages', country = '$country', gender = '$gender' WHERE id = $id";

    if ($con->query($sql)) {
        // echo "Record with ID $id has been updated.";
          header('Location: tourgiudslist.php');
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

h1 {
  text-align: center;
  color: #333;
  
  font-variant: normal;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: block;
  font-weight: bold;
  margin-top: 10px;
}

input[type="text"], select {
  width: 100%;
  padding: 10px 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

select {
  background-color: #f9f9f9;
}

input[type="radio"] {
  margin-right: 5px;
}

input[type="submit"] {
  background-color: #009688;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-top: 10px;
}

input[type="submit"]:hover {
  background-color: #00766b;
  
}

/* Additional styles for selected radio buttons */
input[type="radio"]:checked + label {
  color: #009688;
}

/* Adjust the form for smaller screens */
@media (max-width: 600px) {
  form {
    width: 90%;
  }
}

    </style>
</head>
<body>
    <h1>Update Record</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" value="<?php echo $row['firstName']; ?>">
        <br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" value="<?php echo $row['lastName']; ?>">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>">
        <br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber']; ?>">
        <br>

        <label for="language">Language:</label>
        <input type="text" name="languages" value="<?php echo $row['languages']; ?>">
        <br>

        <label for="country">Country:</label>
        <select name="country">
            <option value="sri lanka" <?php if ($row['country'] == 'sri lanka') echo 'selected'; ?>>Sri Lanka</option>
            <option value="india" <?php if ($row['country'] == 'india') echo 'selected'; ?>>India</option>
            <option value="pakistan" <?php if ($row['country'] == 'pakistan') echo 'selected'; ?>>Pakistan</option>
            <option value="china" <?php if ($row['country'] == 'china') echo 'selected'; ?>>China</option>
        </select>
        <br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>> Female
        <input type="radio" name="gender" value="preferNotToSay" <?php if ($row['gender'] == 'preferNotToSay') echo 'checked'; ?>> Prefer not to say
        <br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>