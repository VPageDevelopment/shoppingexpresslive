<?php

session_start();
include_once ('connection.php');
$datetime  = date('Y-m-d h:i:s');


if($_REQUEST['mode']=='Users')
{
	$userid = $_REQUEST['userid'];
	$sql = "UPDATE user SET status='1'  WHERE userid='$userid' ";
	$result = mysqli_query($connection, $sql);
	
	header('Location: viewuser.php');
	
}
mysqli_close($connection);


?>