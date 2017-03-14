<?php

session_start();
include_once ('connection.php');
$datetime  = date('Y-m-d h:i:s');


if($_REQUEST['mode']=='Users')
{
	$userid = $_REQUEST['userid'];
	$sql = "UPDATE pack1 SET status='1'  WHERE userid='$userid' "; //??
	$result = mysqli_query($connection, $sql);
	
	header('Location: viewpackage.php');
	
}
else  if($_REQUEST['mode']=='pack')
{
	$sno = $_REQUEST['sno'];
	$sql = "UPDATE pack1 SET status='1'  WHERE sno='$sno' ";
	$result = mysqli_query($connection, $sql);
	
	header('Location: viewpackage.php');
	
}

mysqli_close($connection)


 

?>