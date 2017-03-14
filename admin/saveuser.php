<?php 

include('connection.php');
$dob = date('Y-m-d',strtotime($_REQUEST['dateofbirth'])); 
 
	$name = $_POST['name'];    $age = $_POST['age']; 
	$gender = $_POST['gender'];  $fhname = $_POST['fhname'];   
	$nominename = $_POST['nominename'];    $nominenumber = $_POST['nominenumber']; 
	$address = $_POST['address']; $mobile = $_POST['mobile'];  
	$email = $_POST['email'];  $alternatenum = $_POST['alternatenum']; 
	$amount = $_POST['amount'];  $amountwords = $_POST['amountwords']; 
	$idproof = $_POST['idproof'];  $pannum = $_POST['pannum'];  
	$adharnum = $_POST['adharnum'];  $bankname = $_POST['bankname']; 
	$branch = $_POST['branch'];  $accnum = $_POST['accnum']; 
	$ifsccode = $_POST['ifsccode'];  $referalid = $_POST['referalid']; 
	$referalname = $_POST['referalname']; $city =$_POST['city'];
	$district =$_POST['district']; $state =$_POST['state']; $proofnum =$_POST['proofnum'];
	
	
	if($_REQUEST['mode']== 'edit' || $_REQUEST['mode']== 'approve')
	{
		$id = $_REQUEST['id'];
		
		if($_REQUEST['mode'] == 'approve')  
		{
			$sql = "UPDATE user SET status=0  WHERE id='$id' ";
		 	$result = mysqli_query($connection, $sql);
			
			$sql="SELECT * FROM user WHERE id='$id' ";
			$result=mysqli_query($connection,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
			
			$userid = $row['userid'];
			$password =$row['password']; 
			$email = $row['email'];
			$to = $row['email'];
				$subject = "Account Details";
				// Get HTML contents from file
				 file_put_contents("email_template.php", '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
				<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
				<tbody>
					<tr>
						<td>
							<table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
							<tbody>
								<tr>
									<td>
										<table width="690" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
										<tbody>
											
											<tr>
												<td colspan="3" align="center">
													<table width="630" align="center" border="0" cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td colspan="3" height="60"></td></tr><tr><td width="130px">
															<a><img src="http://www.shoppingexpress.co.in/admin/images/logo.png" height="100px"  width="100px" alt="codexworld" ></a>
															
															</td>
															<td align="center">
																<h1 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:43px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0">Welcome to Shopping Express</h1>
															</td>
															
														</tr>
													   
														<tr> 
														
													</tr>
													<tr><td colspan="3" height="30"></td></tr>
												</tbody>
												</table>
											  </td>
											</tr>
										
										<tr bgcolor="#ffffff">
											<td width="30" bgcolor="#eeeeee"></td>
											<td>
												<table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
												<tbody>
													<tr>
														<td colspan="4" align="center">&nbsp;</td>
													</tr>
													<tr>
														<td colspan="4" align="center"><h2 style="font-size:24px">Epin Details</h2></td>
													</tr>
													<tr>
														<td colspan="4">&nbsp;</td>
													</tr>
													<tr>
														<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/qrfX6RWN.png" alt="tool" width="120" height="120"></td>
														<td width="30"></td>
														<td align="left" valign="middle">
															<h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">User Name</h3>
															<div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
															<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0"> '. 
														$userid
															.'</div>
															<div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
														</td>
														<td width="30"></td>
													</tr>
													<tr>
														<td colspan="5" height="40" style="padding:0;margin:0;font-size:0;line-height:0"></td>
													</tr>
													<tr>
														<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/5zbmOytI.png" alt="no fees" width="120" height="120"></td>
														<td width="30"></td>
														<td align="left" valign="middle">
															<h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Password</h3>
															<div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
															<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">'.$password.'</div>
															<div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
														</td>
														<td width="30"></td>
													</tr>
													<tr>
														<td colspan="5" height="40" style="padding:0;margin:0;font-size:0;line-height:0"></td>
														</tr>
												   
													<tr>
														<td colspan="4">&nbsp;</td>
													</tr>
												</tbody>
												</table>
												<table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
												<tbody>
													<tr>
														<td>
															<h2 style="color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0">&nbsp;</h2>
															<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">Thank You for visiting us</div>
														</td>
													</tr>
													 <tr>
														<td align="center">
															<div style="text-align:center;width:100%;padding:40px 0">
																<table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;padding:0">
																<tbody>
																	<tr>
																		<td align="center" style="margin:0;text-align:center"><a href="http://www.shoppingexpress.co.in/" style="font-size:18px;font-family:HelveticaNeue-Light,Arial,sans-serif;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#00a3df;padding:14px 40px;display:block" target="_blank">Visit Now!</a></td>
																	</tr>
																</tbody>
																</table>
															</div>
														</td>
												  </tr><tr><td>&nbsp;</td>
												  </tr></tbody></table></td>
											<td width="30" bgcolor="#eeeeee"></td>
										</tr>
										</tbody>
										</table>
										<table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
										<tbody>
											<tr>
												<td>
													<table width="630" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
													<tbody>
														<tr><td colspan="2" height="30"></td></tr>
													  <!--  <tr>
															<td width="360" valign="top">
																<div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; Shopping Express</div>
																<div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
																<div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">Made in India</div>
															</td>
															<td align="right" valign="top">
																<span style="line-height:20px;font-size:10px"><a href="https://www.facebook.com/codexworld" target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>&nbsp;</span>
																<span style="line-height:20px;font-size:10px"><a href="https://twitter.com/codexworldblog" target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>&nbsp;</span>
																<span style="line-height:20px;font-size:10px"><a href="https://plus.google.com/+codexworld" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>&nbsp;</span>
															</td>
														</tr> -->
														<tr><td colspan="2" height="5"></td></tr>
													   
													</tbody>
													</table>
												</td>
											</tr>
										</tbody>
										</table>
									</td>
								</tr>
							</tbody>
							</table>
						</td>
					</tr>
				</tbody>
				</table>
			</div>'); 
			
			$htmlContent = file_get_contents("email_template.php");

			// Set content-type for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// Additional headers
			$headers .= 'From: info@shoppingexpress.com' . "\r\n";


			// Send email
			if(mail($to,$subject,$htmlContent,$headers)):
				$successMsg = 'Email has sent successfully.';
			else:
				$errorMsg = 'Some problem occurred, please try again.';
			endif;

			header("location: viewuser.php"); 
					 
		}
		else if($_REQUEST['mode']=='edit')
		{
			echo $sql = "UPDATE user SET name='$name',dateofbirth='$dob',age='$age', gender='$gender',fhname='$fhname',
			nominename='$nominename',nominenumber='$nominenumber',address='$address',city='$city',district='$district',state='$state',mobile='$mobile',email='$email',alternatenum='$alternatenum',amount='$amount',amountwords='$amountwords',idproof='$idproof',proofnum='$proofnum',adharnum=0,bankname='$bankname',branch='$branch',accnum='$accnum',ifsccode='$ifsccode',referalid='$referalid',referalname='referalname'  WHERE id='$id' ";
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