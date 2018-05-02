<?php
session_start();
 include("database.php");

if(!isset($_SESSION["no_id"])) {
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
				height: 200px;
				width: 70%;
				float: right;
				
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
    background-color: #4a6b82;
    color: #fff;
    padding:5px;
    width: 25%;
    height: 100%;
    display: table-cell;
    border: 1px solid #808080;
}
.divTable .divTableRow:nth-child(odd) {
    background-color: #aad4ff;
}
.divTable .divTableRow:hover {
   background-color: #FBEDBB;
}


</style>


</head>

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
			<a href="maklumat_peribadi.php">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php">Tukar Katalaluan</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#" class="dropbtn">Tempahan</a>
		<div class="dropdown-content">
			<a href="kemaskini_tempahan.php">Kemaskini Tempahan</a>
			
			<a href="status_tempahan.php" class="active">Status Tempahan</a>
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
			
			<font color="gray"><b>STATUS TEMPAHAN:</b></font><br><br>
			<font size="2"><li align="justify">Status susunan tempahan adalah mengikut yang terkini.</li></font><br>
			<font size="2"><li align="justify">Berikut adalah senarai tempahan yang telah anda lakukan:</li></font><br><br>
			
	<div class="divTable">
    <div class="divTableRow">
        <div class="divTableCellhd">Nombor Rujukan</div>
        
        <div class="divTableCellhd">Masa</div>
		<div class="divTableCellhd">Tarikh</div>
		<div class="divTableCellhd">Ruang</div>
		<div class="divTableCellhd">Status</div>
		
    </div>
    


<?php
			$num_rec_per_page=5;
			mysql_connect('localhost','root','');
			mysql_select_db('eruangfsktm');
			if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
			$start_from = ($page-1) * $num_rec_per_page; 
			

            $no_id = $_SESSION['no_id'];
            $sql = "select * FROM tempahan  where no_id = '$no_id' ORDER BY id DESC LIMIT $start_from, $num_rec_per_page";
	
            $hasil = mysql_query($sql);
            $bil = 1;
            $i=0;
			
			
            
            while($row2=mysql_fetch_array ($hasil)){
            if($i%2==0){
            }else{
            
            }
				echo "<div class='divTableRow'>";
				
                //echo"<div class='divTableCell'>".$bil."</div>";
				
				echo "<div class='divTableCell'>".$row2['id']."</div>";
			  	
				//echo "<div class='divTableCell'>".$row2['no_id']."</div>";
        
				//echo "<div class='divTableCell'>".$row2['nama']."</div>";
                	
				echo "<div class='divTableCell'>".$row2['time']."</div>";
       
                echo "<div class='divTableCell'>".$row2['date']."</div>";

                echo "<div class='divTableCell'>".$row2['nama_ruang']."</div>";
				
				echo "<div class='divTableCell'>".$row2['status'];
				
				//echo '<div align="center"><a href="" id="'.$row2['id'].'" class="delbutton" title="Click To Cancel The Reservation">cancel</a></div>';
				
               echo"</div></div>";
               $bil++;$i++;
	   
			}       
            ?>	

			</div>	
			
			<!--nombor page -->
			<br>
			<center><?php 
			$sql = "select * FROM tempahan where no_id = '$no_id' "; 
			$rs_result = mysql_query($sql); //run the query
			$total_records = mysql_num_rows($rs_result);  //count number of records
			$total_pages = ceil($total_records / $num_rec_per_page); 
	
			if (mysql_num_rows($rs_result) == 0)
			{
			echo '<style="width:100%"><font color=red> Anda belum membuat sebarang tempahan lagi.</font>';
			}

			//echo "<a href='senarai_tempahan.php?page=1'>".'|<'."</a> "; // Goto 1st page  

			for ($i=1; $i<=$total_pages; $i++) { 
			if($i <> $page){
            echo "<a href='status_tempahan.php?page=".$i."' style='text-decoration: none;' >".'&nbsp;'."<font face='Verdana' size='2'>$i</font>"."</a> "; 
			}
			else { 
			echo "<font face='Verdana' size='4' color=red>$i</font>";
			} /// Current page is not displayed as link and given font color red
			}
			//echo "<a href='senarai_tempahan.php?page=$total_pages'>".'>|'."</a>"; // Goto last page
			?></center>

			
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

