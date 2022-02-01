<?php
include "config.php";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $university = $_POST['university'];
    $team = $_POST['team'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO usertable(name, university, team, email, phone, password) 
                values('$name','$university','$team','$email','$phone','$password') ");
    
    header("location:login.php");
}

?>