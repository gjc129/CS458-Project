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
		require_once("requestMeter2.php");
		require_once("requestSignup.php");
		require_once("confirmationPage.php");
		require_once("hsu_conn.php");
        require_once("optionsMenu.php");
        require_once("updateAccountSettings.php");
        require_once("confirmationUpdate.php");
        require_once("payTicket.php");
		require_once("payMeter.php");       
	 	require_once("creditConfirmationPage.php");
	 	require_once("payTicketPage.php");
//		require_once('rSignUp2.php');
    ?>
</head>

<body>

	<div style="border:solid;outline:ridge darkgrey;; padding: 1em; margin:1em;">
       <!-- <img src="pF.jpg" alt="parkingFriendly logo" height="30%" width="30%"/> -->

		<h1>parkingFriendly</h1>
	</div>

	<h2><!--<a href="home.php"> --> Parking Meter Payment System<!--</a> --></h2>
	<?php
		
		//these variables are used to do login to DB
		$ociUsername = "parkingFriendly";
		$ociPassword = "parkingcs458";
		$_SESSION['ociUsername'] = $ociUsername;
		$_SESSION['ociPassword'] = $ociPassword;
		
		$_SESSION['personIdCounter'] = 100000;
		$_SESSION['accountIdCounter'] = 90000000;
		
		if (! array_key_exists('nextStage', $_SESSION) )
		{	
			//login page
			requestUsername();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["SignUp"]))
		{
			//sign up page
			requestSignup();
			//rSignUp2();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["submit_btn"]))
		{
			//confirmation page for registration
			//if(isset($_POST['submit_btn']))
			//{
				//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
				//variables
				$username = $_POST['username'];
				$_SESSION['username'] = $username;
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$phoneNumber = $_POST['phoneNumber'];
				$licensePlateNum = $_POST['licenseplatenum'];
				$vehicleColor = $_POST['vehiclecolor'];
						
				$ociUsername = $_SESSION['ociUsername'];
				$ociPassword = $_SESSION['ociPassword'];
				//counters for account id and person id
				//$accountId = $_SESSION['accountIdCounter'];
                                $accountId = rand(1,99999999);
                                //$personId = $_SESSION['personIdCounter'];
                                $personId = rand(1,999);
				$conn = hsu_conn($ociUsername, $ociPassword);

				if($password==$cpassword)
				{	
					//--------query------------------------
					$queryAccountStr = "select * from Account WHERE username= :username";
					$queryAccountStmt = oci_parse($conn, $queryAccountStr);
						
					oci_bind_by_name($queryAccountStmt, ":username", $username);
					oci_execute($queryAccountStmt, OCI_DEFAULT);
											
					if(oci_num_rows($queryAccountStmt)>0)
					{
						echo '<script type="text/javascript"> alert("username already exists... try another username") </script>';
					}
					else
					{		
						$conn = hsu_conn($ociUsername, $ociPassword);
										
						$insertPersonStr = 'insert into Person(personid, firstname, lastname, phonenumber) 
									values 
									(:personId, :firstName, :lastName, :phoneNumber)';
						$insertPersonStmt = oci_parse($conn, $insertPersonStr);
											
						oci_bind_by_name($insertPersonStmt, ":personId", $personId);
						oci_bind_by_name($insertPersonStmt, ":firstName", $firstName);
						oci_bind_by_name($insertPersonStmt, ":lastName", $lastName);
						oci_bind_by_name($insertPersonStmt, ":phoneNumber", $phoneNumber);
											
						oci_execute($insertPersonStmt, OCI_DEFAULT);
						oci_free_statement($insertPersonStmt);
    						oci_close($conn);
    										
						$conn = hsu_conn($ociUsername, $ociPassword);
											
						$insertUsersStr = "insert into Users(credit, licenseplatenum,color,personid)
								   values
								   (0, :licensePlateNum, :vehicleColor, :personId)";
						$insertUsersStmt = oci_parse($conn, $insertUsersStr);
											
						oci_bind_by_name($insertUsersStmt, ":licensePlateNum", $licensePlateNum);
						oci_bind_by_name($insertUsersStmt, ":vehicleColor", $vehicleColor);
						oci_bind_by_name($insertUsersStmt, ":personId", $personId);
											
						oci_execute($insertUsersStmt, OCI_DEFAULT);
						oci_free_statement($insertUsersStmt);
    						oci_close($conn);
											
						//--------insert------------------------------
						$conn = hsu_conn($ociUsername, $ociPassword);
						$insertAccountStr = "insert into Account(accountid, username, password, personid)
									 values 
									(:accountId, :username, :password, :personId)";
						$insertAccountStmt = oci_parse($conn, $insertAccountStr);
											
						oci_bind_by_name($insertAccountStmt, ":accountId", $accountId);
						oci_bind_by_name($insertAccountStmt, ":username", $username);
						oci_bind_by_name($insertAccountStmt, ":password", $password);
						oci_bind_by_name($insertAccountStmt, ":personId", $personId);
											
						oci_execute($insertAccountStmt, OCI_DEFAULT);
						oci_free_statement($insertAccountStmt);
    						oci_close($conn);
    										
    										
						if($insertAccountStmt)
						{
							echo '<script type="text/javascript"> alert("User successfully Registered!... goto login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error Occured.. please try using change at the meter...") </script>';
							$_SESSION['nextStage'] = NULL;
						}
					}

				}

			//}
			confirmationPage();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Logon"]))
		{
			//back to login page after registration
			requestUsername();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["goback"]))
		{
			requestUsername();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Login"]))
		{
			//menu to pay for meter, pay ticket, etc
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Cancel"]))
		{	
			//cancel button sends you back to the options menu
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["CreditMeter"]))
		{	
			//pay for meter page
			requestMeter2();
			payMeter();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["UpdateAccountSettings"]))
		{
			//page to update account settings
			updateAccountSettings();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Update"]))
		{
			//confirmation of update page
			confirmationUpdate();
			$_SESSION['nextStage'];
		}
		else if($_SESSION['nextStage'] == "option" and isset($_POST["PayMeter"]))
		{
			creditConfirmationPage();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Back"]))
		{
			//options menu page to navigate different pages
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		else if($_SESSION['nextStage'] == "option" and isset($_POST["Done"]))
		{
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["PayTicket"]))
		{
			//page to pay a ticket
			payTicketPage();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Submit"]))
		{
			optionsMenu();
			$_SESSION['nextStage'] = "option";
		}
		elseif($_SESSION['nextStage'] == "option" and isset($_POST["Logout"]))
		{	
			//clicks logout button to go back to username
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
