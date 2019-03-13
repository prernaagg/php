<?php
    include 'database.php';
    //$characters = json_decode($data); // decode the JSON feed
    //$id=$characters[0]->user_id;
    //$id=$_GET["id"];
    //del($id);
    $id = $_POST['user_id'];
    if (del($id) === TRUE) 
    {
       // header("Location: index.php"); 
    } 
    else 
    {
        echo "Error deleting record: " . $conn->error;
    }
    
?>