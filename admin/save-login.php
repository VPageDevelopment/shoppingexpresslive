<?php 
session_start();
include('connection.php');
	
	$userid = $_POST['uname'];
	$password = $_POST['pass'];
	
	
	echo $d = "SELECT * FROM user WHERE userid = '$userid' AND password = '$password' ";
	$r = mysqli_query ($connection, $d) or trigger_error("Query: $d\n<br />MySQL Error: " . mysqli_error($connection));
	// echo mysqli_num_rows($r);
	if(mysqli_num_rows($r) == 1)  
	{
		echo 'hi';
		$row = mysqli_fetch_array($r);
		
		$_SESSION['loggedin'] = "yes";
		$_SESSION['SESS_USER_ID'] = $row['id'];
		$_SESSION['SESS_ROLE']=$row['role']; 
	    $_SESSION['SESS_USER_NAME']= $row['userid'];
		$_SESSION['SESS_NAME']= $row['name'];
		
		echo $pro = $_POST['proceed'];
		 
		
			$pro = $_POST['proceed'];
			if($pro == true)
				{
					foreach( $cartItems as $key=> $values )
					{

						$user_cart_product_id = $values[product_id];
						$user_cart_product_qty = $values[product_qty];
						$user_cart_product_code = $values[product_code] ;
						$user_cart_product_price = $values[product_price] ;

						echo $product_sql="insert into purchase(userid,ProductID,qty,product_amount, productcode,status ) values('$userid',$user_cart_product_id,$user_cart_product_qty,$user_cart_product_price,'$user_cart_product_code',0);";
						
						
						mysqli_query( $connection , $product_sql);
					}
				} 
			
		header("location: home.php");
		exit;
	} 
	else
	{
		header("location: index.php");
	} 
?>