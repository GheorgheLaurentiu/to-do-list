<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login / Register</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<?php 
include './backend/config.php';
session_start();
    
if (isset($_SESSION['loggedin'])) {
    header('Location: task-page.php');
    exit;
}

?>

<body>
    <div class="main-container">
        <div class="page-title">To-Do List</div>
        <div class="btn-container">
            <div class="btn login" onclick="window.location.href='./login-page.html'">Login</div>
            <div class="btn register" onclick="window.location.href='./register-page.html'">Register</div>
        </div>
    </div>

</body>

</html>