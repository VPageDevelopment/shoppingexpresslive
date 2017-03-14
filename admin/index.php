<?php 
session_start();

include('connection.php');
//print_r($_SESSION["cart_products"]) ;

$ta = $_REQUEST['ta']; 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Shopping Express </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="save-login.php" method="post"> 
			
				 <input type="hidden" class="form-control" name="proceed" value=" <?php echo $_REQUEST['proceed'];  ?>  "    required="" />
				  <input type="hidden" class="form-control" name="ta" value=" <?php echo $_REQUEST['ta'];  ?>  "    required="" />
			
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="uname" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
              </div>
             
              
              <div>
                <button class="btn btn-default submit" name="Login"  type="submit">Log in</button> &nbsp; OR &nbsp;&nbsp;
				<button class="btn btn-default " name="register"  type=""  onclick="window.location='register.php<?php   if($_REQUEST['proceed'] == true){ echo '?proceed=true&ta='.$ta; } ?>'" >Register</button>
              </div>
			  <br><br>
			  <div>
                 <a class="" href="forgotpass.php">Lost Your Password</a>
               
              </div>
				<br>
			 <div>
               
                <a class="" href="../index.php">Go Back To Home</a>
              </div>
 	
				
				
 <div class="clearfix"></div>

            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
