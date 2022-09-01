<?php 	
$page_css = "css/profile.css";
$page_title = "Make A House Profile | Find a Home Now";
require('includes/db.inc.php');
require('includes/functions.inc.php');
 require"includes/header.php";
 


 if (isset($_SESSION['agent_id'])) {
	$agent_id = $_SESSION['agent_id'];
} else {
	header("Location:index.php");
}


if (isset($_POST['submit'])) {
	$error = false;
// Check if text field is not empty, if yes then sanitize the Post Title and assign to a variable
	if (!empty($_POST['state'])) {
		$state = sanitize($_POST['state']);
	} else {
		$error = true;
		$title_err = 1;
	}
// Check if text field is not empty, if yes then Sanitize Post Category and assign to a variable
	if (!empty($_POST['country'])) {
		$country = sanitize($_POST['country']);
	} else {
		$error = true;
		$title_err = 1;
	}

	if ($error === false ) {
		# code...
	
$sql = "INSERT INTO country (country_name, state_name) VALUES ('$country', '$state')";
$query = mysqli_query($link, $sql);
if ($query) {
	# code...
	header("Location:house_profile_two.php");
}
}

}



?>


 <div id="mainform">

<div id="form">
<h3>Fill In The Following Information about The House</h3>
<p>* click Ok to fill in the remaining informations *</p>
<div>
<form method="POST">
<div class="col-2">
<label>Country :
<select id="country" name="country"></select>
</label>
</div>
<div class="col-2">
<label>State :
<select name="state" id="state"></select>
</label>
</div>
<input  type="submit" value="OK" class="col-submit btn btn-default" name="submit" >
</form>
</div>
</div>
</div>



<?php require"includes/footer.php"; ?>