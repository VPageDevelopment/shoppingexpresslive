<?php 
session_start();
$currency = '&#8377; '; //Currency Character or code


$shipping_cost      = 0; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 5, 
                            'Service Tax' => 0
                            );						


$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="css/author-style.css">



</head>
<body>
<?php include('include_header.php'); ?>
<div class="sub-banner my-banner2">
</div>
<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			
				
					
							
				<?php
						if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
						{
							echo '<div class="" id="view-cart">';
						
							echo '<form method="post" action="cart_update.php">';
							echo '<table class="table table-striped" >';
							echo '<thead>
									<tr class ="headings">
										<th>Qty</th>
										<th>Products</th>
										<th>Action</th>
									</tr>
								  </thead>';
							echo '<tbody>';

							$total =0;
							$b = 0;
							foreach ($_SESSION["cart_products"] as $cart_itm)
							{
								$product_name = $cart_itm["product_name"];
								$product_qty = $cart_itm["product_qty"];
								$product_price = $cart_itm["product_price"];
								$product_code = $cart_itm["product_code"];
								echo '<tr >';
								echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
								echo '<td>'.$product_name.'</td>';
								echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
								echo '</tr>';
								$subtotal = ($product_price * $product_qty);
								$total = ($total + $subtotal);
							}
							echo '<td colspan="4">';
							echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
							echo '</td>';
							echo '</tbody>';
							echo '</table>';
							
							$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
							echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
							echo '</form>';
							echo '</div>';

						}
?>
			
		</div>
		<div class="col-md-8 col-sm-8 women-dresses">

			<div class="women-set1">
	
				<?php 

					include_once ('admin/connection.php');
					$sql = "select * from pack1 where status=0";
					$query = mysqli_query($connection , $sql);

					while($row = mysqli_fetch_array($query)){

						$packageName = ucfirst($row['productcode']);
						$packageDes = ucfirst($row['description']);
						$packagePrice = ucfirst($row['package']);
						$packageImage = $row['packimage'];
						$packageID = $row['sno'];

				?>

				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">


					<li class="product" style="
    list-style-type: none !important;
">
					<form method="post" action="cart_update.php">
					<div class="product-content"><h3><?php echo $packageName?></h3>
					<div class="product-thumb"><img src="admin/<?php echo $packageImage ?>"></div>
					<div class="product-desc"><?php echo $packageDes?></div>
					<div class="product-info">
					Price <?php echo $currency . " " . $packagePrice; ?>
					
					<fieldset>
					
					
					
					<label>
						<span>Quantity</span>
						<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
					</label>
					
					</fieldset>
					<input type="hidden" name="product_code" value="{$obj->product_code}" />
					<input type="hidden" name="type" value="add" />
					<input type="hidden" name="return_url" value="{$current_url}" />
					<div align="center"><button type="submit" class="add_to_cart">Add</button></div>

					<br>
					</div></div>
					</form>
					</li>
				



				</div>
			
				<?php
					}
				?>
				
				
				
				<div class="clearfix"></div>
			</div>
			
			
		</div>
	</div>
</div>


<?php include('include_footer.php'); ?>

<script>
  
 </script>

	
</body>
</html>
