<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/task-page.css">
    <ling rel="stylesheet" href="./css/settings-page.css">
</head>

<body>
<?php
include "./backend/sessionCheck.php";
$_username = strval($_SESSION['name']);

$sql = "SELECT task_title FROM tasks WHERE creator = '$_username'";
$result = $con->query($sql);
$tasks = array();
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $tasks[] = $row;
    }
}else{
    echo "No task found";
}

$con->close();

?>
    <div class="main-container">
        <div class="input-container">
            <form action="./backend/createTask.php" method="post">
            <input type="text" class="new-task" placeholder="Enter a new task" name="create-task" />
            <input type="submit" hidden />
            <input type="text" class="room-code" placeholder="Join Room" />
            </form>
        </div>
        <div class="task-container">
            <div class="each-task">
                <ul id="task-list">
                    <?php foreach ($tasks as $task) { ?>
                        <li class="task-item"><?php echo $task['task_title']; ?></li>
                        <form action="./backend/deleteTask.php" method="post">
                            <button class="btn delete" >Delete</button>
                        </form>
                        <?php } ?>
                </ul>
            </div>
        </div>
        
        <div class="settings-container">
            <div class="gear" onclick="window.location.href='./settings-page.php'">⚙</div>
            <div class="name">Settings</div> <!-- trebuie pus numele ales de utilizator -->
        </div>
    </div>
</body>

</html> 