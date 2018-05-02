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
	background-color: #232424;
	
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
	<?php
			mysql_select_db('eruangfsktm',mysql_connect('localhost','root',''))or die(mysql_error());
			?>
<script src="js/jquery.js" type="text/javascript"></script>

    <script type="application/javascript" src="js/awesomechart.js"> </script>

<body onload="startTime()">

<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="../imej/banner1.jpg"  width="840" height="130" align="center" border="0" /></th>
  </tr>
  <tr>
    <td bgcolor="#000033"><table width="724" border="0">
      <ul>
		<li><a class="active" href="menu_pentadbir.php">Utama</a></li>
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
			<a href="#">Kemaskini Tempahan</a>
			<a href="#">Status Tempahan</a>
			<a href="senarai_tempahan.php">Senarai Tempahan</a>
		</div>
		</li>
		
		<li class="dropdown">
		<a href="#" class="dropbtn">Notis</a>
		<div class="dropdown-content">
			<a href="#">Notis Baru</a>
			<a href="#">Senarai Notis</a>
		</div>
		</li>
		
		<li><a href="laporan.php">Laporan</a></li>
		
	<li style="float:right"><a href="log_keluar.php" onclick="return checkConfirm()" >Log Keluar</a></li>
		
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
					$staf_id = $_SESSION['staf_id'];
					$sql = "SELECT * FROM pentadbir where staf_id = '$staf_id'";
					$result=mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
					echo "<img src='staf/".$row['imej']."' height='80' width='80' border='2'/>";
					}
					?>
				<br><br>

					  <?php
					if($_SESSION["staf_id"]) {
						?>
					Selamat datang, <?php echo $_SESSION["staf_id"]; ?>
					<?php
					}
						?>
					  </center>
					  <br>
					  <font color="gray">............................................</font><br>
					  <br>
					  <font color="gray" size="2"><b>NOTIS</b></font><br>
					 <p> <a href="tempahan_baru.php" style="text-decoration: none;"><img src="../imej/plus.png" width="15" height="12"/>&nbsp;Notis Baru</a><br>
					  <p><a href="senarai_tempahan.php" style="text-decoration: none;"><img src="../imej/list.png" width="15" height="12"/>&nbsp;Senarai Notis</a>
					  <br><br>
					  <font color="gray">............................................</font><br>
					  <br>
					  <font color="gray" size="2"><b>PAUTAN</b></font><br>
					 <p> <a href="https://smap.uthm.edu.my/smap/" style="text-decoration: none;"><img src="../imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">SMAP Online</font></a><br>
					  <p><a href="http://ppa.uthm.edu.my/" style="text-decoration: none;"><img src="../imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Pejabat Pengurusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Akademik (PPA)</font></a> 
					  <p><a href="http://fsktm.uthm.edu.my/v6/index.php/en/homepage/myfsktm" style="text-decoration: none;"><img src="../imej/arrow.jpg" width="13" height="12"/>&nbsp;<font size="2">Laman Utama Fakulti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sains Komputer dan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teknologi Maklumat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(FSKTM)</font></a>
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
			
			<div class="container">

                <div class="row-fluid">
                   
                    <div class="span12">

                        <div   align="left">   


                            <div class="charts_container">
                                <div class="chart_container">
                                     <div class="alert alert-info">Graf  bilangan keseluruhan yang telah <b>DILULUSKAN TEMPAHAN</b>.</div> <br> 
									 <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
									
										<select name="month" required>
										<option disabled="disabled" selected="selected">Sila Pilih Bulan</option>
											<!--<option  value="<?=@$_POST['month']?>" ><?=@$_POST['month']?></option>-->
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
										<select name="year" required >
										 <option disabled="disabled" selected="selected">Sila Pilih Tahun</option>
										<!--<option value="<?=$_POST['year']?>" ><?=@$_POST['year']?></option>-->
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>										
										</select>
										
										<input type="submit" name="submit" value="Jana Laporan"/>
										
									</form>
									<?php 										
										if (isset($_POST['month'])) {	
											$month = $_POST['month'];
											$year = $_POST['year'];										
											$query = mysql_query("select nama_ruang, count(*) as num FROM tempahan  WHERE date LIKE '%/$month/$year' AND status='DALAM PROSES'") or die(mysql_error());
										
											$row = mysql_fetch_array($query);
											
											if($row['num'] > 1) {
												echo "<center><br><br>Tempahan yang dilakukan pada bulan<b> $month </b> dan tahun <b>$year</b>.</center>";
											}
											else{
												echo "<center><font color='red'><br><br>Tiada tempahan yang dilakukan pada bulan</font><b> $month </b> <font color='red'>dan tahun </font><b>$year</b>.</center>";
											}
											
										}
								
									?>
                                    <canvas id="chartCanvas1" width="510" height="300">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>
									

                                </div>
                            </div>

						</div>


							<?php 
								$myquery = "select nama_ruang, count(*) as num FROM tempahan WHERE status='DALAM PROSES' GROUP BY nama_ruang  ";
								if (isset($_POST['month'])) {
									$month = $_POST['month'];
									$year = $_POST['year'];
									$myquery = "select nama_ruang, count(*) as num FROM tempahan  WHERE date LIKE '%/$month/$year' and status='DALAM PROSES' GROUP BY nama_ruang";
												
								}
								
							?>
							
                            <script type="application/javascript">

                                var chart1 = new AwesomeChart('chartCanvas1');


                                chart1.data = [
                                <?php
                               $query = mysql_query($myquery) or die(mysql_error());
								
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php  echo $row['num'] . ','; ?>	
                                <?php }; ?>
                                ];

                                chart1.labels = [
                                <?php
                                $query = mysql_query($myquery) or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                  <?php echo "'" . $row['nama_ruang'] . "'" . ','; ?>	
                                <?php }; ?>
                                ];
                                chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
                                chart1.randomColors = true;
                                chart1.animate = true;
                                chart1.animationFrames = 30;
                                chart1.draw();


                               
                            </script>


                        </div>

                    </div>
                </div>
				
				<br>
				
				
				<p>
				<?php 
					$color = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
					$i = 0;
					$query = mysql_query($myquery) or die(mysql_error());
                    while ($row = mysql_fetch_array($query)) {
						echo "<font color='$color[$i]'>&#x26AB;</font>" . $row['nama_ruang'];
						$i = $i + 1;
					}
				?>
				</p>
							

			<!--<?php
			include('laporan/config.php');
			$query = "SELECT * FROM tempahan where status='DITEMPAH'";
			$result = mysql_query($query);
			
			echo "<td>".mysql_num_rows($result)."</td>";
			
			?>-->

			
			
						
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
            <td height="100">&nbsp;</td>
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

