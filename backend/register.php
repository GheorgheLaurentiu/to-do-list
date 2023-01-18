<?php
        include 'config.php';

        if(!isset($_POST['email'],$_POST['username'],$_POST['password'])){
            exit('Please complete the registration form !');
        }

        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
            // One or more values are empty.
            exit('Please complete the registration form');
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            exit('Email is not valid !');
        }
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0){
            exit('Username is not valid');
        }
        if(strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5){
            exit('Password must be between 5 an 20 characters long !');
        }

        function redirectHome(){
            header('Location: index.php');
            exit;
        }
        if(isset($_POST['home-btn'])){
            header('Location: index.php');
            exit;
        }

        if($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')){
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            $stmt->store_result();

                if($stmt->num_rows > 0){
                    echo "Username already exists, please choose another one";

                }else{
                    if($stmt = $con->prepare('INSERT INTO accounts (email,password,username) VALUES (?,?,?)')){
                        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $stmt->bind_param('sss', $_POST['email'], $password, $_POST['username']);
                        $stmt->execute();
                        header('Location: ../login-page.php');
                        exit;
                        // echo '<h1>You have succesfully registered</h2> <h1>Click here to go back to the home page -></h2>';
                        // echo '<a href="./index.html">Home</a>';
                        
                    }else{
                        echo 'Could not prepare statement!';
                    }
                }
            $stmt->close();
        }else{
            echo "Could not prepare statement!";
        }
        $con->close();

    
    ?>