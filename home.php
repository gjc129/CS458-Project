<?php
   session_start();
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml">
<!--
    mod by: Nicholas Greer
    last modified: 10-24-2018
    can be reached at:

        http://nrs-projects.humboldt.edu/~nlg31/parkingFriendly/home.php
        
    //updated: 11-14-18: added options_menu()
	// switched request_signup and request_usernames, from the if conditions, as request_usernames will be used to 
	// do initial login(based on data in DB), but if no account has been created yet, it goes to request signup
-->

<head>
    <title> parkingFriendly</title>
    <meta charset="utf-8" />

    <link href="parkingFriendly.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <!--link href="http://users.humboldt.edu/smtuttle/styles/normalize.css"
          type="text/css" rel="stylesheet" /-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

	<script src="leaflet.js" ></script>

	<link rel="stylesheet" href="leaflet.css"/>


    <?php
		require_once("request_username.php");
        require_once("request_meter.php");
		require_once("request_signup.php");
		require_once("confirmation_page.php");
        //require_once("hsu_conn.php");
        //require_once("custom_farewell.php");
        //require_once("complain_and_exit.php");
        //require_once("build_mini_form.php");
        require_once("options_menu.php");
    ?>
</head>

<body>

<div style="border:solid;outline:ridge darkgrey;; padding: 1em; margin:1em;">
        <!--img src="../parkingFriendly.jpeg" alt="parkingFriendly logo" height="30%" width="30%"/-->

<h1>parkingFriendly</h1>
</div>
<h2><!--<a href="home.php"> --> parking meter payment system<!--</a> --></h2>
    <?php
	
		//these variables are used to do login to DB
		$oci_username = "parkingFriendly";
		$oci_password = "parkingcs458";
	
    if (! array_key_exists('next-stage', $_SESSION) )
    {
     	request_signup();
        //$_SESSION['next-stage'] = "confirmation";
		$_SESSION['next-stage'] = "login";
    }
	elseif($_SESSION['next-stage'] == "login" and isset($_POST["register"]))
	{
		//confirmation page
		confirmation_page();
		$_SESSION['next-stage'] = "login";
	}
	elseif($_SESSION['next-stage'] == "login" and isset($_POST["login"]))
	{
		//confirmation page 
		request_username();
		$_SESSION['next-stage'] = "option";
	}
	elseif($_SESSION['next-stage'] == "option")
	{
		options_menu();
		$_SESSION['next-stage'] = "";
		
	}
	else
	{
		session_destroy();
		session_regenerate_id(TRUE);
		session_start();
		
		request_signup();
	}
	