<?php 
session_start();
require 'db.php';

$log_email = $_POST['email'];
$log_pass = $_POST['pass'];

$log_select = "SELECT COUNT(*) as shamim FROM users WHERE email='$log_email' and password='$log_pass' ";
$log_select_query = mysqli_query($db, $log_select);
$log_assoc = mysqli_fetch_assoc($log_select_query);

if ($log_assoc['shamim']==1) {
	$_SESSION['log_msg'] = 'Login First';
	setcookie('shamim', 'dewan', time() + 20);
	header('location:users.php');
}else {
	$_SESSION['log_err_msg'] = 'Your Eamil or Password not match'; 
	header('location:login.php');
}

 ?>