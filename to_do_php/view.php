<?php
include 'database.php';
$query=view();
$i=0;
if($query->num_rows > 0){
    while($row = $query->fetch_assoc())
    {
        //$userData = $query->fetch_assoc();
        $userData=$row;
        $data['status'][$i] = 'ok';
        $data['result'][$i] = $userData;
        $i++;
    }
}
else{
    $data['status'] = 'err';
    $data['result'] = '';
}

echo json_encode($data);
?>