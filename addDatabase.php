<?php
include "dbcontroller.php"; // Using database connection file here

if(isset($_POST['Add to cart']))
{		
    

    $insert = mysqli_query($db,"INSERT INTO cart VALUES (SELECT * FROM woman)");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>