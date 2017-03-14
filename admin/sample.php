<?php 


include('connection.php');
 	$dob = date('Y-m-d',strtotime($_POST['dateofbirth'])); 
	$date  = date('Y-m-d');
	
	$name = $_POST['name']; 
	$age = $_POST['age'];
	
	$gender= $_POST['gender']; 
	$fhname = $_POST['fhname'];    
	$nominename = $_POST['nominename']; 
	$nominenumber = $_POST['nominenumber'];
	$address = $_POST['address']; 
	$city = $_POST['city'];
	$district = $_POST['district'];
	$state = $_POST['state'];
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
	//$productcode = $_POST['productcode'];
	$referalid = $_POST['referalid'];  
	$referalname = $_POST['referalname'];

	$capping = 1000; 
	//$leg = $_POST['leg'];  

	$flag=0;
	
	if($_REQUEST['mode'] == 'edit')
	{

		$id = $_REQUEST['id'];
		
		$sql = "UPDATE user SET 
			name='$name',
			dateofbirth='$dob',
			age='$age',
			gender='$gender',
			fhname='$fhname',
			nominename='$nominename',
			nominenumber='$nominenumber',
			address='$address',
			mobile='$mobile',
			email='$email',
			alternatenum='$alternatenum',
			amount='$amount',
			amountwords='$amountwords',
			idproof='$idproof',
			pannum='$pannum',
			adharnum='$adharnum',
			bankname='$IFSC Code',
			branch='$branch',
			accnum='$accnum',
			ifsccode='$ifsccode',
			referalid='$referalid',
			referalname='$referalname' 
			WHERE id='$id' ";
		$result = mysqli_query($connection, $sql);
		
		//header("location: viewuser.php"); 
		
	}
	else
	{
		//echo '<script>alert("hi")</script>';
	
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
				
				$rows = mysqli_fetch_array($res);
				
								
				if(mysqli_num_rows($res) < 2 )
				{
						
					
					if(mysqli_num_rows($res) == 0) 
					{
						
						// position 0 == left  insert into tree ...
						$tree_insert =  "insert into tree (userid,tleft,tright,tleftcount,trightcount,totalamt,tddate,tdamt,tdl,tdr) values('$usid','','',0,0,0,'$date',0,0,0) ";
							$query = mysqli_query($connection,$tree_insert);

						// update the tree ..
						$query_adduser_tree = mysqli_query($connection,"update tree set `tleft`='$usid' where userid='$referalid' " );

						// update count ..
							$flag = 1;
							$position=0;
						 
						if($referalid == 'admin')
						{
							$position='';  
						}
						if($_REQUEST['le'] == 1)
						{ 
							$position = 1;
							
							$query_adduser_tree = mysqli_query($connection,"update tree set tright='$usid',tleft='' where userid='$referalid' " );
								
						}		
					}    
					else if(mysqli_num_rows($res) == 1)
						
					{
						
						$tree_insert =  "insert into tree (userid,tleft,tright,tleftcount,trightcount,totalamt,tddate,tdamt,tdl,tdr) values('$usid','','',0,0,0,'$date',0,0,0) ";
							$query = mysqli_query($connection,$tree_insert);

						// update the tree ..
						
						$flag = 1;
						
						
						if($rows['position'] == 0)
						{
							// position 1 == right insert into tree ...
							$position= 1;	
							
							$query_update_right_tree = mysqli_query($connection ,"update tree set `tright`='$usid' where userid='$referalid' " );
							
						}
						else if($rows['position'] == 1 )
						{
							$position= 0; 
							
							$query_update_right_tree = mysqli_query($connection ,"update tree set tleft='$usid' where userid='$referalid' " );
						 
							
						}
						else if($referalid == 'admin')
							{
								$position='';  
							}
						
							
					} 
						
					if($referalid == 'admin')
					{
						$sql = "SELECT * FROM user WHERE role ='admin' ";
						$result=mysqli_query($connection,$sql);
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						$sponcer = $row['id'];  
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

					$sql="INSERT INTO user (name,age,gender,fhname,nominename,nominenumber,address,city,district,state,mobile,alternatenum , email, amount,amountwords, idproof,  pannum,adharnum,bankname,branch,accnum,ifsccode, referalid, referalname,userid, dateofbirth,epin,password,position,status,sponserid,createddate, role) 
					
					VALUES('$name','$age','$gender','$fhname','$nominename','$nominenumber','$address','$city','$district','$state','$mobile','$alternatenum','$email','$amount','$amountwords','$idproof','$pannum','$adharnum','$bankname','$branch','$accnum',   '$ifsccode','$referalid','$referalname','$usid','$dob',0,'$password','$position',2,'$sponcer','$date', 0)"; 

					if($connection->query($sql)==TRUE) 
					{    
						 $id = $row['id'];
						 $query= "UPDATE userid SET value='$value'  WHERE id=1 ";
						 $result = mysqli_query($connection, $query);  
						// header("location: thankyou.php");   
					} 
					else 
					{ 
						echo "error" .$sql."<br>".$connection->error;
					}
				 
				}
				else if(mysqli_num_rows($res) == 2)
				{
					echo '<script>alert("Invalid Referal id.Kindly Refer another id");</script>';
					// header("location: register.php"); 
				}
			} 
		} 
		
	}
	
	if($flag == 1)
	{
		$luid=$usid;

		$insert_reptree ="INSERT INTO reptree(userid,tddate,tdamt,tdleft,tdright) VALUES('$luid','".date("Y-m-d")."',0,0,0)";
		mysqli_query($connection ,$insert_reptree ); 
		
		
		while($luid != '')
		{
			$que ="select * from tree where tleft='".$luid."' or tright='".$luid."' ";
			$res=mysqli_query($connection ,$que );
			$nrow=mysqli_num_rows($res);
			if($nrow<=0) break; 
			
			$row=mysqli_fetch_array($res);
			$id=$row['treeid'];
			$pid=$row['userid'];
			$cl=$row['tleft'];
			$tlc=$row['tdl'];
			$cr=$row['tright']; 	
			$trc=$row['tdr'];	 
			
			mysqli_query($connection ,"UPDATE tree SET tddate='$date',tdamt=0,tdl=0,tdr=0 WHERE tddate!='".date("Y-m-d")."' and treeid='".$id."'" );
			if($cl==$luid){
					
				mysqli_query($connection , "UPDATE tree SET tleftcount=tleftcount+1,tdl=tdl+1 WHERE treeid='".$id."'");	
				mysqli_query($connection , "UPDATE reptree SET tdleft=tdleft+1 WHERE  userid='".$pid."'");	

			}
			if($cr==$luid)
			{
				mysqli_query($connection , "UPDATE tree SET trightcount=trightcount+1,tdr=tdr+1 WHERE treeid='".$id."'");
				mysqli_query($connection , "UPDATE reptree SET tdright=tdright+1 WHERE userid='".$pid."'");	
				
			}  
			  
			$amtt= "select * from tree where treeid='".$id."' ";
			$amtres=mysqli_query($connection , $amtt);
			$amtrow=mysqli_fetch_array($amtres);
			
			$tdl=$amtrow['tdl'];
			$tdr=$amtrow['tdr']; 
			$tdamt=$amtrow['tdamt'];
			
			if($tdl>=$tdr & $tdamt<1000 & $tdr!=$trc)
			//if(($tdl>=$tdr)  && ($tdamt<1000) && ($tdr!=$trc) )	
			{
				echo '<br><br>';
				mysqli_query($connection , "UPDATE tree SET totalamt=totalamt+250,tdamt=tdamt+250 WHERE treeid='".$id."'");
				echo $aa="UPDATE reptree SET tdamt=tdamt+250 WHERE  userid='".$pid."'";
				mysqli_query($connection ,$aa);				
			} 
			else if($tdr>=$tdl & $tdamt<1000 & $tdl!=$tlc)
			
			{
				echo '<br><br>';
				mysqli_query($connection , "UPDATE tree SET totalamt=totalamt+250,tdamt=tdamt+250 WHERE treeid='".$id."'");
				echo $aa="UPDATE reptree SET tdamt=tdamt+250 WHERE  userid='".$pid."'";
				mysqli_query($connection ,$aa);				
			} 
			
			$luid=$pid;
		}
	}
	
	mysqli_close($connection);
		
?>