<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM guide WHERE id = $id";
    if ($con->query($sql)) {
        echo "success";
    } else {
        echo "Error: " . $con->error;
    }
} else {
    echo "No ID specified for deletion.";
}
?>
