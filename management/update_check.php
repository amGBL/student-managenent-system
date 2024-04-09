<?php
include 'conn.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$age = $_POST['age'];

	$sql = "UPDATE student SET name = '$name',adress='$adress',age = '$age' where id = '$id'";
	$re = mysqli_query($conn,$sql);

	if ($re) {
		header('location:student.php');
		// echo "updated";
	}else{
		// echo"not updated";
	}
}
?>