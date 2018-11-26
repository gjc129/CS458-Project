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

    <link href="css/parkingFriendly.css" type="text/css" rel="stylesheet" />
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


    <?php
		require_once("requestUsername.php");
		require_once("requestMeter.php");
		require_once("requestMeter2.php");
		require_once("requestSignup.php");
		require_once("confirmationPage.php");
		require_once("hsu_conn.php");
        require_once("optionsMenu.php");
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
		$ociUsername = "parkingFriendly";
		$ociPassword = "parkingcs458";
		$_SESSION['ociUsername'] = $ociUsername;
		$_SESSION['ociPassword'] = $ociPassword;
		
		$_SESSION['playerIdCounter'] = 100000;
		$_SESSION['accountIdCounter'] = 90000000;
		
		if (! array_key_exists('nextStage', $_SESSION) )
		{
			requestUsername();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["SignUp"]))
		{
			requestSignup();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["submit_btn"]))
		{
			confirmationPage();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Logon"]))
		{
			requestUsername();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Login"]))
		{
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Cancel"]))
		{
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["CreditMeter"]))
		{
			requestMeter2();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Logout"]))
		{
			session_destroy();
			session_regenerate_id(TRUE);
			session_start();
			requestUsername();
		}
		else
		{
			session_destroy();
			session_regenerate_id(TRUE);
			session_start();
			
			requestUsername();
			
		}
		?>
</body>
</html>
