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
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon"  href="imej/icon.png" />
<script src="lib/jquery.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!--pilih masa -->
  <script type="text/javascript">	
	$(document).ready(function(){
	$('#reserve').click(function(){
	checked = $("input[type=checkbox]:checked").length;
	
	if(!checked){
	alert("Sila pilih masa !");
	return false;
	}
	});
	});
  </script>

<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		
	
<script type="text/javascript">

/***********************************************
* Limit number of checked checkboxes script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("Anda hanya boleh membuat tempahan "+limit+" jam sahaja dalam satu masa.")
			this.checked=false
			}
		}
	}
}

</script>



	
		
<script type="text/javascript">
			
//<![CDATA[

/*
        A "Reservation Date" example using two datePickers
        --------------------------------------------------

        * Functionality

        1. When the page loads:
                - We clear the value of the two inputs (to clear any values cached by the browser)
                - We set an "onchange" event handler on the startDate input to call the setReservationDates function
        2. When a start date is selected
                - We set the low range of the endDate datePicker to be the start date the user has just selected
                - If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

        * Caveats (aren't there always)

        - This demo has been written for dates that have NOT been split across three inputs

*/

function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script> 
		

<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["index1"]["date"].value;
if (x==null || x=="")
  {
  alert("Sila pilih tarikh (klik pada ikon kalendar)");
  return false;
  }

}
</script>	

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
			position: relative;
			top: -595px;
			left: -20px;
				
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


table1 {
    border: 1px solid black;
	padding: 3px;
	 background: #000;
	 
}

table2 {
    border: 1px solid black;
	padding: 1px;
	 
}

table3 {
    border: 1px solid black;
	 	padding: 1px;
		
}

mark1 {
    background-color: green;
    color: white;
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
		<li><a href="menu_utama.php">Utama</a></li>
		<li class="dropdown">
		<a  class="dropbtn">Profil</a>
		<div class="dropdown-content">
			<a href="maklumat_peribadi.php">Maklumat Peribadi</a>
			<a href="tukar_katalaluanFORM.php">Tukar Katalaluan</a>
		</div>
		</li>
		<li class="dropdown">
		<a class="active" class="dropbtn">Tempahan</a>
		<div class="dropdown-content">
			<a href="#">Kemaskini Tempahan</a>
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
			
			</div>	
            
            </tr>
          </table>
		  
		  <div class="rightDiv">
			<font color="gray"><b>PANDUAN TEMPAHAN RUANG:</b></font><br><br>
			<font size="2"><li align="justify">Sebelum membuat tempahan sila baca terlebih dahulu peraturan-peraturan pengguna ruang di FSKTM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pada bahagian bawah.</li></font><br>	
			<font size="2"><li align="justify">Pilih mana-mana masa dan tarikh anda kehendaki untuk membuat tempahan.</li></font><br>
			<font size="2"><li align="justify">Pilih tempat yang anda ingin tempah. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></font><br>
			<font size="2"><li align="justify">Diingatkan anda mesti membuat tempahan <b>3 hari sebelum</b>.</li></font><br><br>

			<!-- BOOKING -->
			
			<?php if(!$_POST){ ?>
                    	
                        <br />       
                        <form method="post" name="index1" onsubmit="return validateForm()"  action="<?=$_SERVER['PHP_SELF'] ?>">
						
						
                        <b><font color=black>Tarikh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </font></b>
                        <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<font color=grey>Klik pada ikon kalendar. </font><br>
						<br>
						

						 <b><font color=black>Tempat&nbsp;&nbsp;&nbsp;: </font></b>
						<select name="nama_ruang"  class="ed" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						
						<?php
						include('database.php');
						$result3 = mysql_query("SELECT * FROM ruang");
						while($row3 = mysql_fetch_array($result3))
							{
								echo '<option value="'.$row3['nama_ruang'].'">';
								echo $row3['nama_ruang'];
								echo '</option>';
							}
						?>
						</select>
						
						
                        <br><br><center><input type="submit" value="CARI KEKOSONGAN" name="submit2" class="btn"></center>
                        </form>
                        
						
				
                        <?php }else{
                        $date = $_POST['date'];
						$date = strtr($_REQUEST['date'], '/', '-');
						
						
						$nama_ruang = $_POST['nama_ruang'];
						
						
                        $result = mysql_query("Select * from jadual where date = '$date'  and nama_ruang = '$nama_ruang' ")or die("ehhhh");
                        $count = mysql_num_rows($result);
                        if($count < 1){
                        $x = 'N/A';
						$xx = 'TUTUP';
                        mysql_query("INSERT INTO jadual VALUES ('','$nama_ruang','$date', '$x', '$x', '$x', '$x', '$x', '$x', '$x', '$x', '$x', '$x', '$xx')") or die("gjghjgjgjgggggggggggggggggggggjjjjjjjjjjjlklkjiuiuiui");
                        }
						
						
						$nama_ruang = $_POST['nama_ruang'];
						$result2 = mysql_query("Select * from jadual where date = '$date' and nama_ruang = '$nama_ruang'") or die("121212");
                        $row = mysql_fetch_array($result2) or die("nooooo");
						
						
						
                        $no_id = $_SESSION['no_id'];
                        $resultx = mysql_query("Select * from pengguna where no_id = '$no_id'") or die("pengguna laaaa");
                        $rowx = mysql_fetch_array($resultx) or die("xxxxx");
						
                        ?>
						
						<br>
						<form method="post" name="index1" onsubmit="return validateForm()"  action="<?=$_SERVER['PHP_SELF'] ?>">
						
						
                        <b><font color=black>Tarikh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </font></b>
                        <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<font color=grey>Klik pada ikon kalendar. </font><br>
						<br>
						

						 <b><font color=black>Tempat&nbsp;&nbsp;&nbsp;: </font></b>
						<select name="nama_ruang"  class="ed" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						
						<?php
						include('database.php');
						$result3 = mysql_query("SELECT * FROM ruang");
						while($row3 = mysql_fetch_array($result3))
							{
								echo '<option value="'.$row3['nama_ruang'].'">';
								
								echo $row3['nama_ruang'];
								echo '</option>';
							}
						?>
						</select>
						
						
                        <br><br><center><input type="submit" value="CARI KEKOSONGAN" name="submit2" class="btn"></center>
                        </form><br>
						
						--------------------------------------------------------------------------------------------------------------<br>
       
                        <form id="huhu" name="huhu" method="post" action="tempahan_proses.php">
                        <input type="hidden" name="nama" value="<?php echo $rowx['nama'];?>" />
                        <input type="hidden" name="no_id" value="<?php echo $rowx['no_id'];?>" />
						<input type="hidden" name="no_tel" value="<?php echo $rowx['no_tel'];?>" />
                        <input type="hidden" name="date" value="<?php echo $date;?>" />
						<input type="hidden" name="nama_ruang" value="<?php echo $nama_ruang;?>" />
						
                        <input type="hidden" name="email" value="<?php echo $rowx['email'];?>" />
						
                      
					  <center><strong> MAKLUMAT PEMOHON </strong></center><br>
					  
                        Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:&nbsp;<?php echo $rowx['nama'];?><br>
						
						Nombor Matrik/ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $rowx['no_id'];?><br>
                       
						Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $rowx['email'];?><br>
  
						Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $rowx['status'];?><br>
                        

						Nama Ruang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $nama_ruang;?><br>
                      
					  	
						
                       Tarikh Tempahan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $date;?><br>
					   
					   Kapasiti Pelajar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <input type="number" min="1" name="kapasiti" autofocus required placeholder="Kapasiti..." ><br><br>

					   
					   Tujuan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <textarea name="tujuan_tempahan" autofocus required placeholder="Tujuan tempahan..." style="height: 100px; width: 400px;"></textarea>
                     
						<br><br>
						--------------------------------------------------------------------------------------------------------------<br>
						<i>Sila pilih sesi tempahan yang mempunyai kekosongan sahaja.</i><br><br>
                        <?php
						
						echo '<style="width:100%"><u>SESI<font color=grey> PAGI/TENGAHARI</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>';
						echo '<style="width:100%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>SESI<font color=grey> PETANG</u></font><br><br>';
						
						echo "<p>";
						//sesi pagi 8am-9am
						echo '<table1 style="width:100%"><font color=white>8AM-9AM</font></table1>';
										
                        if($row['8am']== 'N/A'){
						echo "<table2>";
                        echo '&nbsp;<input type=checkbox name="8am-9am" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';
    					echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
						else if($row['8am']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['8am'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark1>'.$row['8am'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}
						
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					
			
						//sesi petang 1pm-2pm
						echo '<table1 style="width:100%"><font color=white>1PM-2PM</font></table1>';
                        if($row['1pm']=="N/A"){
						echo "<table2>";
                           echo '&nbsp;<input type=checkbox name="1pm-2pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">'; 
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>";
                        }
						else if($row['1pm']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['1pm'].'</mark></font>';
						echo "<span style='padding-left:0.0em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark1>'.$row['1pm'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						echo "</p>";
					
						
					
						//------------------------------------------------------------------------------------------------------------------------------------//
						
						//sesi pagi 9am-10am
				    	echo '<table1 style="width:100%"><font color=white>9AM-10AM</font></table1>';
                        if($row['9am']== 'N/A'){
						echo"<table2>";
                        echo '&nbsp;<input type=checkbox name="9am-10am" value="TEMPAH" style="vertical-align: middle; margin: 1px;">'; 
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
						else if($row['9am']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['9am'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 9px;"><mark1>'.$row['9am'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}					
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						
						
						//sesi petang 2pm-3pm
						echo '<table1 style="width:100%"><font color=white>2PM-3PM</font></table1>';
						 if($row['2pm']=="N/A"){ 
						echo "<table2>";
                           echo '&nbsp;<input type=checkbox name="2pm-3pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>";
                        }
						else if($row['2pm']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['2pm'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark1>'.$row['2pm'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						
						echo "<br><br>";
						
						
						//------------------------------------------------------------------------------------------------------------------------------------//
						
						//sesi pagi 10am-11am
						echo '<table1 style="width:100%"><font color=white>10AM-11AM</font></table1>';
                        if($row['10am']=="N/A"){
						echo"<table2>";
                           echo '&nbsp;<input type=checkbox name="10am-11am" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';          
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
						else if($row['10am']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['10am'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.9 style="vertical-align: middle; margin: 9px;"><mark1>'.$row['10am'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						
						
						//sesi petang 3pm-4pm
						echo '<table1 style="width:100%"><font color=white>3PM-4PM</font></table1>';
						if($row['3pm']=="N/A"){
						echo "<table2>";
                           echo '&nbsp;<input type=checkbox name="3pm-4pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';
                           //echo "<font color=black>3PM-4PM</font>";
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>";
                        }
						else if($row['3pm']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['3pm'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						//echo '<input type=checkbox name="3pm-4pm" value="BOOKED" disabled>';
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 6px;"><mark1>'.$row['3pm'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						
						echo "<br><br>";
						
						
						
						//------------------------------------------------------------------------------------------------------------------------------------//
						//sesi pagi 11am-12pm
						echo '<table1 style="width:100%"><font color=white>11AM-12PM</font></table1>';
                        if($row['11am']=="N/A"){
						echo"<table2>";
                           echo '&nbsp;<input type=checkbox name="11am-12pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';
                      
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
						else if($row['11am']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['11am'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
			
					    echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 8px;" ><mark1>'.$row['11am'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>&nbsp;&nbsp;&nbsp;";
						}
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						
						
						//sesi petang 4pm-5pm
						echo '<table1 style="width:100%"><font color=white>4PM-5PM</font></table1>';
						 if($row['4pm']=="N/A"){
						echo "<table2>";
                           echo '&nbsp;<input type=checkbox name="4pm-5pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>";
                        }
						else if($row['4pm']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['4pm'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 6px;"><mark1>'.$row['4pm'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
	
						echo "<br><br>";
						
				
				
				//------------------------------------------------------------------------------------------------------------------------------------//
						//sesi pagi/tengahari 12pm-1pm
						echo '<table1 style="width:100%"><font color=white>12PM-1PM</font></table1>';
                        if($row['12pm']=="N/A"){
						echo"<table2>";
                           echo '&nbsp;<input type=checkbox name="12pm-1pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';   
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                        }
						else if($row['12pm']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['12pm'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
					
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 6px;"><mark1>'.$row['12pm'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			
						//sesi petang 5pm-6pm
						echo '<table1 style="width:100%"><font color=white>5PM-6PM</font></table1>';
	
                        if($row['5pm']=="N/A"){
						echo "<table2>";
                           echo '&nbsp;<input type=checkbox name="5pm-6pm" value="TEMPAH" style="vertical-align: middle; margin: 1px;">';
         
						   echo "<span style='padding-left:0.1em'>&nbsp;</span></table2>";
                        }
						else if($row['5pm']== 'DALAM PROSES'){
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 7px;"><mark>'.$row['5pm'].'</mark></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						else
						{
						echo "<table3>";
						echo '&nbsp;<font size=0.8 style="vertical-align: middle; margin: 6px;"><mark1>'.$row['5pm'].'</mark1></font>';
						echo "<span style='padding-left:0.1em'>&nbsp;</span></table3>";
						}
						
						
                             
                        ?><br><br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<input type="submit"  value="TEMPAH" name="submit" class="btn" id="reserve">
                        <input type="reset" value="PADAM" name="reset" class="btn1">
						<!--<input type="button" name="cancel" value="BATAL" href='menu_utama.php' class="btn2" />-->
						
						
						<!--<script type="text/javascript">
						//Syntax: checkboxlimit(checkbox_reference, limit)
						checkboxlimit(document.forms.huhu, 2)
						</script>-->
                       
                        </form>
                       <br>
                        
                        <?php
                        }
                        
                        
                        ?>
			
		<br><br>
	<center><font color="red"><b><u>PERATURAN-PERATURAN PENGGUNAAN RUANG DI FSKTM</u></b></font></center><br><br>
	
	
	
	<font size="2"><li align="justify">Masa tempahan adalah dari jam 8.00 pagi sehingga 6.00 petang setiap hari <b>KECUALI HARI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JUMAAT</b> dan <b>SABTU</b> semua fasiliti <b>DITUTUP</b> untuk sebarang penggunaan.</li></font><br><br>
	
	<font size="2"><li align="justify">Pengguna hendaklah memastikan keadaan fasiliti yang digunakan berada dalam keadaan bersih &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sebelum, semasa dan selepas digunakan.</li></font><br><br>
		
	<font size="2"><li align="justify">Pengguna dilarang merokok di dalam kawasan FSKTM.</li></font><br>	
	
	<font size="2"><li align="justify">Pengguna dilarang membawa masuk makanan dan minuman beralkohol terutamanya <b>MAKMAL</b> di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FSKTM.</li></font>	
			
        </div>
		
			
			
			</div>	
        
        <table width="200" border="0">
          <tr>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="620">&nbsp;</td>
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
    
    var months = ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'October', 'November', 'Disember'];
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

