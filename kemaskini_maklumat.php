<?php
session_start();
 include("database.php");

if(!isset($_SESSION["no_id"])) {
header("Location:index.php");
}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon"  href="imej/icon.png" />
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
	background-color: #232424;
	background: url(imej/source1.gif);
	 background-size: 1370px 650px;
	  background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000000;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #d4cdcd}

.dropdown:hover .dropdown-content {
    display: block;
}


.active {
    background-color: #4CAF50;
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
	<script language="JavaScript" type="text/javascript">
function checkConfirm(){
    return confirm('Adakah anda ingin log keluar?');
}
</script>
<body onload="startTime()">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="imej/banner1.jpg"  width="840" height="130" align="center" border="0" /></th>
  </tr>
  <tr>
    <td bgcolor="#000033"><table width="724" border="0">
      <ul>
		<li><a class="" href="menu_utama.php">Utama</a></li>
		<li class="dropdown">
		<a class="dropbtn">Profil</a>
		<div class="dropdown-content">
			<a href="maklumat_peribadi.php" class="active">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php" >Tukar Katalaluan</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Tempahan</a>
		<div class="dropdown-content">
			<a href="kemaskini_tempahan.php">Kemaskini Tempahan</a>
	
			<a href="status_tempahan.php">Status Tempahan</a>
		</div>
		</li>
			<li><a href="jadual_pengguna.php">Jadual Tempahan</a></li>
		<li style="float:right"><a href="log_keluar.php" onclick="return checkConfirm()" ><img src="imej/logout.png" width="19" height="14" /> Log Keluar</a></li>
		<script language="JavaScript" type="text/javascript">
function checkConfirm(){
    return confirm('Adakah anda ingin log keluar?');
}
</script>
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
				<font color="gray" size="2"><b>PROFIL</b></font><br>
				<center><br>
				<?php
					$no_id = $_SESSION['no_id'];
					$sql = "SELECT * FROM pengguna where no_id = '$no_id'";
					$result=mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
					echo "<img src='profil/".$row['imej']."' height='80' width='80' border='2'/>";
					}
					?>
				<br><br>

					  <?php
					if($_SESSION["no_id"]) {
						?>
					Selamat datang, <?php echo $_SESSION["no_id"]; ?>
					<?php
					}
						?>
					  </center>
					  <br>
					  <font color="gray">............................................</font><br>
					  <br>
					  <font color="gray" size="2"><b>TEMPAHAN</b></font><br>
					 <p> <a href="tempahan_baru.php" style="text-decoration: none;"><img src="imej/plus.png" width="15" height="12"/>&nbsp;Tempahan Baru</a><br>
					  <p><a href="status_tempahan.php" style="text-decoration: none;"><img src="imej/list.png" width="15" height="12"/>&nbsp;Status Tempahan</a>
					  <br><br>
					  <font color="gray">............................................</font><br>
					  <br>
					  <font color="gray" size="2"><b>PAUTAN</b></font><br>
					 <p> <a href="https://smap.uthm.edu.my/smap/" style="text-decoration: none;"><img src="imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">SMAP Online</font></a><br>
					  <p><a href="http://ppa.uthm.edu.my/" style="text-decoration: none;"><img src="imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Pejabat Pengurusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akademik (PPA)</font></a> 
					  <p><a href="http://fsktm.uthm.edu.my/v6/index.php/en/homepage/myfsktm" style="text-decoration: none;"><img src="imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Laman Utama Fakulti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sains Komputer dan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teknologi Maklumat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(FSKTM)</font></a>
			</div>
			
			<div class="rightDiv">
			
			<h3>KEMASKINI MAKLUMAT PERIBADI</h3>
			
			<font size="2"><li align="justify">Kemaskini boleh dilakukan hanya pada yang bertanda <font color=red>* </font></li></font><br>
			<font size="2"><li align="justify">Berikut adalah maklumat peribadi anda:</li></font><br><br>
	
			<?php
include"database.php";
$no_id = $_SESSION['no_id'];
					$sql = "SELECT * FROM pengguna where no_id = '$no_id'";
					$result=mysql_query($sql);
					while($row = mysql_fetch_array($result))
{
echo"
<form method=POST action='kemaskini_maklumat_proses.php' enctype='multipart/form-data'>
<input type=hidden name=id value='$row[no_id]'>


Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type=text name=nama size=50 maxlength=100 value='$row[nama]'><font color=red>* </font><br>

<br>No. Matrik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type=text name=no_id readonly size=50 maxlength=20  value='$row[no_id]'><br>

<br>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type=text name=status readonly size=50 maxlength=20 value='$row[status]'><br>

<br>No. Telefon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type=text name=no_tel size=50 maxlength=11 value='$row[no_tel]'><font color=red>* </font><br>



<br>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type=email name=email size=50 maxlength=50 value='$row[email]'><font color=red>* </font><br>

<br>Gambar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<img src='profil/$row[imej]' width='64' height='65' >
<br>Ganti Gambar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type=file name='fupload' size=40>
<br><br><input type=submit value=Kemaskini>
<input type=button value=Batal onclick=self.history.back()>

</form>";
}
?>



<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
			
						
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
    <td align="center" bgcolor="#75c3d9"><span class="style59">Pusat Data,<br>
	Fakulti Sains Komputer dan Teknologi Maklumat,<br>
      Universiti Tun Hussein Onn Malaysia,<br>
      86400,Parit Raja, Batu Pahat, Johor. </span></td>
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

</body>
</html>

