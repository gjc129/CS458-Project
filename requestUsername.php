<?php
    function requestUsername()
    {
     	?>
	<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
        <fieldset>
            <div id="main-wrapper" style="background:white:"><strong> Please enter an Email Address & Password: </strong></div>
		<br>
            <label id="main-wrapper" for="username"><kbd><b>Email Address:</b></kbd></label>
            <input type="text" name="username" id="username" />
            <label id="main-wrapper" for="password"><kbd><b>Password:</b></kbd></label>
            <input type="password" name="password" id="password" />
        <br/>
            <div class="submit">
                <input id="login_btn" type="submit" value="Login" name="Login" />
			<br>
				<a href="register.php"><input id="signup_btn" type="button" value="Sign Up" name="SignUp"/></a>
            </div>
	</fieldset>
        </form>
    <?php
   }
?>
<?php
	require_once('hsu_conn.php');
		if(isset($_POST['Login']))
		{
			 	$ociUsername='parkingFriendly';
				$ociPassword='parkingcs458';
				$username = $_POST['username'];
				$password = $_POST['password'];
				$conn = hsu_conn($ociUsername, $ociPassword);
				$query=oci_parse($conn, "select * from Account where username='$username' AND password='$password'");
				
				 $query_run = oci_execute($query);
				 if($query_run)
				 {
					//valid
					$_SESSION['username']=$username;
					//header('location:home.php');
				
				}
				else
				{
				 	//invalid
					echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
					session_destroy();
				 }
				
		}	
?>
