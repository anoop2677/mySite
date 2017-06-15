<?php
	include("db.php");
	session_start();
	$em="email_id";
	$check=$_SESSION['login_email'];
	$query="SELECT * FROM fb1 WHERE ".$em." like '%".$check."%'";
	$session=$conn->query($query);
	$row = $session->fetch_assoc();
	$id=$row['id'];
	$fname=$row['f_name'];
	$lname=$row['l_name'];
	$phone=$row['phone_no'];
	$dob=$row['dob'];
	$gender=$row['gender'];					
	$email=$row['email_id'];
	if(!isset($email))
	{
		header("Location:index.php");
	}
?>
