<?php

require_once("class.user.php");
$user = new USER();
$output = '';

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='chairperson'");
$stmt->execute();
$chairpersonRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='deputy chairperson'");
$stmt->execute();
$deputychairRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='secretary general'");
$stmt->execute();
$secgeneralRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='finance secretary'");
$stmt->execute();
$financesecRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='constitutional affairs secretary'");
$stmt->execute();
$constitutionalsecRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='academic secretary'");
$stmt->execute();
$academicsecRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='gender affairs secretary'");
$stmt->execute();
$gendersecRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $user->runQuery("SELECT * FROM contestants WHERE user_position='special needs secretary'");
$stmt->execute();
$specialsecRow=$stmt->fetchAll(PDO::FETCH_ASSOC);

//search code for contestants

if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $stmt = $user->runQuery("SELECT * FROM contestants WHERE user_firstname LIKE '%$searchq%' OR user_lastname LIKE '%$searchq%'");
    $count = $stmt = $user->runQuery("SELECT count(*) as count FROM contestants");
    $result = $stmt->fetchAll();
    $count = $result[0];


    if ($count <= 0){
        $output = "No matching records found";
    }else{
        while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
            $fname = $row['user_firstname'];
            $lname = $row['user_lastname'];
            $id = $row['id'];

            $output .= '<div> '.$fname.' '.$lname.'</div>';

        }

    }
}

?>

<!doctype html>
<html lang="en">
<>
    <meta charset="utf-8">
    <meta name="Description" content="tuk,tukenya.ac.ke,Technical University of Kenya,tuk elections,tukelections,
    technical university of kenya elections,tuk online voting,tukvotes,technical university of Kenya votes">
    <title>Contestants</title>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="contestants.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#fffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <style>

        table, tr,  td {

            height: 50px;
            width: 90px;
            font-size: 16px;
            color:black ; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
        table, th{
            width: 20px;
            background-color: navajowhite;
        }

         tr {
             background-color: gainsboro;
             height: 40px;
        }

    </style>
</head>

<div style="background-color:navajowhite;width:100%" class="w3-row w3-bar">
    <a href="index.php" class="w3-bar-item w3-button" style="width:16.78%;margin-left: -9px"><b>Home <i class="fa fa-home"
        style="font-size:20px"></i></b></a>
    <a href="login.php " class="w3-bar-item w3-button" style="width:16.2%;margin-left: 2px"><b>LogIn To Vote <i class="fa fa-sign-in"
        style="font-size:20px"></i></b></a>
    <a href="checkresults.php" class="w3-bar-item w3-button" style="width:20.3%;margin-left: 3px"><b>Results <i class="fa fa-paper-plane-o"
        style="font-size:20px"></i></b></a>
    <a href="adminlog.php" class="w3-bar-item w3-button" style="width:19%;margin-right: -2px"><b>Admin <i class="fa fa-user"
       style="font-size:20px"></i></b></a>
    <a href="profiles.php" class="w3-bar-item w3-button" style="width:27.70%;margin-right: -2px"><b>Contestant Profiles <i class="fa fa-users"
       style="font-size:20px"></i></b></a>
</div>

<div class="as" id="sa"><!--div head icon/pic open-->
     <img src="uipics/tukenya.png" alt="">
</div>

<body>
<div class="container" id="main"><!--main container div-->

 <!-- translate language api -->
 <h4>
     <div id="google_translate_element"></div>
     <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
             }
      </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" rel="noopener"></script>
 </h4>
     <!--end of translate api-->

    <h3 style="text-align: center;color: black;padding-top: 10px;padding-bottom: 10px;font-family: -apple-system,BlinkMacSystemFont,
    'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Contestants List For This Election</h3>

     
<form  role="search">
        <div class="input-group">
             <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search">
                            <span class="sr-only">Search</span>
                        </span>
                    </button>
                </span>
            <input type="text" aria-label="search" class="form-control" placeholder="Search for contestant...">
        </div></form>
<!--
    <form action="index.php" method="post">
        <input type="text" name="search" placeholder="search contestants...">
        <input type="submit"  value=">>"
    </form>-->
    <?php print ("$output")?>

    <table class="table animated fadeIn">
        <h4 style="text-align: center" id="marv"> Chairperson Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($chairpersonRow as $Row)  {  ?>
        <tr>
            <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px;"  class="img-responsive img-rounded" src="admin/uploads/<?php
                echo
                $Row['userimg_url']?>" alt=""</td>
            <td><?php echo $Row['user_firstname'];?></td>
            <td><?php echo $Row['user_lastname'];?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>


    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black">Deputy Chairperson Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($deputychairRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black;">Secretary General Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($secgeneralRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px;"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black;">Finance Secretary Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($financesecRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black;">Constitutional Affairs Secretary Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($constitutionalsecRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black;">Academic Secretary Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($academicsecRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black;">Gender Affairs Secretary Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($gendersecRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <table class="table animated fadeIn">
        <h4 id="marv" style="text-align: center;color: black;">Special Needs Secretary Contestants</h4>
        <thead class="thead-dark">
        <tr>

            <th class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
            <th class="col-sm-4">Firstname</th>
            <th class="col-sm-4">Lastname</th>

        </tr>
        </thead>
        <tbody>
        <?php   foreach ($specialsecRow as $Row)  {  ?>
            <tr>
                <td><img style="width:90px;height:50px;margin: -2px 1px -4px 10px"  class="img-responsive img-rounded"
                         src="admin/uploads/<?php echo
                    $Row['userimg_url']?>" alt=""</td>
                <td ><?php echo $Row['user_firstname'];?></td>
                <td ><?php echo $Row['user_lastname'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


    <!--div 5th and the last row open-->
    <div class="row">
        <div class="container-fluid col-md-12">
            <div class="jumbotron col-md-4">
                <h4>Famous Quotes</h4>
                <img style="" class="img-circle" src="uipics/obama.jpg" alt="">―Barack Obama
                <h5>“There's no such thing as a vote that doesn't matter.”</h5>
            </div>
            <div class="jumbotron col-md-4">
                <h4>More Quotes</h4>
                <img class="img-circle" src="uipics/theodore.jpg" alt="">―Theodore Roosevelt
                <h5>“A vote is like a rifle: its usefulness depends upon the character of the user.”</h5>
            </div>
            <div class="jumbotron col-md-4">
                <h4>Another One</h4>
                <img class="img-circle" src="uipics/tbag.jpg" alt="">―Marvin Espira
                <h5>“We are the ones we've been waiting for. We are the change that we seek.”</h5>
            </div>
        </div><!--div 5th row close-->
</div><!--div close main container-->
</div>
<div style="padding-top: -12px;background-color: black;height: 105px" class=" modal-footer">
    <p style="text-align: center;font-size: 22px" class="col-md-6">
        <a  href="https://www.facebook.com/Technical-University-of-Kenya-521080071256112/" title="Facebook" target="_blank" rel="noreferrer"><i style="text-align: center;color: #3b5998;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-facebook"></i></a>&nbsp;&nbsp;
        <a href="https://twitter.com/TU_Kenya?lang=en" title="Twitter" target="_blank" rel="noreferrer"><i style="text-align: center;color: #00aced;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.linkedin.com/in/technical-university-of-kenya-library-31968484/" title="Linkedin" target="_blank" rel="noreferrer"><i style="text-align: center;color: #4875b4;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.youtube.com/channel/UCIXSdHCnWl8DIzvyjzFuMJw" title="Youtube" target="_blank" rel="noreferrer"><i style="text-align: center;color: #b00;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-youtube"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/explore/locations/216328002/technical-university-of-kenya/" title="Instagram" target="_blank" rel="noreferrer"><i style="margin-top: 5px;text-align: center;color:  #bc2a8d;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-instagram"></i></a>
    </p>
    <p style="margin-top: 14px;text-align: center;margin-left: -30px;margin-right: -14px; color:lightgrey" class="col-md-6">
        &nbsp;&nbsp;&copy; <?php echo date("Y");?>, &nbsp;<i class="fa fa-institution"></i><a style="color: lightgrey" href="http://www.tukenya.ac.ke" title="Technical University of Kenya" target="_blank" rel="noreferrer">
            <strong> Technical University of Kenya. </strong></a>
    </p>
</div>
<div class="footer"></div>

</body>
</html>
