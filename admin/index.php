<?php
require_once ("../admsession.php");

require_once("../class.user.php");
$user = new USER();

$user_id = $_SESSION['admin_session'];

$stmt = $user->runQuery("SELECT * FROM admin WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT count(*) as total_voters FROM users");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$total_voters = $row['total_voters'];


$stmt = $user->runQuery("SELECT count(*) as total_contestants FROM contestants");
$stmt->execute();
$contestantrow = $stmt->fetch(PDO::FETCH_ASSOC);
$total_contestants = $contestantrow['total_contestants'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Administrator</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <!-- <link rel="manifest" href="../favicon/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#fffff">
    <!-- <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"> -->
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--<link rel="stylesheet" href="assets/css/normalize.css">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
 <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h4>Tukenya Admin</h4></a>
                <a class="navbar-brand hidden" href="./"><img style="margin-left: -8px" src="../favicon/favicon-32x32.png" width="32" height="32" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">UI elements</li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="studentstable.php">Students Table</a></li>
                            <li><i class="fa fa-table"></i><a href="contestantstable.php">Contestants Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="studentsform.php">Students Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="contestantsform.php">Contestants Form</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="adminregister.php">Register</a></li>
                            <!--<li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i  style="margin-top: 4px" class="fa fa-user fa-2x"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a style="background-color: antiquewhite;font-size: 20px;text-align: center" class="nav-link" href="../logout.php?logout=true"><b>LogOut</b> &nbsp;<i class="fa fa-power-off"></i></a>

                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <img class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        <img style="margin-top: -4px" src="../favicon/favicon-32x32.png" width="32" height="22">
                            <i  class="flag-icon flag-icon-ke"></i>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <a href="index.php"><h1 style="color:black;">Dashboard</h1></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">

            <div class="col-sm-9 offset-sm-1">
                <div class="animated bounce alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success"></span> <label class="h6 ">Welcome : <?php print strtoupper($userRow['user_name']); ?></label>
                    <hr />
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

           <div class="col-sm-5 col-lg-4 offset-sm-1">
                <div class="card text-white bg-flat-color-1">
                    <div  style="height: 150px;" class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div><br>
                        <h4 class="mb-0">
                            <span class=""><?php echo $row['total_voters']; ?></span>
                        </h4>
                        <p  class="text-light">Number of voters</p>

                    </div>
                </div>
            </div>

            <!--/.col-->

            <div class="col-sm-5 col-lg-4 offset-sm-1">
                <div  class="card text-white bg-flat-color-2">
                    <div style="height: 150px;" class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div><br>
                        <h4 class="mb-0">
                            <span  class=""><?php echo $contestantrow['total_contestants']; ?></span>
                        </h4>
                        <p  class="text-light">Number of contestants</p>


                   </div>
                </div>
            </div>
            <!--/.col-->
        </div>

       <div  class="col-sm-9 offset-sm-0 offset-sm-1">
           <div  class="card">
                <div class="card-body">
                    <div class="stat-widget-four">
                        <div  class="stat-icon dib">
                            <i class="ti-server text-muted"></i>
                        </div>
                         <div class="stat-content">
                            <div class="text-left dib">
                              <div class="stat-heading">Database</div>
                              <div class="stat-text">Total: &nbsp;<?php echo $row['total_voters'] += $contestantrow['total_contestants']
                               ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center;margin-top: 10px"  class="col-md-12 blockquote-footer form-group">
            <p>&copy; <?php echo date("Y");?>,Technical University of Kenya</p>
        </div>
        </div> <!-- .content -->

</body>
<!--<script src="assets/js/main.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script> -->
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard.js"></script>


</html>
