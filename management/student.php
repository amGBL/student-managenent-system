<?php
include'conn.php';
$sql = "SELECT * FROM student";
$re = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index page....</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
		margin: 0;
		padding: 0;
		font-family: sans-serif;
	}
	body{
		background: whitesmoke;
	}
	ul{
		text-align: center;
	}
	ul a{
		text-decoration: none;
		padding: 70px;
		position: relative;
		top: 15px;
		color: black;
		font-weight: bold;
	}
	.nav{
		/*background-color: white;*/
		height: 50px;
		width: 100%;
		position: relative;
		top: -4px;
/*		background: whitesmoke;*/
	}
	.form{
		text-align: center;
		position: relative;
		top: 30px;
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
	.display{
		text-align: center;
		margin-top: 2cm;
	}
#myTable {
	     margin:0 auto ;
 		 border-collapse: collapse; 
  		 width: 60%;
  		 border: 1px solid #ddd; 
  		 font-size: 15px;

}

#myTable th, #myTable td {
     	text-align: center; 
  		padding: 12px; 
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
}


</style>
<body>
		<div class="nav">
		<ul>
			<a href="nav.php">home</a>
			<a href="student.php">student</a>
			<a href="module.php">module</a>
			<a href="marks.php">marks</a>
			<a href="logout.php">logout</a>
		</ul>

	</div>
	<hr>
	<form action="insert_check.php" method="POST">
		<div class="form">
		<h1>student form</h1>
		<input type="text" name="name" placeholder="enter your names...."><br>
		<input type="text" name="adress" placeholder="enter your adress...."><br>
		<input type="number" name="age" placeholder="enter your ages...."><br>
		<input type="submit" name="submit" value="save" class="button" style="width:10.2cm">
	</div>
	</form>
	<div class="display">
		<h1>student information</h1>
		<table id="myTable">
			<tr>
				<th>id</th>
				<th>names</th>
				<th>adress</th>
				<th>age</th>
				<th>action</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_array($re)) {
			
			?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['adress'] ?></td>
				<td><?php echo $row['age'] ?></td>
				<td>
					<a href="delete.php?id=<?php echo $row['id'] ?>"><button style="background: red; padding:4px;border: 1px solid silver; border-radius: 5px; color:white;">delete</button></a>
					<a href="update.php?id=<?php echo $row['id'] ?>"><button style="background: blue; padding:4px;border: 1px solid silver; border-radius: 5px; color:white;">update</button></a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>