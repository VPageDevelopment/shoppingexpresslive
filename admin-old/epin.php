<html>

<?php

session_start();

if(!$_SESSION['loggedin'])
{
	header("location: index.php"); 
}
else
{
	include_once ('header.php');
	
	$sql="SELECT * FROM pack1 WHERE status=0 ";
	$result=mysqli_query($connection,$sql);
	
	$username = $_SESSION['SESS_USER_NAME'];

	$query="SELECT * FROM user WHERE status=0 AND epin=0 AND userid !='$username' ";
	$resul=mysqli_query($connection,$query);
	
}
 
 ?>
 

  <body class="nav-md">
    <div class="container body">
 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Package</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Package <!-- <small>sub title</small> --></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="" method="POST">
				
						<br>
						
						<br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" name='userid' class="form-control" required>
                                <option value="">Choose..</option>
                                <?php while($rows=mysqli_fetch_array($resul,MYSQLI_ASSOC)) 
                                { echo '<option value="'.$rows['userid'].'">'.$rows['userid'].'</option>' ;    }   ?><?php mysqli_free_result($resul); ?>
                                
                              </select>
                        </div>
                      </div> 
					<!--
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Package<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                              <select id="heard" name='pack' class="form-control" required>
                                <option value="">Choose..</option>
                                <?php  /* while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
                                { echo '<option value="'.$row['package'].'">'.$row['package'].'</option>' ;    }   ?><?php mysqli_free_result($result); */ ?>
                                
                              </select>

                        </div> 
                      </div>  --> 
  
  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Of E-Pin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name" name="noofpin" class="form-control col-md-7 col-xs-12"  required>
                        </div>
                    </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                       
                          <div class="g-recaptcha" data-sitekey="6LdzQBQUAAAAAFxwR41kjeCGvxvVHGcOZxPo8_Hz"></div>
						  
						  <!--   Secret key:   6LdzQBQUAAAAABjOUksFBrIUiuNeQPWn8cOE62JV      -->
						  
                       <br>
                          <button type="submit" class="btn btn-primary">Cancel</button>
               <button id="send" type="submit" name="submit" class="btn btn-success">Generate & Send </button> 
                        </div>
                      </div>
                    </form>
                    
                    	<?php 
							
							
						/*	$admin_email = $row['email'];
							$email = "info@shoppingexpress.com";
							$subject = 'E-Pin Details';
							$comment =$result;
							  
							  //send email
							  mail($admin_email, "$subject", $comment, "From:" . $email);
							header("location: Epin.php"); 
							
						} */
	
					?>
                    
                  </div>
                </div>
              </div>
            </div>  <!-- roe -->
			
	    
	    <?php 
						
		 if (isset($_POST['submit'])) 
		 {
			if($_POST['noofpin'] >= 8)
			{
				echo '<script> alert("Should Not Enter Morethen 7 
				");</script>'; 
			}
			else
			{

	     ?>
	     <div class="row">
		<div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Boardered table <small>Bordered table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> <!-- x_title -->
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>email</th>
                          <th>E-pins</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         <!--<th scope="row">1</th> -->
                         
                         <?php  
						 
						 
						 
                         
							$sql="SELECT prefix,evalue FROM epin ORDER BY id DESC LIMIT 1 ";
							$result=mysqli_query($connection,$sql);
							$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


							$pack =$_POST['pack'];
							$epin_prefix =$row['prefix'];
							$epin_value =$row['evalue'];
							$max= $_POST['noofpin'];
							$userid= $_POST['userid'];
							
							$que ="SELECT * FROM pack1 WHERE package='$pack' ";
							$res=mysqli_query($connection,$que);
							$rows=mysqli_fetch_array($res,MYSQLI_ASSOC);

						
							$sql="SELECT * FROM user WHERE userid='$userid' ";
							$result=mysqli_query($connection,$sql);
							$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
							$title=$rows['title'];
							
							
							echo '<td>'.$userid.'</td>';
							echo '<td>'.$row['email'].'</td>';  
							echo '<td>';   
							
							for($i=1;$i<=$max;$i++)
							{
								$epin_value= $epin_value + 1;
								echo $pack.$epin_prefix.$epin_value."<br>"; 
								$sql="INSERT INTO epin(prefix,evalue,package,title,userid,status) VALUES('$epin_prefix','$epin_value','$pack','$title','$userid',0)";
								$result = mysqli_query($connection, $sql);
								
								$epin_sql="SELECT * FROM epin ORDER BY id DESC LIMIT $max ";
								$epin_result=mysqli_query($connection,$epin_sql);
								$epin_row=mysqli_fetch_array($epin_result,MYSQLI_ASSOC);
							
								
								/* sending Mail  */
								
								$to = $row['email'];
								$subject = "Epin Details";
								// Get HTML contents from file
								 file_put_contents("email_template.php", '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
	<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
    <tbody>
        <tr>
        	<td>
                <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                <tbody>
                	<tr>
                    	<td>
                			<table width="690" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                            <tbody>
                            	
                                <tr>
                                    <td colspan="3" align="center">
                                        <table width="630" align="center" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        	<tr>
                                            	<td colspan="3" height="60"></td></tr><tr><td width="130px">
												<a><img src="http://www.shoppingexpress.co.in/admin/images/logo.png" height="100px"  width="100px" alt="codexworld" ></a>
												
												</td>
                                                <td align="center">
                                                    <h1 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:43px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0">Welcome to Shopping Express</h1>
                                                </td>
                                                
                                            </tr>
                                           
                                            <tr> 
                                            
                                       	</tr>
                                        <tr><td colspan="3" height="30"></td></tr>
                                 	</tbody>
                                    </table>
                             	  </td>
								</tr>
                            
                            <tr bgcolor="#ffffff">
                                <td width="30" bgcolor="#eeeeee"></td>
                                <td>
                                    <table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    	<tr>
                                        	<td colspan="4" align="center">&nbsp;</td>
                                      	</tr>
                                        <tr>
                                        	<td colspan="4" align="center"><h2 style="font-size:24px">Epin Details</h2></td>
                                      	</tr>
                                        <tr>
                                        	<td colspan="4">&nbsp;</td>
                                      	</tr>
                                        <tr>
                                        	<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/qrfX6RWN.png" alt="tool" width="120" height="120"></td>
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                                <h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">User Name</h3>
                                                <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0"> '. 
											$userid
												.'</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                          	</td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                        	<td colspan="5" height="40" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                      	</tr>
                                        <tr>
                                        	<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/5zbmOytI.png" alt="no fees" width="120" height="120"></td>
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                            	<h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Password</h3>
                                              	<div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                              	<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">'.$row['password'].'</div>
                                              	<div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                          	</td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                        	<td colspan="5" height="40" style="padding:0;margin:0;font-size:0;line-height:0"></td>
                                       	</tr>
                                        <tr>
                                        	<td width="120" align="right" valign="top"><img src="http://i.imgbox.com/AXtx1Oto.png" alt="creditibility" width="120" height="120" class="CToWUd"></td>
                                            <td width="30"></td>
                                            <td align="left" valign="middle">
                                            	<h3 style="color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0">Epin</h3>
                                              	<div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                              	<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">' .$pack.$epin_prefix.$epin_value."<br>" . '</div>
                                          		<div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                           	</td>
                                            <td width="30"></td>
                                        </tr>
                                        <tr>
                                        	<td colspan="4">&nbsp;</td>
                                        </tr>
                                  	</tbody>
                                    </table>
                                    <table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    	<tr>
                                        	<td>
                                            	<h2 style="color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0">&nbsp;</h2>
                                        		<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0">Thank You for visiting us</div>
                                          	</td>
                                      	</tr>
                                        <tr>
                                        	<td align="center">
                                                <div style="text-align:center;width:100%;padding:40px 0">
                                                    <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;padding:0">
                                                    <tbody>
                                                    	<tr>
                                                        	<td align="center" style="margin:0;text-align:center"><a href="http://www.shoppingexpress.co.in/" style="font-size:18px;font-family:HelveticaNeue-Light,Arial,sans-serif;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#00a3df;padding:14px 40px;display:block" target="_blank">Visit Now!</a></td>
                                                    	</tr>
                                                   	</tbody>
                                                 	</table>
                                              	</div>
                                        	</td>
                                      </tr><tr><td>&nbsp;</td>
                                      </tr></tbody></table></td>
                                <td width="30" bgcolor="#eeeeee"></td>
                            </tr>
                          	</tbody>
                            </table>
                  			<table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                            <tbody>
                            	<tr>
                                	<td>
                                        <table width="630" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                                        <tbody>
                                        	<tr><td colspan="2" height="30"></td></tr>
                                            <tr>
                                            	<td width="360" valign="top">
                                                	<div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2015 CodexWorld. All rights reserved.</div>
                                                	<div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                	<div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">Made in India</div>
                                        		</td>
                                              	<td align="right" valign="top">
                                                	<span style="line-height:20px;font-size:10px"><a href="https://www.facebook.com/codexworld" target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>&nbsp;</span>
                                                    <span style="line-height:20px;font-size:10px"><a href="https://twitter.com/codexworldblog" target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>&nbsp;</span>
                                                    <span style="line-height:20px;font-size:10px"><a href="https://plus.google.com/+codexworld" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>&nbsp;</span>
                                              	</td>
                                            </tr>
                                            <tr><td colspan="2" height="5"></td></tr>
                                           
                                      	</tbody>
                                        </table>
                                   	</td>
                  				</tr>
                          	</tbody>
                            </table>
                  		</td>
                	</tr>
              	</tbody>
                </table>
            </td>
		</tr>
 	</tbody>
    </table>
</div>'); 
								$htmlContent = file_get_contents("email_template.php");

								// Set content-type for sending HTML email
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

								// Additional headers
								$headers .= 'From: info@shoppingexpress.com' . "\r\n";


								// Send email
								if(mail($to,$subject,$htmlContent,$headers)):
									$successMsg = 'Email has sent successfully.';
								else:
									$errorMsg = 'Some problem occurred, please try again.';
								endif;
								
								
	 							
							}
							header("location: pin.php"); 
							$que = "UPDATE user SET epin=1  WHERE userid='$userid' ";
							$res = mysqli_query($connection, $que);
							
							 
							echo '</td>';
 
							   
			 }
                         ?>   
                        </tr>
                      </tbody>
                    </table>
					</div>  <!-- x_content -->
				</div>   <!-- x_panel -->
			  </div>	
			</div>	<!-- row  -->	
			
				<?php 
				
				
						}
	
					?>	
				  
        </div> <!-- right_col -->
        <!-- /page content -->
        
        </div>
        
        
        

        <!-- footer content -->
       <?php include('footer.php'); ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
     <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- validator -->
   
  
    <!-- /validator -->
  </body>
</html>