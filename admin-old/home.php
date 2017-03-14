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

   
    <?php 
           $sqlForTotalUser = "select * from user where role!='admin'";
            $queryForTotalUser = mysqli_query($connection , $sqlForTotalUser);
            $totalNoOfUser = mysqli_num_rows($queryForTotalUser );
            
          
          
          	$totalPayout = "select * from tree ";
          	
          	$queryTotalPayout = mysqli_query($connection , $totalPayout);
          	
          	$packageAmount = $totalNoOfUser * 2100 ;
          	$productAmount = $totalNoOfUser * 1250; 
          	
            $total = 0 ;

            while($row_income = mysqli_fetch_array($queryTotalPayout)){

              $total += $row_income['totalamt'];

            }
        
	    
    ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home</h3>
              </div>

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="container">
                           
                                <div class="row">
                                

                                    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="well">
                                         <div class="row">
                                           <div class="col-xs-4 col-offset-xs-2 col-sm-4 " >
                                               <i class="fa fa-users fa-5x"></i>
                                           </div>
                                           <div class="col-xs-6 col-sm-6">
                                                <p><strong>Total users<strong></p>
                                                <h1 ><?php echo $totalNoOfUser ;?></h1>
                                           </div>
                                         </div>  
                                       </div>
                                    </div> 


                                    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="well">
                                         <div class="row">
                                           <div class="col-xs-4 col-offset-xs-2 col-sm-4" >
                                               <i class="fa fa-shopping-bag fa-5x"></i>
                                           </div>
                                           <div class="col-xs-6 col-sm-6">
                                                <p>Total Product Sale</p>

                                                <h1 ><?php echo $totalNoOfUser ;?></h1>
                                           </div>
                                         </div>  
                                       </div>
                                    </div> 

                                    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="well">
                                         <div class="row">
                                           <div class="col-xs-4 col-offset-xs-2 col-sm-4" >
                                               <i class="fa fa-money  fa-5x"></i>
                                           </div>
                                           <div class="col-xs-6 col-sm-6">
                                                <p>Package Amount</p>
                                                <h1 ><?php echo $packageAmount ;?></h1>
                                           </div>
                                         </div>  
                                       </div>
                                    </div> 



                                </div><!-- End of 1st row -->



                                <div class="row">
                                

                                    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="well">
                                         <div class="row">
                                           <div class="col-xs-4 col-offset-xs-2 col-sm-4" >
                                               <i class="fa fa-area-chart fa-5x" aria-hidden="true"></i>
                                           </div>
                                           <div class="col-xs-6 col-sm-6">
                                                <p>PayOut</p>

                                                <h1 ><?php echo $total ; ?></h1>
                                           </div>
                                         </div>  
                                       </div>
                                    </div> 


                                    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="well">
                                         <div class="row">
                                           <div class="col-xs-4 col-offset-xs-2 col-sm-4" >
                                               <i class="fa fa-inr fa-5x" class="fa fa-handshake-o" ></i>
                                           </div>
                                           <div class="col-xs-6 col-sm-6">
                                               <p>Net Income</p>
                                               <h1 ><?php echo ( $packageAmount - ($total + $productAmount ) )?></h1>
                                           </div>
                                         </div>  
                                       </div>
                                    </div> 

                                    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="well">
                                         <div class="row">
                                           <div class="col-xs-4 col-offset-xs-2 col-sm-4" >
                                               <i class="fa fa-shopping-cart   fa-5x"></i>
                                           </div>
                                           <div class="col-xs-6 col-sm-6">
                                               <p>Product Amount </p>
                                               <h1 ><?php echo $productAmount ;?></h1>
                                           </div>
                                         </div>  
                                       </div>
                                    </div> 



                                </div><!-- End of 2nd row -->
                            
                      </div> <!-- end of container-->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
      <?php include('footer.php')?>
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
