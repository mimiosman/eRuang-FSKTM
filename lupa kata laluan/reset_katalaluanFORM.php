<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "eruangfsktm");
		$sql = "UPDATE `eruangfsktm`.`pengguna` SET `kata_laluan` = '" . md5($_POST["kata_laluan"]). "' WHERE `pengguna`.`no_id` = '" . base64_decode($_GET['name']) . "'";
		$result = mysqli_query($conn,$sql);
		echo '<script language="javascript" type="text/javascript">alert("Katalaluan berjaya ditukar !")</script>';
		echo "<script language=javascript>
	           window.location.href='../index.php';
			   </script>";
		
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon"  href="../imej/icon.png" />
<link type="text/css" rel="stylesheet" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>eRuang FSKTM</title>
<script>
function validate_password_reset() {
	if((document.getElementById("kata_laluan").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Sila masukkan katalaluan baru!"
		return false;
	}
	if(document.getElementById("kata_laluan").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "<font color='red'><b>Kedua-dua katalaluan mesti sama.</b></font><br><br>"
		return false;
	}
	
	return true;
}
</script>
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
body {
	background-color: #232424;
	background: url(../imej/source1.gif);
	 background-size: 1370px 650px;
	  background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
.style62 {color: #FFFFFF}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000033;
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



</style>
</head>

<body>

<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="../imej/banner1.jpg" aalt="" width="840" height="130" align="ce" border="0" /></th>
  </tr>
 

    <td height="304"><table width="200" border="0">
	<tr>
	<ul>
	<!--<li><a href="index.php">Utama</a></li>
	<li><a href="#venue">Venue</a></li>
	<li><a href="#hubungi">Hubungi</a></li>
	<li><a href="#info">Info</a></li>-->
	</ul>
	
        <tr>
          <th height="21" scope="col">&nbsp;</th>
        </tr>
      </table>
       <form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
	<center><h1>Katalaluan Baru</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">
		<div><label for="Password">Katalaluan</label></div>
		<div>
		<input type="password" name="kata_laluan" id="kata_laluan" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><label for="email">Pengesahan katalaluan</label></div>
		<div><input type="password" name="confirm_password" id="confirm_password" class="input-field"></div>
	</div>
	<br>
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Tukar katalaluan" class="form-submit-button"></div>
	</div>	</center>
</form>
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
</body>
</html>
