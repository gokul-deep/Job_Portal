<?php

require('../database.php');


$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT id,company_name,email,password FROM signup_company WHERE email = '$email' and password = '$password'";
$result = mysqli_query($connect,$select);
$num = mysqli_num_rows($result);
// $company_name = mysqli_fetch_assoc($result)['company_name'];

    if($num==1){
        $company_id = mysqli_fetch_assoc($result)['id'];
        $_SESSION['company_id'] = $company_id;
        echo 1;
    }
    else{
        echo 2;
    }
    
    // $_SESSION['company_name'] = $company_name;

?>