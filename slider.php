<?php
require_once("class.user.php");
$user = new USER();
$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='chairperson'");
$stmt->execute();
$chairpersonRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
$m = array('admin/uploads/');
?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <title>TUK ELECTIONS</title>
    <?php include 'inc.php'?>
    <link rel="stylesheet" href="home.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="admin/assets/scss/socials.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#fffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <link rel="stylesheet" href="slider.css">
    <style>

    </style>
</head>
<!--<body xmlns="http://www.w3.org/1999/html">-->


<!--
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">

    </div>
</nav>-->

<div style="width: 100%;text-align: ;color: white;background-color: blanchedalmond" class="">
    <ul style="text-align: center;color: grey" class="nav">
        <li style="text-align: center; margin-left: -5px;font-size: 18px " role="presentation" class="nav navbar-btn col-xs-2"><a href="index.php">Home <i class="fa fa-home"></i></a></li>
        <li style="text-align: center; margin-left: -3px;font-size: 18px " role="presentation" class="nav navbar-btn col-xs-2"><a href="login.php">Login & Vote <i class="fa fa-sign-in"></i></a></li>
        <li style="text-align: center; margin-left: -3px;font-size: 18px " role="presentation" class="nav navbar-btn col-xs-2"><a href="checkresults.php">Results <i class="fa fa-paper-plane-o"></i></a></li>
        <li style="text-align: center; margin-left: 5px;font-size: 18px " role="presentation" class="nav navbar-btn col-xs-2"><a href="adminlog.php">Admin <i class="fa fa-user"></i></a></li>
        <li style="text-align: center; margin-left: -1px;font-size: 18px" role="presentation" class="nav navbar-btn col-xs-2"><a href="contestants.php">Contestants list <i class="fa fa-users"></i></a></li>
    </ul>
</div>

<div>
    <div class="as" id="sa"><!--div head icon/pic open-->
        <img src="uipics/tukenya.png">

    </div><!--div head icon close-->

    <div class="container" id="main"><!--main container div-->


        <!-- carousel trial-->

        <div style="height: 500px;margin-top: 10px" id="carousel0" class="carousel slide col-md-6" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <a class="carousel-control left" href="#myCarousel0" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>

                <a class="carousel-control right" href="#myCarousel0" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active jumbotron" id="carousel0"><!--carousel item active open-->
                    <h4><b>Chairperson</b></h4>
                    <?php
                    foreach ($chairpersonRow as $Row)  {
                    ?>
                    <div><img style="width: 800px;height:440px;object-fit: cover;" class="img-rounded img-responsive" src="admin/uploads/<?php echo $Row['userimg_url']?>"></div>


                </div>

                <div class="item jumbotron" id="carousel0"><!--carousel item active open-->
                    <h4><b>Chairperson</b></h4>

                    <div><img style="width: 800px;height:440px;object-fit: cover;" class="img-rounded img-responsive" src="admin/uploads/<?php echo $Row['userimg_url']?>"></div>
                    <?php   }
                    ?>
                </div>
            </div>
            <!-- Controls -->
            <li class="left carousel-control" href="#myCarousel0" data-slide="prev">
                <span class="icon-prev"></span>
            </li>
            <li class="right carousel-control" href="#myCarousel0" data-slide="next">
                <span class="icon-next"></span>
            </li>
        </div>


        <script>
            $m = array('admin/uploads/');
            onload=function(){

                $(document).ready(function () {
                    for (var i = 0; i < m.length; i++) {
                        $('<div class="item"><img src="admin/uploads/' + m[i] + '"><div class="carousel-caption"></div>   </div>').appendTo('' +
                            '.carousel-inner');
                        $('<li data-target="#carousel0" data-slide-to="' + i + '"></li>').appendTo('.carousel-indicators')

                    }
                    $('.item').first().addClass('active');
                    $('.carousel-indicators > li').first().addClass('active');
                    $('#myCarousel0').carousel({
                        interval: 5000
                    });
                });
            }
        </script>
    </div>


    <!--end of trial-->
    <!--responsive image aligning-->

        <!--main carousel div open for Deputy chairman-->



    </div><!--div main container close-->
</div>
<div style="padding-top: -12px;background-color: black;height: 105px" class=" modal-footer">
    <p style="text-align: center;font-size: 22px" class="col-md-6">
        <a  href="https://www.facebook.com/Technical-University-of-Kenya-521080071256112/" target="_blank"><i style="text-align: center;color: #3b5998;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-facebook"></i></a>&nbsp;&nbsp;
        <a href="https://twitter.com/TU_Kenya?lang=en" target="_blank"><i style="text-align: center;color: #00aced;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.linkedin.com/in/technical-university-of-kenya-library-31968484/" target="_blank"><i style="text-align: center;color: #4875b4;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.youtube.com/channel/UCIXSdHCnWl8DIzvyjzFuMJw" target="_blank"><i style="text-align: center;color: #b00;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-youtube"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/explore/locations/216328002/technical-university-of-kenya/" target="_blank"><i style="margin-top: 5px;text-align: center;color:  #bc2a8d;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-instagram"></i></a>
    </p>
    <p style="margin-top: 14px;text-align: center;margin-left: -30px;margin-right: -14px; color:lightgrey" class="col-md-6">
        &nbsp;&nbsp;&copy; <?php echo date("Y");?>, &nbsp;<i class="fa fa-institution"></i><a style="color: lightgrey" href="http://www.tukenya.ac.ke" title="Technical University of Kenya" target="_blank"><strong> Technical University of Kenya. </strong></a>
    </p>
</div>
<div class="footer"></div>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>

<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 10000
        });

    });
</script>
<script src="js/bootstrap.min.js"></script>
