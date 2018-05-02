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
<script src="function/jquery.js"></script>
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


ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
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
  <tr>
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
  </tr>
  
  <!--<tr>
    <th scope="col" bgcolor="#999999">Unit Pusat Data Fakulti Sains Komputer dan Teknologi Maklumat</th>
  </tr>-->
  <tr>
    <td>


        <form name="form1">
          <table width="665" border="0" align="center">
		  
		  <div id="notification" style="display: none;">
		   
			<span class="dismiss"><a title="dismiss this notification">x</a></span>
			<center><span class="blink_text"><font size="4">NOTIS</font></span></center><br>
			<?php
			include('database.php');
			$sql = "SELECT * FROM notis where status = 'pengguna'";
					$result=mysql_query($sql);
					while($row = mysql_fetch_array($result))
						{
							echo '<font style="font-family:Times;">'.$row['mesej']. '</font><br><br>';
						
						}
			?>
			</div>
		  
		  
				
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
		
			<br>
			<center><strong><font size="4">SELAMAT DATANG KE SISTEM TEMPAHAN RUANG FSKTM DALAM TALIAN</font></strong></center><br>
			<div class="fadein">
			
		
			
			<img src="imej/FSKTM.jpg"  width="560" height="300" border="1">
			<img src="imej/FSKTM1.jpg" width="560" height="300" border="1">
			<img src="imej/FSKTM2.jpg" width="560" height="300" border="1">
			<img src="imej/fsktmhistory.jpg" width="560" height="300" border="1">
			</div>
			<br><br><br>
			
			<img src="imej/line1.png"  width="560" height="60">
				<p class="main">Penubuhan Unit Pusat Data Fakulti Sains Komputer dan Teknologi Maklumat (FSKTM) di Universiti Tun Hussein Onn Malaysia (UTHM) adalah untuk menjalankan pengurusan pelajar dan pensyarah di fakulti tersebut. Pusat Data FSKTM juga menyediakan perkhidmatan penempahan ruang seperti bilik kuliah, makmal-makmal komputer, bilik tutorial dan sebagainya. 
				Bagi menjimatkan masa dan tenaga, Sistem Tempahan Ruang FSKTM Dalam Talian akan dibangunkan bagi memudahkan urusan penempahan ruang yang diperlukan oleh pengguna iaitu pelajar serta pensyarah dan seterusnya menyimpan segala maklumat tempahan ke dalam pangkalan data untuk dirujuk kepada pihak pentadbir iaitu kakitangan Pusat Data.</p><br>
			
			
			

                
			
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
            <td height="150">&nbsp;</td>
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

