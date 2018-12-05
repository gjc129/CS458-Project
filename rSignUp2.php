<?php

function rSignUp2()
{
	?>
	  	<!--    <div id="main-wrapper">
					<center> -->
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
		<input id="goback" type="submit" value="Go Back" name="goback" />
		</div>

	</div></fieldset>

</form>
<?php
}
?>
<?php
	require_once('hsu_conn.php');
	
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

				//counters for account id and person id
				//$accountId = $_SESSION['accountIdCounter'];
				$accountId = rand(1,99999999);
				//$personId = $_SESSION['personIdCounter'];
				$personId = rand(1,999);
				$ociUsername = $_SESSION['ociUsername'];
				$ociPassword = $_SESSION['ociPassword'];

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
	       						//--------insert------------------------------
	       						$insertAccountStr = "insert into Account (accountID, username, password, personID) values (:accountId, :username, :password, :personId)";
							$insertAccountStmt = oci_parse($conn,$insertAccountStr);

							oci_bind_by_name($insertAccountStmt, ":accountId", $accountId);
							oci_bind_by_name($insertAccountStmt, ":username", $username);
	       						oci_bind_by_name($insertAccountStmt, ":password", $password);
							oci_bind_by_name($insertAccountStmt, ":personId", $personId);

							oci_execute($insertAccountStmt, OCI_DEFAULT);

							oci_free_statement($insertAccountStmt);
							oci_close($conn);

							$conn = hsu_conn($ociUsername, $ociPassword);

							$insertPersonStr = "insert into Person values (:personId, :firstName, :lastName, :phoneNumber);
							$insertPersonStmt = oci_parse($conn, $insertPersonStr);

							oci_bind_by_name($insertPersonStmt, ":personId", $personId);
							oci_bind_by_name($insertPersonStmt, ":firstName", $firstName);
							oci_bind_by_name($insertPersonStmt, ":lastName", $lastName);
							oci_bind_by_name($insertPersonStmt, ":phoneNumber", $phoneNumber);

							oci_execute($insertPersonStmt, OCI_DEFAULT);

							oci_free_statement($insertPersonStmt);
							oci_close($conn);

							$conn = hsu_conn($ociUsername, $ociPassword);

							$insertUsersStr = "insert into Users values(0, :licensePlateNum, :vehicleColor, :personId)";
							$insertUsersStmt = oci_parse($conn, $insertUsersStr);

							oci_bind_by_name($insertUsersStmt, ":licensePlateNum", $licensePlateNum);
							oci_bind_by_name($insertUsersStmt, ":vehicleColor", $vehicleColor);
							oci_bind_by_name($insertUsersStmt, ":personId", $personId);
							oci_execute($insertUsersStmt, OCI_DEFAULT);
							oci_free_statement($insertUsersStmt);
							oci_close($conn);

							if($insertAccountStmt)
							{
								echo '<script type="text/javascript"> alert("User successfully Registered!...$
							}
							else
							{
								echo '<script type="text/javascript"> alert("Error Occured.. please try using$
								$_SESSION['nextStage'] = NULL;
							}
						}

					}

				}

	}
	?>
