<?php 


include('connection.php');
// $dob = date('Y-m-d',strtotime($_REQUEST['dateofbirth'])); 
$date  = date('Y-m-d');
	
	$name = $_POST['name']; 
	$age = $_POST['age'];
	$gender= $_POST['gender']; 
	$fhname = $_POST['fhname'];    
	$nominename = $_POST['nominename']; 
	$nominenumber = $_POST['nominenumber'];
	$address = $_POST['address']; 
	$mobile = $_POST['mobile'];
	$alternatenum = $_POST['alternatenum']; 
	$email = $_POST['email'];  
	$amount = $_POST['amount']; 
	$amountwords = $_POST['amountwords'];  
	$idproof = $_POST['idproof']; 
	$pannum = $_POST['pannum'];  
	$adharnum = $_POST['adharnum']; 
	$bankname = $_POST['bankname']; 
	$branch = $_POST['branch'];  
	$accnum = $_POST['accnum'];  
	$ifsccode = $_POST['ifsccode']; 
	$referalid = $_POST['referalid'];  
	$referalname = $_POST['referalname'];


	$capping = 1000;
	//$leg = $_POST['leg']; 


	$flag=0;

	

	if($name!='' && $age!='' && $gender!='' && $fhname!='' && $nominename!='' && $nominenumber!='' && $address!='' && $mobile!='' && $alternatenum!='' && $email!='' && $amount!='' && $amountwords!='' && $idproof!='' &&  $pannum!='' &&  $adharnum!='' && $bankname!='' && $branch!='' && $accnum!='' && $ifsccode!='' && $referalid!='' && $referalname!=''){

		
	}else{
		echo '<script>alert("Please fill all the filled.")</script>';
	}

	
	
	if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
	{
		$id = $_REQUEST['id'];
		
		$sql = "UPDATE user SET name='$name',dateofbirth='$dob',age='$age',gender='$gender',fhname='$fhname',
		nominename='$nominename',nominenumber='$nominenumber',address='$address',mobile='$mobile',email='$email',alternatenum='$alternatenum',amount='$amount',amountwords='$amountwords',idproof='$idproof',pannum='$pannum',adharnum='$adharnum',bankname='$IFSC Code',branch='$branch',accnum='$accnum',ifsccode='$ifsccode',referalid='$referalid',referalname='referalname'  WHERE id='$id' ";
		$result = mysqli_query($connection, $sql);
		
		header("location: viewuser.php"); 
		
	}
	else
	{
		
	
		if(isset($name) || ($gender) || ($fhname) || ($nominename)|| ($address)|| ($email) )
		{  
			
			if(isset($name) || ($gender) || ($fhname) || ($nominename)|| ($address)|| ($email))
			{    
		
				$refer = $_POST['referalid'];

			    $que="SELECT * FROM user WHERE userid ='$refer' ";
				$resul=mysqli_query($connection,$que);
				$Rows = mysqli_fetch_array($resul);
				$sponcer = $Rows['id'];
	 	
				$sql="SELECT * FROM userid ORDER BY id DESC LIMIT 1 ";
				$result=mysqli_query($connection,$sql);
				$row=mysqli_fetch_array($result); 
				
				$prefix =$row['prefix'];
				$value =$row['value'];
				
				$value= $value + 1;
				$usid = $prefix .$value; 
				
				$query="SELECT * FROM user WHERE referalid='$refer' ";
				$res=mysqli_query($connection,$query);
				mysqli_num_rows($res);
				
				if(mysqli_num_rows($res) < 2 )
				{
						
					
						$rows = mysqli_fetch_array($res);
						if(mysqli_num_rows($res) == 0) 
						{
							// position 0 == left 
							// insert into tree ...

							$query = mysqli_query($connection , "insert into tree (`userid`) values('$usid') ");

							// update the tree ..

							$sql_for_update_tree = "update tree set `left`='$usid' where userid='$referalid' ";

							$query_for_update_tree = mysqli_query($connection ,$sql_for_update_tree );

							// update count ..

							$sql_update_count = "select * from tree where userid='$referalid'";
							$query_update_count = mysqli_query($connection , $sql);
							$row_update_count = mysqli_fetch_array($query);

							$prevcount = $row_update_count['leftcount'];

							$currentcount =  $prevcount + 1;

							// query for update  the count ....

							$sql_update_left_count = "update tree set `leftcount`='$currentcount' where userid='$referalid' ";
							$query_update_left_count = mysqli_query($connection , $sql_update_left_count);

							$result_update_left_count  = mysqli_fetch_array($query_update_left_count);


								//update root count ... 




							// insert for income 
							$initial_day_bal = 0;
							$initial_current_bal = 0;
							$initial_total_bal = 0;
							$sql_insert_income = "insert into income (`userid` , `day_bal` , `current_bal` ,`total_bal`) values('$usid', '$initial_day_bal','$initial_current_bal','$initial_total_bal')";
							$query_insert_icome = mysqli_query($connection , $sql_insert_income);

							// update the root count ...

								
								

							$position=0;

							
						}
						 
						else if(mysqli_num_rows($res) == 1)
						{
							$rows = mysqli_fetch_array($res);
							if($rows['position'] == 0)
							{

								// position 1 == right
								// insert into tree ...

									$sql_insert_into_right_tree = "insert into tree (`userid` ) values('$usid') " ;

									$query_insert_into_right_tree = mysqli_query($connection , $sql_insert_into_right_tree);

								// update the tree ..

									$sql_update_right_tree = "update tree set `right`='$usid' where userid='$referalid' ";
									$query_update_right_tree = mysqli_query($connection ,$sql_update_right_tree );


									// select the tree table

									$sql_update_right_count = "select * from tree where userid='$referalid'";
									$query_update_right_count = mysqli_query($connection , $sql);
									$row_update_right_count = mysqli_fetch_array($query);
									$prevcount = $row_update_right_count['rightcount'];

									$currentcount =  $prevcount + 1;

								// query for update  the count ....

									$sql_up_right_count = "update tree set `rightcount`='$currentcount' where userid='$referalid' ";
									$query_up_right_count = mysqli_query($connection , $sql_up_right_count);

								
								// insert the income table ... 
							
									$initial_day_bal = 0;
									$initial_current_bal = 0;
									$initial_total_bal = 0;
									$sql_insert_right_user_income = "insert into income (`userid` , `day_bal` , `current_bal` ,`total_bal`) values('$usid', '$initial_day_bal','$initial_current_bal','$initial_total_bal')";
									$query_insert_right_user_income = mysqli_query($connection , $sql_insert_right_user_income);



								// update the root user income ...

									$sql_up_root_user_income = "select * from income userid='$referalid'";
									$query_up_root_user_income = mysqli_query($connection , $sql_up_root_user_income);
									$row_up_root_user_income = mysqli_fetch_array($query);

								// increment the income values ...
									$update_day_bal = $row_up_root_user_income['day_bal'] + 250;
									$update_current_bal = $row_up_root_user_income['current_bal'] + 250;
									$update_total_bal = $row_up_root_user_income['total_bal'] + 250 ;

									$sql_update_root_user_income = "update income set `day_bal`='$update_day_bal' , `current_bal`='$update_current_bal' , `total_bal` = '$update_total_bal'  where userid='$referalid'";



									$query_update_root_user_income = mysqli_query($connection , $sql_update_root_user_income);
									$position= 1;


								
							}
							else
							{
								
								$position= 0;
							}
							
							
						}

						 function passGen($len,$set = "")

						 {   
							$gen = "";
							for($i=0;$i<$len;$i++)
							 {
								$set=str_shuffle($set);
								$gen.=$set[0];
							 }
							 return $gen;
						 }
						 $password = passGen(8,'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&');
						 $password.'<br>';

						$sql="INSERT INTO user (name,age,gender,fhname,nominename,nominenumber,address,mobile,alternatenum , email, amount,amountwords, idproof,  pannum,adharnum,bankname,branch,accnum,ifsccode,referalid, referalname,userid, dateofbirth,paymentmode,password,position, status,sponserid,createddate) 
						
						VALUES('$name','$age','$gender','$fhname','$nominename','$nominenumber','$address','$mobile','$alternatenum','$email','$amount','$amountwords','$idproof','$pannum','$adharnum','$bankname','$branch','$accnum',   '$ifsccode','$referalid','$referalname','$usid',0,0,'$password','$position',2,'$sponcer','$date')";

						

			 
						if($connection->query($sql)==TRUE)
						{    
							 $id = $row['id'];
							 $query= "UPDATE userid SET value='$value'  WHERE id='$id' ";
							 $result = mysqli_query($connection, $query);  
							 header("location: thankyou.php");
						} 
						else
						{
							echo "error" .$sql."<br>".$connection->error;
						}
					 
				}
				else if(mysqli_num_rows($res) == 2)
				{
					echo 'Invalid Referl id. Kindly try some other id';
				}
				
				
			 
			  }
		} 
		
	}
	
	mysqli_close($connection);




	
	
	// // find the referalid ... 
	// 	function getReferalID($userid){
	// 		global $connection;

	// 		$sql = "select * from user where referalid = '$userid'";
	// 		$query = mysqli_query($connection , $sql);
	// 		$result = mysqli_fetch_array($query);

	// 		return $result['referalid'];
	// 	}

		
		
?>