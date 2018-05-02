<?php include_once('functions_pengguna.php'); ?>
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



<script src="jscript/jquery.min.js"></script>
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

body{ }
.none{ display:none;}
.dropdown{color: #444444;font-size:13px;}
#calender_section{ width:620px; position: absolute;left: 467px;top: 220px;}
#calender_section h2{ background-color:#1ebac6;; color:#444444; font-size:13px; text-align:center; line-height:30px;}
#calender_section h2 a{ color:#F58220; float:none;}
#calender_section_top{ width:617px; float:left; margin-top:55px; background-color:#1ebac6; height:30px; line-height:1px;}
#calender_section_top ul{padding:0; list-style-type:none;}
#calender_section_top ul li{ float:left; display:block; width:87px; border-right:1px solid #fff;  text-align:center; font-size:16px; min-height:0; background:none; box-shadow:none; margin:0; padding:0;}
#calender_section_bot{ width:100%; float:left; border-left:1px solid #ccc; border-bottom:1px solid #ccc;}
#calender_section_bot ul{ margin:0; padding:0; list-style-type:none;}
#calender_section_bot ul li{ float:left; width:87px; height:80px; text-align:center; border-top:1px solid #ccc; border-right:1px solid #ccc; min-height:0; background:none; box-shadow:none; margin:0; padding:0; position:relative;}
#calender_section_bot ul li span{ margin-top:7px; float:left; margin-left:7px; text-align:center;}

.grey{ background-color:#DDDDDD !important;}
.light_sky{ background-color:#B9FFFF !important;}
.date_cell { cursor: pointer; cursor: hand; }
.date_cell:hover { background: #DDDDDD !important; }
.date_popup_wrap {
	position: absolute;
	width: 143px;
	height: 115px;
	z-index: 9999;
	top: -50px;
	left:-30px;
	background: transparent url(imej/add-new-event.png) no-repeat top left;
	color: #666 !important;
}
.events_window {
	overflow: hidden;
	overflow-y: auto;
	width: 133px;
	height: 115px;
	margin-top: 28px;
	margin-left: 25px;
}
.event_wrap {
	margin-bottom: 10px; padding-bottom: 10px;
	border-bottom: solid 1px #E4E4E7;
	font-size: 12px;
	padding: 3px;
}
.date_window {
	margin-top:20px;
	margin-bottom: 2px;
	padding: 5px;
	font-size: 16px;
	margin-left:9px;
	margin-right:14px
}
.popup_event {
	margin-bottom: 2px;
	padding: 2px;
	font-size: 16px;
	width:100%;
}
.popup_event a {color: #000000 !important;}
.packeg_box a {color: #F58220;float: right;}
a:hover {color: #181919;text-decoration: underline;}

@media only screen and (min-width:480px) and (max-width:767px) {
#calender_section{ width:336px;}
#calender_section_top ul li{ width:47px;}
#calender_section_bot ul li{ width:47px;}
}
@media only screen and (min-width: 320px) and (max-width: 479px) {
#calender_section{ width:219px;}
#calender_section_top ul li{ width:30px; font-size:11px;}
#calender_section_bot ul li{ width:30px;}
#calender_section_bot{ width:217px;}
#calender_section_bot ul li{ height:50px;}
}

@media only screen and (min-width: 768px) and (max-width: 1023px) {
#calender_section{ width:530px;}
#calender_section_top ul li{ width:74px;}
#calender_section_bot ul li{ width:74px;}
#calender_section_bot{ width:525px;}
#calender_section_bot ul li{ height:50px;}
}

</style>

<!-- slider gambar-->
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

	<script language="JavaScript" type="text/javascript">
function checkConfirm(){
    return confirm('Adakah anda ingin log keluar?');
}
</script>

</head>

<body onload="startTime()">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="imej/banner1.jpg"  width="840" height="130" align="center" border="0" /></th>
  </tr>
  <!--<tr>
    <td bgcolor="#000033"><table width="724" border="0">
      <ul>
		<li><a class="active" href="menu_utama.php">Utama</a></li>
		<li class="dropdown">
		<a  class="dropbtn">Profil</a>
		<div class="dropdown-content">
			<a href="maklumat_peribadi.php">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php">Tukar Katalaluan</a>
		</div>
		</li>
		
		<li class="dropdown">
		<a  class="dropbtn">Tempahan</a>
		<div class="dropdown-content">
			<a href="kemaskini_tempahan.php">Kemaskini Tempahan</a>
			<a href="status_tempahan.php" class="dropbtn">Status Tempahan</a>
		</div>
		</li>
		
		
		<li><a href="jadual_pengguna.php">Jadual Tempahan</a></li>
				<li style="float:right"><a href="log_keluar.php" onclick="return checkConfirm()" ><img src="imej/logout.png" width="19" height="14" /> Log Keluar</a></li>

		
	</ul>
    </table></td>
  </tr>-->
  
  <!--<tr>
    <th scope="col" bgcolor="#999999">Unit Pusat Data Fakulti Sains Komputer dan Teknologi Maklumat</th>
  </tr>-->
  <tr>
    <td>


        <form name="form1">
          <table width="665" border="0" align="center">
				
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
					  </center><br>
					  <font color="gray">............................................</font><br>
					  <br>
					  <font color="gray" size="2"><b>TEMPAHAN</b></font><br>
					 <p> <a href="tempahan_baru.php" style="text-decoration: none;"><img src="imej/plus.png" width="15" height="12"/>&nbsp;Tempahan Baru</a><br>
					  <p><a href="status_tempahan.php" style="text-decoration: none;"><img src="imej/list.png" width="15" height="12"/>&nbsp;Status Tempahan</a>
					  <br><br>
					  <font color="gray">............................................</font><br>
					   
					  <br>
					  <font color="gray" size="2"><b>PAUTAN</b></font><br>
					  <p> <a target = '_blank' href="https://smap.uthm.edu.my/smap/" style="text-decoration: none;"><img src="imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">SMAP Online</font></a><br>
					  <p><a target = '_blank' href="http://ppa.uthm.edu.my/" style="text-decoration: none;"><img src="imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Pejabat Pengurusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akademik (PPA)</font></a> 
					  <p><a target = '_blank' href="http://fsktm.uthm.edu.my/v6/index.php/en/homepage/myfsktm" style="text-decoration: none;"><img src="imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Laman Utama Fakulti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sains Komputer dan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teknologi Maklumat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(FSKTM)</font></a>
					  
					
					  
		</div>

			
			<div class="rightDiv">
		<center><input type="button" value="Kembali" onclick="window.location.href='menu_utama.php'" />	</center>
			
			<h3 align="center">JADUAL TEMPAHAN</h3><br>
<div id="calendar_div" class="container">

	<?php echo getCalender(); ?>
</div>

                
			
			</div>	
			
				
			<div "style: clear:both;"></div>
		</div>
				
            </tr>
          </table>
        </form>
        <table width="200" border="0">
          <tr>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="250">&nbsp;</td>
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
    background-color:#E8E8E8;
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

     color: red;
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

