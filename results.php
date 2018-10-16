<?php
/**
 * Created by PhpStorm.
 * User: Espiro
 * Date: 4/18/2018
 * Time: 6:45 PM
 */

require_once ("./session.php");

require_once("./class.user.php");
$user = new USER();

$user_id = $_SESSION['user_session'];

$stmt = $user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='chairperson'");
$stmt->execute();
$chairpersonRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='deputy chairperson'");
$stmt->execute();
$deputychairRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="tuk,tukenya.ac.ke,Technical University of Kenya,tuk elections,tukelections,
    technical university of kenya elections,tuk online voting,tukvotes,technical university of Kenya votes">
    <title>Results</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#fffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  style="font-size:28px; font-family: 'Lobster', serif" class="navbar-brand" href="">Election Results</a>
            <br><br>
            <h4 style="text-align: center; font-size:20px; background-color:black; color: yellow;font-family: 'Lucida Handwriting'">
                <div id="time"> <script>(function () {
                            function checkTime(i) {
                                return (i < 10) ? "0" + i : i;
                            }

                            function startTime() {
                                var today = new Date(),
                                    h = checkTime(today.getHours()),
                                    m = checkTime(today.getMinutes()),
                                    s = checkTime(today.getSeconds());
                                document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                                t = setTimeout(function () {
                                    startTime()
                                }, 500);
                            }
                            startTime();
                        })();</script></div>
            </h4>
            <h5 style="text-align:center; font-size:18px; font-family: 'Titillium Web', sans-serif"><em>Voting ends @ 2200hrs</em></h5>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="margin-top: 30px" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span style="font-size: 18px" class="glyphicon glyphicon-user"></span><em style="font-size: 18px">
                            &nbsp;&nbsp;<?php echo $userRow['user_admno']; ?>&nbsp; </em><span class="caret"></span></a>
                    <ul  class="dropdown-menu">
                        <li style="font-size: 20px;background-color: antiquewhite"><a href="logout.php?logout=true">&nbsp;
                                <b>&nbsp;&nbsp;&nbsp;LogOut</b>&nbsp;<span
                                    class="fa fa-power-off"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<br><br>

<div class="clearfix"></div>


<div class="container" style="margin-top:80px;width: 100%;">

    <div class="animated bounce">
        <label  class="col-xs-offset-1 h4">Welcome : <?php print strtoupper($userRow['user_lastname']);
            ?></label>
        <hr />
    </div>

    <div style="width: 100%" class="container-fluid col-sm-12" id="row">
        <div style="width: 100%;"  class="">

            <form action="vote.php" method="post">
                <table class="table animated fadeIn">
                    <h4 id="divv" style="text-align: center;color: black;">Chairperson Contestants</h4>
                    <thead class="thead-dark">
                    <tr>
                        <th class="col-sm-4">&nbsp;Firstname</th>
                        <th class="col-sm-4">&nbsp;Lastname</th>
                        <th class="col-sm-4">&nbsp;No. of Votes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php   foreach ($chairpersonRow as $Row)  {  ?>
                        <tr>
                            <td >&nbsp;<?php echo $Row['user_firstname'];?></td>
                            <td >&nbsp;<?php echo $Row['user_lastname'];?></td>
                            <td >&nbsp;<?php //echo ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
              <h6 style="font-size: 13px;text-align: center;margin-left:-60px"><b>Total Number of votes casted:</b></h6>
            </form><br>


            <form action="vote.php" method="post">
                <table class="table animated fadeIn">
                    <h4 id="divv" style="text-align: center;color: black;">Deputy Chairperson Contestants</h4>
                    <thead class="thead-dark">
                    <tr>
                        <th class="col-sm-4">&nbsp;Firstname</th>
                        <th class="col-sm-4">&nbsp;Lastname</th>
                        <th class="col-sm-4">&nbsp;No. of Votes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php   foreach ($deputychairRow as $Row)  {  ?>
                        <tr>
                            <td ><?php echo $Row['user_firstname'];?></td>
                            <td ><?php echo $Row['user_lastname'];?></td>
                            <td >&nbsp;<?php //echo ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <h6 style="font-size: 13px;text-align: center;margin-left:-60px"><b>Total Number of votes casted:</b></h6>
            </form><br>



        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>
