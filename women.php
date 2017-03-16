<?php 
	session_start();

	$currency = "Rs.";
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



<script src="js/jquery.zoom.min.js"></script>

	<script>
		$(document).ready(function(){
			$('.zoom').zoom();
		});
	</script>
	
	

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


.product-img{padding:0 !important}
</style>
</head>
<body>
<?php include('include_header.php'); ?>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li ><a href="index.php" class="hyper "><span>Home</span></a></li>	
						
						<li class="active"><a href="women.php" class="hyper"><span>Products</span></a></li>
						<li><a href="about.php" class="hyper"><span>About us</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
						<li><a href="admin/index.php" class="hyper"><span>Login</span></a></li>
						<li><a href="admin/register.php" class="hyper"><span>register</span></a></li>
						
						
					</ul>
				</div>
			</nav>
		</div>
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<div class="col-md-4 search-agileinfo">
			<!--<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>-->
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<!--<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  -->
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="sub-banner my-banner2">
</div>
<div class="content">
	<div class="container">
		
		<div id="cont sidebar-menu"  class="col-md-4 w3ls_dresses_grid_left">

			<div class="left-section" >
				<a  href="view_cart.php" class="btn add-to-cart btn-block" style="color:white; border-radius: 0;"><i class="fa fa-shopping-cart  fa-lg"> Cart <?php echo count($_SESSION["cart_products"])?></i></a>
			</div>
			<div class="cart-update-panel">
				<?php

						//echo count($_SESSION["cart_products"]);
						if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
						{
							echo '<div class="cart-view-table-front " id="view-cart">';
							echo '<h3>Your Shopping Cart</h3> <br>';
							echo '<form method="post" action="cart_update_new.php">';
							echo '<table >';
							echo '<tbody> <tr class="cart-item">';

							$total =0;
							$b = 0;
							foreach ($_SESSION["cart_products"] as $cart_itm)
							{
								$product_name = $cart_itm["product_name"];
								$product_qty = $cart_itm["product_qty"];
								$product_price = $cart_itm["product_price"];
								$product_code = $cart_itm["product_code"];
								$product_id = $cart_itm["product_id"];
							
								echo '<td  id="'.$product_code .'">
								
										
										<a href="javascript:void(0)" class="btn " onclick="minusOneItem(this.parentNode.id)" >
										<i class="fa fa-minus fa item-modifier"></i>	</a>
										<input  type="text" class="item-display"	size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'"  readonly/>
										<a  href="javascript:void(0)" class="btn" onclick="addOneItem(this.parentNode.id) ;"	 >
										<i class="fa fa-plus fa item-modifier"></i>	</a>
										
										
		
									</td>';
								echo '<td>'.$product_name.'</td>';
								
								echo '<td> <input type="hidden" name="package_id" value="'.$product_id.'" /> </td>';
								echo '<td><input type="hidden" name="remove_code[]" id="removecart" value=""  /> <input type="button" class="btn btn-danger  checkout removeproduct" value="Remove" id="'.$product_code.'"/></td>';
								echo '</tr> ';
								$subtotal = ($product_price * $product_qty);
								$total = ($total + $subtotal);
							}
							echo '<td colspan="4">';
							echo '
									 <a href="view_cart.php" class="button btn btn-primary add-to-cart">
										<i class="fa fa-truck  fa-lg"></i> 
										Checkout
									</a>
									<button type="submit" class=" btn btn-primary  update hide">
										<i class="fa fa-wrench  fa-lg "></i>
										 Update
									</button>';
							echo '</td>';
							echo '</tr></tbody>';
							echo '</table>';
							
							$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
							echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
							echo '</form>';
							echo '</div>';

						}
						?>
					</div>
		</div>
		<div class="col-md-8 col-sm-8 women-dresses">

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
						<div class="product-img zoom">
							<img src="admin/{$obj->packimage}"  width="555" height="260"> 
						</div>
					</a>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star yellow-star" aria-hidden="true"></i>
	<i class="fa fa-star gray-star" aria-hidden="true"></i>
	<div class="product-content"><h5>{$obj->productcode}</h5>
	
	<div class="product-info">
	Price {$currency}{$obj->package} 
	
	<fieldset>
	
	 <label>

		<input type="hidden" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	</fieldset>
	
	
	<fieldset>
	
	 <label>

		<input type="hidden" size="2" maxlength="2" name="product_id" value="{$obj->ProductID}" />
	</label>
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->productcode}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart btn btn-primary add-to-cart"><i class="fa fa-cart-plus  fa-lg"></i> Add Cart </button></div>
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
$(document).ready(function() {
	  $('.removeproduct').on('click', function() {
		 //alert(this.id);
		 $('#removecart').val(this.id);
		 $(".update").trigger("click");
		  });
		
	  });


	function minusOneItem(parentID){

				var actual = $('input[name="product_qty['+parentID+']"]').val();

				if( actual > 1 )  {						
						actual--;
						$('input[name="product_qty['+parentID+']"]').val(actual);
						
						$(".update").trigger("click");
					 

				}else{
					$('input[name="product_qty['+parentID+']"]').val('1');
					
					$(".update").trigger("click");
					
				}
			
	}


		function addOneItem(parentID){
			
		    var actual = $('input[name="product_qty['+parentID+']"]').val();
				if( actual <= 10 )  {						
						actual++;
						$('input[name="product_qty['+parentID+']"]').val(actual);
						$(".update").trigger("click");
					 

				}else{
					$('input[name="product_qty['+parentID+']"]').val('1');
					$(".update").trigger("click");
					
				}
				
	}
</script>



	
</body>
</html>
