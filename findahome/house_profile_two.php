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
	if (!empty($_POST['address'])) {
		$address = sanitize($_POST['address']);
	} else {
		$error = true;
		$title_err = 1;
	}
// Check if text field is not empty, if yes then Sanitize Post Category and assign to a variable
	if (!empty($_POST['country'])) {
		$state_name = sanitize($_POST['country']);
		$state_name = intval($state_name);
		if ($state_name == 0) {
			$error = true;
			$noCatErr = 1;
		} 
	} else {
		$error = true;
		$cat_err = 1;
	}
// Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
	if (!empty($_POST['house_description'])) {
		$house_description = trim(sanitize($_POST['house_description']));
	} else {
		$error = true;	
		$article_err = 1;
	}

// Get image and carry out all neccessary validations



	



// If error is false insert post into the database
	if ($error === false) {
		$house_reg_date = $_POST['house_reg_date'];
		
	$sql_stmt = "INSERT INTO house_profile (house_address, house_description, agent_id,state_id, reg_date) VALUES ('$address', '$house_description', '$agent_id', '$state_name', '$house_reg_date')";
		$query = mysqli_query($link, $sql_stmt);
		if ($query) {
			
			header("Location:house_images/house_images.php");

		}
}

	}
	

 ?>



<div class="hidden_form" id="hidden_form">
	<form  method="POST" enctype="multipart/form-data" >
		<div class="col-2">
		<label>House Address :
		<input type="text" name="address" placeholder="Please Provide the address of the House you are managing">
		</label>
		</div>



		<div class="col-2">
		<label>State of the House
		<select name="country">
			<option value="0">Select State of the House</option>
				<?php 
				// Fetch all categries for HTML Select options
				$sql = "SELECT * FROM country";
				$result = mysqli_query($link, $sql);
				while ($row = mysqli_fetch_array($result)) { 
					$country_id = $row['country_id'];
					$state_name = $row['state_name'];
					?>
				<option value="<?php echo $country_id; ?>"><?php echo $state_name; ?></option>
				<?php } ?>
			</select>
			</label>
			</div>

		<div class="col-4">
		<label>House description :
		<textarea type="text" cols="7"  name="house_description" placeholder="Please provide a short or long story about the house. e.g How old it is, Past experience of the other tenants, etc..."></textarea>
		</label>
		</div>
		<input type="hidden" value="<?php echo time(); ?>" name="house_reg_date">

		<div class="col-submit1">
    <input type="submit" name="submit" value="Next"  enable  class="btn btn-somto">
  </div>
 

	</form>
</div>


<?php require"includes/footer.php"; ?>