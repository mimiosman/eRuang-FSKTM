
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style>
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

</style>
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
</body>
</html>
