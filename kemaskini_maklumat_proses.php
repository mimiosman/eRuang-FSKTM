<?php
@session_start();
if (@$_SESSION[no_id]==""){
header("location:index.php");
}
else{
?>
<?php
include"database.php";
$no_id = $_SESSION['no_id'];

if(@!empty($_POST[nama]) &&@!empty($_POST[no_tel])){

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
//Apabila gambar tidak diganti

if(empty($lokasi_file)){
$sql="UPDATE pengguna set nama='$_POST[nama]',no_tel='$_POST[no_tel]',email='$_POST[email]' where no_id='$_POST[no_id]'";

//update two table sekaligus 
/*$sql = "UPDATE pengguna t1 
JOIN tempahan t2 ON (t1.no_id = t2.no_id) 
SET t1.nama = '$_POST[nama]', 
    t1.no_tel = '$_POST[no_tel]',  
	t1.email = '$_POST[email]',
    t2.nama = '$_POST[nama]', 
	t2.email = '$_POST[email]', 
    t2.no_tel = '$_POST[no_tel]' 
WHERE t1.no_id = '$_POST[no_id]'";*/

$exec=mysql_query($sql);
if($exec)echo "<script>alert('Maklumat berjaya dikemaskini !');history.go(-2)</script>";
else echo mysql_error();
}


//Apabila gambar diganti
else{
move_uploaded_file($lokasi_file,"profil/$nama_file");
mysql_query("UPDATE pengguna set nama='$_POST[nama]',no_tel='$_POST[no_tel]',email='$_POST[email]',imej='$nama_file' where no_id='$_POST[no_id]'"); 
								
/*mysql_query ("UPDATE pengguna t1 JOIN tempahan t2 ON (t1.no_id = t2.no_id) 
	SET t1.nama = '$_POST[nama]', 
    t1.no_tel = '$_POST[no_tel]', 
	
	t1.email = '$_POST[email]',
	t1.imej = '$nama_file',
    t2.nama = '$_POST[nama]', 
	t2.email = '$_POST[email]', 
    t2.no_tel = '$_POST[no_tel]' 
WHERE t1.no_id = '$_POST[no_id]'");*/		

echo "<script>alert('Maklumat berjaya dikemaskini !');history.go(-2)</script>";								
}

}

else
echo "<script>alert('Data Belum Lengkap');history.back()</script>";
?>
<?php
}
?>