<?php 
	session_start();
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


<style>
.cart-view-table-front, .cart-view-table-back {
    max-width: 700px;
    background-color: #FFFFFF;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.12);
    border: 1px solid #E4E4E4;
}
</style>
</head>
<body>
<?php include('include_header.php'); ?>
<div class="sub-banner my-banner2">
</div>
<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Categories</h3>
				 
					<div class="w3ls_dresses_grid_left_grid_sub">
						<div class="ecommerce_dres-type">
							<ul> 
								<li><a href="#">Sarees</a></li>
								<!-- <li><a href="women.html">Dresses</a></li>
								<li><a href="women.html">Shorts & Skirts</a></li>
								<li><a href="women.html">Jeans</a></li>
								<li><a href="women.html">Shirts</a></li>  -->
							</ul>
						</div>
					</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-8 women-dresses">
<?php

echo count($_SESSION["cart_products"]);
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="cart_update_new.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<tbody>';

	$total =0;
	$b = 0;
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		//$product_color = $cart_itm["product_color"];
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		echo '<tr class="'.$bg_color.'">';
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
			<div class="women-set1">
			<?php
			include_once ('admin/connection.php');
$sql = "select * from pack1 where status=0";
					$results = mysqli_query($connection , $sql);
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
	<form method="post" action="cart_update_new.php">
	<a href="#">
						<div class="product-img">
							<img src="admin/{$obj->packimage}"> 
						</div>
					</a>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star gray-star" aria-hidden="true"></i>
	<div class="product-content"><h3>{$obj->productcode}</h3>
	
	<div class="product-info">
	Price {$currency}{$obj->package} 
	
	<fieldset>
	
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->productcode}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Add</button></div>
	</div></div>
	</form>
	</div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
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
<script>
	
			var guestUserCart = [];

			function addToCart(value) {
	alert(value);
				guestUserCart.push(value) ;
				
				

			};
</script>
	
</body>
</html>
