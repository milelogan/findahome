<?php 	
$page_css = "css/contact.css";
$page_title = "Home | Find a Home Now";
 require"includes/header.php";
 ?>




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