<?php

include('../database.php');
				$nama_ruang = $_POST['nama_ruang'];
				$aras=$_POST['aras'];
				
$update=mysql_query("INSERT INTO ruang (nama_ruang, aras)
VALUES
('$nama_ruang','$aras')");

// Jump to login page
  echo '<script language="javascript" type="text/javascript">alert("Berjaya menambah ruang.")</script>';
	 echo "<script language=javascript>
	           window.location.href='menu_pentadbir.php';
			   </script>";

?>
