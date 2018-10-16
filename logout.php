<?php
/**
 * Created by PhpStorm.
 * User: Espiro
 * Date: 3/22/2018
 * Time: 5:33 PM
 */
require_once('session.php');
require_once ("admsession.php");
require_once('class.user.php');
$user_logout = new USER();

if($user_logout->is_loggedin()!="")
{
    $user_logout->redirect('vote.php');
}
if(isset($_GET['logout']) && $_GET['logout']=="true")

{
    $user_logout->doLogout();
    $user_logout->redirect('login.php');
}
//admin logout
if($user_logout->is_adminloggedin()!="")
{
    $user_logout->redirect('admin/index.php');
}
if (isset($GET['logout']) && $_GET['logout']=="true")
{

    $user_logout->adminLogout();
    $user_logout->redirect('adminlog.php');
}
