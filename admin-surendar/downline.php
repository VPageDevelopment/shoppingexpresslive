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



<!-- THEME TEMPLATE-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


    <style>
      .img-avt{
        width:50px;
        height:50px;
        margin-top:30px;
        border-radius:50%;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Registration Tree Page</h3>
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
                    <h2>Registration Tree Page</h2>
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
                              <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class=" row text-center" >
                                      <div class="col-lg-offset-3 col-lg-6">
                                        <img src="images/img.jpg" class="img-avt" alt="">
                                        <p>user</p>
                                        <p>SE01001</p>
                                      </div>

                                      <div class="row" id="child-element">
                                          <div class=" col-lg-6">
                                            <img src="images/img.jpg" class="img-avt" alt="">  
                                            <p>user</p>  
                                            <p>SE01002</p>      

                                            <div class="row" id="child-element">
                                                <div class=" col-lg-6">
                                                  <img src="images/img.jpg" class="img-avt" alt="">  
                                                  <p>user</p>  
                                                  <p>SE01002</p>     

                                                    <div class="row" id="child-element">
                                                      <div class=" col-lg-6">
                                                        <img src="images/img.jpg" class="img-avt" alt="">  
                                                        <p>user</p>  
                                                        <p>SE01002</p>                                   
                                                      </div>

                                                      <div class=" col-lg-6">
                                                        <img src="images/img.jpg" class="img-avt" alt="">
                                                        <p>user</p>
                                                        <p>SE01003</p>
                                                      </div>
                                                  </div>                              
                                                </div>

                                                <div class=" col-lg-6">
                                                  <img src="images/img.jpg" class="img-avt" alt="">
                                                  <p>user</p>
                                                  <p>SE01003</p>

                                                  <div class="row" id="child-element">
                                                    <div class=" col-lg-6">
                                                      <img src="images/img.jpg" class="img-avt" alt="">  
                                                      <p>user</p>  
                                                      <p>SE01002</p>                                   
                                                    </div>

                                                    <div class=" col-lg-6">
                                                      <img src="images/img.jpg" class="img-avt" alt="">
                                                      <p>SE01003</p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>                             
                                          </div>

                                          <div class=" col-lg-6">
                                            <img src="images/img.jpg" class="img-avt" alt="">
                                            <p>user</p>
                                            <p>SE01003</p>
                                                <div class="row" id="child-element">
                                                    <div class=" col-lg-6">
                                                      <img src="images/img.jpg" class="img-avt" alt="">  
                                                      <p>user</p>  
                                                      <p>SE01002</p>       
                                                      <div class="row" id="child-element">
                                                          <div class=" col-lg-6">
                                                            <img src="images/img.jpg" class="img-avt" alt="">  
                                                            <p>user</p>  
                                                            <p>SE01002</p>                                   
                                                          </div>

                                                          <div class=" col-lg-6">
                                                            <img src="images/img.jpg" class="img-avt" alt="">
                                                            <p>user</p>
                                                            <p>SE01003</p>
                                                          </div>
                                                      </div>                            
                                                    </div>

                                                    <div class=" col-lg-6">
                                                      <img src="images/img.jpg" class="img-avt" alt="">
                                                      <p>user</p>
                                                      <p>SE01003</p>
                                                      <div class="row" id="child-element">
                                                          <div class=" col-lg-6">
                                                            <img src="images/img.jpg" class="img-avt" alt="">  
                                                            <p>user</p>  
                                                            <p>SE01002</p>                                   
                                                          </div>

                                                          <div class=" col-lg-6">
                                                            <img src="images/img.jpg" class="img-avt" alt="">
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
