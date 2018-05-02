<?php
session_start();
ob_start();
include "database.php";

$no_id=$_POST['no_id'];
@$kata_laluan=md5($_POST['kata_laluan']);
@$status=$_POST['status'];

if (!isset($status)) //if category not stated	
{
echo "<script language=javascript type=text/javascript>
alert('Silih pilih status anda.');
history.go(-1)
</script>"; 
}
else
{

if($status==1){
$sql="SELECT * FROM pengguna WHERE no_id='$no_id' AND kata_laluan='$kata_laluan' AND status='Pelajar'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// To protect MySQL injection
$no_id = stripslashes($no_id);
$kata_laluan = stripslashes($kata_laluan);
$no_id = mysql_real_escape_string($no_id);
$kata_laluan = mysql_real_escape_string($kata_laluan);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

//while($row=mysql_fetch_array($result))
if($count==1){
// Register $myusername, $mypassword and redirect to file "pengguna.php"


$_SESSION['status']='Pelajar';

$_SESSION['no_id']=$rows['no_id'];
header("location:logmasuk_berjaya.php");	
}

else {
echo "<script language=javascript type=text/javascript>
alert('Sila cuba sekali lagi.');
history.go(-1)
</script>";
}
}
///////////////////////////////PENSYARAH///////////////////////////////////////////////////////////////

else if($status==2) {
$sql="SELECT * FROM pengguna WHERE no_id='$no_id' AND kata_laluan='$kata_laluan' AND status='Pensyarah'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// To protect MySQL injection
$no_id = stripslashes($no_id);
$kata_laluan = stripslashes($kata_laluan);
$no_id = mysql_real_escape_string($no_id);
$kata_laluan = mysql_real_escape_string($kata_laluan);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

//while($row=mysql_fetch_array($result))
if($count==1){
// Register $myusername, $mypassword and redirect to file "pengguna.php"


$_SESSION['status']='Pensyarah';

$_SESSION['no_id']=$rows['no_id'];
header("location:logmasuk_berjaya.php");	
}

else {
echo "<script language=javascript type=text/javascript>
alert('Sila cuba sekali lagi.');
history.go(-1)
</script>";
}
}
}

ob_end_flush();
?>