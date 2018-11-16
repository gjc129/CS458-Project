<?php
function options_menu()
{
	
            ?>

            <form action="<?= htmlentities($_SERVER['PHP_SELF'],ENT_QUOTES) ?>"" method="post">
            
            <p> Meters Map </p>
			<br><br>
            <div id ="mapid"></div>
            <br>
            <fieldset>
				<button type="submit" value="credit meter" name= "credit">Credit Meter</button>
				<button type="submit" value="payment page" name= "payment">Payment Page</button>
				<button type="submit" value="update account" name="update">Update Account Settings</button>
				<button type="submit" value="pay ticket" name="pay">Pay Ticket</button>
				
            	<!--
				<input type="submit" value="Credit Meter" />
            	<input type="submit" value="Payment Page" />
            	<input type="submit" value="Update Account Settings" />
            	<input type="submit" value="Pay Ticket" />
				-->
				
			</fieldset>

<?php
	
}
?>