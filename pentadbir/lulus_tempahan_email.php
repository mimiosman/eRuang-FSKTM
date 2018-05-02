<?php
session_start();
 include("../database.php");

if(!isset($_SESSION["staf_id"])) {
header("Location:index.php");
}

$host = "localhost";
$username = "root";
$pwd = "";
$db = "eruangfsktm";

mysql_connect ( $host, $username, $pwd ) or 
	die ("Cannot connect To Database");
mysql_select_db ( $db ) or
	die ("Database Not Found");
	
	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon"  href="../imej/icon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>eRuang FSKTM</title>
<style type="text/css">
.clockdate-wrapper {
    background-color: #333;
    padding:20px;
    max-width:100px;
    width:100%;
    text-align:center;
    border-radius:5px;
    margin:0 auto;
    margin-top:-315%;
}
#clock{
    background-color:#333;
    font-family: sans-serif;
    font-size:20px;
    text-shadow:0px 0px 1px #fff;
    color:#fff;
}
#clock span {
	color:#fff;
	text-shadow:0px 0px 1px #333;
	font-size:11px;
	position:relative;
	top:-6px;
	left:1px;
}
#date {
    letter-spacing:1px;
    font-size:11px;
    font-family:arial,sans-serif;
    color:#000;
}



.style50 {font-family: "Courier New", Courier, monospace}
.style54 {font-size: 14px}
.style59 {font-size: small}
.style60 {
	font-size: x-large;
	color: #FFFFFF;
}
.style61 {color: #FFFFFF}
.style52 {color: #FF0000;
	font-size: 12px;
	font-style: italic;
}
body {
	background-color: #343434;
	
	
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
    
    height: 91%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.outerDiv
			{
				background-color: #FFFFFF;
				color: #fff;
				height: 400px;
				width: 800px;
				margin: 0px auto;
				padding: 0px;
			}
			.leftDiv
			{
				background-color: #FFFFFF;
				color: #000;
				height: 595px;
				width: 22%;
				float: left;
				border-style: outset;
				position: relative;
				top: 0px;
				left: 0px;
				
			}
			.rightDiv
			{
				background-color: #FFFFFF;
				color: #000;
				height: 400px;
				width: 70%;
				float: right;
			}

</style>
</head>

<body onload="startTime()">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="../imej/banner1.jpg"  width="840" height="0" align="center" border="0" /></th>
  </tr>
  <tr>
    <td bgcolor="#000033"><table width="724" border="0">
      <ul>
		
		
		<script language="JavaScript" type="text/javascript">
function checkConfirm(){
    return confirm('Adakah anda ingin log keluar?');
}
</script>


							<?php
require_once 'swift/lib/swift_required.php';

if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message_body = $_POST['message'];
	
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('psmemailtester@gmail.com') //your gmail email account
  ->setPassword('psmemailtester123'); //and you gmail password account

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($subject) //your subject line
  ->setFrom(array('psmemailtester@gmail.com' => 'Pusat Data FSKTM')) // from sender info 
  ->setTo(array($email)) // to recipient
  ->setBody($message_body); // your message

	if($result = $mailer->send($message)) {
		echo "<script>alert('Notifikasi telah dihantar pada email: $email');</script>";
		echo "<script language=javascript>
	           window.location.href='menu_pentadbir.php';
			   </script>";
	}
}
//Edited by: Ronard Cauba/ronardcauba@zoho.com
//Date: 4/16/2014
?>
			
			
		
	</ul>
    </table></td>
  </tr>
<tr>
    <td>
          <table width="665" border="0" align="center">
			<br>		
			<br>		
  <div class="outerDiv">
			<div class="leftDiv">
			<div id="clockdate">
					<div id="clock"></div>
					<div id="date"></div>
			</div><br>
				<div id="clockdate">
					<div id="clock"></div>
					<div id="date"></div>
			</div>
				<ul>
			<li><a  href="menu_pentadbir.php">Utama</a></li><hr>
		<li class="dropdown">
		<font color="grey">Profil</font>
		<div class="dropdown-content">
			<a href="maklumat_peribadi.php">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php">Tukar Katalaluan</a>
		</div>
		</li><hr>
		
		<li class="dropdown">
		<font color="grey">Tempahan Pengguna</font>
		<div class="dropdown-content">
			<a href="tempahan_terbaru.php" >Tempahan Terbaru</a>
			<a href="senarai_tempahan_lulus.php">Tempahan Berjaya</a>
			<a href="senarai_tempahan_gagal.php">Tempahan Gagal</a>
		</div>
		</li><hr>
		
		<li class="dropdown">
		<font color="grey">Notis</font>
		<div class="dropdown-content">
			<a href="notis_baru.php">Notis Baru</a>
			<a href="senarai_notis.php">Senarai Notis</a>
		</div>
		</li><hr>
		
		<li class="dropdown">
		<font color="grey">Laporan</font>
		<div class="dropdown-content">
			<a href="laporan_berjaya.php">Laporan Berjaya</a>
			<a href="laporan_gagal.php">Laporan Gagal</a>
		</div>
		</li><hr>

		
		<li><a href="log_keluar.php" onclick="return checkConfirm()" ><font color="red">Log Keluar</font></a></li>
		</ul>
		</div>
			
			<div class="rightDiv">
			
					
		<center><h3>BAHAGIAN PENTADBIR</h3></center>
		<font color="gray" size="2"><p align="center">
			<?php
					$staf_id = $_SESSION['staf_id'];
					$sql = "SELECT * FROM pentadbir where staf_id = '$staf_id'";
					$result=mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
					
					echo $row['nama'];
					}
					?> </font></p>
			<img src="../imej/line1.png"  width="560" height="60">
			 <br /> 
			
			<center><h3>NOTIFIKASI MELALUI EMAIL</h3></center>

			<?php
	include('../database.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM tempahan where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$id=$row['id'];
				$email=$row['email'];
				$nama=$row['nama'];
				$no_id=$row['no_id'];
				$time=$row['time'];
				$date=$row['date'];
				$nama_ruang=$row['nama_ruang'];
			}
?>


<form action="lulus_tempahan_email.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id=$_GET['id'] ?>"><br>
	
	<div class="form-group">
		<label for="name">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="email" name="email" id="email" value="<?php echo $email?>" placeholder="Email" autofocus required style="height: 30px;" readonly />
	</div><br>
	
	<div class="form-group">
		<label for="name">Subjek:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type="text" value="TEMPAHAN ANDA BERJAYA" name="subject" readonly id="EMAIL" placeholder="Subject Line" required style="height: 30px; width: 183px;" />
	</div><br>
	
	<div class="control-group">
		<label for="name">Mesej:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<textarea name="message" id="desc"  readonly placeholder="Mesej" required style="height: 160px; width: 300px;">Kepada <?php echo $nama ?> bernombor matrik <?php echo $no_id ?>, tempahan anda telah berjaya diluluskan oleh Pusat Data FSKTM. Berikut adalah maklumat tempahan yang telah anda lakukan: 
			
			
Ruang: <?php echo $nama_ruang ?>
		  Tarikh: <?php echo $date ?>
					Masa: <?php echo $time ?></textarea>
	</div><br>
	<div class="control-group">
		<input type="submit" name="submit" value="Hantar" class="btn btn-primary"/>
	</div>
</form>
			
						
			</div>	
				
			<div "style: clear:both;"></div>
		</div>
				
                
            </tr>
          </table>

        <table width="200" border="0">
          <tr>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="40">&nbsp;</td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#000"><span class="style59"><font color="white">Pusat Data,<br>
		Fakulti Sains Komputer dan Teknologi Maklumat,<br>
      Universiti Tun Hussein Onn Malaysia,<br>
      86400,Parit Raja, Batu Pahat, Johor. </font></span></td>
  </tr>
</table>

<script>
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['Januari', 'Februari', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Disember'];
    var days = ['Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>

<script language="JavaScript" type="text/javascript">
function checkConfirm(){
    return confirm('Adakah anda pasti ingin menghantar notifikasi?');
}
</script>


</body>
</html>

