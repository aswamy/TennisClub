<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'alok_club';
	
	@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect to database server');
	@mysql_select_db($mysql_db) or die('db not connecting...');
?>