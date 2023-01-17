<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email</title>
</head>

<?php

include './backend/config.php';
include './backend/sessionCheck.php'
?>

<body>
    <!--Stilizare pagina-->
    <form action="./backend/changeEmail.php" method="post">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="newEmail" name="newEmail" id="newEmail" placeholder="New Email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>