<?php
include 'conn.php';
session_start();
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$re = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($re);

	if ($num) {
		$_SESSION['username'] = $username;
		header('location:nav.php');
	}else{
		header('login.php');
	}
}
?>