<?php 

include('connection.php');
$dob = date('Y-m-d',strtotime($_REQUEST['dateofbirth'])); 

	$name = $_POST['name'];  $age = $_POST['age']; $gender = $_POST['gender'];$fhname = $_POST['fhname'];   
	$nominename = $_POST['nominename'];    $nominenumber = $_POST['nominenumber']; $address = $_POST['address']; 
	$mobile = $_POST['mobile'];  $email = $_POST['email'];  $alternatenum = $_POST['alternatenum']; $amount = $_POST['amount'];  $amountwords = $_POST['amountwords'];  $idproof = $_POST['idproof'];  $pannum = $_POST['pannum'];  
	$adharnum = $_POST['adharnum'];  $bankname = $_POST['bankname']; $branch = $_POST['branch'];  $accnum = $_POST['accnum'];  $ifsccode = $_POST['ifsccode'];  $referalid = $_POST['referalid'];  $referalname = $_POST['referalname'];
	
	if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
	{
		$id = $_REQUEST['id'];
		
		if($_REQUEST['mode'] == 'approve')
		{
			$sql = "UPDATE user SET status=0  WHERE id='$id' ";
			$result = mysqli_query($connection, $sql);
			

			
			header("location: viewuser.php");
					
		}
		else
		{
		
			$sql = "UPDATE user SET name='$name',dateofbirth='$dob',age='$age',gender='$gender',fhname='$fhname',
			nominename='$nominename',nominenumber='$nominenumber',address='$address',mobile='$mobile',email='$email',alternatenum='$alternatenum',amount='$amount',amountwords='$amountwords',idproof='$idproof',pannum='$pannum',adharnum='$adharnum',bankname='$bankname',branch='$branch',accnum='$accnum',ifsccode='$ifsccode',referalid='$referalid',referalname='referalname'  WHERE id='$id' ";
			$result = mysqli_query($connection, $sql);
			
			header("location: viewuser.php");
		}
		
	}
	else
	{
		if(isset($name) || ($dateofbirth) || ($age) || ($gender) || ($fhname) || ($nominename))
		{  
			if(isset($name) || ($dateofbirth) || ($age) || ($gender) || ($fhname) || ($nominename))
			{    
				$sql="INSERT INTO user(paymentmode,userid,password,name,dateofbirth,age,gender,fhname,nominename,nominenumber,address,mobile,email,alternatenum, amount,amountwords,idproof,pannum,adharnum,bankname,branch,accnum,ifsccode,referalid,referalname,status) 
				VALUES(0,0,0,'$name','$dob','$age','$gender','$fhname','$nominename','$nominenumber','$address','$mobile','$email',        '$alternatenum','$amount','$amountwords','$idproof','$pannum','$adharnum','$bankname','$branch','$accnum',   '$ifsccode','$referalid','$referalname',0)";
			 
				if($connection->query($sql)==TRUE){     //
			 
					header("location: adduser.php");
				}
				else{
			 
					echo "error" .$sql."<br>".$connection->error;
			 
				}
			 
			  }
		} 
		
	}
	
	mysqli_close($connection)
	
	
?>