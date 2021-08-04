<?php
class db
{
	function OpenCon()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$db = "digital-wallet";
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
		if($conn-> connect_error)
		{
			die("Database Connection failed ..." .$conn-> OpenCon_error);
		}
		return $conn;
	}
}
	
?>
