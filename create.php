<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ttm";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$place = "";
$review = "";
$rate = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $place = $_POST["place"];
    $review = $_POST["review"];
    $rate = $_POST["rate"];

    do {
        if (empty($name) || empty($place) || empty($review) || empty($rate)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Add new client to the database

        $sql = "INSERT INTO rating (name, place, review, rate) "
               . "VALUES ('$name', '$place', '$review', '$rate')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query : " . $connection->error;
            break;
        }

        $name = "";
        $place = "";
        $review = "";
        $rate = "";

        $successMessage = "Client added correctly";

        header("location: /ttm/index.php");
        exit;

    } while (false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation</title>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 50px auto;
    }

    h2 {
        text-align: center;
        color: #007BFF;
    }

    .alert {
        margin-bottom: 10px;
        text-align: center;
        border: 1px solid #f9f9f9;
        background-color: #f2dede;
        color: #a94442;
        border-radius: 3px;
        padding: 10px;
    }

    form {
        margin-top: 20px;
    }

    .form-control {
        width: 462px;
        padding: 10px;
        margin-bottom: 35px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #f9f9f9;
        color: #333;
    }

    label {
        font-weight: bold;
        color: #333;
    }

    .btn-primary {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-outline-primary {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }


    .btn-outline-primary:hover {
        background-color: #0056b3;
    }

    .btn-cancel {
        border: none;
        background: none;
        color: #007BFF;
        cursor: pointer;
    }

    .btn-cancel:hover {
        text-decoration: underline;
    }

    /* Add spacing to the form */
    .row {
        margin-bottom: 20px;
    }
</style>

<script>
    // Function to validate the form
    function validateForm() {
        var name = document.getElementById("name").value;
        var place = document.getElementById("place").value;
        var review = document.getElementById("review").value;
        var rate = document.getElementById("rate").value;

        if (name === "" || place === "" || review === "" || rate === "") {
            alert("All fields are required.");
            return false;
        }

        if (isNaN(rate) || rate < 1 || rate > 5) {
            alert("Rate must be a number between 1 and 5.");
            return false;
        }

        return true;
    }
</script>

<div class="container my-5">
    <h2> Add Recommendation </h2>

    <?php
    if (!empty($errorMessage)) {
        echo "
        <div class='alert alert-warning' role='alert'>
            <strong>$errorMessage</strong>
        </div>
        ";
    }
    ?>

    <form method="post" onsubmit="return validateForm();">
        <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="place" class="col-sm-3 col-form-label">Place</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="place" id="place" value="<?php echo $place; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="review" class="col-sm-3 col-form-label">Review</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="review" id="review" value="<?php echo $review; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="rate" class="col-sm-3 col-form-label">Rate</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="rate" id="rate" value="<?php echo $rate; ?>">
            </div>
        </div>

        <?php
        if (!empty($successMessage)) {
            echo "
            <div class='alert alert-success' role='alert'>
                <strong>$successMessage</strong>
            </div>
            ";
        }
        ?>

        <div class="row mb-3">
            <div class="col-sm-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-outline-primary" href="/ttm/index.php" role="button" style="text-decoration: none;">Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
