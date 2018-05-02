<?php

session_start();
 include("database.php");

if(!isset($_SESSION["no_id"])) {
header("Location:index.php");
}
if($_GET['id'])
{
$id=$_GET['id'];;
 
 
 $sql = "select time, date, nama_ruang FROM tempahan where id = $id";
 $hasil = mysql_query($sql);
 $row=mysql_fetch_array($hasil);
 
 $timew = explode(",",rtrim($row[0],","));

 foreach($timew as $t){
	$t2 = explode("-",$t);
	$sql = "UPDATE jadual SET $t2[0]='N/A' WHERE date = '$row[1]' AND nama_ruang = '$row[2]'"; 
	mysql_query($sql);
 }
 $sql = "delete  from tempahan  where id='$id' ";
 mysql_query( $sql);
 
 echo '<script language="javascript" type="text/javascript">alert("Anda telah berjaya membatalkan tempahan.")</script>';
	echo "<script language=javascript>
	           window.location.href='kemaskini_tempahan.php';
			   </script>";
}
?>



