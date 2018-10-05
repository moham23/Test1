	<?php 

	$title = "Submission";

	$page = "Submission";

	include "header.php"; 

	?>

		<section class="page-template">
			<div class="container">

				<div class="inner-page-form">

					<h3>Submit an article</h3>
					<img src="images/subpro.png">

				</div>

				<form enctype="multipart/form-data" action="article-process.php" method="post" class="columns submission-form">

					<li>
					Your name:
					<input type="text" name="From" placeholder="full name">
					</li>

					<li>
					Your email address:
					<input type="text" name="Email" placeholder="Email Address">
					</li>

					<li>
				 	Article name:
					<input type="text" name="title" placeholder="The article name">
					</li>

					<li>
					Article description:
					<input type="text" name="description" placeholder="Briefly describe your article">
					</li>

					<li>
					Article Abstract:
					<input type="file" name="abstract" placeholder="Article absctract">
					</li>

					<input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">

					<li>
					Full Article:
					<input type="file" name="full" placeholder="Article absctract">
					</li>

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

