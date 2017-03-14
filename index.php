<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
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
						<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
						
						<li><a href="women.php" class="hyper"><span>Products</span></a></li>
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



<div class="banner-agile">
	<div class="container">
	  <h3><b>Shopping Express</b> is India’s newest Business opportunity in textile Industry.<br><br>Yes, you can earn points, cash and many more things.. Please contact one of our executive for more details.</h3>  
	
	</div>
</div>
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="women.html"><div class="bb-left-agileits-w3layouts-inner">
					 
			</div></a>
		</div>
		<div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
			<a href="shoes.html"><div class="bb-middle-top">
				 
			</div></a>
			<a href="jewellery.html"><div class="bb-middle-bottom">
				 
			</div></a>
		</div>
		<div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
			<a href="watches.html"><div class="bb-right-top">
				 
			</div></a>
			<a href="handbags.html"><div class="bb-right-bottom">
			 
			</div></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>

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