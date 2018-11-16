<?php
    function request_signup()
    {
     	?>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
        <fieldset>
            <legend><strong> Please enter Email Address (Username) & Password: </strong></legend>

            <label for="username"><kbd> Email Address:</kbd></label>
            <input type="text" name="username" id="username" />

            <label for="password"><kbd> Password: </kbd></label>
            <input type="password" name="password"
                   id="password" />
	    
	    	<label for="password2"><kbd> Enter Password Again: </kbd></label>
            <input type="password2" name="password2"
                   id="password2" />
            
            <br>
            <label for="licenseplatenum"><kbd> License Plate #: </kbd></label>
            <input type="licenseplatenum" name="licenseplatenum" 
            	   id="licenseplatenum" />
            	   
        	<label for="vehiclecolor"><kbd> Vehicle Color: </kbd></label>
        	<input type="vehiclecolor" name="vehiclecolor"
        		   id="vehiclecolor" />
        <br/>
            <div class="submit">
                <button type="submit" value="Register" name="register"> Register </button>
            </div>
	</fieldset>
            <div class="submit">
                <button type="submit" value="Login" name="login"> Login </button>
            </div>
        </form>
    <?php
    }
?>

