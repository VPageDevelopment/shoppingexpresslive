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
	
	$username = $_SESSION['SESS_USER_NAME'];
	
	$sql="SELECT * FROM user INNER JOIN tree ON tree.userid=user.userid WHERE user.status='0' and user.role!='admin' AND user.userid !='$username'  ";
	$result=mysqli_query($connection,$sql);
}

	
	
?>
  <body class="nav-md">
    <div class="container body">   
 
<!-- page content -->
<div class="right_col" role="main">
  
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>View Users</h3>
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							
						</div>
						<div class="x_content">
							<table id="example" class="table table-striped responsive-utilities jambo_table"> 
								<thead>
									<tr class="headings">
										
										<th>Slno</th>
										<th>Name</th>
										<th>User id</th>
										<th>Mobile</th>
										<th>Referal Id</th>
										<th>Left</th>
										<th>Right</th>
										<th class=" no-link last"><span class="nobr">Action</span>
										</th>
									</tr>
								</thead>

								<tbody>
									<?php 	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
									{
										echo '<td class=" ">'.$row['id'].'</td>';
										echo '<td class=" ">'.$row['name'].'</td>';
										echo '<td class=" ">'.$row['userid'].'</td>';
										echo '<td class=" ">'.$row['mobile'].'</td>';
										echo '<td class=" ">'.$row['referalid'].'</td>';
										echo '<td class=" ">'.$row['tleft'].'</td>';
										echo '<td class=" ">'.$row['tright'].'</td>';
										
										echo '<td class=" " align="center">
											<a class="glyphicon glyphicon-pencil" title="Edit" href="adduser.php?id='.$row['id'].'&mode=edit"> Edit</a>
											<a class="glyphicon glyphicon-trash" title="Delete" href="delete.php?id='.$row['id'].'&mode=user" style="margin-left: 25px;"> Delete</a>
											<a class="glyphicon glyphicon-tasks" title="view" href="profile.php?id='.$row['id'].'&mode=view" style="margin-left: 25px;"> view</a>
											<a class="glyphicon glyphicon-sort-by-attributes-alt" title="show" href="downline.php?id='.$row['id'].'&mode=downline" style="margin-left: 25px;"> Downline</a>
											
											</td>'; 
										
										
										echo "</tr>"; 	
									} 
									mysqli_free_result($result);
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
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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