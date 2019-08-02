<?php 
require 'session_check.php';
require 'cookie_check.php';
require 'db.php';

$id = $_POST['id'];



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";

$phone = $_POST['phone'];

$pass = md5($_POST['pass']);
// $pass = $_POST['pass'];
$upper = preg_match('@[A-Z]@', $pass);
$lower = preg_match('@[a-z]@', $pass);
$number = preg_match('@[0-9]@', $pass);
$spl = preg_match('@[#,$,&,*]@', $pass);


$repass = $_POST['repass'];
$date = $_POST['date'];
$gender = $_POST['gender'];

$check = $_POST['check'];
$multi_check = implode(', ', $check);

$select = $_POST['select'];
$select2 = implode(', ', $select);

$role = $_POST['role'];
$textarea = $_POST['textarea'];




$update = "UPDATE users SET fname='$fname',
							lname='$lname',
							uname='$uname',
							email='$email',
							phone='$phone',
							password='$pass',
							dob='$date',
							gender='$gender',
							skill='$multi_check',
							position='$select2',
							role='$role',
							about='$textarea'
						WHERE id='$id' ";

$update_query = mysqli_query($db, $update);

header('location:users.php');






 ?>