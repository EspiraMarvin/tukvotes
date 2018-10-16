<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<title>VOTE</title>

<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#fffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
</head>
<br><br><br><br><br>
<div class="as" id="sa"><!--div head icon/pic open-->

    <h4>
        <!--script to display current time-->
        <script>
            function display_c(){
                var refresh=1000; // Refresh rate in milli seconds
                mytime=setTimeout('display_ct()',refresh)
            }

            function display_ct() {
                var strcount
                var x = new Date()
                // var x1=x.toUTCString();
                document.getElementById('ct').innerHTML = x;
                tt=display_c();
            }

        </script>
        <body onload=display_ct();>
        <span id='ct' ></span></body>

    </h4>
    <p>Voting Ends At 10pm!!</p>
</div><!--div head icon close-->