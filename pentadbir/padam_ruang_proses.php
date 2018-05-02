<?php

session_start();
 include("../database.php");

if(!isset($_SESSION["staf_id"])) {
header("Location:index.php");
}
if($_GET['id_ruang'])
{
$id_ruang=$_GET['id_ruang'];;
 
 
 $sql = "select nama_ruang,aras FROM ruang where id_ruang = $id_ruang";
 $hasil = mysql_query($sql);
 $row=mysql_fetch_array($hasil);
 
 $sql = "delete  from ruang  where id_ruang='$id_ruang' ";
 mysql_query( $sql);
 
 echo '<script language="javascript" type="text/javascript">alert("Ruang berjaya dipadam.")</script>';
	echo "<script language=javascript>
	           window.location.href='padam_ruang.php';
			   </script>";
}
?>