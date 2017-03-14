<?php

session_start();

if(!$_SESSION['loggedin'])
{
	header("location: index.php"); 
}
else
{
	include_once ('header.php');

}
 ?>
 
 <html>
 <head>
 <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function checkname()
{
 var name=document.getElementById( "oldpass" ).value;
 var userid=document.getElementById( "userid" ).value;
	
 if(name)
 { 
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_name:name,user_id:userid,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}

function checkall()
{
 var namehtml=document.getElementById("name_status").innerHTML;
 var message=document.getElementById("message").innerHTML;

 if((namehtml && message)=="OK")
 {
  return true;
 }
 else
 {
  return false;
 }
}

$(document).ready(function()
{
	$('#confirm_password').on('change', function () {
		if ($(this).val() == $('#password').val()) {
			$('#message').html('OK').css('color', 'green');
		} else { $('#message').html('Not Matching').css('color', 'red'); }
		
	});
});

</script>

 </head>
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

                    <form class="form-horizontal form-label-left" novalidate action="savechangepsw.php" method="POST" enctype="multipart/form-data" onsubmit="return checkall();">

                      
      
					<input name="id" type="hidden" id="userid" value="<?php  echo $_SESSION['SESS_USER_ID'];  ?>" />
                        <input name="mode" id="mo 
						de" type="hidden" value="<?php  echo $_REQUEST['mode']; ?>" />

                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Old Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="oldpass" type="password" id="oldpass" onchange="checkname();"  required="required" class="form-control col-md-7 col-xs-12"> <span style="color:red;" id="name_status"></span>
                        </div>
                      </div>
					  				  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="newpass" id="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					   
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Conform Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="conpass" id="confirm_password" required="required" class="form-control col-md-7 col-xs-12"> <span id='message'></span>
                        </div>
                      </div>
					 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
						<button id="send" type="submit" class="btn btn-success">Change Password</button> 
                          <button type="submit" class="btn btn-primary">Cancel</button>
               
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
        <?php include('footer.php')?>
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