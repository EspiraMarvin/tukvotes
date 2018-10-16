<?php
session_start();
require_once("class.user.php");
$user = new USER();

$login = new USER();
if ($login->is_loggedin()!="")
{
    $login->redirect('results.php');
}

if (isset($_POST['login']))
{
    $admno = strip_tags($_POST['admno']);
    $upass = strip_tags($_POST['upass']);

    if ($login->doLogin($admno,$upass))
    {
        $login->redirect('results.php');
    }
    else
    {
        $error = "Wrong Details !";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Results</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
</head>

<body>
<div class="form animated zoomIn">

    <div class="tab-content">

        <div id="check-results">
            <h1>Check Results&nbsp;<i class="fa fa-lock"></i></h1>

            <form id="check" action="checkresults.php" method="post">

                <?php
                if(isset($error))
                {
                    ?>
                    <div  style="text-align: center" class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                    </div>
                    <?php
                }
                ?>

                <div class="field-wrap">
                    <span><input type="text" required autocomplete="on" placeholder="&nbsp;Admission Number *" name="admno"></span>
                </div>

                <div class="field-wrap">
                    <span><input type="password" required autocomplete="on" placeholder="&nbsp;Password *" name="upass"></span>
                </div>

                <!--  <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>-->

                <button type="submit" class="button button-block" name="login">Results <i class="glyphicon glyphicon-log-in"></i></button>
            </form>
            <div class="mimi">
                <a href="index.php"><button class="button button-block">Home<i class="glyphicon glyphicon-home"></i></button></a>
            </div>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
</body>
</html>