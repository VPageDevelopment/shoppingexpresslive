<?php

include_once( 'connection.php');


	$package = $_POST['package'];  $title = $_POST['title']; $description = $_POST['description'];$feathures = $_POST['feathures'];    
	

	if(isset($_REQUEST['sno']) && !empty($_REQUEST['sno']))
	{
		$sno = $_REQUEST['sno'];
		if (empty($_FILES['attachment']['tmp_name']))
		{
			if(isset($_REQUEST['attachment_hidden']) && !empty($_REQUEST['attachment_hidden']))
			{
				$location = $_REQUEST['attachment_hidden'];
				$image_name= $_REQUEST['image_name'];
			}
			else
			{
				$location = '';
				$image_name = '';
			}
		}
		else
		{
			$file=$_FILES['attachment']['tmp_name'];
			$attachment= addslashes(file_get_contents($_FILES['attachment']['tmp_name']));
			$image_name= addslashes($_FILES['attachment']['name']);
			$pieces = explode(".", $image_name);
			$date = date('Ymdhis');
			move_uploaded_file($_FILES["attachment"]["tmp_name"],"images/packages/".$pieces[0].'.'.$pieces[1]);
			$location="images/packages/".$pieces[0].'.'.$pieces[1];	
		}
		
	
		echo $sql = "UPDATE pack1 SET package='$package',title='$title',description='$description',feathures='$feathures',packimage='$location',attachmentname='$image_name'  WHERE sno='$sno' ";
		$result = mysqli_query($connection, $sql);	
			header("location: viewpackage.php");	
	}
	else
	{
	
		if(isset($package ) || ($title) )
		{  
			if(isset($package ) || ($title) )
			{    
		
				if (empty($_FILES['attachment']['tmp_name']))
				{
					$location = '';
				}
				else
				{
					$file=$_FILES['attachment']['tmp_name'];
					$attachment= addslashes(file_get_contents($_FILES['attachment']['tmp_name']));
					$image_name= addslashes($_FILES['attachment']['name']);
					$pieces = explode(".", $image_name);
					$date = date('Ymdhis');
					move_uploaded_file($_FILES["attachment"]["tmp_name"],"images/packages/".$pieces[0].'.'.$pieces[1]);
					$location="images/packages/".$pieces[0].'.'.$pieces[1];	
				}
				echo $sql="INSERT INTO pack1(package,title,description,feathures,packimage,attachmentname,status) 
				VALUES('$package','$title','$description','$feathures','$location','$image_name',0)";
			 
				if($connection->query($sql)==TRUE){     //
			 
					//header("location: viewpackage.php");
				}
				else{
			 
					echo "error" .$sql."<br>".$connection->error;
			 
				}
			 
			  }
		}  
		
	}
	
	mysqli_close($connection)
	
	
?>