<?php
//session_start();
include('database.php');
$nama = $_POST['nama'];
	$status = $_POST['status'];
	$no_id = $_POST['no_id'];
	$email =$_POST['email'].$_POST['email2'];
	$no_tel_both = $_POST['no_tel2'].$_POST['no_tel'];
	//$no_was =$_POST['no_was'];
	//@$kata_laluan=md5($_POST['kata_laluan']);
	
	
	//Validation error flag
	$errflag = false;
	
		//Check for duplicate login ID
	 if($no_id != '' ) {
		$qry = "SELECT * FROM pengguna WHERE no_id='$no_id'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr['no_id'] = "Harap Maaf. Nombor matrik/ID atau email telah digunakan.  ";
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		
		}
		else{
			die("Query failed");
		}
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header('location: daftar_gagal.php');
		exit();
	}

function randomString($length = 8) {
 $str = "";
 $characters = array_merge(range('0','9'));
 $max = count($characters) - 1;
 for ($i = 0; $i < $length; $i++) {
  $rand = mt_rand(0, $max);
  $str .= $characters[$rand];
 }
 return $str;
}

//$pword = randomString();

$Kkata_laluan = randomString();


require_once("phpmailer/PHPMailerAutoload.php");

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->Host = 'smtp.gmail.com';
$mailer->Port = 587;
$mailer->SMTPSecure = 'tls';
$mailer->SMTPAuth = TRUE;

$mailer->Username = 'psmemailtester@gmail.com';  // Change this to your gmail adress
$mailer->Password = 'psmemailtester123';  // Change this to your gmail password
$mailer->From = 'psmemailtester@gmail.com';  // This HAVE TO be your gmail adress
$mailer->FromName = 'Pusat Data FSKTM'; // This is the from name in the email, you can put anything you like here
$mailer->Body = 'Id Pengguna: '.$no_id.'  
Katalaluan: '.$Kkata_laluan.'
Anda boleh menukar katalaluan setelah log masuk ke akaun anda.';

$mailer->Subject = 'Terima Kasih Kerana Mendaftar';
$mailer->AddAddress($_POST['email'].$_POST['email2']); 

if(!$mailer->Send())
{
   echo '<script language="javascript" type="text/javascript">alert("Pendaftaran Gagal! Sila pastikan anda mempunyai talian internet yang betul.")</script>';
	echo "<script language=javascript>
	           window.location.href='daftar.php';
			   </script>";

}
else
{
echo '<script language="javascript" type="text/javascript">alert("Pendaftaran Anda Berjaya! Katalaluan anda telah dihantar ke email!")</script>';
echo "<script language=javascript>
	           window.location.href='index.php';
			   </script>";

  mysql_query("INSERT INTO pengguna(nama, status,no_id, email, no_tel,kata_laluan,imej) VALUES ('$nama', '$status','$no_id', '$email', '$no_tel_both', MD5('".$Kkata_laluan."'),'user.jpg')");
}


?>