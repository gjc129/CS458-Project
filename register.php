<?php
	require 'hsu_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
<title> parkingFriendly </title>
<link rel="stylesheet" href="css/parkingFriendly.css">
</head>
<body>
        <div id="main-wrapper">
                <center>
                        <h2>Registration Form</h2>
                        <img src="img/HSU_Image.jpg" class="avatar"/>
                </center>
<!--
        <form class="myform" action="register.php" method="post">
	<center>
                <label><b>Username:</b></label><br>
                <input name="username" type="text" class="inputvalues" placeholder="Type your Username" required/><br>
                <label><b>Password:</b></label><br>
                <input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/>
		<label><b>Confirm Password:</b></label><br>
                <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your Password" required/>
                <input name="submit_btn" type="submit" id="reg_btn" value="Sign Up"/>
                <a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
        </center>
	</form>
-->
<div id="main-wrapper">
	<form method="post"
                                  action="<?= htmlentities($_SERVER['PHP_SELF'],
                                                                                   ENT_QUOTES) ?>">
                        <fieldset><div class="Sign Up">
                                <div><strong> Please enter your information: </strong></div>

                                <label for="username"><kbd> Email Address:</kbd></label>
                                <input type="text" name="username" id="username" /><br>

                                <label for="password"><kbd> Password: </kbd></label>
                                <input type="password" name="password"
                                           id="password" /><br>

                                <label for="password2"><kbd> Enter Password Again: </kbd></label>
                                <input type="password" name="cpassword"
                                           id="cpassword" /><br>

                                <br>
                                <label for="firstName"><kbd> First Name: </kbd></label>
                                <input type="text" name="firstName" id="firstName"/><br>

                                <label for="lastName"><kbd> Last Name: </kbd></label>
                                <input type="text" name="lastName" id="lastName"/><br>

                                <label for="phoneNumber"><kbd> Phone Number: </kbd></label>
                                <input type="text" name="phoneNumber" id="phoneNumber" /><br>

                                <br>
                                <label for="licenseplatenum"><kbd> License Plate #: </kbd></label>
                                <input type="licenseplatenum" name="licenseplatenum"
                                           id="licenseplatenum" /><br>

                                <label for="vehiclecolor"><kbd> Vehicle Color: </kbd></label>
                                <input type="vehiclecolor" name="vehiclecolor"
                                           id="vehiclecolor" /><br>
                                <br>
                                <div class="submit">
                                <input id="submit_btn" type="submit" value="Register" name="submit_btn"/>
                                <a href="home.php"><input id="goback" type="button" value="Go Back" name="goback" /></a>
                                </div>

                        </div></fieldset>
	</form>
</div>
	<?php
/*		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			$accountID = rand(1,9999999);
			$conn=hsu_conn('parkingFriendly','parkingcs458');

			if($password==$cpassword)
			{
				$query = "select * from Account WHERE username='$username'";
				$stid = oci_parse($conn, $query);
				$query_run = oci_execute($stid);

				if(oci_num_rows($stid)>0)
				{
					echo '<script type="text/javascript"> alert("username already exists... try another username") </script>';
				}
				else
				{
					$query2 = "insert into Account (accountID, username, password) values (:accountID, :username, :password)";
                                	$stid2 = oci_parse($conn,$query2);
					oci_bind_by_name($stid2,":accountID", $accountID);
					oci_bind_by_name($stid2, ":username", $username);
                                        oci_bind_by_name($stid2, ":password", $password);
					$query_run2 = oci_execute($stid2);	
						
					if($query_run2)
					{
					}
					else
					{
					}
				}

			}


		}
*/
//confirmation page for registration
if(isset($_POST['submit_btn']))
{
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

	//$ociUsername = $_SESSION['ociUsername'];
	//$ociPassword = $_SESSION['ociPassword'];
	//counters for account id and person id
	//$accountId = $_SESSION['accountIdCounter'];
	$accountId = rand(1,99999999);
	//$personId = $_SESSION['personIdCounter'];
	$personId = rand(1,999);
	$conn = hsu_conn('parkingFriendly', 'parkingcs458');

	if($password==$cpassword AND $password!=NULL)
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

			$insertPersonStr = 'insert into Person (personid, firstname, lastname, phonenumber)
			values
			(:personId, :firstName, :lastName, :phoneNumber)';
			$insertPersonStmt = oci_parse($conn, $insertPersonStr);

			oci_bind_by_name($insertPersonStmt, ":personId", $personId);
			oci_bind_by_name($insertPersonStmt, ":firstName", $firstName);
			oci_bind_by_name($insertPersonStmt, ":lastName", $lastName);
			oci_bind_by_name($insertPersonStmt, ":phoneNumber", $phoneNumber);

			oci_execute($insertPersonStmt);
			oci_free_statement($insertPersonStmt);

			$insertUsersStr = "insert into Users (credit, licenseplatenum,color,personid)
		   				values
		   				(0, :licensePlateNum, :vehicleColor, :personId)";
			$insertUsersStmt = oci_parse($conn, $insertUsersStr);

			oci_bind_by_name($insertUsersStmt, ":licensePlateNum", $licensePlateNum);
			oci_bind_by_name($insertUsersStmt, ":vehicleColor", $vehicleColor);
			oci_bind_by_name($insertUsersStmt, ":personId", $personId);

			oci_execute($insertUsersStmt);
			oci_free_statement($insertUsersStmt);

			//--------insert------------------------------
			$insertAccountStr = "insert into Account (accountid, username, password, personid)
						 values
						(:accountId, :username, :password, :personId)";
			$insertAccountStmt = oci_parse($conn, $insertAccountStr);

			oci_bind_by_name($insertAccountStmt, ":accountId", $accountId);
			oci_bind_by_name($insertAccountStmt, ":username", $username);
			oci_bind_by_name($insertAccountStmt, ":password", $password);
			oci_bind_by_name($insertAccountStmt, ":personId", $personId);

			oci_execute($insertAccountStmt);


			if($insertAccountStmt)
			{
				echo '<script type="text/javascript"> alert("User successfully Registered!... go back to login page to login") </script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("Error Occured.. please try using change at the meter...") </script>';
				$_SESSION['nextStage'] = NULL;
			}
			oci_free_statement($insertAccountStmt);
                        oci_close($conn);
		}

	}

}
	?> 
       </div>
</body>
</html>


