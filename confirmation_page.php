<?php

	function confirmation_page()
	{
?>
		<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
		
		<fieldset>
		<h2> Thank You for Creating An Account, Please Login to continue! </h2>
		<button name="login" type="submit" value="Login" >Login</button>
		
<?php
	
	}
	
?>