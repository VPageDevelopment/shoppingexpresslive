
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

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
				<form action="" method="post">
				  <h1>Lost Your Password</h1> 
				 
				 <div>
					<input type="text" class="form-control" name="email" placeholder="Enter Your Email" required="" />
				  </div>
				 
				  <div>
					<button class="btn btn-default submit" name="submit"  type="submit">Send</button>
				   
				  </div>
				 
				</form>
				
				<?php  
				if(isset($_POST['submit']))
				{
					include('connection.php');
					$email = $_POST['email'];
					
					$sql="SELECT * FROM user WHERE email='$email' ";
					$result=mysqli_query($connection,$sql);			
					$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
					$id=$row['id'];
								
					$admin_email = $email;
					$email = "info@shoppingexpress.com";
					$subject ='Change password' ;
					 $comment ='http://shoppingexpress.co.in/admin/change.php?%&id='.$id.'&mode=lost';
							  
							  //send email
							  mail($admin_email, "$subject", $comment, "From:" . $email);
							//header("location: Epin.php"); */ 
				}
				?>
						
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
