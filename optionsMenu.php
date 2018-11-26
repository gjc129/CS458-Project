<?php
function optionsMenu()
{
	if ( array_key_exists("username", $_POST))
    {
		$username = $_SESSION['ociUsername'];
        // not doing ANYTHING with the password except
        //     trying to log in with it...

		$password = $_SESSION['ociPassword'];
        // try to connect

        $conn = hsu_conn($username, $password);
        
    }
    
            //$order_query_str = 'select meterid from Parking_Meter';
            //$order_query_stmt = oci_parse($conn, $order_query_str);
            //oci_execute($order_query_stmt, OCI_DEFAULT);
            ?>

            <form action="<?= htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES) ?>"" method="post">
            
            <label> Meters Map </label>
			
            <div id ="mapid"></div>
            
            <fieldset>
            	<input type="submit" value="Credit Meter" name="Credit Meter" />
            	<input type="submit" value="Payment Page" name="Payment Page" />
            	<input type="submit" value="Update Account Settings" name="Update Account Settings" />
            	<input type="submit" value="Pay Ticket" name="Pay Ticket" />
				<input type="submit" value="Logout" name="Logout" />
            </fieldset>

<?php

	
		
}
?>
