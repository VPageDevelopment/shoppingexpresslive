<?php 
	session_start();
	
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

			<div class="women-set1">
	
				<?php 

					include_once ('admin/connection.php');
					$sql = "select * from pack1 where status=0";
					$query = mysqli_query($connection , $sql);

					while($row = mysqli_fetch_array($query)){

						$packageName = ucfirst($row['productcode']);
						$packagePrice = ucfirst($row['package']);
						$packageImage = $row['packimage'];
						$packageID = $row['sno'];

				?>

				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="#">
						<div class="product-img">
							<img src="admin/<?php echo $packageImage ; ?>" alt="" />
						</div>
					</a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<h4><?php echo $packageName ?></h4>
					<h5 >  &#x20b9; <span> <?php echo $packagePrice ?> </span> </h5> 

				
						<!-- Button trigger modal -->
						<button 
							id= "<?php echo $packageID ;?>"
							type="button"
							class="btn btn-primary  btn-block add-to-cart"  
							onclick="addToCart(this.id)"
						>
							<i class="fa fa-cart-plus  fa-lg"></i> Add Cart
						</button>
						
				
				
					<br>
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
<script>
	
			var guestUserCart = [];

			function addToCart(value) {
	
				guestUserCart.push(value) ;
				console.log(guestUserCart);

			};
</script>
	
</body>
</html>
