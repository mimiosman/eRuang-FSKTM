<?php
session_start();
 include("../database.php");

if(!isset($_SESSION["staf_id"])) {
header("Location:index.php");
}

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
	background-color: #FFF;
	
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



.divTable {
    width: 100%;
    display: table;
    -webkit-box-shadow: 1px 1px 1px 1px #888888;
    box-shadow: 1px 1px 1px 1px #888888;
}
.divTableRow {
    width: 100%;
    height: 100%;
    display: table-row;
}
.divTableCell {
    padding:5px;
    width: 25%;
    height: 100%;
    display: table-cell;
    border: 1px solid #808080;
}
.divTableCellhd {
    background-color: #fff;
    color: #000;
    padding:5px;
    width: 1%;
    height: 100%;
    display: table-cell;
    border: 1px solid #000;
}
.divTable .divTableRow:nth-child(odd) {
    background-color: #aad4ff;
}
.divTable .divTableRow:hover {
   background-color: #FBEDBB;
}


mark {
    background-color: red;
    color: white;
}


</style>

<!-- slider gambar-->
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>


</head>

<body onload="startTime()">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="../imej/banner1.jpg"  width="840" height="0" align="center" border="0" /></th>
  </tr>
  <tr>
    <td bgcolor="#000033"><table width="724" border="0">
      <ul>
		<li><a href="menu_pentadbir.php">Utama</a></li>
		<li class="dropdown">
		<a  class="dropbtn">Profil</a>
		<div class="dropdown-content">
			<a href="maklumat_peribadi.php">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php">Tukar Katalaluan</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Tempahan Pengguna</a>
		<div class="dropdown-content">
			<a href="tempahan_terbaru.php">Tempahan Terbaru</a>
			<a href="senarai_tempahan_lulus.php">Tempahan Berjaya</a>
			<a href="senarai_tempahan_gagal.php" >Tempahan Gagal</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Notis</a>
		<div class="dropdown-content">
			<a href="notis_baru.php">Notis Baru</a>
			<a href="senarai_notis.php">Senarai Notis</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Laporan</a>
		<div class="dropdown-content">
			<a href="laporan_berjaya.php">Laporan Berjaya</a>
			<a href="laporan_gagal.php">Laporan Gagal</a>
		</div>
		</li>
		
		<li style="float:right"><a href="log_keluar.php" onclick="return checkConfirm()" >Log Keluar</a></li>
		
		<script language="JavaScript" type="text/javascript">
function checkConfirm(){
    return confirm('Adakah anda ingin log keluar?');
}
</script>
		
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
					$staf_id = $_SESSION['staf_id'];
					$sql = "SELECT * FROM pentadbir where staf_id = '$staf_id'";
					$result=mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
					echo "<img src='staf/".$row['imej']."' height='80' width='80' border='2'/>";
					echo "</br>";
					echo "Status:";
					echo $row['status'];
					}
					?>
				<br>

					  <?php
					if($_SESSION["staf_id"]) {
						?>
					Selamat datang, <?php echo $_SESSION["staf_id"]; ?>
					
					<?php
					}
						?>
					  </center><br>
					  <font color="gray">............................................</font><br>
					  <br>
					  <font color="gray" size="2"><b>NOTIS</b></font><br>
					 <p> <a href="notis_baru.php" style="text-decoration: none;"><img src="../imej/plus.png" width="15" height="12"/>&nbsp;Notis Baru</a><br>
					  <p><a href="senarai_notis.php" style="text-decoration: none;"><img src="../imej/list.png" width="15" height="12"/>&nbsp;Senarai Notis</a>
					  <br><br>
					  <font color="gray">............................................</font><br>
					   
					  <br>
					  <font color="gray" size="2"><b>PAUTAN</b></font><br>
					  <p> <a target = '_blank' href="https://smap.uthm.edu.my/smap/" style="text-decoration: none;"><img src="../imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">SMAP Online</font></a><br>
					  <p><a target = '_blank' href="http://ppa.uthm.edu.my/" style="text-decoration: none;"><img src="../imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Pejabat Pengurusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akademik (PPA)</font></a> 
					  <p><a target = '_blank' href="http://fsktm.uthm.edu.my/v6/index.php/en/homepage/myfsktm" style="text-decoration: none;"><img src="../imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Laman Utama Fakulti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sains Komputer dan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teknologi Maklumat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(FSKTM)</font></a>
				  
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
			 <br /> <br />
			 

<?php
			
			mysql_connect('localhost','root','');
			mysql_select_db('eruangfsktm');
		
			
            $sql = "SELECT * FROM tempahan WHERE id='$_GET[id]' and status='DALAM PROSES'";
			$hasil = mysql_query($sql);	
            
            //$bil = 1;
            $i=0;
   
            while($row2=mysql_fetch_array ($hasil)){
            if($i%2==0){
            }else{
            
            }
				
				
                //echo"<div class='divTableCell'>".$bil."</div>";
				
				echo "<div class='divTableCell'><b>NOMBOR RUJUKAN:</b> ".$row2['id']."<br>";
		
				echo "<b>NAMA PENEMPAH:</b> ".$row2['nama']."<br>";
		

				echo "<b>NO.MATRIK/ID:</b> ".$row2['no_id']."<br>";
				
				echo "<b>MASA TEMPAHAN:</b> ".$row2['time']. "<br>";

				echo "<b>TARIKH:</b> ".$row2['date']."<br>";
 	
				echo "<b>RUANG/VENUE:</b> ".$row2['nama_ruang']."<br>";
				
				echo "<b>STATUS TEMPAHAN:</b> <font color='goldenrod'>".$row2['status']."</font><br>";
				
				echo "<b>EMAIL:</b> ".$row2['email']."<br>";
				
				echo "<b>TUJUAN TEMPAHAN:</b> ".$row2['tujuan_tempahan']."</div><br>";
				
				echo '<center><a href="batalkan_tempahan.php?id='.$row2['id'].'" onclick="return checkConfirm()"><mark>BATALKAN TEMPAHAN</mark></a><b></center></div>';
				
				//echo "<div class='divTableCellhd'><b>Nombor Whatsapp</b> ".$row2['no_tel']."</div><br>";

              // $bil++;$i++;
	   
			}       
            ?>	

			
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
            <td height="0">&nbsp;</td>
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
    return confirm('Adakah anda pasti ingin membatalkan tempahan ini?');
}
</script>


</body>
</html>

