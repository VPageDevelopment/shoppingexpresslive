<html>

<?php



session_start();
	include_once ('header.php');

 
 $sql="SELECT * FROM pack1 WHERE status=0 ";
        $result=mysqli_query($connection,$sql);
  
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


                      <input name="id" type="hidden" value="<?php if(isset($_REQUEST['mode'])) {  echo $_REQUEST['id']; } ?>" />
						<input name="mode" id="mode" type="hidden" value="<?php  echo $_REQUEST['mode']; ?>" />
							
						<br>
						<br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="userid" type="text" id="first-name"  class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Package<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                              <select id="heard" name='pack' class="form-control" required>
                                <option value="">Choose..</option>
                                <?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
                                { echo '<option value="'.$row['package'].'">'.$row['package'].'</option>' ;    }   ?><?php mysqli_free_result($result); ?>
                                
                              </select>

                        </div>
                      </div>
  
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
                       
                          <div class="g-recaptcha" data-sitekey="6LcCHxIUAAAAAIIHuhzX5jnVxnt1eap2C5mTBcJY"></div>
                       
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
				 $_POST['pack'];
				 $epin_value =$row['evalue'];
				$max= $_POST['noofpin'];
				$userid= $_POST['userid'];

			
				$sql="SELECT * FROM user WHERE userid='$userid' ";
				$result=mysqli_query($connection,$sql);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				
                                echo '<td>'.$userid.'</td>';
                                echo '<td>'.$row['email'].'</td>';  
				echo '<td>';   
				
				for($i=1;$i<=$max;$i++)
				{
					$epin_value= $epin_value + 1;
					echo $pack.$epin_prefix.$epin_value."<br>"; 
					$sql="INSERT INTO epin(prefix,evalue,package,userid,status) VALUES('$epin_prefix','$epin_value','$pack','$userid',0)";
					$result = mysqli_query($connection, $sql);
						
				}
				
				echo '</td>';
				
				
				// $sql="SELECT * FROM epin ORDER BY id DESC LIMIT $max ";
				// $result=mysqli_query($connection,$sql);
				// $row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
				
				
			 
				 $admin_email = $row['email'];
				$email = "info@shoppingexpress.com";
				$subject = 'E-Pin Details';
				$comment =$pack.$epin_prefix.$epin_value;
				
				mail($admin_email, "$subject", $comment, "From:" . $email);
				header("location: pin.php");   
				
					 
				
			 
                         ?>
                         
                         <!-- 
                          <td><?php echo $userid; ?></td>
                          <td> <?php echo $row['email']; ?></td>
                          <td> <?php echo $epin_prefix.$pack.$epin_value; ?> </td>     -->    
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