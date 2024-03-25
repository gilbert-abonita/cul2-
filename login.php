<?php
session_start();

include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") 

{
	 $gmail = $_POST['mail'];
    $password = $_POST['pass'];

	if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
	{
		$query = "SELECT email, pass FROM form WHERE email = '$gmail' LIMIT 1";
		$result = mysqli_query($con, $query);

		if($result)
		{
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);

				if($user_data['pass'] == $password)
				{
					header("location: index.php");
					die;

				}

			}
		}
		echo "<script type='text/javascript'>alert('wrong username or password');</script>";
	}
	else{
		echo "<script type='text/javascript'>alert(''wrong username or password');</script>";
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="style.css">


</head>
<body>
	<div class="login">
		<h1>Welcome to Cultoura!</h1>
		<form method="POST">
			
			<label>Email</label>
			<input type="text" name="mail" required>
			<label>Password</label>
			<input type="text" name="pass" placeholder="Input password" required>			<h2><input type="submit" name="" value="Submit"><a/></h2>
		</form>
		<h4>Dont have an account yet?</h4> <h3><br><a href="signup.php"> Sign Up here</a> </h3>

</body>
</html>