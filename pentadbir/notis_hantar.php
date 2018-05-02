<?php
include('../database.php');
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
$status = clean($_POST['status']);
$mesej = clean($_POST['mesej']);

mysql_query("INSERT INTO notis (status, mesej) VALUES ('$status','$mesej')");
	echo '<script language="javascript" type="text/javascript">alert("Notis berjaya dihantar !")</script>';
	 echo "<script language=javascript>
	           window.location.href='notis_baru.php';
			   </script>";
?>