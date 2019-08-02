<?php 

session_start();

require 'db.php';

	

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";

$phone = $_POST['phone'];

// $pass = md5($_POST['pass']);
$pass = md5($_POST['pass']);
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
$area = $_POST['area'];



$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['uname']=$uname;
$_SESSION['email']=$email;
$_SESSION['phone']=$phone;
$_SESSION['date']=$date;
$_SESSION['gender']=$gender;
$_SESSION['check']=$check;
$_SESSION['select']=$select;
$_SESSION['role']=$role;
$_SESSION['area']=$area;






	if (empty($fname)) {
		$err_mss = 'First Name Empty';
		header('location:register.php?$fname_err='.$err_mss);
	}
	elseif (empty($lname)) {
		$err_mss = 'Last Name Empty';
		header('location:register.php?$lname_err='.$err_mss);
	}
	elseif (empty($uname)) {
		$err_mss = 'User Name Empty';
		header('location:register.php?$uname_err='.$err_mss);
	}
	elseif (empty($email)) {
		$err_mss = 'Email Empty';
		header('location:register.php?$email_err='.$err_mss);
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$err_mss = 'Email format not match';
		header('location:register.php?$email_err='.$err_mss);
	}
	// elseif (!preg_match($pattern, $email)) {
	// 	$err_mss = 'Email format not match';
	// 	header('location:register.php?$email_err='.$err_mss);
	// }
	elseif (empty($phone)) {
		$err_mss = 'Phone Empty';
		header('location:register.php?$phone_err='.$err_mss);
	}
	elseif (empty($pass)) {
		$err_mss = 'Password Empty';
		header('location:register.php?$pass_err='.$err_mss);
	}
	// elseif (empty($upper)) {
	// 	$err_mss = 'Require is upper case, Lower case, Number min 8 character';
	// 	header('location:register.php?$pass_err='.$err_mss);
	// }
	// elseif (empty($lower)) {
	// 	$err_mss = 'Require is upper case, Lower case, Number min 8 character';
	// 	header('location:register.php?$pass_err='.$err_mss);
	// }
	// elseif (empty($number)) {
	// 	$err_mss = 'Require is upper case, Lower case, Number min 8 character';
	// 	header('location:register.php?$pass_err='.$err_mss);
	// }
	// elseif (strlen($pass) < 8) {
	// 	$err_mss = 'Require is upper case, Lower case, Number min 8 character';
	// 	header('location:register.php?$pass_err='.$err_mss);
	// }
	// elseif (empty($spl)) {
	// 	$err_mss = 'You have missed <b>special character like #, $, &,*</b>';
	// 	header('location:register.php?$pass_err='.$err_mss);
	// }
	// elseif ($pass != $repass) {
	// 	$err_mss = 'Re-password not match';
	// 	header('location:register.php?$repass_err='.$err_mss);
	// }
	elseif (empty($date)) {
		$err_mss = 'Date Empty';
		header('location:register.php?$date_err='.$err_mss);
	}
	elseif (empty($gender)) {
		$err_mss = 'Gender Empty';
		header('location:register.php?$gender_err='.$err_mss);
	}
	elseif (empty($check)) {
		$err_mss = 'Check Empty';
		header('location:register.php?$check_err='.$err_mss);
	}
	elseif (empty($select2)) {
		$err_mss = 'Select Empty';
		header('location:register.php?$select_err='.$err_mss);
	}
	elseif (empty($role)) {
		$err_mss = 'Role Empty';
		header('location:register.php?$role_err='.$err_mss);
	}
	elseif (strlen($area) >= 50) {
		$err_mss = 'Only 50 character wirte';
		header('location:register.php?$area_err='.$err_mss);
	}
	else{

		$log_select = "SELECT COUNT(*) as shamim FROM users WHERE email='$email'";
		$log_select_query = mysqli_query($db, $log_select);
		$log_assoc = mysqli_fetch_assoc($log_select_query);

		if ($log_assoc['shamim']==1) {
			
			$_SESSION['email_msg'] = 'Email Already exist';
			header('location:register.php');

		}
		else {
			$insert = "INSERT INTO users (fname, lname , uname, email, phone, password, dob, gender, skill, position, role, about) 
				VALUES('$fname','$lname','$uname','$email','$phone','$pass','$date','$gender','$multi_check','$select2','$role','$area')";

			$result = mysqli_query($db, $insert);


			$_SESSION['success'] = 'Registation Successfull';
			header('location:register.php');
		}
		
	}






	
	

	// unset($_SESSION['fname']);
	// unset($_SESSION['lname']);
	// unset($_SESSION['uname']);
	// unset($_SESSION['email']);
	// unset($_SESSION['phone']);
	// unset($_SESSION['date']);
	// unset($_SESSION['gender']);
	// unset($_SESSION['check']);
	// unset($_SESSION['select']);
	// unset($_SESSION['role']);
	// unset($_SESSION['area']);






 ?>
