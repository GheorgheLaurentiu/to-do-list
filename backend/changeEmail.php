<?php
    include "config.php";
    include "sessionCheck.php";

    if(!isset($_POST['email'], $_POST['newEmail'])){
        exit('Please complete the form');
    }
    
    $email = strval($_POST['email']);
    $newEmail = $_POST['newEmail'];
    $id = (int) $_SESSION['id'];
    $username = strval($_SESSION['name']);

    

    $result = $con->query("SELECT * FROM accounts WHERE username='$username' LIMIT 1");
    $fetch = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);

    if($row > 0){
        if($row = $fetch){
            if($row[3] == $username){
                if($row[1] == $email){
                    $sql = "UPDATE accounts SET email='$newEmail' where email='$email'";
                    if($con->query($sql) === TRUE){
                        echo "Record updated succesfully";
                    }else{
                        echo "Error updating: ";
                    }
                }else{
                    echo "Please enter your email address first";
                }
                
            }else{
                echo "Not matching";
            }
        }
           
    }else{
        echo "Not found 404";
    }
    // $row = mysqli_fetch_assoc($result);

    // $query = "SELECT id FROM accounts WHERE ";
    // $result = mysqli_query($con, $query);
    // if($result){
    //     while($finfo = mysqli_fetch_field($result)){
    //         printf("%s (%s)\n", $row['id']);
    //     }
    // }
    
    // if($row == $_SESSION['id']){
    //     $sql = "UPDATE accounts SET email='$newEmail' where email='$email'";
    //     if($con->query($sql) === TRUE){
    //         echo "Record updated succesfully";
    //     }else{
    //         echo "Error updating: ";
    //     }
    // }else{
    //     echo "Please enter a valid email";
    // }

    
    $con->close();
?>
