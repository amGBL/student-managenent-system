<?php
include 'conn.php';

if (isset($_POST['submit'])) {
	$code = $_POST['code'];
	$title = $_POST['title'];

	$sql = "INSERT INTO module VALUES ('','$code','$title')";
	$re = mysqli_query($conn,$sql);

	if ($re) {
		header('location:module.php');
	}
}

?>