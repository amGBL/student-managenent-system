<?php
include 'conn.php';
$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id = '$id'";
$re  = mysqli_query($conn,$sql);

if ($re) {
	header('location:student.php');
}
?>