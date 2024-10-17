<?php
//Linking the configuration file
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    // Insert data into the database
    $sql = "INSERT INTO cart (fname, price, quantity) 
            VALUES ('$fname', '$price', '$quantity')";

    if ($conn->query($sql)) {
        // Send an AJAX response to update the entire table
        // $updatedTable = fetchAllRecordsAsHTML($conn);
        // echo $updatedTable;
         header('Location: cart.php');
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

function fetchAllRecordsAsHTML($con) {
    $sql = "SELECT * FROM cart";
    $result = $con->query($sql);
    
    $tableHTML = '<table>';
    $tableHTML .= '<thead>';
    $tableHTML .= '<tr>';
    $tableHTML .= '<th>ID</th>';
    $tableHTML .= '<th>Name</th>';
    $tableHTML .= '<th>Price</th>';
    $tableHTML .= '<th>Quantity</th>';
    $tableHTML .= '<th>Total Price</th>';
    $tableHTML .= '<th>Action</th>';
    $tableHTML .= '</tr>';
    $tableHTML .= '</thead>';
    $tableHTML .= '<tbody>';
    
    while ($row = $result->fetch_assoc()) {
        $tableHTML .= '<tr>';
        $tableHTML .= '<td>' . $row["id"] . '</td>';
        $tableHTML .= '<td>' . $row["fname"] . '</td>';
        $tableHTML .= '<td>' . $row["price"] . '</td>';
        $tableHTML .= '<td>' . $row["quantity"] . '</td>';
        $tableHTML .= '<td>';
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
