<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css"> -->
	<title>login...</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
		font-family: sans-serif;
	}
	.form{
		width: 13cm;
		height: 6cm;
		margin: 0 auto;
		position: relative;
		top: 30px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
		height: 0.8cm;
		border: none;
		margin-left: 2px;
	}
	.button:hover{
		background: blue;
	}
</style>
<body>
	<form action="login_check.php" method="POST">
		<div class="form">
		<center>
			<h1>admin login</h1>
			<input type="text"  name="username" placeholder="username" required><br>
			<input type="password" name="password" placeholder="password" required><br>
		<button class="button" type="submit" name="submit"  style="width:10.2cm">login</button>
		</center>
	</div>
	</form>
</body>
</html>