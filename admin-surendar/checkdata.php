<?php

	include('connection.php');

	if(isset($_POST['referalid']))
	{
	 $referalid=$_POST['referalid'];

	 $checkdata=" SELECT * FROM user WHERE referalid='$referalid' ";

	 $query=mysqli_query($connection,$checkdata);

	 if(mysqli_num_rows($query)<=2)
	 {
		 $row=mysqli_fetch_array($query); 
		 echo $ref= $row['referalid'];
	}
	 else
	 {
	  echo "OK";
	 }
	 exit();
	}

	
?>
