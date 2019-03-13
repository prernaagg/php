<?php
    include 'database.php';
    $val=$_POST["updated_task"];
    $id=$_POST["id"];
    print_r($id);
    if ( update_task_name($id,$val)=== TRUE)
    {
        //header("Location: index.php");
    }
    else 
    {
       echo "Error updating record: " . $conn->error;
    }
?>