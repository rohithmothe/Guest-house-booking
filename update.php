<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $mobileNo = $_POST['mobileNo'];
        $email = $_POST['email'];
		$id = $_SESSION['empID'];
		$empName = $_POST['empName'];
		$DoJ = $_POST['DoJ'];
		$salary =$_POST['salary'];
		$department=$_POST['department'];
        if(!empty($mobileNo)&& !empty($email))
		{
			$query = "update emp set mobileNo='$mobileNo', email='$email' , empName='$empName',salary='$salary' 
			,DoJ='$DoJ',department ='$department' where empID='$id'";
			mysqli_query($con, $query);
			 echo "valid"; 
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
	<title>Update</title>
</head>
<body>

	<style type="text/css">
	
	#text{

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
		background-color: darkblue;
		border: none;
	}

	#box{

		background-color:grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Update</div>

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

			<input id="button" type="submit" value="update">
			
			
			<a href="login.php">Click to Login</a>
			<a href="register.php">Click to Register</a>
		</form>
	</div>
</body>
</html>