<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['no_id']) || (trim($_SESSION['no_id']) == '')) {
		header("location: index.php");
		exit();
	}
?>