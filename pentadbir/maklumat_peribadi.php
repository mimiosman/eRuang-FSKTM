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
<script src="../function/jquery.js"></script>
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
			
			.fadein { 
			position:relative; height:232px; width:500px; margin:0 auto;
			
			padding: 10px;
			}
			.fadein img { position:absolute; left:-20px; top:0px; }
			
			
			a {
			text-decoration: none;
			}
			div#my_container a {
			text-decoration: none;
			}
			p.my_class a {
			text-decoration: none;
			}
			ul.my_list a {
			text-decoration: none;
			}

			
			p.main {
    text-align: justify;
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
				<ul>
			<li><a  href="menu_pentadbir.php">Utama</a></li><hr>
		<li class="dropdown">
		<font color="grey">Profil</font>
		<div class="dropdown-content">
			<a href="maklumat_peribadi.php" class="active">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php">Tukar Katalaluan</a>
		</div>
		</li><hr>
		
		<li class="dropdown">
		<font color="grey">Tempahan Pengguna</font>
		<div class="dropdown-content">
			<a href="tempahan_terbaru.php">Tempahan Terbaru</a>
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
			
		<div id="notification" style="display: none;">
		   
			<span class="dismiss"><a title="dismiss this notification">x</a></span>
			<!--<center><span class="blink_text"><font size="4">NOTIS</font></span></center><br>-->
			<?php
include("../database.php");
$result = mysql_query("SELECT * FROM tempahan WHERE status='DALAM PROSES' ORDER BY date ASC");
$rows = mysql_numrows($result);	
if($rows>0){
echo '<center><a href="tempahan_terbaru.php">Terdapat <span class="blink_text"><b>' . $rows. '</b></span> tempahan baru</a></center>';
}
else{
echo '<center>Tiada <font size="2" color="green"></font>tempahan dilakukan</center>';
}
?>
			</div>
			
			
			
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
			
			<center><h3>MAKLUMAT PERIBADI</h3></center>
			
			<!--<font size="2"><li align="justify">Sila klik pada <b>Kemaskini Maklumat</b> untuk mengubah maklumat anda.</li></font><br>
			<font size="2"><li align="justify">Berikut adalah maklumat peribadi anda:</li></font><br><br><br><br>-->
	
			<?php
							$staf_id = $_SESSION['staf_id'];
							$result = mysql_query("SELECT * FROM pentadbir where staf_id = '$staf_id' ");
							while($row = mysql_fetch_array($result))
								{
									//echo '<tr class="record">';
								
									echo "<center><img src='staf/".$row['imej']."' height='150' width='150' border='2'<br></center>";
									echo "<br>";
									echo '<div style="border: 1px dotted      #000000; "><b>Nombor Staf:&nbsp;&nbsp;</b>'.$row['staf_id'].'</div>';
									echo '<div style="border: 1px dotted      #000000;"><b>Nama:&nbsp;&nbsp;</b>'.$row['nama'].'</div>'; 
									echo '<div style="border: 1px dotted      #000000;"><b>Nombor Telefon:&nbsp;&nbsp;</b>'.$row['no_tel'].'</div>'; 
									echo '<div style="border: 1px dotted      #000000;"><b>Status:&nbsp;&nbsp;</b>'.$row['status'].'</div>'; 
									 echo '<div style="border: 1px dotted      #000000;"><b>Jawatan:&nbsp;&nbsp;</b>'.$row['jawatan'].'</div>'; 
									echo '<div style="border: 1px dotted      #000000;"><b>Email:&nbsp;&nbsp;</b>'.$row['email'].'</div>'; 
									//echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['rank'].'</td>'; 
									//echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['phone_num'].'</td>'; 
									
									echo '<p align="center"><a rel="facebox" href="kemaskini_maklumat.php?staf_id='.$row['staf_id'].'">Kemaskini Maklumat</a></p>';
									
									
								}
							?> 
							
							
							
			
						
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



$("#notification").fadeIn("slow").append('');
$(".dismiss").click(function(){
       $("#notification").fadeOut("slow");
});
</script>

<style>
#notification {
   
    top:40px; /* Set to 0 or wherever */
    width:98.9%; /* set to 100% if space is available */
    z-index:-1;
    text-align:left;
    font-weight:normal;
    font-size:13px;
   
    color:left;
    background-color:#FFE1E1;
    padding:5px;
}
#notification span.dismiss {
    border:1px solid #000;
    padding:0 8px;
    cursor:pointer;
    float:right;
    margin-right:10px;
}
#notification a {
    color:black;
    text-decoration:none;
    
}

.blink_text {

    animation:1s blinker linear infinite;
    -webkit-animation:1s blinker linear infinite;
    -moz-animation:1s blinker linear infinite;

     color: green;
    }

    @-moz-keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }

    @-webkit-keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }

    @keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }

</style>

</body>
</html>

