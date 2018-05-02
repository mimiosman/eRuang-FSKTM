<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['no_id']);
// Delete all session variables
// session_destroy();

// Jump to login page
  echo '<script language="javascript" type="text/javascript">alert("Terima Kasih !")</script>';
	 echo "<script language=javascript>
	           window.location.href='index.php';
			   </script>";

?>
