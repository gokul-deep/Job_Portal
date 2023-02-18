<?php
require('../database.php');
session.start();
$company_id=$_SESSION['company_id'];

$job_title = $_POST['job_title'];
$vacancies = $_POST['vacancies'];
$location = $_POST['location'];
$salary = $_POST['salary'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
$description = $_POST['description'];
$company = $_POST['company'];

$sql = "INSERT INTO jobs(company_id,job_title, vacancies, location2, salary, skills, experience, description2, company) VALUES ('$company_id','$job_title','$vacancies','$location','$salary','$skills','$experience','$description','$company')";
$response=mysqli_query($connect, $sql);
return $response;

?>