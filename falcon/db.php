<?php 

$host_name 	= 'localhost';
$host_user 	= 'root';
$host_pass 	= '';
$db_name 	= 'falcon';



$db = mysqli_connect($host_name, $host_user, $host_pass, $db_name);
mysqli_errno($db);


 ?>