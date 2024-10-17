<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ttm";

//Create connection
$connection = new mysqli($servername, $username, $password, $database);


$name = "";
$place = "";
$review = "";
$rate = "";

$errorMessage = "";
$sucesssMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    //GET method: show the data of the Rating

    if(!isset($_GET["id"])){
        header("location: /ttm/index.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of the selected rating from the database
    $sql = "SELECT * FROM rating WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /ttm/index.php");
        exit;
    }

    $name = $row["name"];
    $place = $row["place"];
    $review = $row["review"];
    $rate = $row["rate"];

}
else {
    //POST method: Update the data of the Rating

    $id= $_POST["id"];
    $name = $_POST["name"];
    $place = $_POST["place"];
    $review = $_POST["review"];
    $rate = $_POST["rate"];

    do{
        if (empty($id) ||empty($name) || empty($place) || empty($review) || empty($rate)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE rating SET Name = '$name', Place = '$place', Review = '$review', Rate = '$rate' WHERE ID = $id ";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query : " . $connection->error;
            break;
        }

        $sucesssMessage = "Ratings updated Correctly";

        header("location: /ttm/index.php");
        exit;


    }while(false);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
    /* CSS Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .alert {
        margin: 10px 0;
    }

    form {
        margin: 20px 0;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5px;
    }

    .btn-primary {
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .btn-outline-primary {
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;s
    }


    .btn-outline-primary:hover {
        background-color: #007BFF;
        color: #fff;
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

</head>
<body>
    <div class="container my-5">
        <h2> Add Recommendation </h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class = 'alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type = "hidden" name="id" value="<?php echo  $id;?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="Form-control" name="name" value="<?php echo  $name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Place</label>
                <div class="col-sm-6">
                    <input type="text" class="Form-control" name="place" value="<?php echo  $place;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Review</label>
                <div class="col-sm-6">
                    <input type="text" class="Form-control" name="review" value="<?php echo  $review;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Rate</label>
                <div class="col-sm-6">
                    <input type="text" class="Form-control" name="rate" value="<?php echo  $rate;?>">
                </div>
            </div>

            <?php
            if (!empty($sucesssMessage)) {
                echo"
                <div class = 'row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class = 'alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$sucesssMessage</strong>
                            <button type = 'button' class='btn-close' data-bs-dismiss='alert' aria-label-'Submit'></button>
                        </div>
                    </div>
                </div>
                ";
            }

            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/ttm/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
