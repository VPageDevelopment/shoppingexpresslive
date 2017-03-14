<?php

session_start();

if(!$_SESSION['loggedin'])
{
	header("location: index.php"); 
}
else
{
	include_once ('header.php');
	
	$sql="SELECT * FROM pack1 WHERE status='0' "; 
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
							<h3>View Package</h3>
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
												<th>Product Code</th>
												<th>Package Amount</th>
												<th>Title</th>
												<th>Description</th>
												<th>Fabric </th>
												<th>Actual Price</th>
												<th>Color</th>
												<th>In Stock</th>
												 <th>Product Image</th>
												<th class=" no-link last"><span class="nobr">Action</span>
												</th>
											</tr>
										</thead> 

										<tbody>
											<?php 	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
											{	
												echo '<td class=" ">'.$row['productcode'].'</td>';
												echo '<td class=" ">'.$row['package'].'</td>';
												echo '<td class=" ">'.$row['title'].'</td>';
												echo '<td class=" ">'.$row['description'].'</td>';
												echo '<td class=" ">'.$row['fabrictype'].'</td>';
												echo '<td class=" ">'.$row['actualprice'].'</td>';
												echo '<td class=" ">'.$row['feathures'].'</td>';
												echo '<td class=" ">'.$row['instock'].'</td>';
												echo '<td class=" "><img src="'.$row['packimage'].' " width="50" height="50"></td>';
												
												echo '<td class=" " align="center"> <a class="glyphicon glyphicon-pencil" title="Edit" href="package.php?sno='.$row['sno'].'&mode=Edit"></a>
												<a class="glyphicon glyphicon-trash" title="Delete" href="deletepackage.php?sno='.$row['sno'].'&mode=pack" style="margin-left: 25px;"></a></td>'; 
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