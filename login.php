<?php 

	$title = "login";

	$page = "login";
	
	include "header.php";

?>

	<section class="page-template">

		<div class="container">

			<div class="inner-page">

				<h3>Admin login</h3>

				<form method="post" action="login-process.php" class="login-form">	

					<li>

						<input name="user_name" type="text" placeholder="Username">
						<input name="user_password" type="password" placeholder="password">
						<button class="login-submit-btn" type="submit">Login</button>

					<li>

				</form>

			</div>

		</div>

	</section>
