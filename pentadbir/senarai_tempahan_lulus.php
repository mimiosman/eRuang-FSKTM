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
<script src="../function/jquery.js"></script>
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
			<a href="maklumat_peribadi.php" >Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php" >Tukar Katalaluan</a>
		</div>
		</li><hr>
		
		<li class="dropdown">
		<font color="grey">Tempahan Pengguna</font>
		<div class="dropdown-content">
			<a href="tempahan_terbaru.php" >Tempahan Terbaru</a>
			<a href="senarai_tempahan_lulus.php" class="active">Tempahan Berjaya</a>
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
			 <br /> <br />
			
			<font color="gray"><b>SENARAI TEMPAHAN YANG TELAH DILULUSKAN:</b></font><br><br>
			<font size="2"><li align="justify">Susunan senarai tempahan yang telah diluluskan adalah mengikut yang terkini.</li></font>
			<font size="2"><li align="justify">Berikut adalah senarai tempahan yang telah diluluskan pihak pentadbir:</li></font><br><br>
			
	<div class="divTable">
    <div class="divTableRow">
        <div class="divTableCellhd">Nombor Rujukan</div>
        
        <div class="divTableCellhd">Masa</div>
		<div class="divTableCellhd">Tarikh</div>
		<div class="divTableCellhd">Ruang</div>
		<div class="divTableCellhd">Status</div>
		
    </div>
    


<?php
			$num_rec_per_page=4;
			mysql_connect('localhost','root','');
			mysql_select_db('eruangfsktm');
			if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
			$start_from = ($page-1) * $num_rec_per_page; 
			

            //$no_id = $_SESSION['no_id'];
            $sql = "select * FROM tempahan  where status = 'TEMPAHAN BERJAYA' ORDER BY id DESC LIMIT $start_from, $num_rec_per_page";
	
            $hasil = mysql_query($sql);
            $bil = 1;
            $i=0;
			
			
            
            while($row2=mysql_fetch_array ($hasil)){
            if($i%2==0){
            }else{
            
            }
				echo "<div class='divTableRow'>";
				
                //echo"<div class='divTableCell'>".$bil."</div>";
				
				echo '<div class="divTableCell"><a href="senarai_tempahan_lulus2.php?id='.$row2['id'].'">'.$row2['id'].'</a></div>';
			  	
				//echo "<div class='divTableCell'>".$row2['no_id']."</div>";
        
				//echo "<div class='divTableCell'>".$row2['nama']."</div>";
                	
				echo "<div class='divTableCell'>".$row2['time']."</div>";
       
                echo "<div class='divTableCell'>".$row2['date']."</div>";

                echo "<div class='divTableCell'>".$row2['nama_ruang']."</div>";
				
				echo "<div class='divTableCell'><font color='green'>".$row2['status'];
				
				
               echo"</font></div></div>";
               $bil++;$i++;
	   
			}       
            ?>	

			</div>	
			
			<!--nombor page -->
			<br>
			<center><?php 
			$sql = "select * FROM tempahan where status ='TEMPAHAN BERJAYA' "; 
			$rs_result = mysql_query($sql); //run the query
			$total_records = mysql_num_rows($rs_result);  //count number of records
			$total_pages = ceil($total_records / $num_rec_per_page); 
	
			if (mysql_num_rows($rs_result) == 0)
			{
			echo '<style="width:100%"><font color=red>Tiada sebarang tempahan dilakukan.</font>';
			}

			//echo "<a href='senarai_tempahan.php?page=1'>".'|<'."</a> "; // Goto 1st page  

			for ($i=1; $i<=$total_pages; $i++) { 
			if($i <> $page){
            echo "<a href='senarai_tempahan_lulus.php?page=".$i."' style='text-decoration: none;' >".'&nbsp;'."<font face='Verdana' size='2'>$i</font>"."</a> "; 
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

