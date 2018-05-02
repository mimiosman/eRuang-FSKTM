
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link rel="shortcut icon"  href="imej/icon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<title>eRuang FSKTM</title>

<style type="text/css">

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

h4 {
    position: absolute;
    left: 300px;
    top: 220px;

	
}

.bg2 {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}


</style>


</head>
<body>

<table width="200"  border="0" align="center" cellpadding="0" cellspacing="0" background="imej/huhu.jpg" >

  <tr>
    <th scope="col"><img src="imej/banner1.jpg"  width="840" height="130" align="center" border="0" /></th>
  </tr>

  
  <tr>
   <td height="304" ><form name="form1" method="post" action="loginPengguna_semak.php">
	<ul>
	<li><a class="active" href="index.php">Utama</a></li>
	<li><a href="hubungi.php">Hubungi</a></li>
	<li><a href="jadual.php">Jadual Tempahan</a></li>
	</ul>
	
	 
          <table width="200" border="0" cellpadding="0" cellspacing="10" style="position: left; float: left;">
            <tr>
			<br>
              <td scope="col"><table width="85" border="0" align="center" bgcolor="#FFFFFF">
                <tr>
                  <td width="375" height="64" scope="col" bgcolor="#000033"  align="center"><span class="style60">Log Masuk</span> <span class="style61">&nbsp; </span>              
                </tr>
                <br>
                <tr>
                  <td height="158" scope="col"><table width="200" height="154" border="0" align="center">
                      <tr>
                        <td width="99">ID Pengguna</td>
                        <td width="10"><span class="style50" >:</span></td>
                        <td width="238"><span class="style50">
                          <label>
                          <input type="text" name="no_id" id="no_id" placeholder="Nombor Matrik/ID" />
                          </label>
                        </span></td>
                      </tr>
                      <tr>
                        <td>Katalaluan</td>
                        <td><span class="style50">:</span></td>
                        <td><span class="style50">
                          <label>
                          <input type="password" name="kata_laluan" id="kata_laluan" />
                          </label>
                        </span></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td><span class="style50">:</span></td>
                        <td><select name="status">
                            <option disabled="disabled" selected="selected">Sila Pilih Status</option>
                            <option value="1">Pelajar</option>
                            <option value="2">Pensyarah</option>
							
                        </select></td>
                      </tr>
        <td colspan="3" align="center">
		  <a href="lupa kata laluan/lupa_katalaluanFORM.php" class="style54">Lupa Katalaluan?</a><br>
		
					 <br>
              <table width="200" border="0">
                <tr>
                  <th scope="col"><input type="submit" value="Masuk">
                    <input type="hidden" name="submitted" value="TRUE"/>
                    <input type="reset" value="Padam"></th>
                </tr>
              </table>              </td>
        </tr><tr>
			
		
          <td colspan="3" align="center"> 
		 
		  <a href="pentadbir/index.php" class="style54">Log Masuk Pentadbir</a>
		  </td>
        </tr>
        
        </tr>
            </table>
					
                </tr>
              </table>
            </tr>
			<td colspan="3" align="center"><br>Belum ada akaun? Sila klik <a href="daftar.php" class="style54">di sini</a></td>
          </table>
		  
        </form>
		
        <table width="200" border="0">
          <tr>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="335">&nbsp;</td>
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
