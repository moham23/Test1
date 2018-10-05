	<?php 

	$title = "Home";

	$page = "Home";

	include "header.php";

	include "conn.php";

	?>

		<div class="hero-section">

			<div class="hero-container">

					<h3>MRVSA is an accreddited platform for publishing your articles</h3>

					<div class="hero-image-container">

						<a href="https://creativecommons.org/licenses/by-nc/4.0/"><img class="license" src="images/ccl.png"></a>
						<a href="https://www.crossref.org/06members/50go-live.html"><img src="images/cross.png"></a>
						<img src="images/doaj.jpg">

					</div>

					<a href="submission.php"><button class="hero-button green">Submit Artilce</button></a>
					<a href="contact.php"><button class="hero-button black">Contact Us</button></a>
					<a href="archives.php"><button class="hero-button green">View Articles</button></a>

			</div>

			<div class="cover-info">

				<img src="images/cover.jpg">

				<div class="cover-info-container">

					<b>DOI Information:</b>

					<li>Journal DOI: 10.22428</li>

					<li>ISSN 2520-324X (Print) </li>
					
					<li>E-ISSN 2307-8073</li>

					<li><a href="https://journals.indexcopernicus.com/search/formjml?q=2307-8073">ICI Journals Master List 2016</a></li>

				</div>

			</div>
			
		</div>

		<section class="partners">

			<div class="container">

				<div class="partners-inner">

					<b>We are accreddited by </br> the following organizations:</b>

					<a href="http://journal-index.org/index.php/asi/article/view/475"><img src="images/logos/advanced.png"></a>

					<a href="http://agora-journals.fao.org/content/en/browse_journal_titles.php?j_init=M"><img src="images/logos/agopa.png"></a>

					<a href="https://journals.indexcopernicus.com/search/formjml?q=2307-8073"><img src="images/logos/indcop.png"></a>

					<img src="images/logos/issn.png">

				</div>

			</div>

		</section>
		
		<section class="about-us">

			<div class="container">

				<div class="inner-about">

					<h3>Aims and Scope</h3>

					<p>Mirror of Research in Veterinary Sciences and Animals (MRVSA) is an open access journal. It is consecrated to the dissemination and advancement of scientific research concerning veterinary sciences and veterinary medical education.

					It encloses all the scientific and technological aspects of veterinary sciences in general, anatomy, physiology, biochemistry, pharmacology, microbiology, pathology, public health, parasitology, infectious diseases, clinical sciences , alternative veterinary medicine, laboratory diagnosis, laboratory animals and other biomedical fields.</p>

				</div>

			</div>

		</section>

		<section class="two-columns">

			<div class="container">

				<div class="inner-two-columns">

					<div class="row">

						<div class="columns">

						<h3>About us</h3>

						<p>Mirror of research in veterinary sciences and animals.com acronym for (MRSA) was founded by veteran Dr and associated professor Karima ELsalihi in 2011. The aim of Mirror of Research in Veterinary Sciences and Animals (MRVSA)
						is consecrated to the dissemination and advancement of scientific research concerning veterinary sciences and veterinary medical education. It encloses all the scientific and technological aspects of veterinary sciences in general, anatomy, physiology, biochemistry, pharmacology, microbiology, pathology, public health, parasitology, infectious diseases, clinical sciences , alternative veterinary medicine, laboratory diagnosis, laboratory animals and other biomedical fields.
						Publishing details
						MRVSA publisher house / UK/ Nottingham </p>

						</div>

					</div>

				</div>

			</div>

		</section>

		<section class="about-us">

			<div class="container">

				<div class="inner-about">

					<h3>Types of Contributions</h3>

					<img class="contrib" src="images/contrib.png">

					<p>1. Original research papers (Regular Papers) 2. Short Communications3. Review articles Publications within a short period after acceptance.On-line publication in advance of the Papers abstract/indexed by all the major scientific indexing services.

					3 off prints will be sent to the Corresponding Author. Abstract of all Master, Doctoral thesis will be submitted for inclusion in MRVSA for free. However full thesis will include fees ) . Thesis, an online database used by researchers around the world. Thesis can be searched by author name, subject terms, and all words in the title and abstract. </p>

				</div>

			</div>

		</section>

		<section class="white gallery-template">

			<div class="container">

				<div class="inner-gallery">

					<h3>All articles</h3>

						<?php 

							$query1 = "SELECT title, email, datee, Fro, email, articleFull, status, articleAbstract, artid, 
					  		isid, description FROM articles
 							WHERE status = 1 LIMIT 3";

						$result1 = $conn->query($query1);

						if($result1 ->num_rows> 0){
							while($row = $result1 -> fetch_assoc()){
									echo "<div class='grey column column-20'>";

							   	 		echo "<div class='inner-page-box'>";

							   	 				echo "<img src='images/category.png'>";

												echo "<b class='back'> Article Name: </b>" . "<p>" . $row['title'] . "</p>";

												echo "<b class='back'> Article From: </b>" . "<p>" .$row['Fro']. "</p>";
												
												echo "<b class='back'> Email address: </b>" . "<p>" .$row['email']. "</p>";

												echo "<b class='back'> Article Description: </b>". "<p>" . $row['description'] . "</p>";

												echo "<b class='back'> Article abstract: </b>" . "<a href=\" upload/".$row['articleAbstract']."\">".$row['articleAbstract']."</a>";

												echo "<b class='back'> Full article: </b>" . "<a href=\" upload/".$row['articleFull']."\">".$row['articleFull']."</a>";
												
												echo "</br> <a class='archiveDink' href=\"indArticle.php?artid=".$row['artid']."\">" . "View article </a>" ;
									
										echo "</div>";

									echo "</div>";

							}
						}else{
							echo "No results";
						}

						?>

				</div>

			</div>

		</section>

		<?php include "footer.php"; ?>
