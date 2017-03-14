<?php

session_start();
include_once ('connection.php');
$datetime  = date('Y-m-d h:i:s');


if($_REQUEST['mode']=='user')
{
	$userid = $_REQUEST['id'];
	echo $sql = "UPDATE user SET status=1  WHERE id='$userid' ";
	$result = mysqli_query($connection, $sql);
	
	header('Location: user.php');
	
}
mysqli_close($connection);


?>