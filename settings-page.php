<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Settings Page</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/settings-page.css">

</head>

<body>
<?php

include './backend/config.php';
include './backend/sessionCheck.php'
?>
    <script>
        function changeEmail(){
            document.getElementById("change-email");
            location.href= './change-email.php'
        }
    </script>

    <div class="main-container">
        <div class="title-container">
            <div class="back" onclick=$backButton>◀</div>
            <div class="page-title">Settings</div>
        </div>
        <div class="btn history">Task History</div>
        <div class="btn email" onclick="changeEmail()">Change Email</div>
        <div class="btn user">Change User</div>
        <div class="btn pass">Change Password</div>
        <a class="btn log-out" href="./logout.php">Log Out</a>
        <div class="btn delete">Delete Account</div>
    </div>
</body>

</html>