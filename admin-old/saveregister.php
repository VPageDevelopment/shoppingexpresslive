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
					echo 	mysqli_num_rows($res);
					echo 'hema';
						$rows = mysqli_fetch_array($res);
						if(mysqli_num_rows($res) == 0) 
						{
							// position 0 == left 
							// insert into tree ...
							echo 'hi';
							echo $que = "insert into tree (userid) values('$usid') ";
							echo $query = mysqli_query($connection,$que );
							echo '<br>';
							
							// update the tree ..
							echo $query_adduser_tree = mysqli_query($connection,"update tree set tleft='$usid' where userid='$referalid' " );
							echo '<br>';

							// insert into tree ...
							//$query = mysqli_query($connection, "insert into income(`userid` , `day_bal`, `current_bal`, `total_bal`) values('$usid', '0' , '0' , '0') ");

							// insert into income-tree ...
							//$query = mysqli_query($connection , "insert into income (`userid` , `dayleftcount`, `dayrightcount`, `dayleft` , `dayright`) values('$usid', '0' , '0' , '', '') ");
							
							// update count ..
								$flag = 1;
								$position=0;

						}
						 
						else if(mysqli_num_rows($res) == 1)
						{ 
					
							$rows = mysqli_fetch_array($res);
							if($rows['position'] == 0)
							{
								echo 'hello';
								// position 1 == right
								// insert into tree ...
									echo $query_insert_into_right_tree = mysqli_query($connection , "insert into tree (`userid` ) values('$usid') ");

								// update the tree ..
									$query_update_right_tree = mysqli_query($connection ,"update tree set `tright`='$usid' where userid='$referalid' " );
								

								// insert into income ...
									//$query = mysqli_query($connection , "insert into income (`userid` , `day_bal`, `current_bal`, `total_bal`) values('$usid', '0' , '0' , '0') ");



								// insert into income-tree ...
								//	$query = mysqli_query($connection , "insert into income (`userid` , `dayleftcount`, `dayrightcount`, `dayleft` , `dayright`) values('$usid', '0' , '0' , '', '') ");
								
								// update count ..
								
										$flag = 1;
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

					/*	echo $sql="INSERT INTO user (name,age,gender,fhname,nominename,nominenumber,address,mobile,alternatenum , email, amount,amountwords, idproof,  pannum,adharnum,bankname,branch,accnum,ifsccode,referalid, referalname,userid, dateofbirth,epin,password,position, status,sponserid,createddate, role) 
						
						VALUES('$name','$age','$gender','$fhname','$nominename','$nominenumber','$address','$mobile','$alternatenum','$email','$amount','$amountwords','$idproof','$pannum','$adharnum','$bankname','$branch','$accnum', '$ifsccode','$referalid','$referalname','$usid',0,0,'$password','$position',2 , '$sponcer','$date', 0)"; */
		 
						if($connection->query($sql)==TRUE)
						{    
							 $id = $row['id'];
							 $query= "UPDATE userid SET value='$value'  WHERE id='$id' ";
							 $result = mysqli_query($connection, $query);  
								//header("location: thankyou.php");
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



	if($flag = 1){

						 $luid=$usid;

					 		mysqli_query($connection , "INSERT INTO reptree(userid,tddate) VALUES('".$luid."','".date("Y-m-d")."')");
							while($luid!=""){
							$res=mysqli_query($connection , "select * from tree where tleft='".$luid."' or tright='".$luid."'");
							$nrow=mysqli_num_rows($res);
							if($nrow<=0) break; 
							$row=mysqli_fetch_array($res);
							$id=$row['id'];
							$pid=$row['userid'];
							$cl=$row['tleft'];
							$cr=$row['tright']; 	
							$trc=$row['tdr'];	
							mysqli_query($connection , "UPDATE tree SET tddate='".date("Y-m-d")."',tdamt=0,tdl=0,tdr=0 WHERE tddate!='".date("Y-m-d")."' and id='".$id."'");
							if($cl==$luid){
								mysqli_query($connection , "UPDATE tree SET tleftcount=tleftcount+1,tdl=tdl+1 WHERE id='".$id."'");	
								mysqli_query($connection , "UPDATE reptree SET tdleft=tdleft+1 WHERE tddate='".date("Y-m-d")."' and userid='".$pid."'");			
							}
							if($cr==$luid){
								mysqli_query($connection , "UPDATE tree SET trightcount=trightcount+1,tdr=tdr+1 WHERE id='".$id."'");
								mysqli_query($connection , "UPDATE reptree SET tdright=tdright+1 WHERE tddate='".date("Y-m-d")."' and userid='".$pid."'");			
							}
							$amtres=mysqli_query($connection , "select * from tree where id='".$id."'");
							$amtrow=mysqli_fetch_array($amtres);
							$tdl=$amtrow['tdl'];
							$tdr=$amtrow['tdr'];
							$tdamt=$amtrow['tdamt'];
							if($tdl>=$tdr & $tdamt<1000 & $tdr!=$trc){
								mysqli_query($connection , "UPDATE tree SET totalamt=totalamt+250,tdamt=tdamt+250 WHERE id='".$id."'");
								mysqli_query($connection , "UPDATE reptree SET tdamt=tdamt+250 WHERE tddate='".date("Y-m-d")."' and userid='".$pid."'");				
							}
							$luid=$pid;
							
					
	}


	
	}
	
	mysqli_close($connection);





		
		
?>