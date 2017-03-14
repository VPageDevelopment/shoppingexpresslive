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
	
	
		$id= $_SESSION['SESS_USER_ID'];
		
		$sql="SELECT * FROM user WHERE id=$id ";
		$result=mysqli_query($connection,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);	
}

	
?>


  <body class="nav-md">
    <div class="container body">
 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Profile</h3>
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
                    <h2>Edit Profile</h2>
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
				
                    <form class="form-horizontal form-label-left" novalidate action="saveprofile.php" method="POST">
					
						<input name="id" type="hidden" value="<?php  echo $row['id'];  ?>" />
							<input name="mode" id="mode" type="hidden" value="<?php  echo $_REQUEST['mode']; ?>" />
                  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="name" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['name'];  ?>">
                        </div>
                      </div>
                      
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Age <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name" name="age" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['age'];  ?>">
                        </div>
                      </div>
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<p>
                          Male:
                        <input type="radio" class="flat" name="gender" id="genderM" value="Male" <?php if($row['gender']== 'Male' ) {   ?> checked="" <?php } ?> required /> Female:
                        <input type="radio" class="flat" name="gender" id="genderF"  value="Female" <?php if($row['gender']== 'Female' ) {   ?> checked="" <?php } ?>  />
						</p>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Father/Husband Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="fhname" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['fhname'];  ?>" >
                        </div>
                      </div>
					   
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nominee  Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nominename" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['nominename']; ?>">
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nominee Contact Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number"  id="number" name="nominenumber" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['nominenumber'];  ?>" >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="textarea"  required="required" name="address" class="form-control col-md-7 col-xs-12" 
						  value="<?php  echo $row['address']; ?>" >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="mobile" required="required"  class="form-control col-md-7 col-xs-12" value="<?php  echo $row['mobile'];  ?>" >
                        </div>
                      </div>
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Alternate Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number"  id="number" name="alternatenum" required="required"  class="form-control col-md-7 col-xs-12" value="<?php  echo $row['alternatenum'];  ?>" >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email"  id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['email'];  ?>" >
                        </div>
                      </div>
					 					  	  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Amount <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="amount" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['amount'];  ?>">
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Amount in words <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="amountwords" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['amountwords'];  ?>">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Address / ID Proof  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="idproof" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['idproof'];  ?>">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Pan Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="number" name="pannum" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['pannum'];  ?>">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Aadhar Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="adharnum" required="required"  class="form-control col-md-7 col-xs-12" value="<?php  echo $row['adharnum'];  ?>" >
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Bank Name  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="bankname" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['bankname'];  ?>" >
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Branch <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="branch" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['branch'];  ?>" >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Account Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="accnum" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['accnum'];  ?>" >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> IFSC Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ifsccode" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['ifsccode'];  ?>" >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Referal ID<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="number" name="referalid" required="required"  class="form-control col-md-7 col-xs-12" value="<?php  echo $row['referalid'];  ?>" >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Referal Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="referalname" id="first-name"  required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $row['referalname'];  ?>" >
                        </div>
                      </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success"> Submit </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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