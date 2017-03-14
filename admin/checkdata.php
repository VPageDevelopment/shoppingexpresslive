<?php
session_start();
include('connection.php');

if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];
 $id=$_POST['user_id'];

 $checkdata=" SELECT * FROM user WHERE password='$name' AND id=$id ";

 $query=mysqli_query($connection,$checkdata);


 if(mysqli_num_rows($query)>0)
 {
   echo "OK";
 }
 else
 {
 
  echo "Old Password is not matching";
 }
 exit(); 
}

?>