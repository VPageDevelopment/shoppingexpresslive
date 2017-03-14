<?php


session_start();

$userid = $_SESSION['SESS_USER_ID'];

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




  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>List View</h3>
              </div>

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>-->
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List View</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="container">
                        <div class="row">

                            <div class=" col-lg-12">
                              <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class=" row text-center" >
                                      <div class="col-lg-offset-3 col-lg-6">
                                        <img src="images/profile_boy.png" class="img-avt" alt="">
                                        <p>user</p>
                                        <p>SE01001</p>
                                      </div>

                                      <div class="row" id="child-element">
                                          <div class=" col-lg-6">
                                            <img src="images/profile_boy.png" class="img-avt" alt="">  
                                            <p>user</p>  
                                            <p>SE01002</p>      

                                            <div class="row" id="child-element">
                                                <div class=" col-lg-6">
                                                  <img src="images/profile_boy.png" class="img-avt" alt="">  
                                                  <p>user</p>  
                                                  <p>SE01002</p>     

                                                    <div class="row" id="child-element">
                                                      <div class=" col-lg-6">
                                                        <img src="images/profile_boy.png" class="img-avt" alt="">  
                                                        <p>user</p>  
                                                        <p>SE01002</p>                                   
                                                      </div>

                                                      <div class=" col-lg-6">
                                                        <img src="images/profile_boy.png" class="img-avt" alt="">
                                                        <p>user</p>
                                                        <p>SE01003</p>
                                                      </div>
                                                  </div>                              
                                                </div>

                                                <div class=" col-lg-6">
                                                  <img src="images/profile_boy.png" class="img-avt" alt="">
                                                  <p>user</p>
                                                  <p>SE01003</p>

                                                  <div class="row" id="child-element">
                                                    <div class=" col-lg-6">
                                                      <img src="images/profile_boy.png" class="img-avt" alt="">  
                                                      <p>user</p>  
                                                      <p>SE01002</p>                                   
                                                    </div>

                                                    <div class=" col-lg-6">
                                                      <img src="images/profile_boy.png" class="img-avt" alt="">
                                                      <p>SE01003</p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>                             
                                          </div>

                                          <div class=" col-lg-6">
                                            <img src="images/profile_boy.png" class="img-avt" alt="">
                                            <p>user</p>
                                            <p>SE01003</p>
                                                <div class="row" id="child-element">
                                                    <div class=" col-lg-6">
                                                      <img src="images/profile_boy.png" class="img-avt" alt="">  
                                                      <p>user</p>  
                                                      <p>SE01002</p>       
                                                      <div class="row" id="child-element">
                                                          <div class=" col-lg-6">
                                                            <img src="images/profile_boy.png" class="img-avt" alt="">  
                                                            <p>user</p>  
                                                            <p>SE01002</p>                                   
                                                          </div>

                                                          <div class=" col-lg-6">
                                                            <img src="images/profile_boy.png" class="img-avt" alt="">
                                                            <p>user</p>
                                                            <p>SE01003</p>
                                                          </div>
                                                      </div>                            
                                                    </div>

                                                    <div class=" col-lg-6">
                                                      <img src="images/profile_boy.png" class="img-avt" alt="">
                                                      <p>user</p>
                                                      <p>SE01003</p>
                                                      <div class="row" id="child-element">
                                                          <div class=" col-lg-6">
                                                            <img src="images/profile_boy.png" class="img-avt" alt="">  
                                                            <p>user</p>  
                                                            <p>SE01002</p>                                   
                                                          </div>

                                                          <div class=" col-lg-6">
                                                            <img src="images/profile_boy.png" class="img-avt" alt="">
                                                            <p>user</p>
                                                            <p>SE01003</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                          </div>
                                       </div>

                                      </div>
                                    <div>

                                </div> 
                              </div>  
                            </div>

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
      <?php include('footer.php');?>
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
