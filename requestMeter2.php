<?php	
function requestMeter2()
{
	$username = $_SESSION['username'];
	$ociUsername = $_SESSION['ociUsername'];
	$ociPassword = $_SESSION['ociPassword'];
							
	$conn = hsu_conn($ociUsername, $ociPassword);
	?>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
	
		<label> Meters Map </label>
	<?php
		//query credit
		$queryCreditStr = "Select credit from Users u, Account a where u.personId = a.personId and username = :username";
		$queryCreditStmt = oci_parse($conn, $queryCreditStr);
		
		oci_bind_by_name($queryCreditStmt, ":username", $username);
		
		oci_execute($queryCreditStmt, OCI_DEFAULT);
		
		
	?>	
        <div id ="mapid"></div>
            
        <fieldset>
			
			<label for="meterid"><kbd> Meter ID: </kbd></label>
			<input type="text" name="meterid" id="meterid" />
			
			<label for="amount"><kbd> Amount $: </kbd></label>
			<input type="number" name="amount" id="amount" min="0.1" max="10.00"/>
			
			<br>
			<input type="submit" value="Pay Meter" name="PayMeter" />
			<input type="submit" value="Cancel" name="Cancel" />
			
        </fieldset>
	</form>
	<?php
}

?>

