<?php 
session_start();
include('connection.php');
	
	$userid = $_POST['uname'];
	$password = $_POST['pass'];
	
	
	$d = "SELECT * FROM user WHERE userid = '$userid' AND password = '$password' ";
	$r = mysqli_query ($connection, $d) or trigger_error("Query: $d\n<br />MySQL Error: " . mysqli_error($connection));
	
	if(mysqli_num_rows($r) == 1) 
	{
	
		$row = mysqli_fetch_array($r);
		
		$_SESSION['loggedin'] = "yes";
		$_SESSION['SESS_USER_ID'] = $row['id'];
		$_SESSION['SESS_ROLE']=$row['role'];
	    $_SESSION['SESS_USER_NAME']= $row['userid'];
		
		header("location: home.php");
		exit;
		
	} 
	
	else
	{
		header("location: index.php");
	} 
	

?>