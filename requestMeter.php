<?php
function requestMeter()
{
	?>
	<form method="post"
              action="<?= htmlentities($_SERVER['PHP_SELF'], 
                                       ENT_QUOTES) ?>">
	<?php								   
    if ( array_key_exists("username", $_POST))
    {
     	// get the username

        $username = strip_tags($_POST['username']);
        $_SESSION['username'] = $username;
        // not doing ANYTHING with the password except
        //     trying to log in with it...

        $password = $_POST['password'];
        $_SESSION['password'] = $password;
        // try to connect

        $conn = hsu_conn($username, $password);
    }
    if (!array_key_exists("meter_id", $_POST))
    {
            $order_query_str = 'select meterid from Parking_Meter';
	    $user_amount_str = 'select credit from Person';
            $order_query_stmt = oci_parse($conn, $order_query_str);
	    $user_amount_stmt = oci_parse($conn, $user_amount_str);

            oci_execute($order_query_stmt, OCI_DEFAULT);
            ?>
		<label for="userAmount"> User Money: </label>
		<?php
			while (oci_fetch($user_amount_stmt))
			{
				$currUserAmount = oci_result($user_amount_stmt, 'CREDIT');
			}
		?>
		<option value='<?= currUserAmount ?>' > <?= currUserAmount ?> </option> 
            <form action="<?= htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES) ?>"" method="post">
            <fieldset>
                <legend><strong>Meter and Amount</strong></legend>
                <label for="meterid"> Meter #: </label>
                <select required name="meterid">
                <?php
            while (oci_fetch($order_query_stmt))
            {
             	$curr_meterid = oci_result($order_query_stmt, 'METERID');
                $curr_timeremaining = oci_result($order_query_stmt, 'TIMEREMAINING');
                ?>
                <option value='<?= $curr_meterid ?>|<?= $curr_timeremaining ?>' > <?= $curr_meterid ?> , <?= $curr_timeremaining ?> </option>
            <?php
            }
	?>
	</select><br/>
        <label for="username"> Amount:$ </label>
            <input type="number" name="amount" id="amount" min="0.1" max="10.00"/>
        </fieldset>
            <div class="submit">
                <input type="submit" value="submit" name="submit" />
            </div>
        </form>
        <?php
    }
}
?>

