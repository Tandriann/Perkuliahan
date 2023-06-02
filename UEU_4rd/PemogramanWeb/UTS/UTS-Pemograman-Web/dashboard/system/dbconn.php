<?php
	$_host='localhost';
	$_usr='sql_pro_mygo_pw';
	$_pwd='13021986Adik';
	$_dbmain='sql_pro_mygo_pw';
	$_dbconn = mysqli_connect($_host, $_usr, $_pwd, $_dbmain);
	if (mysqli_connect_errno()){
		echo 'SERVER_ERROR_MSG: ' . mysqli_connect_error();
		exit();
	}
?>