<?php
include "sessionCheck.php";


$sql = "SELECT task_title FROM tasks";
$result = $con->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "Task Title: " . $row['task-title'] . "<br>";
    }
}else{
    echo "No task found";
}

$con->close();

?>