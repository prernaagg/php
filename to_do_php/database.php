<?php
     header('Access-Control-Allow-Origin: *');

     global $servername;
     global $username;
     global $password;
     global $dbname;
     
    function connection()
    {
        $servername="127.0.0.1";
        $username="root";
        $password="goldtree9";
        $dbname="to_do";   
        $conn = new mysqli($servername, $username, $password, $dbname);
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    function insert($name,$status)
    {
        $conn=connection();
        $sql = "INSERT INTO list_items (task_name,task_status) VALUES ('$name', $status)";
        $x=$conn->query($sql);
        $conn->close();
        return $x;
    }
    function view()
    {
        $conn=connection();
        $sql = "SELECT id, task_name, task_status FROM list_items";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    function del($id)
    {
        $conn=connection();
        $sql = "DELETE FROM list_items WHERE id=$id";
        $x=$conn->query($sql);
        $conn->close();
        return $x;
    }
    function update_task_name($id,$value)
    {
        $conn=connection();
        $sql = "UPDATE list_items SET task_name='$value' WHERE id=$id";
        $x=$conn->query($sql);
        $conn->close();
        return $x;
    }
    function update_status($id,$value)
    {
        $conn=connection();
        $sql = "UPDATE list_items SET task_status=$value WHERE id=$id";
        $x=$conn->query($sql);
        $conn->close();
        return $x;
    }
    function get_status($id)
    {
        $conn=connection();
        $sql = "SELECT task_status FROM list_items where id=$id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
?>