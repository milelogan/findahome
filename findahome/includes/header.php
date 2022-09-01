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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/respond.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>

	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<meta name="keywords" content="home, house, agent,looking for a house, agents for house, organization, business, agent management, easy to get a house, estate managemnt, registration, housing managemnt.">
	<meta name="description" content="Find a home is an organization that is a middle man between agents and people looking for houses. It makes it easier for you to find a home without stress and with ease. Come join us today.">
</head>
<body>
<nav class="navbar navbar-inverse" style="padding: 0;margin: 0">

	<div class="container-fluid">
	<!-- logo -->
	<div class="navbar-header">


	<button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#mainNavbar" aria-expanded="false" aria-controls="navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a href="#" class="navbar-brand">TheNewHome</a>

	</div>

	<div class="collapse navbar-collapse" id="mainNavbar">
		<ul class="nav navbar-nav" style="margin-left: 10%">
			<li id="home"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="howitworks.php">How It Works</a></li>
			<li><a href="findahome.php">Find a Home</a></li>
			<li><a href="agents.php">Agents</a></li>
			<li><a href="contact.php">Contact</a></li>

			<?php if (isset($user_auth) && $user_auth == true) {
			 ?>
		<li><a href="house_profile.php">Make a house profile</a></li>
		

	



		</ul>


		<!-- right align -->
		<ul class="nav navbar-nav navbar-right">
			<li><a href="logout.php">logout</a></li>
		</ul>
<?php }  ?>

	</div>
	
	
</div>
</nav>
