<?php

include "config.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM usertable WHERE email = '$email' ");

    if(mysqli_num_rows($result) > 0){
        foreach($result as $q){
            if(!password_verify($password, $q['password'])){
                header("location:login.php");
            }
            else {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $q['name'];

                header("location:home.php");
            }
        }
    }
    else{
        header("location:login.php");
    }

}

?>