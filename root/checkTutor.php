<?php
/*
 * @author LibertyL
*/

/*
if (session_status() == PHP_SESSION_NONE) {
	session_start(); 
}
*/

if (!isset($_SESSION['userType']) or $_SESSION['userType'] != 'tutor') {
   header('Location: notAuthorised.php'); 
}
?>
