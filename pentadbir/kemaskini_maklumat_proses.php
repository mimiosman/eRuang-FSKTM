<?php
@session_start();
if (@$_SESSION[staf_id]==""){
header("location:index.php");
}
else{
?>
<?php
include"../database.php";
$staf_id = $_SESSION['staf_id'];

if(@!empty($_POST[nama]) &&@!empty($_POST[no_tel])&&@!empty($_POST[email])){

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
//Apabila gambar tidak diganti

if(empty($lokasi_file)){
$sql="UPDATE pentadbir set nama='$_POST[nama]',no_tel='$_POST[no_tel]',email='$_POST[email]' where staf_id='$_POST[staf_id]'";
$exec=mysql_query($sql);
if($exec)echo "<script>alert('Maklumat berjaya dikemaskini !');history.go(-2)</script>";
else echo mysql_error();
}
//Apabila gambar diganti
else{
move_uploaded_file($lokasi_file,"staf/$nama_file");
mysql_query("UPDATE pentadbir set nama='$_POST[nama]',no_tel='$_POST[no_tel]',email='$_POST[email]',
								imej='$nama_file' where staf_id='$_POST[staf_id]'"); 
echo "<script>alert('Maklumat berjaya dikemaskini !');history.go(-2)</script>";								
}
}
else
echo "<script>alert('Data Belum Lengkap');history.back()</script>";
?>
<?php
}
?>