<?php
require"includes/db.inc.php";
require"includes/functions.inc.php";
require"includes/header.php";
if (isset($_POST['submit_country'])) {
	$country = sanitize($_POST['country']);
	$state = sanitize($_POST['state']);
}
//Insert query
$sql = "INSERT INTO country(country_name,state_name) VALUES ('$country', '$state')";
$query = mysqli_query($link, $sql);
echo "Please Fill in the remaining information below";

?>