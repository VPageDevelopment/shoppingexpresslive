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
		
		
		$name=$row['name'];
		$address=$row['address'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		
		$userid= $row['userid'];
		$query="SELECT * FROM epin WHERE userid='$userid'  ";
		$res=mysqli_query($connection,$query);
		$rows=mysqli_fetch_array($res,MYSQLI_ASSOC);	
			
		$title=$rows['title']; 
		$package = $rows['package'];
		$quantity = mysqli_num_rows($res);
		$price=$package * $quantity;
		$tax = $price*15/100 ;
		$total = $price + $tax ;
		
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

  <body class="nav-md">
    <div class="container body">   
 
        <!-- page content -->
        <div class="right_col" role="main">
          
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3> Generate Invoice </h3>
						</div>
						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for..."> 
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Generate Invoice</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a href="#"><i class="fa fa-chevron-up"></i></a> 
										</li>
										<li><a href="#"><i class="fa fa-close"></i></a>	
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
								<form action="" method="post">
									<div class="invoice-box">
										<table cellpadding="0" cellspacing="0">
											<tr class="top">
												<td colspan="4">
													<table>
														<tr>
															<td class="title">
																<img src="http://shoppingexpress.co.in/admin/images/logo.png" style="width:100%; max-width:100px;"> Shopping Express
															</td>
																																										<td>
																
																
															</td>
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
												<td>
													Products
												</td>
												<td>
													Amount
												</td>
												<td>
													Quantity
												</td>

												<td>
													Price
												</td>
											</tr>
											
											<tr class="item">
												<td>
													<?php echo $rows['title']; ?>
												</td>
												
												<td>
													<?php  echo $package = $rows['package']; ?>
												</td>
												
												<td>
													<?php echo $quantity = mysqli_num_rows($res); ?>
												</td> 
												
												<td>
												Rs..<?php echo $price=$package * $quantity; ?>	
												</td>
											</tr>
											
											<tr class="item">
												<td>
													Service Tax
												</td>
												<td> </td>
												<td> </td>
												<td>
													<?php echo $tax = $price*15/100 ;?> 
												</td>
											</tr>
											
											
											
											<tr class="total">
												<td></td>
												<td></td>
												<td> </td>
												<td>
												   <b>Total:&nbsp;&nbsp;&nbsp; </b> Rs.
												<?php echo $price + $tax ;?> 
												</td>
											</tr>
										</table>
															
									</div>
									
									
									<br>
										<br> 
									
										<div class="form-group">
										<div class="col-md-6 col-md-offset-3">
                          
											<button id="send"  name="submit" type="submit" class="btn btn-success">Send </button>
										</div>
									  </div>
										<br><br>
								</form>
									
								</div> <!--  X-content -->
							</div>
						</div>
						<br />
						<br />
						<br />
					</div>
				</div>
       
        <!-- /page content --> 
			
		<?php 
		
		 if (isset($_POST['submit'])) 
		 {
			
			
			$to = $row['email'];
								$subject = "Epin Details";
								// Get HTML contents from file
								file_put_contents("bill.php", ' <html><head>
   </head><body> <div class="invoice-box" style="max-width:800px;margin:auto;padding:30px;border:1px solid #eee;box-shadow:0 0 10px rgba(0, 0, 0, .15);font-size:16px;line-height:24px;
        font-family:Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;color:#555;">
		
					<table cellpadding="0" cellspacing="0" style="width:100%;line-height:inherit;
							text-align:left;">
						<tr class="top">
							<td colspan="4" style="padding:5px; vertical-align:top;">
								<table style="width:100%;line-height:inherit;text-align:left;">
									<tr>
										<td class="title" style="padding:5px; vertical-align:top;font-size:30px;line-height:35px;color:#333;">
											<img src="http://shoppingexpress.co.in/admin/images/logo.png" style="width:100%; max-width:100px;"> Shopping Express
										</td>
										<td style="padding:5px; vertical-align:top; padding-bottom:20px;"></td>
										<td style="padding:5px; vertical-align: padding-bottom:20px; top;text-align:right;">
											Invoice No: 1234<br>
											Date: January 1, 2015<br>
									    </td>
									</tr>
								</table>
							</td>
						</tr>
						<tr class="information">
							<td colspan="4" style="padding:5px; vertical-align:top;">
								<table style="width:100%;line-height:inherit;text-align:left;">
									<tr> 
										<td style="padding:5px; vertical-align:top;padding-bottom:40px;">
											<h4><b>User Details</b></h4>
											Name : '.$name.'<br>
											Address :'.$address.' <br>
											Email : '.$email.'<br>
											Mobile :'.$mobile.'<br> 
											
										</td>	
									</tr>
								</table>
							</td>
						</tr>
						<tr class="heading invoice" >
							<td style="background:#eee;border-bottom: 1px solid #ddd;font-weight: bold; padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> Products </td>
							<td style="background:#eee;border-bottom: 1px solid #ddd;font-weight: bold; padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> Amount </td>
							<td style="background:#eee;border-bottom: 1px solid #ddd;font-weight: bold; padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> Quantity </td>
							<td style="background:#eee;border-bottom: 1px solid #ddd;font-weight: bold; padding:5px; vertical-align:top;text-align:right;border-bottom: 1px solid #eee;"> Price </td> 
						</tr>
						<tr class="item">
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;">  '. $title.'</td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> '.$package.'</td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;">  '.$quantity.'</td> 
							<td style="padding:5px; vertical-align:top;text-align:right;border-bottom: 1px solid #eee;"> Rs :'.$price.'</td>
						</tr>
						<tr class="item">
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> Service Tax </td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> </td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> </td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;text-align:right;"> Rs :'.$tax.'</td>
						</tr>
						<tr class="total">
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"></td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"></td> 
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;"> </td>
							<td style="padding:5px; vertical-align:top;border-bottom: 1px solid #eee;text-align:right;"> Totanl : &nbsp;&nbsp;&nbsp; Rs :'.$total.' </td>  
						</tr>
					</table>
										
				</div></body> <html>'); 
								$htmlContent = file_get_contents("bill.php");

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
			
			
			
		 }
		
		?>	
			
			
        
      </div>
	 
	  
	  <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
	  
	  
    </div>

    <!-- jQuery -->
     <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- validator -->
      
    <!-- /validator -->
  </body>
</html>