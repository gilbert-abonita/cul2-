<?php
session_start();

include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $num = $_POST['pnum'];
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) 
    {
        $query = "INSERT INTO form (fname, lname, gender, address, pnum, email, pass) VALUES ('$firstname', '$lastname', '$gender', '$address', '$num', '$gmail', '$password')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('Successfully Registered');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error: " . mysqli_error($con) . "');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please Enter Valid Information');</script>";
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
	<div class="signup">
		<form method="POST">
			<label>First Name</label>
			<input type="text" name="fname" required>
			<label>Last Name</label>
			<input type="text" name="lname" required>
			<label>Gender</label>
			<input type="text" name="gender" required>
			<label>Address</label>
			<input type="text" name="address" required>
			<label>Phone Number</label>
			<input type="text" name="pnum" required>
			<label>Email</label>
			<input type="text" name="email" required>
			<label>Password</label>
			<input type="text" name="pass" placeholder="Input password" required >
			<h2><input type="submit" name="" value="Submit"><a/></h2>
		</form>
		<h3>By clicking the Sign Up button, you agree to our <br><a href="terms.php">Terms and Condition</a> and <a href="priv.php">Privacy Policy</a></h3>
		<h3>Already have an account? <a href="login.php">Login here </a> </h3>
	</div>

</body>
</html>