<?php

require('../database.php');


$name = $_POST['name'];
$location = $_POST['location'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$select = "SELECT * FROM signup_candidate WHERE email = '$email'";
$result = mysqli_query($connect,$select);
$num = mysqli_num_rows($result);

if($password===$password2){

    if($num>0){
        echo 3;
    }
    else{
        $insert = "INSERT INTO signup_candidate(name,location,email,password) VALUES('$name','$location','$email','$password')";
        mysqli_query($connect,$insert);
        echo 1;
    }

}
else{
    echo 2;
}


?>