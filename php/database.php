<?php   
error_reporting(0);
	$db_host = 'bq1xy12lmbv7wnjcxpnz-mysql.services.clever-cloud.com';
	$db_user = 'uveezxl565drvub6';
	$db_password = '********';
	$db_name = 'bq1xy12lmbv7wnjcxpnz';
	
	$mysql =new mysqli($db_host, $db_user, $db_password, $db_name);
	if (!$mysql) {
    	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}
?>