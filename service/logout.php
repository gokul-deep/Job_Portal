<?php
require_once('../database.php');
session_start();
unset($_SESSION['company_id']);
session_destroy();
header("Location:../views/index.php");
exit();
?>