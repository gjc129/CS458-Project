<?php
    function requestUsername()
    {
     	?>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
        <fieldset>
            <legend><strong> Please enter an Email Address & Password: </strong></legend>

            <label for="username"><kbd> Email Address:</kbd></label>
            <input type="text" name="username" id="username" />

            <label for="password"><kbd> Password: </kbd></label>
            <input type="password" name="password" id="password" />
        <br/>
            <div class="submit">
                <input type="submit" value="Login" name="Login" />
        
				<input type="submit" value="Sign Up" name="SignUp"/>
            </div>
	</fieldset>
        </form>
    <?php
    }
?>
