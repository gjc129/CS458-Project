<?php
    function payMeter()
    {
        $ociUsername = $_SESSION['ociUsername'];
        $ociPassword = $_SESSION['ociPassword'];
        $conn = hsu_conn($ociUsername, $ociPassword);

     	if(isset($_POST['PayMeter']))
	{
		$amount = $_POST['amount'];
		$meterid = $_POST['meterid'];

		$insertAmountStr = "insert into Parking_Meter (credit) values (:amount) where METERID = '$meterid'";
		$insertAmountStmt = oci_parse($conn, $insertAmountStr);

		oci_bind_by_name($insertAmountStr, ":amount", $amount);

		oci_execute($insertAmountStmt, OCI_DEFAULT);

		if($insertAccountStmt)
		{
			echo '<script type="text/javascript"> alert("Meter successfully updated!... goto login page to login") </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Error Occured.. please try using change at the meter...") </script>';  
			$_SESSION['nextStage'] = NULL;  
		}

	oci_free_statement($insertAmountStmt);
	oci_close($conn);
	}
    }
?>
