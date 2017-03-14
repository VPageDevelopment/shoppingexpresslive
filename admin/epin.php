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
	
	if($_REQUEST['mode'] == 'gen')
	{
		$id=$_REQUEST['id'];
		$query="SELECT * FROM user WHERE status=0 AND id =$id ";
		$resul=mysqli_query($connection,$query);
		 $row = mysqli_fetch_array($resul);
	}
	
}
 
 ?>
 

  <body class="nav-md">
    <div class="container body">
 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Epin</h3>
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

                    <form class="form-horizontal form-label-left" novalidate action="" method="POST">
				
						<br>
						
						<br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" name='userid' class="form-control" required>
                                
                                <?php 
								if($_REQUEST['mode'] == 'gen')
								{
									echo '<option value="'.$row['userid'].'">'.$row['userid'].'</option>' ;    
								}
								else
								{
									while($rows=mysqli_fetch_array($resul,MYSQLI_ASSOC)) 
									{ 
										echo '<option value="">Choose..</option>';
										echo '<option value="'.$rows['userid'].'">'.$rows['userid'].'</option>' ;    
									}  
										mysqli_free_result($resul);
								}
								?>                                
                              </select>
                        </div>
                      </div>
					
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-Pin Requested<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" value="<?php if($_REQUEST['mode'] == 'gen')
						{ echo $row['epinreq']; } ?>" id="first-name" name="noofpin" <?php if($_REQUEST['mode'] == 'gen')
						{ echo disabled; } ?> class="form-control col-md-7 col-xs-12"  required>
                        </div>
                    </div>
						
  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Of E-Pin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name" name="noofpin" class="form-control col-md-7 col-xs-12"  required>
                        </div>
                    </div>
					  
                     
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
								$sql="INSERT INTO epin(prefix,evalue,userid,useduser,status) VALUES('$epin_prefix','$epin_value','$userid',0,0)";
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
                                            <td align="left" valign="middle">

                                                <div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0;text-align:center;">Your Requested Epin Generated Successfully.<br>
												Plese Login into You Account.
												</div>
                                                <div style="line-height:10px;padding:0;margin:0">&nbsp;</div>
                                          	</td>
                                           
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
                                        		<div style="color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0 auto;text-align:center;">Thank You for visiting us</div>
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
							// header("location: pin.php"); 
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