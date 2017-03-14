<?php 
include_once ('connection.php');

          // admin query ...
         $current_user_id = $_SESSION['SESS_USER_ID'];                                       
         $current_sql = "SELECT * FROM user WHERE id = '$current_user_id' ";
         $current_result = mysqli_query($connection , $current_sql);
         $current_row = mysqli_fetch_array($current_result, MYSQLI_ASSOC);
		 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping-Express </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <script src='https://www.google.com/recaptcha/api.js'></script>


    <style>
        .fa-envelope-o , .badge , .bg-green{
          display:none !important;
        }

        .nav_title , .sidebar-footer , .left_col{
          background-color:#1C9A71 !important;
        }

        .sidebar-footer  a{
           background-color:rgba(23, 45, 68, 0.14) !important;
        }

        .sidebar-footer > a {
          color:#f7f7f7 !important;
        }

        .nav.side-menu>li.active>a {
            background: linear-gradient(rgba(51, 69, 86, 0), rgba(44, 66, 87, 0.05)),rgba(42, 63, 84, 0.05);
            box-shadow: rgba(0, 0, 0, 0.12) 0 1px 0;
        }

        .nav-md ul.nav.child_menu li:after {
              border-left: 1px solid rgba(82, 104, 66, 0.46);
        }

        #menu_toggle{
          color:#1C9A71;
        }
        .nav-md  ul.nav.child_menu   li:before{
          background-color:rgba(82, 104, 66, 0.46) !important; 
        }

        .text-color{
          color:#1C9A71!important;
          font-size:20px;
          font-weight:bold;
          padding-left:4px;
        }

        .table.jambo_table thead {
            background: rgb(28, 154, 113);
            color: #ECF0F1;
        }

       body, .container .main_container, .body {
          background-color: #1C9A71 !important;
        }

        .site_title {
          background-color: #f7f7f7 !important;
      }

      .logo{
        display:inline-block !important;
        width:30px;
        height:30px;
      }

      .welcome{
            color: beige !important;
      }

      .nav-sm ul.nav.child_menu{
        background-color:#1C9A71 !important;
      }
	  .x_panel{
        min-height:500px;
      }

     .well{
    min-height: 200px;
    padding-top: 60px;
      } 
    </style>
  </head>

  <body class="nav-md">
    <div class="container body" >
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"> <img src="images/logo.png" class="img-responsive logo" ><span class="text-color">Shopping Express</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                 <?php 
                  if($current_row['gender'] == 'Male'){
					  
                      echo '<img src="images/profile_boy.png" alt="..." class="img-circle profile_img">'   ;
                  }
                  else
				  {   
                    echo '<img src="images/female_avatar.png" alt="..." class="img-circle profile_img">'; 
                  }
                
                ?>
              </div>
              <div class="profile_info">
                <span class="welcome">Welcome,</span>
                <h2><?php echo ucfirst($current_row['name']) ; ?></h2> 
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
				
					<li><a href="home.php"><i class="fa fa-home"></i> Home </a>  </li>
					<li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="profile.php">Profile</a></li>
						 
						   
						</ul>
					</li>
				<?php 
                     
                  if($_SESSION['SESS_ROLE'] == 'admin'){
               
                ?>
					<li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						 <!--  <li><a href="adduser.php">Add User</a></li> -->
						  <li><a href="viewuser.php">Approve Users</a></li>
						  <li><a href="user.php">Users</a></li>
						</ul>
					</li>
			
					<li><a><i class="fa fa-briefcase"></i> Packages <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
						  <li><a href="package.php">Add Packages</a></li>
						  <li><a href="viewpackage.php">View Packages</a></li>
						</ul>
					</li>
					
					<li><a href="epin.php"><i class="fa fa-key"></i> E-Pin </a></li>
					
					<li><a href="report.php"><i class="fa fa-list-alt"></i> Report </a></li>
					
				<?php    } ?>


					
					
					
					<?php  if($_SESSION['SESS_ROLE'] !='admin' ){   ?>
					<li><a href="list-downline.php"><i class="fa fa-list"></i>List Downline </a></li>
					 <li><a href="income.php"><i class="fa fa-money"></i>Earnings</a></li> <?php   } ?>
<?php  if($_SESSION['SESS_ROLE'] == 'admin' ){   ?><li><a href="earning.php"><i class="fa fa-money"></i>Earnings</a></li> <?php    } ?>					
					
					<?php  if($_SESSION['SESS_ROLE'] == 'admin'){   ?>
					<li><a href="payment.php"><i class="fa fa-credit-card-alt"></i>Payment</a></li>
						<?php    } ?>	
						
				</ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php 
                      
                        
                          if($current_row['gender'] == 'Male'){

                              echo '<img src="images/profile_boy.png" alt="..." >'   ;
                          }

                          else{

                              echo '<img src="images/female_avatar.png" alt="..." >'  ; 

                          }

                        ?>
                      <?php  
                          echo ucfirst($current_row['name']);
                        ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                   
                    <li><a href="changepsw.php">Chage Password</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>  
 
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span> 
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
		