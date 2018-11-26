<?php

function updateAccountSettings()
{
	?>
		
		<form method="post"
				  action="<?= htmlentities($_SERVER['PHP_SELF'], 
										   ENT_QUOTES) ?>">
	<?php
		
		$ociUsername = $_SESSION['ociUsername'];
		$ociPassword = $_SESSION['ociPassword'];
						
		$conn = hsu_conn($ociUsername, $ociPassword);
		
		$username = $_SESSION['username'];
				
		$queryAccountInfoStr = "Select username, phonenumber, licenseplatenum, color
								from Account, Person, Users
								where username = :username and 
								Account.personid = Person.personid and 
								Users.personid = Person.personid";
								
		$queryAccountInfoStmt = oci_parse($conn, $queryAccountInfoStr);
		
		oci_bind_by_name($queryAccountInfoStmt, ":username", $username);
		
		oci_execute($queryAccountInfoStmt, OCI_DEFAULT);
				
	?>
			<fieldset>
				
				<label for="description"><kbd> Current Information: </kbd></label>
				
				<legend><strong> Please enter your information: </strong></legend>

				<label for="username"><kbd> Email Address:</kbd></label>
				<input type="text" name="username" id="username" /><br>

				<label for="cuurentpassword"><kbd>Current Password: </kbd></label>
				<input type="password" name="password"
					   id="password" /><br>
					   
				<label for="newpassword"><kbd> New Password: </kbd></label>
				<input type="password" name="newpassword" id="newpassword" /><br>
			
				<label for="confirmpassword"><kbd> Enter Password Again: </kbd></label>
				<input type="password" name="confirmpassword"
					   id="confirmpassword" /><br>
				
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
				<input id="Update" type="submit" value="Update" name="Update"/>
				<input id="Back" type="submit" name="Back" value="Back" />
				</div>
			
			</fieldset>
			 
		</form>
<?php
		if(isset($_POST["Update"]))
		{
			$password = $_POST['newpassword'];
			$phoneNumber = $_POST['phoneNumber'];
			
			$updateAccountSettingsStr = "update Account 
										 set password = :password
										 from Account, Person
										 where Account.personid = Person.personid and
										 where username = :username";
										
			$updateAccountSettingsStmt = oci_parse($conn, $updateAccountSettingsStr);
			
			oci_bind_by_name($updateAccountSettingsStmt, ":username", $username);
			oci_bind_by_name($updateAccountSettingsStmt, ":password", $password);
			
			oci_execute($updateAccountSettingsStmt, OCI_DEFAULT);
			
			$updatePersonSettingsStr = "update Person
										set phonenumber = :phoneNumber
										from Person, Account
										where Account.personid = Person.personid and
										where username = :username";
										
			$updatePersonSettingsStmt = oci_parse($conn, $updatePersonSettingsStr);
			
			oci_bind_by_name($updatePersonSettingsStmt, ":phoneNumber", $phoneNumber);
			oci_bind_by_name($updatePersonSettingsStmt, ":username", $username);
			
			$updateUsersSettingsStr = "update Users
									  set licenseplatenum = :licensePlateNum,
									  set color = :vehicleColor
									  from Users, Person, Account
									  where Account.personid = Person.personid and 
									  where Person.personid = Users.personid and
									  where username = :username";
									  
			$updateUsersSettingsStmt = oci_parse($conn, $updateUsersSettingStr);
			
			oci_bind_by_name($updateUsersSettingsStmt, ":vehicleColor", $vehicleColor);
			oci_bind_by_name($updateUsersSettingsStmt, ":licensePlateNum", $licensePlateNum);
			
			oci_execute($updateUsersSettingsStmt, OCI_DEFAULT);
		
		}
		

}
?>
	