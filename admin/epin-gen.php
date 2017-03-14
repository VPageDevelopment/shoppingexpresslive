<?php

session_start();
if(!$_SESSION['loggedin'])
{
	header("location: index.php"); 
}
else
{
	include_once ('header.php');
	
	$username = $_SESSION['SESS_USER_NAME'];
	$sql="SELECT * FROM user WHERE epinreq !=0 and status=0 "; 
	$result=mysqli_query($connection,$sql);
	
	
}
	
?>
  <body class="nav-md">
    <div class="container body" >
 
        <!-- page content -->
        <div class="right_col" role="main">
          
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Payment</h3>
						</div> 
						
					</div>
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Payment Info</h2>
								
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="example" class="table table-striped responsive-utilities jambo_table"> 
										<thead>
											<tr class="headings">
												
												<th>S. No</th>
												<th>Name</th>
												<th>User Id</th>
												<th>Epin Requested</th>
												<th>Referal Id</th>
												<th>Mobile </th>
												<th>Generate</th>												
											</tr>
										</thead>

										<tbody>
										<?php
											$i = 1;
											while($row=mysqli_fetch_array($result)){
											
											  $user_name = $row['name'];
											  $user_id = $row['userid'];
											  $epinreq = $row['epinreq'];
											  $referalid = $row['referalid'];
											  $mobile = $row['mobile'];
											 
										?>
 
									  <tr>
											<td><?php echo $i ; ?></td>
											<td><?php echo '<a title="view" href="profile.php?id='.$row['id'].'&mode=view" style="margin-left: 25px;">'.$user_name.'</a>' ; ?></td>
											<td><?php echo $user_id; ?></td>
											<td><?php echo $epinreq ; ?></td>
											<td><?php echo $referalid ; ?></td> 
											<td><?php echo $mobile ; ?></td> 
											<td><a class="btn btn-primary" href="epin.php?id='<?php echo $row['id'];?>'&mode=gen">Generate Epin</a></td>
									  </tr>

									  <?php
											$i++;
										  }
									  ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<br />
						<br />
						<br />
					</div>
				</div>
       
        <!-- /page content -->

        
      </div>
	  
	  <!-- footer content -->
      <?php include('footer.php')?>   
    <!-- /footer content -->
	  
	  
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