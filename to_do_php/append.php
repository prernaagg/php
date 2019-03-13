<?php
include 'database.php';
$li=$_POST["name"];
    
    if ( insert($li,0) === TRUE) 
    {
        //header("Location: index.php");
    } 
    else 
    {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>