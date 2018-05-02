<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon"  href="imej/icon.png" />
<script src="function/jquery.js" type="text/javascript"></script>
<script src="function/jquery.validate.js" type="text/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>eRuang FSKTM</title>


<script type="text/javascript">
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {	
	// validate signup form on keyup and submit
	$("#borang_daftar").validate({
		rules: {
			
			nama: "required",
			no_id: {
				required: true,
				minlength: 8,
			},
			kata_laluan: {
				required: true,
				minlength: 6
			},
			pengesahan_kata_laluan: {
				required: true,
				minlength: 6,
				equalTo: "#kata_laluan"
			},
			pengesahan_email: {
				required: true,
				equalTo: "#email"
			},
			
		
			email: {
				required: true,
				
			},
			
		
			
			no_tel: {
				
				required: true
			},
			no_was: {
				required: true
			},
			
			
		},
		messages: {
		
		
			nama: "<br>Sila masukkan nama penuh anda",
			no_id: {
				required: "<br>Sila masukkan nombor matrik anda",
				minlength: "<br>Nombor matrik anda mesti mempunyai 8 angka"
			},
			kata_laluan: {
				required: "<br>Sila masukkan kata laluan",
				minlength: "<br>Kata laluan anda mesti mempunyai 6 angka"
			},
			pengesahan_kata_laluan: {
				required: "<br>Sila masukkan pengesahan kata laluan",
				minlength: "<br>Kata laluan anda mesti mempunyai 6 angka",
				equalTo: "<br>Sila masukkan kata laluan yang sama"
			},
			pengesahan_email: {
				required: "<br>Sila masukkan pengesahan email anda",
				equalTo: "<br>Sila masukkan email yang sama"
			},
		
			email: "<br>Sila masukkan email anda dengan betul",
			no_tel: "<br>Sila masukkan nombor telefon anda",
			no_was: "<br>Sila masukkan nombor whatsapp anda"
		}
	});
});
</script>





<style type="text/css">
#borang_daftar { width: 100%; margin:0 auto }
#borang_daftar label.error {
	margin-left: 40px;
	width: auto;
	font-size:10PX;
	display: inline;
	color:#FF0000;
}
</style>



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

h4 {
    position: absolute;
    left: 300px;
    top: 220px;

	
}



</style>
</head>

<body>

<table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><img src="imej/banner1.jpg" aalt="" width="840" height="130" align="ce" border="0" /></th>
  </tr>
 

    <td height="304"><table width="200" border="0">
	<tr>
	<ul>
	<li><a href="index.php">Utama</a></li>

	<li><a href="#hubungi">Hubungi</a></li>
	<li><a href="jadual.php">Jadual Tempahan</a></li>
	</ul>
	
        <tr>
          <th height="21" scope="col">&nbsp;</th>
        </tr>
		
      </table>
        <form action="daftar_proses_email.php" method="post" id="borang_daftar">
		
		<center><h2>PENDAFTARAN PENGGUNA BARU</h2></center><br>
		
		
		
          <table width="200" border="0" align="center" bgcolor="#FFFFFF">
            <tr>
			
		
              <td scope="col"><table width="580" height="132" border="0">
                  <tr>
				  <li>Sila isi pada borang pendaftaran yang disediakan bagi tujuan membuat tempahan. </li>
				  <li> Dimaklumkan bahawa setelah berjaya mendaftar, katalaluan anda akan dihantar terus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kepada email. </li>
				  <li>Anda boleh menukar kataluan setelah log masuk ke dalam sistem. </li>
				  <img src="imej/line1.png"  width="560" height="60">
				  <br><br>
                    <td width="278" height="24">Nama</td>
                    <td width="10" bordercolor="#CCCCCC"><span class="style50">:</span></td>
                    <td width="395"><label>
                    <input type="text" name="nama" id="nama" size="40" class="input"/>
		</label></td>
                  </tr>
				  
				  <tr>
                    <td height="24">Status</td>
                    <td><span class="style50">:</span></td>
                    <td><label><span class="style52">
                      <select name="status" id="status"  class="input" onchange="if (this.value) window.location.href=this.value"/>
						<!--<option disabled="disabled" selected="selected">Sila Pilih Status</option>-->
						<option value="daftar_pelajar.php" >Pelajar</option>
						<option value="Pensyarah" selected="selected" >Pensyarah</option>
					  </select> 
                    </span> </label></td>
                  </tr>
				  
                  <tr>
                    <td height="24">No.ID</td>
                    <td><span class="style50">:</span></td>
                    <td><label><span class="style52">
                      <input type="text" name="no_id" id="no_id" size="40" class="input"/>
                    </span> </label></td>
                  </tr>
				  
                  <td height="24">Email</td>
                    <td><span class="style50">:</span></td>
                    <td><label>
                      <input type="text" name="email" id="email" size="13" />
					  <input type="text" name="email2" id="email2" size="10" readonly  value="@uthm.edu.my"/>
                  </tr>
				  
				  <tr>
                    <td height="24">Pengesahan Email</td>
                    <td><span class="style50">:</span></td>
                    <td><label>
                      <input type="text" name="pengesahan_email" id="pengesahan_email" size="13"  />
					  <input type="text" name="pengesahan_email2" id="pengesahan_email2" size="10" readonly  value="@uthm.edu.my"/>
                  </tr>
				  
				   <tr>
                    <td height="24">Nombor Telefon </td>
                    <td><span class="style50">:</span></td>
                    <td><label>
					<select name="no_tel2" >
					<option value="010">010</option>
					<option value="011">011</option>
					<option value="012">012</option>
					<option value="013">013</option>
					<option value="014">014</option>
					<option value="017">017</option>
					<option value="018">018</option>
					<option value="019">019</option>
					</select>
                      <input type="text" name="no_tel" id="no_tel" onkeypress="return isNumberKey(event)" maxlength="11" class="input" size="33"/>
                    </label></td>
                  </tr>
                </table>
            </tr>
			
            <tr>
              <td height="21" align="center">&nbsp;</td>
            </tr>
            <tr>
              <td height="26" align="center">
            		 <input type="submit" name="register" value="Daftar"  class="btn1" "/>
                    <input type="reset" value="Padam"></th> </td>
            </tr>
          </table>
        </form>
		
		
		<div align="center">
  <?php 
	  if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<font color="red"><br><br>',$msg,'</font></br>'; 
		}
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  <br />
<br /></div>
<div style="clear:both"></div>
		
        <table width="200" border="0">
          <tr>
            <th scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td height="21">&nbsp;</td>
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


<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
