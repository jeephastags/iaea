<?php 
session_start();
$_SESSION['page'] = $_GET['page'];
// print_r($_GET['page']);
header("Location: admin/home.php");
?>