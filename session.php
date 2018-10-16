<?php
/**
 * Created by PhpStorm.
 * User: Espiro
 * Date: 3/20/2018
 * Time: 12:29 AM
 */


	session_start();

	require_once 'class.user.php';

	$session = new USER();

	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that  (users can't access without login)

	if(!$session->is_loggedin())
    {
        // session no set redirects to login page
        $session->redirect('login.php');


    }
