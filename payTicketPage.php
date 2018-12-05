<?php

	function payTicketPage()
	{
?>	
		<form method="post"
				  action="<?= htmlentities($_SERVER['PHP_SELF'], 
										   ENT_QUOTES) ?>">
	
	<fieldset>
								
				<legend><strong> Please enter your information: </strong></legend>

				<label for="username"><kbd> Email Address:</kbd></label>
				<input type="text" name="username" id="username" /><br>
			
				<label for="confirmpassword"><kbd> Ticket Number: </kbd></label>
				<input type="password" name="confirmpassword"
					   id="confirmpassword" /><br>
				
				<br>
				<label for="licenseplatenum"><kbd> License Plate #: </kbd></label>
				<input type="licenseplatenum" name="licenseplatenum" 
					   id="licenseplatenum" /><br>
					   
				<label for="amount"><kbd> Amount: </kbd></label>
				<input type="amount" name="amount" id="amount" /><br>
					   
				<br>
				<div class="submit">
				<input id="Submit" type="submit" value="Submit" name="Submit"/>
				<input id="Back" type="submit" name="Back" value="Back" />
				</div>
			
			</fieldset>
			 
		</form>
	
	<?php		
	}
?>