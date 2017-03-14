<?php

session_start();



if(!$_SESSION['loggedin'])
{
	header("location: index.php"); 
}

else
{
	include_once ('header.php');
	include_once ('connection.php');
	
	$username = $_SESSION['SESS_USER_NAME'];
	
	if(isset($_REQUEST['mode'])) 
	{
		$id= $_REQUEST['id'];
		$sql="SELECT * FROM user WHERE id=$id  ";
		$result=mysqli_query($connection,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		$userid= $row['userid'];
		$query="SELECT * FROM epin WHERE userid='$userid'  ";
		$res=mysqli_query($connection,$query);
		$rows=mysqli_fetch_array($res,MYSQLI_ASSOC);		
		
		
	}
}
	
?>

<html>
<head> 
<style>
    .invoice-box{ 
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(4){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:40px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
	
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>
<body>
				<div class="invoice-box" style ="">
					<table cellpadding="0" cellspacing="0">
						<tr class="top">
							<td colspan="4">
								<table>
									<tr>
										<td class="title">
											<img src="http://shoppingexpress.co.in/admin/images/logo.png" style="width:100%; max-width:100px;"> Shopping Express
										</td>
										<td></td>
										<td>
											Invoice No: 1234<br>
											Date: January 1, 2015<br>
									    </td>
									</tr>
								</table>
							</td>
						</tr>
						<tr class="information">
							<td colspan="4">
								<table>
									<tr>
										<td>
											<h4><b>User Details</b></h4>
											Name :<?php echo $row['name'];?><br>
											Address :<?php echo $row['address'];?><br>
											Email :<?php echo $row['email'];?><br>
											Mobile :<?php echo $row['mobile'];?><br>
											
										</td>	
									</tr>
								</table>
							</td>
						</tr>
						<tr class="heading invoice" >
							<td> Products </td>
							<td> Amount </td>
							<td> Quantity </td>
							<td> Price </td>
						</tr>
						<tr class="item">
							<td> <?php echo $rows['title']; ?> </td>
							<td> <?php  echo $package = $rows['package']; ?> </td>
							<td> <?php echo $quantity = mysqli_num_rows($res); ?> </td> 
							<td> Rs..<?php echo $price=$package * $quantity; ?>	</td>
						</tr>
						<tr class="item">
							<td> Service Tax </td>
							<td> </td>
							<td> </td>
							<td> <?php echo $tax = $price*15/100 ;?>  </td>
						</tr>
						<tr class="total">
							<td></td>
							<td></td> 
							<td> </td>
							<td> <b>Total:&nbsp;&nbsp;&nbsp; </b> Rs.<?php echo $price + $tax ;?> </td>
						</tr>
					</table>
										
				</div>
				
			</body>
			</html>