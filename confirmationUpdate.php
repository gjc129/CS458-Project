<?php
	
	function confirmationUpdate()
	{	
		$ociUsername = $_SESSION['ociUsername'];
		$ociPassword = $_SESSION['ociPassword'];
							
		$conn = hsu_conn($ociUsername, $ociPassword);
	
		$queryAccountInformationStr = "Select username, phonenumber, licenseplatenum, color
									   from Account, Person, Users
									   where username = :username and 
									   Account.personid = Person.personid and 
									   Users.personid = Person.personid";
		
		$queryAccountInformationStmt = oci_parse($conn, $queryAccountInformationStr);
								
		oci_bind_by_name($queryAccountInformationStmt, ":username", $username);
		
		oci_execute($queryAccountInformationStmt, OCI_DEFAULT);	
?>
		<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
		
		<fieldset>
		<h2> You have updated your Account successfully! </h2>
		<br>
		<h2> Updated Information: </h2>
		<input id="Back" type="submit" name="Back" value="Back" />
<?php
	}
	
?>