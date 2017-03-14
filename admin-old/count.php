<!DOCTYPE html>
<html lang="en">

<?php

define('DB_NAME', 'new-mlm');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) 
{
    die("Database connection failed: " . mysqli_error()); 
}
	
	
/*	
$res=mysql_query("select count(*) as totalcount from user where referalid='SE011032'");
while($data=mysql_fetch_assoc($res)){
//echo "data";
echo $data['totalcount'];
}
//$row=mysql_fetch_row($res);
//echo $row;

//print_r($row);*/
 $luid="SE011004";
 
 while($luid!=""){
 
 $sql="SELECT * FROM treeone WHERE tleft='$luid' or tright='$luid' ";
 $res=mysqli_query($connection ,$sql);
 $nrow=mysqli_num_rows($res);
 if($nrow<=0) break;

 
 $row=mysqli_fetch_array($res);
 echo $id=$row['id'];
  echo $pid=$row['userid'];
   echo $cl=$row['tleft'];
    echo $cr=$row['tright'];
	
	if($cl==$luid){
		mysqli_query($connection , "UPDATE treeone SET tleftcount=tleftcount+1 WHERE id='".$id."'");
		$l='T'; $r='F';
	}
	if($cr==$luid){
		echo mysqli_query($connection , "UPDATE treeone SET trightcount=trightcount+1 WHERE id='".$id."'");
		$r='T'; $l='F';
	}
	
	
echo 	$luid=$pid;


 }
	



?>
</body>
</html> 