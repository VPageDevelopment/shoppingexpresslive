<?php 
session_start();
include('connection.php');
	
	if(isset($_REQUEST['mode'])== 'lost')
	{
		$id = $_REQUEST['id'];
		$sql = "SELECT * FROM  user  WHERE id=$id ";
		$result = mysqli_query($connection, $sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);		
	  
	}
?> 



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
				  <h1>Change Password</h1> 
				  
				   <input name="id" type="hidden" value="<?php if(isset($_REQUEST['mode'])) {  echo $_REQUEST['id']; } ?>" />
                    <input name="mode" id="mode" type="hidden" value="<?php  echo $_REQUEST['mode']; ?>" />
				 
				 
					<div>
					<input type="password" class="form-control" id="password" name="newpass" placeholder="Password" required="Password" />
				  </div> 
				  
				  
				  <div>
					<input type="password" class="form-control" name="conpass" id="confirm_password" placeholder="Comform Password" required="" /> <span id="message"></span> 
				  </div>
				  
				  
				  <div>
					<button class="btn btn-default submit" name="submit"  type="submit">Submit</button>
				   
				  </div>
				  
				   <script type="text/javascript" src="js/jquery.js"></script>
				<script type="text/javascript">
				
				  $(document).ready(function()
					{
						$('#confirm_password').on('change', function () {
							if ($(this).val() == $('#password').val()) {
								$('#message').html('OK').css('color', 'green');
							} else { $('#message').html('Not Matching').css('color', 'red'); }
							
						});
					});
				   
				  </script>
				 
				</form>
				
				<?php 
				
				if (isset($_POST['submit'])) 
				{
					$id = $_REQUEST['id'];
					$conpass= $_POST['conpass'];
					
					echo $sql = "UPDATE user SET password = '$conpass' WHERE id=$id ";
					$result = mysqli_query($connection, $sql);
					header("location: index.php");
				}
				?>
				
					 
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
