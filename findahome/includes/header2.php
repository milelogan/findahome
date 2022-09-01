<?php 

ob_start();
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
	$email = $_SESSION['email'];
	$user_auth = true;
}
else{
	$user_auth =false;
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$page_title"; ?> </title>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" <?php echo $page_css; ?>">
	<link rel="icon" type="image/png" href="images/1j+ojl1FOMkX9WypfBe43D6kjP+DpR5LnR...EwXs1M3EMoAJtlCkkgPpp...P08.png">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/first.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/countries.js"></script>
	<meta name="keywords" content="home, house, agent,looking for a house, agents for house, organization, business, agent management, easy to get a house, estate managemnt, registration, housing managemnt.">
	<meta name="description" content="Find a home is an organization that is a middle man between agents and people looking for houses. It makes it easier for you to find a home without stress and with ease. Come join us today.">
</head>
<body>

<div class="container">

 <div class="widget">


<nav class="<?php if (isset($user_auth) && $user_auth == true) { echo 'long';} else {echo 'short';}
			 ?>">

			 <a href="javascript:void()" id="menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
	<div id="logo">
	<a href="index.php"><img src="images/1j+ojl1FOMkX9WypfBe43D6kjP+DpR5LnR...EwXs1M3EMoAJtlCkkgPpp...P08.png"></a>
	</div>

	<div class="navigation">
		<ul id="ul">
		<li id="home"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="howitworks.php">How It Works</a></li>
			<li><a href="findahome.php">Find a Home</a></li>
			<li><a href="agents.php">Agents</a></li>
			<li><a href="contact.php">Contact</a></li>

			<?php if (isset($user_auth) && $user_auth == true) {
			 ?>
		<li><a href="house_profile.php">Make Your House Profile</a></li>
		<li><a href="logout.php">logout</a></li>

	<?php }  ?>
		</ul>
	</div>

	</nav>
