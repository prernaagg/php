<?php
    include 'database.php';
    $id=$_POST["id"];
    $result=get_status($id);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            if($row["task_status"]==0)
            {
                if( update_status($id,1)=== TRUE)
                {
                    $x=true;
                }
                else 
                {
                    echo "Error updating record: " . $conn->error;
                }
            }
            else
            {
                if ( update_status($id,0)=== TRUE)
                {
                    $x=true;
                }
                else 
                {
                    echo "Error updating record: " . $conn->error;
                }
            }
        }
        if($x==true)
        {
            //header("Location: index.php");   
        }
        else
        {
            echo "not updated";
        }
       
    }
    else
    {
        echo "no such record";
    }
    
?>