<?php
if (!$_SESSION['user_session']){
	header("Location: ../user/");	
}
$username = $_SESSION['user_session'];

$query = mysql_query("select * from user where username='$username'");
$row = mysql_fetch_array($query);
extract($row);

if(file_exists("../media/".$image) && $image!="")
	$displayImage = "../media/".$image;
else
	$displayImage = "../include/images/no-image.jpg";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inbite</title>
    <!-- Favicon-->
    <link rel="icon" href="../include/md/inbite.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../include/md/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Multi Select Css -->
	<link href="../include/md/plugins/multi-select/css/multi-select.css" rel="stylesheet">
	
	<!-- Bootstrap Spinner Css -->
	<link href="../include/md/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
	
    <!-- Sweetalert Css -->
    <link href="../include/md/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
	
	<!-- Bootstrap Tagsinput Css -->
	<link href="../include/md/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
	
	<!-- Bootstrap Select Css -->
	<link href="../include/md/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
	
	<!-- noUISlider Css -->
	<link href="../include/md/plugins/nouislider/nouislider.min.css" rel="stylesheet">
	
    <!-- Waves Effect Css -->
    <link href="../include/md/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../include/md/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../include/md/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../include/md/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../include/md/css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-green">
    <!-- Page Loader
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
		<form action="../profile/" method="GET">
        <input type="text" name="search" placeholder="START TYPING...">
		<input type="hidden" name="view" value="searchResult">
		</form>
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Inbite</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count"><?=countNotification($username);?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <?php include 'snippetNotification.php';?>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../media/<?=$displayImage;?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=fullname($username)?></div>
                    <div class="email"><?=$email?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../profile/?user=<?=$username?>"><i class="material-icons">person</i>View Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="../user/process.php?action=logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="../home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../home/?view=add">
                            <i class="material-icons">home</i>
                            <span>Post</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="../like">
                            <i class="material-icons">home</i>
                            <span>Likes</span>
                        </a>
                    </li>
                    <li>
                        <a href="../follow/?view=follower">
                            <i class="material-icons">home</i>
                            <span>Followers</span>
                            <span><?=countFollowers($username);?></span>
                        </a>
                    </li>
                    <li>
                        <a href="../follow/?view=following">
                            <i class="material-icons">home</i>
                            <span>Following</span>
                            <span><?=countFollowing($username);?></span>
                        </a>
                    </li>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">Inbite Powered by Hyndrance</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
 
		<?php include $content;?>
 
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../include/md/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../include/md/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../include/md/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../include/md/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../include/md/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../include/md/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../include/md/plugins/raphael/raphael.min.js"></script>
    <script src="../include/md/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../include/md/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../include/md/plugins/flot-charts/jquery.flot.js"></script>
    <script src="../include/md/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../include/md/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../include/md/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../include/md/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../include/md/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="../include/md/js/admin.js"></script>
    <script src="../include/md/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../include/md/js/demo.js"></script>
	
    <!-- Light Gallery Plugin Js -->
    <script src="../include/md/plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="../include/md/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../include/md/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../include/md/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../include/md/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../include/md/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../include/md/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../include/md/plugins/nouislider/nouislider.js"></script>

</body>
</html>