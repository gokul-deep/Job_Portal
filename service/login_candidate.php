<?php
session_start();
require('../database.php');


$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT id,name,email,password FROM signup_candidate WHERE email = '$email' and password = '$password'";
$result = mysqli_query($connect,$select);
$num = mysqli_num_rows($result);

    if($num==1){
        $data = mysqli_fetch_assoc($result);
        // $name = mysqli_fetch_assoc($result)['name'];
        // $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        // $u_name = $_SESSION['name'];
        echo 1;
    }
    else{
        echo 2;
    }

?>