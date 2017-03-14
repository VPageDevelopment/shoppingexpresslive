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



/*
include('mlmbinary.class.php');

$mbinary = new mlmBinary();

$recordID = empty($_GET['id']) ? null : $_GET['id'];

$currentRep = ( $recordID ) ? $mbinary->rRep($recordID) : null;

if( !empty($_REQUEST['formPosted']) ){
    
    switch( $_REQUEST['action'] ){
        case 'getRep':
            if( !empty($_REQUEST['repID']) ){
                
                $currentRep = $mbinary->rRep($_REQUEST['repID'],false);
                $recordID = ( empty($currentRep) ) ? 0 : $currentRep->recordID;
                
            }elseif( !empty($_REQUEST['recordID']) ){
                
                $currentRep = $mbinary->rRep($_REQUEST['recordID']);
                $recordID = ( empty($currentRep) ) ? 0 : $currentRep->recordID;
                
            }
            break;
        case 'updateRep':
            $mbinary->uRep($_REQUEST['recordID'],$_REQUEST['name'],$_REQUEST['repID'],$_REQUEST['sponsorID'],$_REQUEST['leg']);
            $currentRep = $mbinary->rRep($_REQUEST['recordID']);
            $recordID = $_REQUEST['recordID'];
            break;
        case 'addRep':
            $mbinary->cRep($_REQUEST['name'],$_REQUEST['repID'],$_REQUEST['sponsorID'],$_REQUEST['leg']);
            $currentRep = $mbinary->rRep($_REQUEST['sponsorID']);
            $recordID = $_REQUEST['sponsorID'];
            break;
        case 'addPrim':
            $recordID = $mbinary->cRep($_REQUEST['name'],$_REQUEST['repID'],$_REQUEST['sponsorID'],$_REQUEST['leg']);
            $currentRep = $mbinary->rRep($recordID);
            break;
        case 'addSpill':
            $recordID = $mbinary->cRepSpill($_REQUEST['name'],$_REQUEST['repID'],$_REQUEST['sponsorID']);
            $currentRep = $mbinary->rRep($recordID);
            break;
        case 'swapRep':
            $mbinary->swapReps($_REQUEST['recordID']);
            $currentRep = $mbinary->rRep($_REQUEST['recordID']);
            $recordID = $_REQUEST['recordID'];
            break;
        case 'delRep':
            if( !empty($_REQUEST['repID']) ){
                
                $recordID = $mbinary->dRep($_REQUEST['recordID'],$_REQUEST['repID'],false);
                
            }else{
                
                $recordID = $mbinary->dRep($_REQUEST['recordID'],$_REQUEST['sponsorID']);
                
            }
            $currentRep = $mbinary->rRep($recordID);
            break;
    }
    
}
 */
?>





  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Earnings</h3>
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
                    <h2>Earnings</h2>
                    <!--<ul class="nav navbar-right panel_toolbox">
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
                    </ul>-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="container">
                        <div class="row">

                            <div class=" col-lg-12">

                                <div class="table-responsive">
                                  <table id="example" class="table table-striped responsive-utilities jambo_table">
                                    <thead class="heading">
                                      <tr>
                                          <th>S.no</th>
                                          <th>Day Balances</th>
                                          <th>Current Balances</th>
                                          <th>Total Balances</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                          $sql = "select * from user where id='$userid'";
                                          $query = mysqli_query($connection ,$sql);
                                          $row = mysqli_fetch_array($query);
                                          $logged_in_userid = $row['userid'];
                                          

                                          $sql = "select * from income where userid='$logged_in_userid'";
                                          $query = mysqli_query($connection ,$sql);
                                          $row = mysqli_fetch_array($query);

                                          $day_balances = $row['day_bal'];
                                          $current_balance = $row['current_bal'];
                                          $total_balance = $row['total_bal'];


                                         $sql = "select * from user where sponserid in(select id from user where sponserid = 77 and position = 0 ) or sponserid = 77 and position = 0;";

                                         $query = mysqli_query($connection , $sql);
                                         
                                         $i = 1;

                                      ?>


                                          <tr>
                                              <td>1</td>
                                              <td><?php echo  $day_balances ?></td>
                                              <td><?php echo $current_balance ?></td>
                                              <td><?php echo $total_balance; ?></td>
                                          </tr>

                                  
                                          


                                    </tbody>

                                  </table>
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
	   <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
