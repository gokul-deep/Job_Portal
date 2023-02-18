<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_jobs";
$connect = mysqli_connect($host, $username, $password, $database);

if(!$connect) {
    echo "connection failed !!";
}

?>