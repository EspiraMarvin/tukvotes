<?php
require_once ("../admsession.php");

require_once("../class.user.php");
$user = new USER();


if (isset($_POST['signup']))
{
    $fname = strip_tags($_POST['fname']);
    $lname = strip_tags($_POST['lname']);
    $admno = strip_tags($_POST['admno']);
    $upass = strip_tags($_POST['upass']);

    if ($fname==""){
        $error[] = "provide firstname !";
    }
    elseif ($lname==""){
        $error[] = "provide lastname !";
    }
    elseif ($admno==""){
        $error[] = "provide admission number !";
    }
    elseif ($upass==""){
        $error[] = "provide password !";
    }
    elseif (strlen($upass) < 6){
        $error[] = "Password must be atleast 6 characters";
    }
    else
    {
        try
        {
            $stmt = $user->runQuery("SELECT user_admno FROM users WHERE user_admno=:admno");
            $stmt->execute(array(':admno'=>$admno));
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['user_admno']===$admno){
                $error[] = "Sorry Admission Number Already Taken !";
            }
            else
           {
                if ($user->register($fname,$lname,$admno,$upass)){
                    $user->redirect('studentsform.php?joined');
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#fffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
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
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="studentsform.php">Register</a></li>
                        <!--<li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>-->
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel' -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>


                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"

                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i  style="margin-top: 4px" class="fa fa-user fa-2x"></i>
                    </a>

                    <div class="user-menu dropdown-menu">

                        <a style="background-color: antiquewhite;font-size: 20px;text-align: center" class="nav-link" href="../logout.php?logout=true"><b>LOGOUT</b> &nbsp;<i class="fa fa-power-off"></i></a>
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
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Students Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-10 offset-sm-1">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Students Registration Form</strong>
                        </div>
                        <div class="card-body">
                            <!-- First card -->
                            <div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">Insert Students</h3>
                                    </div>
                                    <hr>
                                    <form action="studentsform.php" method="post" >
                                        <?php
                                        if (isset($error)) {
                                            foreach ($error as $error) {
                                                ?>
                                                <div  style="text-align: center" class="alert alert-danger">
                                                    <i class="fa fa-warning"></i> <?php echo $error; ?>
                                                </div>
                                                <?php
                                            }
                                        }
                                        elseif (isset($_GET['joined'])) {
                                        ?>
                                        <div class="alert alert-info">
                                            <i class="fa fa-check"></i> Successfully registered</>
                                </div>
                                <?php
                                }
                                ?>
                                        <div class="form-group">
                                            <label  class="control-label mb-1">First Name</label>
                                            <input   type="text" class="form-control" name="fname" required placeholder="Firstname">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Last Name</label>
                                            <input  type="text" class="form-control" name="lname" required placeholder="Lastname" >
                                        </div>

                                        <div class="form-group">
                                            <label  class="control-label mb-1">Admission Number</label><br>
                                            <input  type="text" class="form-control" name="admno" required placeholder="Admission Number">
                                            <div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Password</label>
                                                <input  type="password" class="form-control" name="upass" required placeholder="Password">
                                            </div>
                                            <button id="payment-button" type="submit" name="signup" class="btn btn-lg btn-info btn-block">
                                                <span id="payment-button-amount">Submit</span>
                                                <i class="fa fa-send fa-lg"></i>&nbsp;
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </form>
                                    <a href="index.php"> <button class="btn btn-lg btn-info btn-block">
                                            <span id="payment-button-amount">Dashboard</span>
                                            <i class="fa fa-dashboard fa-lg"></i>&nbsp;
                                        </button></a>
                                </div>


                            </div>
                        </div>
                    </div> <!-- .card -->
                    <div style="text-align: center" class="blockquote-footer">
                        <p>&copy; <?php echo date("Y");?>,Technical University of Kenya</p>
                    </div>
                </div><!--/.col-->


                <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
                <script src="assets/js/popper.min.js"></script>
                <script src="assets/js/plugins.js"></script>
                <script src="assets/js/main.js"></script>


</body>
</html>