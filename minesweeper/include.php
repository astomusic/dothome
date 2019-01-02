<?php

	// DB account settings
	$db_host = "localhost";
	$db_user = "astomusic";
	$db_pass = "wj383838~";
	$db_name = "astomusic";
	

	// Cross-platform cookie
	@header ('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');
	
	// Global settings initialization
	$_GET = $HTTP_GET_VARS; 
	$_POST = $HTTP_POST_VARS; 
	$_SERVER = $HTTP_SERVER_VARS; 
	if( count($_GET) ) @extract($_GET); 
	if( count($_POST) ) @extract($_POST);
	if( count($_SERVER) ) @extract($_SERVER);
	
	// we must never forget to start the session
	//session_start();
	
	// Error message
	function error( $message )
	{
		echo $message;
		exit;
	}
		
	// DB connect function
	function db_connect()
	{
		global $db_host;
		global $db_user;
		global $db_pass;
		global $db_name;
	
		$connect = mysql_connect($db_host, $db_user, $db_pass) or error("DB connect failed.");
		mysql_select_db($db_name,$connect) or error("DB select failed.");

		mysql_query('set names utf8');

		/* MySQL 4.x -> 5.x password encryption */
	}

	// DB disconnect function
	function db_disconnect()
	{
		@mysql_close();
	}
	
	/* DB query function */
	
	/* Log-in function */
?>