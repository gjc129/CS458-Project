<?php
	session_start();
	require_once("hsu_conn.php");
    	$usr = 'parkingFriendly';
        $pwd = 'parkingcs458';
?>
<!DOCTYPE html>
<html>
<head>
<title> parkingFriendly </title>
<link rel="stylesheet" href="../css/parkingFriendly.css">
</head>
<body style="background-color:#bdc3c7">

	<div id="main-wrapper">
		<center>
			<h2>parkingFriendly</h2>
			<img src="../img/HSU_Image.jpg" class="avatar"/>
		</center>

	<form class="myform" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>" method="post">
		<center>
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your Username"/><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password"/>
		<input name="Login" type="submit" id="login_btn" value="Login"/><br>
		<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
		</center>
	</form>
	<?php
		if(isset($_POST['Login']))
		{
			$conn=hsu_conn($usr,$pwd);
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(isset($_POST['username']))
			{
				$query="select * from Account where username= (:username) AND password=(:password)";
				$stid=oci_parse($conn,$query);
                        	oci_bind_by_name($stid, ":username", $username);
                        	oci_bind_by_name($stid, ":password", $password);
				$query_run = oci_execute($stid);
				if(oci_num_rows($stid)>0)
				{
					//valid
					echo '<script type="text/javascript"> alert("you are logged on!") </script>';
					$_SESSION['username']=$username;
					$_SESSION['nextStage'] = "option";
					header('location:homepage.php');
				}

				else
				{
					//invalid
					echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
				}
			}
			if($username=NULL)
			{
				echo '<script type="text/javascript"> alert("please enter a username") </script>';
			}
			if($password=NULL)
                        {
                                echo '<script type="text/javascript"> alert("please enter a password") </script>';
                        }
	       	unset($_POST['Login']);
		}

	?>
	</div>
</body>
</html>
