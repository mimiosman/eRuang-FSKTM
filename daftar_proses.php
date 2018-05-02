<?php

	
	//Include database connection details
	require_once('database.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','root','');
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('eruangfsktm', $link);
	if(!$db) {
		die("Unable to select database");
	}
	//Sanitize the POST values
	$nama = $_POST['nama'];
	$status = $_POST['status'];
	$no_id = $_POST['no_id'];
	$email =$_POST['email'].$_POST['email2'];
	$no_tel = $_POST['no_tel'];
	$no_was =$_POST['no_was'];
	@$kata_laluan=md5($_POST['kata_laluan']);

	
	
		//Check for duplicate login ID
	 if($no_id != '') {
		$qry = "SELECT * FROM pengguna WHERE no_id='$no_id'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr['no_id'] = "Harap Maaf. Nombor matrik atau ID telah diguna.  ";
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	

	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header('location: daftar_gagal.php');
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO pengguna(`nama`, `status`,`no_id`, `email`, `no_tel`, `no_was`,imej) VALUES ('$nama', '$status','$no_id', '$email', '$no_tel', '$no_was','0')";
	
	$result =mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
			header("Location:daftar_berjaya.php");
		exit();
	}else {
		die("Query failed");
	}
?>