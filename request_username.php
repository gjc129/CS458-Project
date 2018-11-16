<?php
    function request_username()
    {
     	?>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
        <fieldset>
            <legend><strong> Please enter an Email Address & Password: </strong></legend>

            <label for="username"><kbd> Email Address:</kbd></label>
            <input type="text" name="username" id="username" />

            <label for="password"><kbd> Password: </kbd></label>
            <input type="password" name="password"
                   id="password" />
        <br/>
            <div class="submit">
                <input type="submit" value="Login" />
            </div>
        </fieldset>
	</form>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
            <div class="submit">
                <input type="submit" value="Sign Up" />
            </div>
        </form>
    <?php
    }
?>
