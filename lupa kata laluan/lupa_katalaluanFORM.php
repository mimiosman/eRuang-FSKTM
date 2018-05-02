<?php
	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "eruangfsktm");
		
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " no_id = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from pengguna " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("lupa_katalaluan.php");
		} else {
			$error_message = 'Tiada Data';
		}
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon"  href="../imej/icon.png" />
<link type="text/css" rel="stylesheet" href="css/style.css">
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
	background: url(../imej/source1.gif);
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

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #4CAF50;
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
	<li><a href="../index.php">Utama</a></li>
	<!--<li><a href="#venue">Venue</a></li>
	<li><a href="#hubungi">Hubungi</a></li>
	<li><a href="#info">Info</a></li>-->
	</ul>
	
        <tr>
          <th height="21" scope="col">&nbsp;</th>
        </tr>
      </table>
       <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
	<center><h1>Lupa Katalaluan?</h1>
	<p>Sila masukkan no.Matrik/ID anda <b>ATAU</b> email anda.</p>
	<p>Selepas anda selesai hantar maklumat sila semak email anda untuk pembaharuan katalaluan.</p><hr>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">
		<div><label for="username">No Matrik/ID</label></div>
		<div><input type="text" name="user-login-name" id="user-login-name" class="input-field"> <br><br><b>atau</b></div><br>
	</div>
	
	<div class="field-group">
		<div><label for="email">Email</label></div>
		<div><input type="text" name="user-email" id="user-email" class="input-field"></div><br>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="forgot-password" id="forgot-password" value="Hantar" class="form-submit-button"></div>
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
