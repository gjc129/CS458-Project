<?php
    function hsu_conn($usr, $pwd)
    {
     	$db_conn_str =
            "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)
                                       (HOST = cedar.humboldt.edu)
                                       (PORT = 1521))
                            (CONNECT_DATA = (SID = STUDENT)))";
        $connctn = oci_connect($usr, $pwd, $db_conn_str);
        if (! $connctn)
        {
	?>
            <p> Could not log into Oracle, sorry.[hsu_conn_error] </p>
     

</body>
</html>
            <?php
            exit;
        }

	return $connctn;
    }
?>

