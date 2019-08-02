<?php 
if (!isset($_COOKIE['shamim'])) {
	header('location:login.php');
}else {
	setcookie('shamim', 'dewan', time() + (60*5));
}
 ?>