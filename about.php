<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
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
						<li class="active"><a href="about.php" class="hyper"><span>About us</span></a></li>
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

<div class="sub-banner">
</div>
<div class="about">
	<div class="container"> 
		<h3 style="color: #00e58b;">About Us</h3>
		<div class="about-info">
			<div class="col-md-12 about-grids">
				 
				<p style="font-size:18px"><b>Shopping express</b> has enormous experience in textile industry and have export quality fabrics. Now, we have come up with an innovative plan for our customers in India.We call it as BIB.</p>		

				<h3 style="color: #00e58b;">Business in Business. </h3>

				<p style="font-size:18px">In last few decades textile industry has grown very much.lot of new materials has been introduced in world markets. For the first time in the world,<b> Shopping Express </b>has introduced a Business opportunity in this industry. </p>	

				<p style="font-size:18px"> We are launching world class/export quality fabrics and materials every day in our website. You may never find these products in any other mart. You need to register as our esteemed customer to purchase our products, by means that you will become our business partner. You will get quality fabs as well you may earn money.</p>	

				<p style="font-size:18px">Yes, it’s TRUE. That’s why we call it as<b> BUSINESS in BUSINESS.</b> For further details you may contact us by mailing to us or calling us or also you can attend our meetings. </p>	
					
			</div>
			
			<!-- <img src="images/map.jpg"  alt="" class="maps"/>  -->
			 
			
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php include('include_footer.php'); ?>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>