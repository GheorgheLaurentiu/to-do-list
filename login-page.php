<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/login-register-page.css">
</head>

<body>
    <script>
        function showPassword(){
            var x = document.getElementById("password");
            if(x.type === "password"){
                x.type = "text";
            }else{
                x.type = "password";
            }
        }
    </script>

    <?php
    include "./backend/config.php";
    session_start();

    if(isset($_SESSION['loggedin'])){
        header('Location: index.php');
        exit;
    }

    ?>


    <div class="main-container">
        <div class="page-title">Login</div>
        <form action="./backend/authenthicate.php" method="post">
            <input type="text" placeholder="Username" name="username" maxlength="50" />
            <input type="password" placeholder="Password" name="password" id="password" maxlength="32" />
            <!-- De stilizat checkboxul-->
            <input type="checkbox" onclick="showPassword()">
            <input  type="submit" class="btn login" value="LogIn" />
        </form>
        <div class="btn-container">
            <div class="btn back" onclick="window.location.href='./index.php'">Back</div>
        </div>
    </div>
</body>

</html>