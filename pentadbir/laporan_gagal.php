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

			
			@media print {
				
    .leftDiv,
	.wuu,
	.month,
	.year,
	.wew,
	.submit	
	{	
      display: none;
    }
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
			<a href="laporan_berjaya.php" >Laporan Berjaya</a>
			<a href="laporan_gagal.php" class="active">Laporan Gagal</a>
		</div>
		</li><hr>

		
		<li><a href="log_keluar.php" onclick="return checkConfirm()" ><font color="red">Log Keluar</font></a></li>
		</ul>
				
			</div>
			
			<div class="rightDiv">
			<div class="wew">
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
			</div>
			<div class="container">

                <div class="row-fluid">
                   
                    <div class="span12">

                        <div   align="left">   


                            <div class="charts_container">
                                <div class="chart_container">
                                     <div class="alert alert-info">Graf  bilangan keseluruhan oleh pengguna yang telah <font color="red"><b>GAGAL TEMPAHAN</b></font> mengikut bulan dan tahun.</div> <br> 
									 <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
									
										<select name="month" required class="month">
										<option disabled="disabled" selected="selected" value="">Sila Pilih Bulan</option>
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
										
										<select name="year" required class="year">
										 <option disabled="disabled" selected="selected" value="" >Sila Pilih Tahun</option>
										<!--<option value="<?=$_POST['year']?>" ><?=@$_POST['year']?></option>-->
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>										
										</select>
										
										<input type="submit" name="submit" value="Jana Laporan" class="submit"/>
										
									</form>
									
									<?php 										
										if (isset($_POST['month'])) {	
											$month = $_POST['month'];
											$year = $_POST['year'];										
											$query = mysql_query("select nama_ruang, count(*) as num FROM tempahan  WHERE date LIKE '%-$month-$year' AND status='TEMPAHAN GAGAL'") or die(mysql_error());
										
											$row = mysql_fetch_array($query);
											
											if($row['num'] > 0) {
												echo '<button class="wuu" onclick="myFunction()">Cetak Laporan</button>';
												echo "<center><br><br>Laporan tempahan yang dilakukan pada bulan<b> $month </b> dan tahun <b>$year</b>.</center><hr/>";		
											}
											else{
												echo '<button class="wuu" onclick="myFunction()">Cetak Laporan</button>';
												echo "<center><font color='red'><br><br>Tiada tempahan yang dilakukan pada bulan</font><b> $month </b> <font color='red'>dan tahun </font><b>$year</b>.</center>";
												
											}
											
										}
								
									?>
                                    <canvas id="chartCanvas1" width="450" height="250">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>
									

                                </div>
                            </div>

						</div>


							<?php 
								$myquery = "select nama_ruang, count(*) as num FROM tempahan WHERE status='TEMPAHAN GAGAL' GROUP BY nama_ruang  ";
								if (isset($_POST['month'])) {
									$month = $_POST['month'];
									$year = $_POST['year'];
									$myquery = "select nama_ruang, count(*) as num FROM tempahan  WHERE date LIKE '%-$month-$year' and status='TEMPAHAN GAGAL' GROUP BY nama_ruang";
								;
									
								}
								else{
								echo"<center>Laporan pada bulan terkini (<b>" ;
									echo date("m/Y"); 
									echo"</b>)</center>" ;
								
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
                                chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8','#FF0000','#000000'];
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
					
					$color = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8','#FF0000','#000000'];
					$i = 0;
					$query = mysql_query($myquery) or die(mysql_error());
                    while ($row = mysql_fetch_array($query)) {
						echo "<font color='$color[$i]'>&#x26AB;</font>" . $row['nama_ruang']. "<br>";
						$i = $i + 1;
					}
				?>
				</p>

			
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
            <td height="280">&nbsp;</td>
          </tr>
      </table></td>
  </tr>
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
<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>

