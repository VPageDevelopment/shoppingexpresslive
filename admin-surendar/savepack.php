<?php

include_once( 'connection.php');


	$package = $_POST['package'];  $title = $_POST['title']; $description = $_POST['description'];$feathures = $_POST['feathures'];    
	

	if(isset($_REQUEST['sno']) && !empty($_REQUEST['sno']))
	{
		$sno = $_REQUEST['sno'];
	
		echo $sql = "UPDATE pack1 SET package='$package',title='$title',description='$description',feathures='$feathures'  WHERE sno='$sno' ";
		$result = mysqli_query($connection, $sql);	
			header("location: viewpackage.php");	
	}
	else
	{
	
		if(isset($package ) || ($title) )
		{  
			if(isset($package ) || ($title) )
			{    
				$sql="INSERT INTO pack1(package,title,description,feathures,status) 
				VALUES('$package','$title','$description','$feathures',0)";
			 
				if($connection->query($sql)==TRUE){     //
			 
					header("location: viewpackage.php");
				}
				else{
			 
					echo "error" .$sql."<br>".$connection->error;
			 
				}
			 
			  }
		}  
		
	}
	
	mysqli_close($connection)
	
	
?>