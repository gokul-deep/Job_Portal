<?php

require('../database.php');



$company_name = $_POST['company_name'];
$company_location = $_POST['company_location'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$select = "SELECT * FROM signup_company WHERE email = '$email'";
$result = mysqli_query($connect,$select);
$num = mysqli_num_rows($result);

if($password===$password2){

    if($num>0){
        echo 3;
    }
    else{
        $insert = "INSERT INTO signup_company(company_name,company_location,email,password) VALUES('$company_name','$company_location','$email','$password')";
        mysqli_query($connect,$insert);
        echo 1;
    }

}
else{
    echo 2;
}


?>