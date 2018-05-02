<?php
session_start();
ob_start();
include "../database.php";
$staf_id=$_POST['staf_id'];
$kata_laluan=$_POST['kata_laluan'];


//echo $staf_id." ".$kata_laluan;

			$sql="SELECT * FROM pentadbir WHERE staf_id='$staf_id' AND kata_laluan='$kata_laluan'";
			$result=mysql_query($sql);
			$rows=mysql_fetch_array($result);

			// To protect MySQL injection
			$staf_id = stripslashes($staf_id);
			$kata_laluan = stripslashes($kata_laluan);
			$staf_id = mysql_real_escape_string($staf_id);
			$kata_laluan = mysql_real_escape_string($kata_laluan);

			// Mysql_num_row is counting table row
			$count=mysql_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row

				//while($row=mysql_fetch_array($result))
				if($count==1){
			
					$_SESSION['staf_id']=$rows['staf_id'];
					$_SESSION['kata_laluan']=$rows['kata_laluan'];

	header("location:logmasuk_berjaya.php");	
	}
	
	
	
	else 
	{
		echo "<script language=javascript type=text/javascript>
		alert('Nama pengguna atau katalaluan anda salah. Sila cuba sekali lagi.');
		history.go(-1)
		</script>";
	}
	




ob_end_flush();
?>