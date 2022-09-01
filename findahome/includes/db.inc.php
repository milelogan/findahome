<?php 
$host = "localhost";
$DBusername = "root";
$DBpassword = "";
$db = "findahome";

$link = mysqli_connect($host, $DBusername, $DBpassword, $db);
if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql" . mysqli_connect_error();
}

?>