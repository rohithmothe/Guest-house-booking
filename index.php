<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	
	<h1>Your details</h1>

	<br>

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
		color: blue;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: darkgrey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">

	<div style="font-size: 20px;margin: 10px;color: black;">empID</div>
	Hello, <?php echo $user_data['empID']; ?><br><br>

	<div style="font-size: 20px;margin: 10px;color: black;">empName</div>
	<?php echo $user_data['empName']; ?><br><br>

	<div style="font-size: 20px;margin: 10px;color: black;">date of joining</div>
	<?php echo $user_data['DoJ']; ?><br><br>

	<div style="font-size: 20px;margin: 10px;color: black;">salary</div>
	<?php echo $user_data['salary']; ?><br><br>

	<div style="font-size: 20px;margin: 10px;color: black;">department</div>
	<?php echo $user_data['department']; ?><br><br>
	<div style="font-size: 20px;margin: 10px;color: black;">mobilenumber</div>
	<?php echo $user_data['mobileNo']; ?><br><br>
	<div style="font-size: 20px;margin: 10px;color: black;">email</div>
	<?php echo $user_data['email']; ?><br><br>

	<a href="update.php">Click to update</a><br><br>
	<a href="logout.php">Logout</a>

</body>
</html>