<?php include_once('functions.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon"  href="imej/icon.png" />

<link type="text/css" rel="stylesheet" href="jscript/style.css"/>

<script src="jscript/jquery.min.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>eRuang FSKTM</title>
<style type="text/css">

.style50 {font-family: "Courier New", Courier, monospace}
.style52 {color: #FF0000;
	font-size: 12px;
	font-style: italic;
}
.style54 {font-size: 14px}
.style60 {font-size: x-large}
.style59 {font-size: small}
.style61 {color: #000000}
.style62 {color: #FFFFFF}
body {
	background-color: #232424;
	background: url(imej/source1.gif);
	 background-size: 1370px 650px;
	  background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}

/*ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
*/


</style>


<style>
body{ font-family: sans-serif;}
.none{ display:none;}
.dropdown{color: #444444;font-size:17px;}
#calender_section{ width:700px; }
#calender_section h2{ background-color:#1ebac6;; color:#444444; font-size:17px; text-align:center; line-height:30px;}
#calender_section h2 a{ color:#F58220; float:none;}
#calender_section_top{ width:700px; float:left; margin-top:55px; background-color:#1ebac6; height:30px; line-height:1px;}
#calender_section_top ul{padding:0; list-style-type:none;}
#calender_section_top ul li{ float:left; display:block; width:99px; border-right:1px solid #fff;  text-align:center; font-size:14px; min-height:0; background:none; box-shadow:none; margin:0; padding:0;}
#calender_section_bot{ width:100%; float:left; border-left:1px solid #ccc; border-bottom:1px solid #ccc;}
#calender_section_bot ul{ margin:0; padding:0; list-style-type:none;}
#calender_section_bot ul li{ float:left; width:99px; height:80px; text-align:center; border-top:1px solid #ccc; border-right:1px solid #ccc; min-height:0; background:none; box-shadow:none; margin:0; padding:0; position:relative;}
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


</head>

<!--<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.css"/>
<script src="jscript/jquery.min.js"></script>-->
<body>

<table width="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">

  <tr>
    <th scope="col"><img src="imej/banner1.jpg" aalt="" width="840" height="130" align="center" border="0" /></th>
  </tr>

  
  <tr>
  
   <td height="90"><form name="form1" action="index.php">
	<!--<ul>
	<li><a href="index.php">Utama</a></li>
	
	<li><a href="hubungi.php" class="active">Hubungi</a></li>
	<li><a href="#info">Info</a></li>
	</ul>-->
	<br>
	<center><input type="submit" value="Kembali" />
<h1 align="center">JADUAL TEMPAHAN</h1>
<center><div id="calendar_div" class="container">

	<?php echo getCalender(); ?>
</div></center>

	
	
			
            
         
         
      
        </form>
        <table width="200" border="0">
          <tr>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="50">&nbsp;</td>
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
</body>
</html>
