<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE id = '$id'";
$re = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($re);
$id = $row['id'];
$name = $row['name'];
$adress = $row['adress'];
$age = $row['age'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
		*{
		text-transform: capitalize;
		margin: 0;
		padding: 0;
		font-family: sans-serif;
	}
	.form{
		text-align: center;
	}
	input{
		height: 0.8cm;
		width: 10cm;
		margin: 4px;
/*		border-radius: 5px;*/
		border: 1px solid silver;
	}
	.button{
		background:darkblue;
		color: white;
	}
	.button:hover{
		background: blue;
	}
</style>
<body>
	<form action="update_check.php" method="POST">
		<div class="form">
		<h1>student form</h1>
		<input type="text" name="id" hidden value="<?php echo $id; ?>"><br>
		<input type="text" name="name" value="<?php echo $name; ?>"><br>
		<input type="text" name="adress" value="<?php echo $adress; ?>"><br>
		<input type="number" name="age" value="<?php echo $age; ?>"><br>
		<input type="submit" name="submit" value="save" class="button" style="width:10.2cm">
	</div>
	</form>
</body>
</html>