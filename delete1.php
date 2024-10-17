<?php
include_once'db.php';
?>
<?php
    $id=$_GET['id'];

    $query="DELETE from vehicle_registration where id='$id'";//execute the query

    $data=mysqli_query($connection,$query);

        if($data)
        {
        
            echo"<script>alert('Recorded deleted !!')</script>";//delete the recorded if success
            header("Location:index2.php");
        }
        else
        {
            echo"<script>alert('Error in delete  !!')</script>";//error message  
        }
    mysqli_close($connection);
?>