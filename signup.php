<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$empID = $_POST['empID'];
		$empName = $_POST['empName'];
		$passwd = $_POST['passwd'];
		$DoJ = $_POST['DoJ'];
		$salary =$_POST['salary'];
		$department=$_POST['department'];
		$mobileNo=$_POST['mobileNo'];
		$email=$_POST['email'];

		if(!empty($empName) && !empty($passwd) )
		{

			//save to database
			
			$query = "insert into emp (empID,passwd,empName,DoJ,salary,department,mobileNo,email)
			 values ('$empID','$passwd','$empName','$DoJ','$salary','$department','$mobileNo','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		padding: 10px;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<div style="font-size: 20px;margin: 10px;color: white;">empID</div>
			<input id="text" type="text" name="empID"><br><br>
			
			<div style="font-size: 20px;margin: 10px;color: white;">password</div>
			<input id="text" type="password" name="passwd"><br><br>

			<div style="font-size: 20px;margin: 10px;color: white;">empName</div>
			<input id="text" type="text" name="empName"><br><br>

			<div style="font-size: 20px;margin: 10px;color: white;">date of joining</div>
			<input id="text" type="text" name="DoJ"><br><br>

			<div style="font-size: 20px;margin: 10px;color: white;">salary</div>
			<input id="text" type="text" name="salary"><br><br>

			<div style="font-size: 20px;margin: 10px;color: white;">mobileNo</div>
			<input id="text" type="text" name="mobileNo"><br><br>

			<div style="font-size: 20px;margin: 10px;color: white;">department</div>
			<input id="text" type="text" name="department"><br><br>

			<div style="font-size: 20px;margin: 10px;color: white;">email</div>
			<input id = "text" type="text" name="email"><br><br>

			<input id="button" type="submit" value="signup"><br><br>

			<a href="login.php">Click to login</a><br><br>
		</form>
	</div>
</body>
</html>