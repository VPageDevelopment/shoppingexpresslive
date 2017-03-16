<?php 

include('connection.php');
$dob = date('Y-m-d',strtotime($_REQUEST['dateofbirth'])); 

	$name = $_POST['name'];  $age = $_POST['age']; $gender = $_POST['gender'];$fhname = $_POST['fhname'];   
	$nominename = $_POST['nominename'];    $nominenumber = $_POST['nominenumber']; $address = $_POST['address']; 
	$mobile = $_POST['mobile'];  $email = $_POST['email'];  $alternatenum = $_POST['alternatenum']; $amount = $_POST['amount'];  $amountwords = $_POST['amountwords'];  $idproof = $_POST['idproof'];  $pannum = $_POST['pannum'];  
	$adharnum = $_POST['adharnum'];  $bankname = $_POST['bankname']; $branch = $_POST['branch'];  $accnum = $_POST['accnum'];  $ifsccode = $_POST['ifsccode'];  $referalid = $_POST['referalid'];  $referalname = $_POST['referalname'];
	
	
	$id = $_REQUEST['id'];	
	echo $sql = "UPDATE user SET name='$name',dateofbirth='$dob',age='$age',gender='$gender',fhname='$fhname',
	nominename='$nominename',nominenumber='$nominenumber',address='$address',mobile='$mobile',email='$email',alternatenum='$alternatenum',amount='$amount',amountwords='$amountwords',idproof='$idproof',pannum='$pannum',adharnum='$adharnum',bankname='$bankname',branch='$branch',accnum='$accnum',ifsccode='$ifsccode',referalid='$referalid',referalname='referalname'  WHERE id='$id' ";
	$result = mysqli_query($connection, $sql);
			
		header("location: profile.php");
		
	mysqli_close($connection)
	
	
?> 