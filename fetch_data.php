<?php
require 'config.php';

$updatedTable = fetchAllRecordsAsHTML($con);
echo $updatedTable;

function fetchAllRecordsAsHTML($con) {
    $sql = "SELECT * FROM guide";
    $result = $con->query($sql);
    
    $tableHTML = '';
    
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
      $tableHTML .= '<a class="update-button" href="update.php?id=' . $row["id"] . '">Update</a> | ';
$tableHTML .= '<button class="delete-button" data-id="' . $row["id"] . '">Delete</button>';

        $tableHTML .= '</td>';
        $tableHTML .= '</tr>';
    }
    
    return $tableHTML;
}
?>
