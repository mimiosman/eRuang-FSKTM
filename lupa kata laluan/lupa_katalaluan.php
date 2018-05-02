<?php
if(!class_exists('PHPMailer')) {
    require('../phpmailer/class.phpmailer.php');
	require('../phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["nama"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "lupa kata laluan/reset_katalaluanFORM.php?name=" . base64_encode($user["no_id"]) . "'>" . PROJECT_HOME . "lupa kata laluan/reset_katalaluanFORM.php?name=" . base64_encode($user["no_id"]) . "</a><br><br></p>Daripada,<br> Pentadbir.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = 'psmemailtester@gmail.com';
$mail->Password = 'psmemailtester123';
$mail->Host     = 'smtp.gmail.com';
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["email"]);
$mail->Subject = "Pembaharuan Katalaluan Baru";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	echo '<script language="javascript" type="text/javascript">alert("Penghantaran email ralat. Sila cuba sekali lagi")</script>';
	//$error_message = '<font color="red">Penghantaran email ralat. Sila cuba sekali lagi.</font>';
} else {
	echo '<script language="javascript" type="text/javascript">alert("Sila semak email anda untuk pembaharuan katalaluan")</script>';
	 echo "<script language=javascript>
	           window.location.href='../index.php';
			   </script>";
}

?>
