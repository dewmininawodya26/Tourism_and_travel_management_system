<!DOCTYPE html>
<html>
<body>

<?php

include "connect.php";
$username=$_POST['username'];
$rbcomment=$_POST['rbcomment'];

if (!empty($username)) {
    // Data is present in $username, so insert it into the SQL query
    $sql = "INSERT INTO comments (User_Name, Comments) VALUES ('$username', '$rbcomment')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    
} else {

 echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Comment ID</th><th>User name</th><th>Comment</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {


        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "communitypage";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Comment_ID, User_name, Comments FROM comments");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

}

?>

<form action="update.php" method="post">

        <label>Comment</label>
        <textarea name="comment" placeholder="Add your new comment"></textarea><br>
      
        <label>Comment ID</label>
        <input type="text" name="Cid" placeholder="Comment ID"><br> 
    <input type="submit" name="submit_button" value="update">
</form>

<form action="delete.php" method="post">
<label>ID</label>
<input type="text" name="ID" placeholder="ID"><br>
<input type="submit" name="submit_button" value="delete">
</form>

</body>
</html>