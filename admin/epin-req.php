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
                <h3>Epin</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Epin <!-- <small>sub title</small> --></h2>
                                        <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="" method="POST">
				
						<br>
						
						<br>
                    

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Of E-Pin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name" name="noofpin" class="form-control col-md-7 col-xs-12"  required>
                        </div>
                    </div>
					  
                      
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                       
                       <br>
                         
						   <button id="send" type="submit" name="submit" class="btn btn-success">Request</button> 
							<button type="submit" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>
                    </form>
					
					
					 <?php 
						
						 if (isset($_POST['submit'])) 
						 {
							$noofepin =$_POST['noofpin'];
							$id=$_SESSION['SESS_USER_ID'];
							$sql = "UPDATE user SET epinreq='$noofepin'  WHERE id='$id' ";
							$result = mysqli_query($connection, $sql); 
							
							header("location: home.php");
						 }

				 ?>
					
                    
                    
                  </div>
                </div>
              </div>
            </div>  <!-- row -->
			
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