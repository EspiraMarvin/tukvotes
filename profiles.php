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
    <meta name="Description" content="tuk,tukenya.ac.ke,Technical University of Kenya,tuk elections,tukelections,
    technical university of kenya elections,tuk online voting,tukvotes,technical university of Kenya votes">
    <title>Profiles</title>
    <?php include 'inc.php'?>
    <link rel="stylesheet" href="w3.css">
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

<style>

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

<div>
    <div class="as" id="sa"><!--div head icon/pic open-->
        <img src="uipics/tukenya.png">

    </div><!--div head icon close-->

<div class="container" id="main"><!--main container div-->

 <!-- translate language api -->
 <h4><div id="google_translate_element"></div><script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
             }
         </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     </h4>
     <!--end of translate api-->

    <h3 style="text-align: center;color: black;padding-top: 10px;padding-bottom: 15px;font-family: -apple-system,BlinkMacSystemFont,
    'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Contestants Profiles and Manifestos</h3>


<div class="row"><!-- div 1st row>-->

    <div id="myCarousel" class="carousel slide col-md-6 ">   <!--main carousel div open for chairman-->

        <div class="carousel-inner"><!--div carousel inner for chairman open-->

            <!--creating div for each item for the carousel-->
            <div class="item active jumbotron" id="chairman"><!--carousel item active open-->
                <h4><b>Chairperson</b></h4>
                <?php
                  foreach ($chairpersonRow as $Row)  {
                    ?>
                <div><img style="width: 800px;height:440px;object-fit: cover;" class="img-rounded img-responsive" src="admin/uploads/<?php echo $Row['userimg_url']?>"></div>
                <div><label>Name:</label><em>&nbsp;<?php echo $Row['user_firstname'];?> <?php echo $Row['user_lastname'];?></em><br></div>
                <div><label>Course:</label><em>&nbsp;<?php echo $Row['user_course']?></em><br></div>
                <div><label>Manifesto:</label><em>&nbsp;<?php echo $Row['user_manifesto']?><br>
                        Vote<b> @<?php echo $Row['user_lastname'];?> </b></em></div>
                <?php
                ?>
            </div><!--carousel item active close-->
            <?php
           // $secondRow = array_slice($chairpersonRow,1,true);
            //foreach ($secondRow as $Row)  {

            ?>
           <div class="item jumbotron" id="chairman2" ><!--div carousel item two open-->
                <h4><b>Chairperson</b></h4>

               <div><img style="width: 800px;height:440px;object-fit: cover;" class="img-rounded img-responsive" src="admin/uploads/<?php echo $Row['userimg_url']?>">
                <label>Name:</label><em>&nbsp;<?php echo $Row['user_firstname'];?> <?php echo $Row['user_lastname'];?></em><br>
                <label>Course:</label><em>&nbsp;<?php echo $Row['user_course']?></em><br>
                <label>Manifesto:</label><em>&nbsp;<?php echo $Row['user_manifesto']?><br>
                    Vote<b> @<?php echo $Row['user_lastname'];?></b></em>
                 </div>
               <?php
                      }
                      ?>
            </div>               <!--div carousel item two close-->

            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>

            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>


        </div><!--div carousel inner for chairman close-->
    </div><!--main carousel div for chairman close-->

    <!--main carousel div open for Deputy chairman-->
    <div id="myCarousel1" class="carousel slide col-md-6">


        <div class="carousel-inner"><!--div carousel inner for deputy chairman open-->

            <!--creating div for each item for the carousel-->
            <div class="item active jumbotron" id="deputychair"><!--carousel item active open-->
                <h4><b>Deputy Chairperson</b></h4>
                <img class="img-responsive" src=<?php echo implode( ' ', array_slice( $b1, 2, 1)); ?>>
                <label>Name:</label><em><?php echo implode( ' ', array_slice( $b1, -3, 2)); ?></em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @quavo</b></em>
            </div><!--carousel item active close-->

            <div class="item jumbotron" id="deputychair2"><!--div carousel item two open-->
                <h4><b>Deputy Chairperson</b></h4>
                <img class="img-responsive" src=<?php echo implode( ' ', array_slice( $b2, 2, 1)); ?>>
                <label>Name:</label><em><?php echo implode( ' ', array_slice( $b2, -3, 2)); ?></em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @offset</b></em>

            </div>               <!--div carousel item two close-->

            <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
                <span class="icon-prev"></span>
            </a>

            <a class="carousel-control right" href="#myCarousel1" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </div><!--div carousel inner for deputy chairman close-->
    </div><!--main carousel div for deputy chairman close-->
</div><!--div 1st row close-->

<!--div 2nd row open-->
<div class="row">
    <div id="myCarousel2" class="carousel slide col-md-6"><!--main carousel div open for secretary general-->


        <div class="carousel-inner"><!--div carousel inner for finance chair  open-->
            <div class="item active jumbotron" id="secgen"><!-- div open item active-->
                <h4><b>Secretary General</b></h4>
                <img class="img-responsive" src="takeoff.jpg">
                <label>Name:</label><em>Takeoff Khari</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @takeoff</b></em>
            </div><!--div close item active-->

            <div class="item jumbotron" id="secgen2"><!--div open item two-->
                <h4><b><b>Secretary General</b></h4>
                <img class="img-responsive" src="kodak.jpg">
                <label>Name:</label><em>Kodak Black</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @kodak</b></em>
            </div><!--div close item two-->

            <a class="carousel-control left" href="#myCarousel2" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel2" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div><!--div carousel inner for  secretary general close-->
    </div><!--main carousel div for secretary general chair close-->

    <!--main carousel div open for Gender Chair-->
    <div id="myCarousel3" class="carousel slide col-md-6">

        <div class="carousel-inner"><!--div carousel inner for Gender chair open-->

            <!--creating div for each item for the carousel-->
            <div class="item active jumbotron  " id="finance"><!--carousel item active open-->
                <h4><b>Finance Secretary</b></h4>
                <img class="img-responsive" src="dualipa2.jpg">
                <label>Name:</label><em>Dua Lipa</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Lipa</b></em>
            </div><!--carousel item active close-->

            <div class="item jumbotron" id="finance2"><!--div carousel item two open-->
                <h4><b>Finance Secretary</b></h4>
                <img class="img-responsive" src="sasha.jpg">
                <label>Name:</label><em>Sasha Banks</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore, vote<b> @Banks</b></em>

            </div>               <!--div carousel item two close-->

            <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
                <span class="icon-prev"></span>
            </a>

            <a class="carousel-control right" href="#myCarousel3" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </div><!--div carousel inner for finance sec close-->
     </div><!--main carousel div for finance sec close-->
  </div><!--div 2nd row close-->

   <!--div 3rd row-->
    <div class="row">
    <div id="myCarousel4" class="carousel slide col-md-6"><!--main carousel div open for secretary general-->


        <div class="carousel-inner"><!--div carousel inner for  Constitutional Affairs Secretary  open-->
            <div class="item active jumbotron" id="ConstitutionalAffairsSecretary"><!-- div open item active-->
                <h4><b>Constitutional Affairs Secretary</b></h4>
                <img class="img-responsive" src="kevinspacey.jpg">
                <label>Name:</label><em>Kevin Spacey</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Spacey</b></em>
            </div><!--div close item active-->

            <div class="item jumbotron" id=" ConstitutionalAffairsSecretary2"><!--div open item two-->
                <h4><b>Constitutional Affairs Secretary</b></h4>
                <img class="img-responsive" src="raymond.png">
                <label>Name:</label><em>Raymond Reddington</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Reddington</b></em>
            </div><!--div close item two-->

            <a class="carousel-control left" href="#myCarousel4" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel4" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div><!--div carousel inner for   Constitutional Affairs Secretary close-->
    </div><!--main carousel div for  Constitutional Affairs Secretary close-->

    <!--main carousel div open for  Academic Secretary-->
    <div id="myCarousel5" class="carousel slide col-md-6">


        <div class="carousel-inner"><!--div carousel inner for Academic Secretary open-->

            <!--creating div for l8each item for the carousel-->
            <div class="item active jumbotron  " id="AcademicSecretary"><!--carousel item active open-->
                <h4><b>Academic Secretary</b></h4>
                <img class="img-responsive" src=<?php echo implode( ' ', array_slice( $f1, 2, 1)); ?>>
                <label>Name:</label><em><?php echo implode( ' ', array_slice( $f1, -3, 2)); ?></em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Uzi</b></em>
            </div><!--carousel item active close-->

            <div class="item jumbotron" id="AcademicSecretary2"><!--div carousel item two open-->
                <h4><b>Academic Secretary</b></h4>
                <img class="img-responsive" src=<?php echo implode( ' ', array_slice( $f2, 2, 1)); ?>>
                <label>Name:</label><em><?php echo implode( ' ', array_slice( $f2, -3, 2)); ?></em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore, vote<b> @Bryson</b></em>

            </div>               <!--div carousel item two close-->

            <a class="carousel-control left" href="#myCarousel5" data-slide="prev">
                <span class="icon-prev"></span>
            </a>

            <a class="carousel-control right" href="#myCarousel5" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </div><!--div carousel inner for Academic Secretary close-->
    </div><!--main carousel div for Academic Secretary close-->
   </div><!--div 3rd row close-->

   <!--div 4th row-->
   <div class="row">
    <div id="myCarousel6" class="carousel slide col-md-6"><!--main carousel div open for Gender Affairs Secretary-->


        <div class="carousel-inner"><!--div carousel inner for  Constitutional Affairs Secretary  open-->
            <div class="item active jumbotron" id="GenderAffairsSecretary"><!-- div open item active-->
                <h4><b>Gender Affairs Secretary</b></h4>
                <img class="img-responsive" src="tori.jpeg">
                <label>Name:</label><em>Tori Kelly</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Kelly</b></em>
            </div><!--div close item active-->

            <div class="item jumbotron" id="GenderAffairsSecretary2"><!--div open item two-->
                <h4><b>Gender Affairs Secretary</b></h4>
                <img class="img-responsive" src="lilpump.jpg">
                <label>Name:</label><em>Lil Pump</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Pump</b></em>
            </div><!--div close item two-->

            <a class="carousel-control left" href="#myCarousel6" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel6" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div><!--div carousel inner for   Gender Affairs Secretary close-->
    </div><!--main carousel div for  Gender Affairs Secretary close-->

    <!--main carousel div open for  Academic Secretary-->
    <div id="myCarousel7" class="carousel slide col-md-6">


        <div class="carousel-inner"><!--div carousel inner for Academic Secretary open-->

            <!--creating div for l8each item for the carousel-->
            <div class="item active jumbotron  " id="SpecialNeedsSecretary"><!--carousel item active open-->
                <h4><b>Special Needs Secretary</b></h4>
                <img class="img-responsive" src="drake.jpg">
                <label>Name:</label><em>Drake Graham</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore,vote<b> @Graham</b></em>
            </div><!--carousel item active close-->

            <div class="item jumbotron" id="SpecialNeedsSecretary2"><!--div carousel item two open-->
                <h4><b>Special Needs Secretary</b></h4>
                <img class="img-responsive" src="lildicky.png">
                <label>Name:</label><em>Lil Dicky</em><br>
                <label>Course:</label><em>B.Tech Information Technology.</em><br>
                <label>Manifesto:</label><em>
                    Let us come together in this fight against poor leadership and understand the truth that sets us free.
                    This truth is none other than the ability to communicate our desires in freedom.<br>
                    Therefore, vote<b> @Dicky</b></em>

            </div>               <!--div carousel item two close-->

            <a class="carousel-control left" href="#myCarousel7" data-slide="prev">
                <span class="icon-prev"></span>
            </a>

            <a class="carousel-control right" href="#myCarousel7" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </div><!--div carousel inner for Special Needs Secretary close-->
    </div><!--main carousel div for Special Needs Secretary close-->
  </div><!--div 4th row close-->


 <!--div 5th and the last row open-->
  <div class="row">
    <div class="container-fluid col-md-12">
        <div class="jumbotron col-md-4">
            <h4>Famous Quotes</h4>
            <img class="img-circle" src="uipics/obama.jpg">―Barack Obama
            <h5>“There's no such thing as a vote that doesn't matter.”</h5>
        </div>
        <div class="jumbotron col-md-4">
            <h4>More Quotes</h4>
            <img class="img-circle" src="uipics/theodore.jpg">―Theodore Roosevelt
            <h5>“A vote is like a rifle: its usefulness depends upon the character of the user.”</h5>
        </div>
        <div class="jumbotron col-md-4">
            <h4>Another One</h4>
            <img class="img-circle" src="uipics/tbag.jpg">―Marvin Espira
            <h5>“We are the ones we've been waiting for. We are the change that we seek.”</h5>
        </div>
    </div><!--div 5th row close-->




</div><!--div main container close-->
</div>
<div style="padding-top: -12px;background-color: black;height: 105px" class=" modal-footer">
    <p style="text-align: center;font-size: 22px" class="col-md-6">
        <a  href="https://www.facebook.com/Technical-University-of-Kenya-521080071256112/" title="facebook" target="_blank" rel="noreferrer"><i style="text-align: center;color: #3b5998;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-facebook"></i></a>&nbsp;&nbsp;
        <a href="https://twitter.com/TU_Kenya?lang=en" title="twitter" target="_blank" rel="noreferrer"><i style="text-align: center;color: #00aced;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.linkedin.com/in/technical-university-of-kenya-library-31968484/" title="linkedin" target="_blank" rel="noreferrer"><i style="text-align: center;color: #4875b4;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.youtube.com/channel/UCIXSdHCnWl8DIzvyjzFuMJw" title="youtube" target="_blank" rel="noreferrer"><i style="text-align: center;color: #b00;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-youtube"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/explore/locations/216328002/technical-university-of-kenya/" title="instagram" target="_blank" rel="noreferrer"><i style="margin-top: 5px;text-align: center;color:  #bc2a8d;background-color: lightgrey;width: 3.0rem;line-height: 1.8;" class="img-circle fa fa-instagram"></i></a>
    </p>
        <p style="margin-top: 14px;text-align: center;margin-left: -30px;margin-right: -14px; color:lightgrey" class="col-md-6">
         &nbsp;&nbsp;&copy; <?php echo date("Y");?>, &nbsp;<i class="fa fa-institution"></i><a style="color: lightgrey" href="http://www.tukenya.ac.ke" title="Technical University of Kenya" target="_blank"><strong> Technical University of Kenya. </strong></a>
       </p>
</div>
<div class="footer"></div>

<script src='jquery.min.js'></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 10000
        });

    });
</script>
<script src="js/bootstrap.min.js"></script>
