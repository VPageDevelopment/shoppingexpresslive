<?php


session_start();

if(!$_SESSION['loggedin'])
{
	header("location: index.php"); 
}

else
{
	include_once ('header.php');
	include_once ('connection.php');
}

?>



<!-- THEME TEMPLATE-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> </title>

    <style>
      .img-avt{
        width:50px;
        height:50px;
        margin-top:30px;
        border-radius:50%;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Tree View</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="container">
					 
				  <?php 
				  
				   // echo '<script>alert("hi")</script>';
					if (isset($_REQUEST['mode']) == 'downline') 
					{
						$id=$_REQUEST['id'];
						
						$sql="SELECT * FROM user WHERE id='$id'";
						$result=mysqli_query($connection,$sql);
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						
						$name = $row['name'];
						$userid = $row['userid'];
						
					    echo '<div class=" row text-center" >
							<div class="col-lg-offset-3 col-lg-6">
								<img src="images/user.png" class="img-avt" alt="">
								<p></p>
								<p>'.$userid.'</p>
							</div>';
						
						$result=mysqli_query($connection," SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$userid' ");
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						
						$tid=$row['id'];
						$tleft=$row['tleft'];
						$tright=$row['tright'];
						
						echo '<div class="row" id="child-element">
								<div class=" col-lg-6">'; 
								  
								  if($tleft == '') 
									{
										echo ' <img src="images/user.png" class="img-avt" alt="">
												<p></p>  
												<p><a class="downline" href="adduser.php?id='.$id.'&mode=adddownline">Add</a></p>'; 
									}
									else  
									{
										echo ' <img src="images/user.png" class="img-avt" alt="">
												<p></p>  
												<p>'.$tleft.'</p>'; ; /* 1st level  LEFT */
									}
									 
									$result=mysqli_query($connection," SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$tleft' ");
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									$second=$row['id'];
									$left=$row['tleft'];
									$right=$row['tright'];
									
									
							echo    '<div class="row" id="child-element"> 
										<div class=" col-lg-6">'; 
									 
									 if($left == '') /* 2nd level  LEFT */
										{
											echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p><a class="downline" href="adduser.php?id='.$second.'&mode=adddownline">Add</a></p>'; 
										}  
										else
										{
											echo '<img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>'.$left.'<p>'; /* 2nd level  LEFT */
										}
									
																
									$result=mysqli_query($connection,"SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$left' ");
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									$three_id=$row['id'];
									$three_left=$row['tleft'];
									$three_right=$row['tright'];
																		
										
									echo  '<div class="row" id="child-element"> 
											<div class=" col-lg-6">'; 
												
											if($three_left == '')
											{
												echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p><a class="downline" href="adduser.php?id='.$three_id.'&mode=adddownline ">Add</a></p>'; 
											}  
											else
											{
												echo '<img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p>'.$three_left.'</p>'; /* 3rd level  LEFT */
											}

								 	 
									echo ' </div> <div class=" col-lg-6"> ';
									
											if($three_right == '')
											{
												echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p></p>'; 
											}  
											else 
											{
												echo '<img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p>'.$three_right.'</p>'; /* 3rd level  LEFT */
											}
									
									echo '</div>
									 
									</div>
									
									</div>	
										<div class=" col-lg-6"> <!-- col-6 --> ';
											  if($right == '') /* 2nd level  LEFT */
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>&nbsp;</p>'; 
												}
												else  
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>'.$right.'</p>'; /* 3rd level  LEFT */
												}
											
											$result=mysqli_query($connection," SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$right' ");
											$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
											
											$name=$row['name'];
											$three_left=$row['tleft'];
											$three_right=$row['tright'];
											
											echo '<div class="row" id="child-element"> 
											<div class=" col-lg-6">';
											
												 if($three_left == '') /* 3rd level  LEFT */
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p></p>'; 
												}
												else  
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>'.$three_left.'</p>'; /* 3rd level  LEFT */
												}
											
										
										echo '</div> <div class=" col-lg-6">';
											
											 if($three_right == '') /* 3rd level  LEFT */
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p></p>'; 
												}
												else  
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>'.$three_right.'</p>'; /* 2nd level  LEFT */
												}
											
										echo '</div> </div>      
										</div> <!-- col-6 -->
									   </div> 
							   </div>';
								
									
								echo'<div class=" col-lg-6">'; 
										  
									 if($tright == '') 
									{
										echo ' <img src="images/user.png" class="img-avt" alt="">
												<p></p>  
												<p><a class="downline" href="adduser.php?id='.$tid.'&mode=adddownline&le=1">Add</a></p>'; 
									}
									else  
									{
										echo ' <img src="images/user.png" class="img-avt" alt="">
												<p></p>  
												<p>'.$tright.'</p>'; /* 1st level  RIGHT */
									}
										  
										
									$result=mysqli_query($connection," SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$tright' ");
									$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
									
									$second_right=$row['id'];
									$left=$row['tleft'];
									$right=$row['tright'];
									
									
							echo    '<div class="row" id="child-element">
										<div class=" col-lg-6">';
									 
									 if($left == '')
										{
											echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>&nbsp;</p>'; 
										}  
										else
										{
											echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>'.$left.'</p>'; /* 2nd level RIGHT */
										}
										
											$result=mysqli_query($connection," SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$left' ");
											$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
											
											$id=$row['id'];
											$three_left=$row['tleft'];
											$three_right=$row['tright'];
											
											echo '<div class="row" id="child-element">
										            <div class=" col-lg-6">'; 
													
												 if($three_left == '') 
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p></p>'; 
													}
													else  
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p>'.$three_left.'</p>'; /* 3rd level  RIGHT */
													}	
													
										
										
									echo  '</div> <div class=" col-lg-6"> ';
											
											if($three_right == '') 
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p></p>'; 
													}
													else  
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p>'.$three_right.'</p>'; /* 3rd level  RIGHT */
													}
											
									echo '</div> </div>
										</div>	
										<div class=" col-lg-6">';
											
											if($right == '')
												{
													echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p><a class="downline" href="adduser.php?id='.$second_right.'&mode=adddownline&le=1 ">Add</a></p>'; 
												}
												else  
												{
				 									echo ' <img src="images/user.png" class="img-avt" alt="">
															<p></p>  
															<p>'.$right.'</p>';  /* 2nd level RIGHT */
												}
											
											$result=mysqli_query($connection," SELECT * FROM tree INNER JOIN user ON user.userid=tree.userid WHERE tree.userid='$right' ");
											$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
											
											$id=$row['id'];
											$three_left=$row['tleft'];
											$three_right=$row['tright'];
											
											echo '<div class="row" id="child-element">
										            <div class=" col-lg-6">'; 
													
												 if($three_left == '') 
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p></p>'; 
													}
													else  
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p>'.$three_left.'</p>'; /* 3rd level  RIGHT */
													}	   
										      echo ' </div> <div class=" col-lg-6">';
											  
													if($three_right == '') 
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p><a class="downline" href="adduser.php?id='.$id.'&mode=adddownline&le=1 ">Add</a></p>'; 
													}
													else  
													{
														echo ' <img src="images/user.png" class="img-avt" alt="">
																<p></p>  
																<p>'.$three_right.'</p>'; /* 3rd level  RIGHT */
													}
											  
											  echo '</div>
											  
											  </div>
										</div>
									   </div> 
							        </div>';
										  
									 
											  
									echo '</div>
									  </div>'; 
							
							
					  echo '</div><!-- row --><br><br> ';
				  
					}
				  ?>
					  
					 <br><br><br><br><br><br><br>
					  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
	   <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
