<?php

session_start();
 include("../database.php");

if(!isset($_SESSION["staf_id"])) {
header("Location:index.php");
}
if($_GET['id'])
{
$id=$_GET['id'];;
 
 
 $sql = "select status,mesej FROM notis where id = $id";
 $hasil = mysql_query($sql);
 $row=mysql_fetch_array($hasil);
 
 $sql = "delete  from notis  where id='$id' ";
 mysql_query( $sql);
 
 echo '<script language="javascript" type="text/javascript">alert("Notis berjaya dipadam.")</script>';
	echo "<script language=javascript>
	           window.location.href='senarai_notis.php';
			   </script>";
}
?>