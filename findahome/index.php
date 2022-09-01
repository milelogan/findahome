<?php 	
$page_css = "css/style.css";
$page_title = "Home | Find a Home Now";
 require"includes/header.php";
 ?>


<div class="widget">
<div class="upper_motion">


 	<div id="inside">	
 			<h1>Welcome To Find A Home</h1>
 	<p>When you are in need of a house, We are here to help. Find a house now.</p>
 	<a href="findahome.php"><button>Find A Home Now</button></a>
 	</div>
 </div>
</div>

<div class="section">
	<div>
		<h2>How it works.</h2>
		<img src="images/images-2.jpeg">
		<p>Find a home is easy to use because you dont need to start looking for house anymore, just search for agents that has a free house and contact them. </p>
	</div>
	<div>
		<h2>Benefits.</h2>
		<img src="images/images.jpg">
		<p>It saves time and gives you the best houses around your area.</p>
	</div>
	<div id="aye">
		<h2>Why To Use Find A Home.</h2>
		<img src="images/imgs.jpg">
		<p>You should use Find a home because it is the best and easiest way to find a house.</p>
	</div>
</div>

<div class="mini-section">
	<div>
		<h3>Are you looking for a home today?</h3>
		<p>do you want a house to call your home? Find one now by just looking for an agent with free houses.</p>
		<a href="agents.php"><button>Find an Agent</button></a>
	</div>
</div>

			<?php if (isset($user_auth) && $user_auth == false) {
			 ?>
<div class="midi-section">
	<div>
		<h3>Sign Up for Find a home today as an agent</h3>
		<p>As an agent, be able to put on your houses easily for rent or sale. You will discover how easy it will be to rent houses.</p>

		<div id="sub">
			<a href="agents/reg_agents.php"><button id="sign">SIGN UP FREE</button></a>
			<a href="agents/login_agents.php"><button>LOG IN</button></a>
		</div>
	</div>
</div>

<?php } ?>
<div class="contact">
	<h1>We Would Like to Hear From You</h1>
	<h2 style="clear: right;"></h2>


	<form method="POST">
	<table >
		<tr>
			<td><input type="text" placeholder="First Name" required="true"></td>
			<td><input type="text" placeholder="Last Name" required="true"></td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="email" placeholder="Email Address" required="true">
			</td>
			
		</tr>

		<tr>
			<td colspan="2">
				<textarea></textarea>
			</td>
			
		</tr>

		<tr>
			<td colspan="2"><input type="submit" value="Send"></td>
			
		</tr>
	</table>
	</form>

</div>


<?php 
	require"includes/footer.php";
 ?>