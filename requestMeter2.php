<?php	
function requestMeter2()
{
	$username = $_SESSION['username'];
	$ociUsername = $_SESSION['ociUsername'];
	$ociPassword = $_SESSION['ociPassword'];
							
	$conn = hsu_conn($ociUsername, $ociPassword);
	$_SESSION['conn'] = $conn;

	?>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
	
		<label> Meters Map </label><br>
	<?php
		//query credit
		$queryCreditStr = "Select credit from Users u, Account a where u.personid = a.personid and username = :username";
		$queryCreditStmt = oci_parse($conn, $queryCreditStr);
		
		oci_bind_by_name($queryCreditStmt, ":username", $username);
		
		oci_execute($queryCreditStmt, OCI_DEFAULT);
		

		
	?>	

	<!--the following will retrieve and display the users current profile dollar amount/credits..-->
              	<div style="position: absolute; left: 5%; top: 17%;">
		<label for="userAmount" > <?php echo $username ?>'s Monies: </label>
                <?php
                     	while (oci_fetch($queryCreditStmt))
                        {
                                $currUserAmount = oci_result($queryCreditStmt, 'CREDIT');
                        }
                ?>
                <option value='<?= $currUserAmount ?>' > <?= $currUserAmount ?> </option><br>
		</div>
        <div id ="mapid"></div>
        <fieldset>
			
			<label for="meterid"><kbd> Meter ID: </kbd></label>
			<input type="text" name="meterid" id="meterid" />
			
			<label for="amount"><kbd> Amount $: </kbd></label>
			<input type="number" name="amount" id="amount" step="0.05" min="0" max="10.00"/>
			
			<br>
			<input type="submit" value="Pay Meter" name="PayMeter" id="PayMeter"/>
			<input type="submit" value="Cancel" name="Cancel" />
			
        </fieldset>
	</form>
	<?php
}
?>

