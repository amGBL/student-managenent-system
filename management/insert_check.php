<?php
include 'conn.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$age = $_POST['age'];

	$sql = "INSERT INTO student VALUES ('','$name','$adress','$age')";
	$re = mysqli_query($conn,$sql);

	if ($re) {
		header('location:student.php');
	}
}

?>