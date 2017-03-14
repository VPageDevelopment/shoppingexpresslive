<?php 
session_start();
include('connection.php');
	
	$conpass = $_POST['conpass'];
	$id=$_POST['id'];
	
	$sql = "UPDATE user SET password = '$conpass' WHERE id=$id ";
		$result = mysqli_query($connection, $sql);	
	 header("location: home.php"); 
	
	if(isset($_REQUEST['mode'])== 'lost')
	{
		echo $id = $_REQUEST['id'];
		echo $sql = "UPDATE user SET password = '$conpass' WHERE id=$id ";
		$result = mysqli_query($connection, $sql);
		 // header("location: index.php"); 		
	  
	}
	 
?> 