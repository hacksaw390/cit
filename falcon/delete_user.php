<?php 
require 'db.php';

$id = $_GET['id'];

	$delete = "DELETE FROM users WHERE id=$id";
	$delete_result = mysqli_query($db, $delete);
	header('location:users.php');


 ?>