<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "list";
	$mysqli = new mysqli($hostname, $username, $password, $database);
	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	//magic quotes logic
	if (get_magic_quotes_gpc())
	{
	function stripslashes_deep($value)
	{
	    $value = is_array($value) ?
	    array_map('stripslashes_deep', $value) :
	    stripslashes($value);
	    return $value;
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
	}
?>