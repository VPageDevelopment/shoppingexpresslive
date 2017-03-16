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
						
						<li><a href="women.php" class="hyper"><span>Products</span></a></li>
						<li><a href="about.php" class="hyper"><span>About us</span></a></li>
						<li class=" active"><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
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
<div class="container">

<h1 class="page-header" >View Cart</h1>
<div class="cart-view-table-back">
<form method="post" action="cart_update_new.php">
<table width="100%"  cellpadding="6" cellspacing="10"><thead class="headings"><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>
  <tbody class="" >
 	<?php
	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$product_color = $cart_itm["product_color"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
			

		    echo '<tr >';
			echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }
		
		$grand_total = $total + $shipping_cost; //grand total including shipping cost
		foreach($taxes as $key => $value){ //list and calculate all taxes in array
				$tax_amount     = round($total * ($value / 100));
				$tax_item[$key] = $tax_amount;
				$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
		}
		
		$list_tax       = '';
		foreach($tax_item as $key => $value){ //List all taxes
			$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		}
		$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	}
    ?>
    <tr><td colspan="5"><span style="float:right;text-align: right;"><?php echo $shipping_cost. $list_tax; ?>Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
    <tr>
    
    	<td colspan="5">
    		<a href="women.php" class="button add_to_cart btn btn-primary add-to-cart">Add More Items</a>
    		<button type="submit" class="button btn btn-primary update " >Update</button>
    		<a href="admin/index.php?proceed=true&ta=<?php echo $grand_total ;?>" class="button btn btn-primary checkout">Proceed</a>
    	</td>
    </tr>
  
  </tbody>
</table>
<input type="hidden" name="return_url" value=" <?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>

</div>
<hr>
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
