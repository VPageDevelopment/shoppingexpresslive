<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact us</title>
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
<div class="sub-banner">
</div>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4> 
				<h5>No. 32, Palandiyamman Koil Street,</h5>
				<h5>Adambakkam, Chennai - 600088.</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>+1(401) 1234 567.</h5>
				<h5>+1(804) 4261 150.</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:info@example.com">info@shoppingexpress.com</a></h5>
			<!--	<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>  -->
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="#" method="post">
				<input type="text" name="your name" placeholder="Your name" required=" ">
				<input type="text" name="your email" placeholder="Your email" required=" ">
				<input type="text" name="your subject" placeholder="Your subject" required=" ">
				<input type="text" name="your phone number" placeholder="Phone number" required=" ">
				<textarea  name="your message" placeholder="Your message" required=" "></textarea>
				<input type="submit" value="Send message">
			</form>
		</div>
	</div>
</div>
<div class="map-w3ls">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.9095545558024!2d80.20130711238373!3d12.99497605831047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52675bcebd89c9%3A0xc388fc35c51952a9!2s32%2C+Palandi+Amman+Koil+St%2C+Paramesh+Nagar%2C+Adambakkam%2C+Chennai%2C+Tamil+Nadu+600088%2C+India!5e0!3m2!1sen!2sin!4v1485421126964" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- newsletter -->
	<!-- <div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2>Newsletter</h2>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> -->
<!-- //newsletter -->

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
