<?php
function optionsMenu()
{
	if ( array_key_exists("username", $_POST))
    {
		$ociUsername = $_SESSION['ociUsername'];
		$_SESSION['username'] = $_POST['username'];
        // not doing ANYTHING with the password except
        //     trying to log in with it...

		$ociPassword = $_SESSION['ociPassword'];
        // try to connect

        $conn = hsu_conn($ociUsername, $ociPassword);
        
    }

            //$order_query_str = 'select meterid from Parking_Meter';
            //$order_query_stmt = oci_parse($conn, $order_query_str);
            //oci_execute($order_query_stmt, OCI_DEFAULT);
            ?>

            <form action="<?= htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES) ?>"" method="post">
            
            <label> Meters Map </label>
		<h3> Welcome <?php echo $_SESSION['username'] ?> </h3><br>			
	<div id="map-wrapper">
            <div id ="mapid"></div>
	</div>
            
            <fieldset>
				<div class="submit">
					<input type="submit" value="Credit Meter" name="CreditMeter" />
					<input type="submit" value="Payment Page" name="PaymentPage" />
					<input type="submit" value="Update Account Settings" name="UpdateAccountSettings" />
					<input type="submit" value="Pay Ticket" name="PayTicket" />
					<input type="submit" value="Logout" name="Logout" />
				</div>
            </fieldset>

			</form>
<?php
	
		
}
?>
