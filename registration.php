<?php
//Linking the configuration file
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $languages = $_POST['languages'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];

    // Insert data into the database
    $sql = "INSERT INTO guide (firstName, lastName, email, phoneNumber, languages, country, gender) 
            VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$languages', '$country', '$gender')";

    if ($con->query($sql)) {
        // Send an AJAX response to update the entire table
        $updatedTable = fetchAllRecordsAsHTML($con);
        echo $updatedTable;
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}

function fetchAllRecordsAsHTML($con) {
    $sql = "SELECT * FROM guide";
    $result = $con->query($sql);
    
    $tableHTML = '<table>';
    $tableHTML .= '<thead>';
    $tableHTML .= '<tr>';
    $tableHTML .= '<th>ID</th>';
    $tableHTML .= '<th>FirstName</th>';
    $tableHTML .= '<th>LastName</th>';
    $tableHTML .= '<th>Email</th>';
    $tableHTML .= '<th>PhoneNumber</th>';
    $tableHTML .= '<th>Language</th>';
    $tableHTML .= '<th>Country</th>';
    $tableHTML .= '<th>Gender</th>';
    $tableHTML .= '<th>Action</th>';
    $tableHTML .= '</tr>';
    $tableHTML .= '</thead>';
    $tableHTML .= '<tbody>';
    
    while ($row = $result->fetch_assoc()) {
        $tableHTML .= '<tr>';
        $tableHTML .= '<td>' . $row["id"] . '</td>';
        $tableHTML .= '<td>' . $row["firstName"] . '</td>';
        $tableHTML .= '<td>' . $row["lastName"] . '</td>';
        $tableHTML .= '<td>' . $row["email"] . '</td>';
        $tableHTML .= '<td>' . $row["phoneNumber"] . '</td>';
        $tableHTML .= '<td>' . $row["languages"] . '</td>';
        $tableHTML .= '<td>' . $row["country"] . '</td>';
        $tableHTML .= '<td>' . $row["gender"] . '</td>';
        $tableHTML .= '<td>';
        $tableHTML .= '<a href="update.php?id=' . $row["id"] . '">Update</a> | ';
        $tableHTML .= '<button class="delete-button" data-id="' . $row["id"] . '">Delete</button>';
        $tableHTML .= '</td>';
        $tableHTML .= '</tr>';
    }
    
    $tableHTML .= '</tbody>';
    $tableHTML .= '</table>';
    
    return $tableHTML;
}

?>