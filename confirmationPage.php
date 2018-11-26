<?php

	function confirmationPage()
	{
?>
		<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
		
		<fieldset>
		<h2> Thank You for Creating An Account, Please Login to continue! </h2>
		<input type="submit" name="Logon" value="Logon" />
		
<?php
	
	}
	
?>