<?php
@session_start();
if (@$_SESSION[no_id]==""){
header("location:index.php");
}
else{
?>
<?php
include "database.php";
if(@!empty($_POST[pass_lama])&&@!empty($_POST[pass_baru])&&@!empty($_POST[pass_ulangi])){
@$rows=mysql_fetch_array(mysql_query("SELECT * FROM pengguna where kata_laluan=md5('$_POST[pass_lama]')"));

@$pass_lama=md5($_POST[pass_lama]);
//echo $rows[kata_laluan]."<br>".$pass_lama;
@$pass_baru=md5($_POST[pass_baru]);

if (@empty($_POST[pass_baru]) OR @empty($_POST[pass_lama]) OR @empty($_POST[pass_ulangi])){
  echo "<p align=center>Anda harus mengisikan semua data pada form Ganti kata_laluan.<br />"; 
  echo "<a href=javascript:history.go(-1)><b>Ulangi Lagi</b></a></p>";
}
else{ 
// Apabila kata_laluan lama sama
//echo $rows[kata_laluan]."<br>".$pass_lama;
if (@$pass_lama==@$rows[kata_laluan]){
  // Pastikan bahawa password baru yang dimasukkan sebanyak dua kali sudah sama
  if (@$_POST[pass_baru]==@$_POST[pass_ulangi]){
    mysql_query("UPDATE pengguna SET kata_laluan = '$pass_baru' where no_id='$rows[no_id]'");
   echo '<script language="javascript" type="text/javascript">alert("Katalaluan berjaya ditukar. Sila log masuk kembali !")</script>';
	 echo "<script language=javascript>
	           window.location.href='log_keluar.php';
			   </script>";
  //header('location:../index.php');
  }
  else{
     echo "<script>alert('Pengesahan Katalaluan anda salah');</script>";
    echo "<script>history.go(-1)</script>"; 
  }
}
else{
  echo "<script>alert('Katalaluan lama anda salah');</script>";
    echo "<script>history.go(-1)</script>"; 
}
}
}

else echo"<script>alert('Data Belum Lengkap');history.back()</script>";
?><?php
}
?>