<?php

include "sessionCheck.php";
$idTask = 0;

$sql = "DELETE FROM tasks WHERE id = '$idTask' ";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $idTask = $row;
        
    }
    header('Location: ../task-page.php');
    exit;
}else{
    echo "could not get id";
}



$con->close();

?>