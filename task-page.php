<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/task-page.css">
</head>

<body>
<?php

include './backend/config.php';
include './backend/sessionCheck.php'
?>
    <div class="main-container">
        <div class="input-container">
            <input type="text" class="new-task" placeholder="Enter a new task" />
            <input type="text" class="room-code" placeholder="Join Room" />
        </div>
        <div class="task-container">
            <ul id="task-list"></ul>
        </div>
        <div class="settings-container">
            <div class="gear" onclick="window.location.href='./settings-page.php'">⚙</div>
            <div class="name">Settings</div> <!-- trebuie pus numele ales de utilizator -->
        </div>
    </div>
</body>

</html> 