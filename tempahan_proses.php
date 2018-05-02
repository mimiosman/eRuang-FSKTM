<?php
setlocale(LC_ALL, 'ms');
require_once 'swift/lib/swift_required.php';
$host = "localhost";
$usernama = "root";
$pwd = "";
$db = "eruangfsktm";

mysql_connect ( $host, $usernama, $pwd ) or 
	die ("Cannot connect To Database");
mysql_select_db ( $db ) or
	die ("Database Not Found");
   
   
if(isset($_POST['submit'])) {
	
	$date_arr = explode("-",$_POST['date']);
	$date_new = $date_arr[2] . '-'. $date_arr[1] . '-'. $date_arr[0];
	$date1 = new DateTime("+2 day");
	$date2 = new DateTime($date_new);
	
	if ($date2 < $date1) {
		 echo '<script language="javascript" type="text/javascript">alert("Tempahan anda gagal. Sila buat tempahan 3 hari sebelum !")</script>';
		 echo "<script language=javascript>
	           window.location.href='tempahan_baru.php';
			   </script>";
	} else {
		
		
		
	$to = 'asyrafqusyairi@ymail.com';
	$subject = 'TEMPAHAN BARU';
	$message_body = 'Anda mempunyai tempahan terbaru daripada pengguna.
	http://localhost/PSM/pentadbir/tempahan_terbaru.php';
	
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('psmemailtester@gmail.com') //your gmail email account
  ->setPassword('psmemailtester123'); //and you gmail password account

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($subject) //your subject line
  ->setFrom(array('psmemailtester@gmail.com' => 'Pusat Data FSKTM')) // from sender info 
  ->setTo(array($to)) // to recipient
  ->setBody($message_body); // your message

	if($result = $mailer->send($message)) {
	}
			
$nama = $_POST ['nama'];
$no_id = $_POST['no_id'];
$email = $_POST['email'];
$no_tel = $_POST ['no_tel'];
$date = $_POST ['date'];
$nama_ruang = $_POST ['nama_ruang'];
$status="DALAM PROSES";
$tujuan_tempahan = $_POST ['tujuan_tempahan'];
$kapasiti = $_POST ['kapasiti'];
$tarikh_mohon = date('d-m-Y');
//$tarikh_mohon = date('d-m-Y H:i:s', strtotime($date_from_sql)); //date format

$a='N/A';
$b='N/A';
$c='N/A';
$d='N/A';
$e='N/A';
$f='N/A';
$g='N/A';
$h='N/A';
$i='N/A';
$j='N/A';
$k='N/A';
$l='N/A';
$m='N/A';
$n='N/A';
$y='TUTUP';
$z='N/A';


$zz='';
$aa='';
$bb='';
$cc='';
$dd='';
$ee='';
$ff='';
$gg='';
$hh='';
$ii='';
$jj='';
$kk='';
$ll='';
$mm='';
$nn='';






if(isset($_POST['8am-9am'])){
   if($_POST['8am-9am'] == "TEMPAH"){
      $z = "DALAM PROSES";
	  $zz="8am-9am,";
      mysql_query("UPDATE jadual SET 8am = 'DALAM PROSES'   WHERE date = '$date'  and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
  
   
}

if(isset($_POST['9am-10am'])){
   if($_POST['9am-10am'] == "TEMPAH"){
      $a = "DALAM PROSES";
	  $aa = "9am-10am,";
      mysql_query("UPDATE jadual SET 9am = 'DALAM PROSES' WHERE date = '$date'  and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}
if(isset($_POST['10am-11am'] )){
      if($_POST['10am-11am'] == "TEMPAH"){
      $b = "DALAM PROSES";
	  $bb = "10am-11am,";
      mysql_query("UPDATE jadual SET 10am = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}
if(isset($_POST['11am-12pm'])){
   if($_POST['11am-12pm'] == "TEMPAH"){
      $c = "DALAM PROSES";
	  $cc = "11am-12pm,";
      mysql_query("UPDATE jadual SET 11am = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}  
 
if(isset($_POST['12pm-1pm'])){
   if($_POST['12pm-1pm'] == "TEMPAH"){
      $d = "DALAM PROSES";
	  $dd = "12pm-1pm,";
      mysql_query("UPDATE jadual SET 12pm = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}  
 
if(isset($_POST['1pm-2pm'])) {
   if($_POST['1pm-2pm'] == "TEMPAH"){
      $e = "DALAM PROSES";
	  $ee = "1pm-2pm,";
      mysql_query("UPDATE jadual SET 1pm = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}
if(isset($_POST['2pm-3pm'])) {
   if($_POST['2pm-3pm'] == "TEMPAH"){
      $f = "DALAM PROSES";
	  $ff = "2pm-3pm,";
      mysql_query("UPDATE jadual SET 2pm = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}
if(isset($_POST['3pm-4pm'])) {
   if($_POST['3pm-4pm'] == "TEMPAH"){
      $g = "DALAM PROSES";
	  $gg = "3pm-4pm,";
      mysql_query("UPDATE jadual SET 3pm = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}
if(isset($_POST['4pm-5pm'])) {
   if($_POST['4pm-5pm'] == "TEMPAH"){
      $h = "DALAM PROSES";
	  $hh = "4pm-5pm,";
      mysql_query("UPDATE jadual SET 4pm = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}
if(isset($_POST['5pm-6pm'])) {
   if($_POST['5pm-6pm'] == "TEMPAH"){
      $i = "DALAM PROSES";
	  $ii = "5pm-6pm,";
      mysql_query("UPDATE jadual SET 5pm = 'DALAM PROSES' WHERE date = '$date' and nama_ruang = '$nama_ruang'") or die(mysql_error());
   }
}




	
	
	
    $sql = "insert into tempahan 
	(no_id,tarikh_mohon,date, time, nama, email,no_tel, nama_ruang,status,tujuan_tempahan,kapasiti)
	VALUES 
	('$no_id','$tarikh_mohon','$date','$zz'  '$aa' '$bb' '$cc' '$dd' '$ee' '$ff' '$gg' '$hh' '$ii' , '$nama','$email' , '$no_tel', '$nama_ruang','$status','$tujuan_tempahan','$kapasiti') ";
	mysql_query ( $sql ) or die(mysql_error());
	
   echo '<script language="javascript" type="text/javascript">alert("Tempahan anda berjaya dihantar ke pihak pentadbir. Notifikasi akan dihantar sama ada tempahan anda berjaya ataupun gagal.")</script>';
	 echo "<script language=javascript>
	           window.location.href='menu_utama.php';
			   </script>";
	mysql_close ();
   }
   
  }
?>