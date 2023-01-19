<?php

include "sessionCheck.php";


$task_title = strval($_POST['create-task']);
$creator = strval($_SESSION['name']);

$sql = "INSERT INTO tasks (task_title, creator) VALUES ('$task_title', '$creator')";

if ($con->query($sql) === TRUE) {
    header('Location: ../task-page.php');
    exit;

} else {
    echo "Error: " . $sql . "<br>" . $con->Error;
}



$con->close();
?>