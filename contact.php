	<?php 

		$title = "Contact";

		$page = "Contact";

		include "header.php"; 

	?>

		<section class="page-template">
			<div class="container">

				<div class="inner-page-form">

					<h3>Contact Us</h3>
					<img src="images/subpro.png">

				</div>

				<form method="post" action="contact-process.php" class="columns submission-form">

					<li>
						Your name:
						<input type="text" name="fullname" placeholder="full name">
					</li>

					<li>
						Your email address:
						<input type="text" name="email" placeholder="Email Address">
					</li>

					<li>
						Your message
						<textarea name="fullMessage" placeholder="Email Address"></textarea>						
					</li>

					<input type="hidden" name="time" value="<?php echo date("Y-m-d"); ?>">

					<li>
						<button class="hero-button green">Submit</button>
					</li>

					
		

				</form>

				<div class="columns submission-information">

					<h3>Our contact details</h3>
					<p><b>Email:</b> info@mrvsa.com</p>
					<p><b>Email:</b> mrvsa59@gmail.com</p>
					<p>Publishing information: </p>

					<p>ISSN 2520-324X (Print)</p>

					<p>ICV 2015: Index Copernicus value : 80.50</p>

					<p>Index link</p>

					<p>Advanced science index</p>

					<p>Link</p>

					<p>AGORA ACCESS GLOBAL ONLINE RESEARCH IN AGRICULTURE Cornell University AGORA Program</p>

					<p>Link</p>

					<p>ISSN 2307-8073 Key title: Mirror of research in veterinary sciences and animals Abbreviated key title: Mirror res. vet.</p>

					<p>Scientific journal database the IC Journal Master List</p>

					<p>ISI Web of Science (WoS)</p>

					<p>Main title [English] Mirror of Research in Veterinary Sciences and Animals</p>

					<p>English title Mirror of Research in Veterinary Sciences and Animals</p>

					<p>Abbreviated title Mirror res.vet.</p>

					<p>Previous title Mirror of Research in Veterinary Sciences and Animals</p>

					<p>e-ISSN 2307-8073</p>
					<p>ISSN 2520-324X (Print) </p>

				</div>

			</div>
		</section>


		<?php include "footer.php"; ?>

