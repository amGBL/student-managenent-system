<?php
include'conn.php';
if (isset($_POST['submit'])) {
	$sid = $_POST['sid'];
	$mid = $_POST['mid'];
	$score = $_POST['score'];


	$re = mysqli_query($conn,"INSERT INTO marks VALUES('','$sid','$mid','$score')");
	if ($re) {
		header('location:marks.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>marks page....</title>
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
select{
	width: 10cm;
	height: 0.8cm;
	margin: 2px;
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
	<form action="" method="POST">
		<div class="form">
		<h1>marks form</h1>
		<select name="sid">
			 <?php
			 $sql = "SELECT * FROM student";
      $re = mysqli_query($conn,$sql);
       while ($row = mysqli_fetch_array($re)) {
  ?>
			<option value="<?php echo $row['id'] ?>">
 				<?php echo $row['name']; ?>
		  </option>
		  <?php
		  }
		  ?>
		</select><br>
		<select name="mid">
			 <?php
			 $sql = "SELECT * FROM module";
      $re = mysqli_query($conn,$sql);
     while ($row = mysqli_fetch_array($re)) {

  ?>
			<option value="<?php echo $row['mid'] ?>">
 				<?php echo $row['title']; ?>
		  </option>
		  <?php
		  }
		  ?>
		</select><br>
		<input type="number" name="score" placeholder="enter obtained marks...."><br>
		<input type="submit" name="submit" value="save" class="button" style="width:10.2cm">
	</div>
	</form>
	<div class="display">
		<h1>marks information</h1>
		<table id="myTable">
			<tr>
				<th>student name</th>
				<th>mudule code</th>
				<th>marks</th>
			</tr>
			 <?php
       $sql = "SELECT student.name, module.title, marks.score
FROM student, marks, module
WHERE student.id = marks.sid
AND module.mid = marks.sid";
      $ok=mysqli_query($conn,$sql);
    
     while($row=mysqli_fetch_array($ok)){
        ?>
           <tr class=''>
            <td><?php echo $row['0']; ?></td>
            <td><?php echo $row['1']; ?></td>
            <td><?php echo $row['2']; ?></td>
        
        </tr>
        <?php

     }



?>
		</table>
	</div>
</body>
</html>