	<?php 

		$title = "Archives";

		$page = "Archives";

		include "header.php"; 

		include "conn.php";

		$isid = $_GET['isid'];

	?>
	
		<section class="page-template">

			<div class="container">

				<div class="inner-page">
					
						<?php  


							$isid = $_GET['isid'];

							$query = "SELECT * FROM issues WHERE isid = '$isid'";

							$result = $conn ->query($query);

							if($result ->num_rows> 0){
								while($row = $result -> fetch_assoc()){
								
								$year = $row['year'];
								
								$name = $row['issueName'];
							
									echo '<h3 class="page-title"> You are viewing articles for issue '.$row['issueName'].'</h3>';
								 
									echo "<h3>This issue was published in the year " . "<b>" . $row["year"] . "</b>" ." </h3>";

							$query1 = "SELECT issues.isid, issues.issueName, articles.title, articles.email, articles.datee, articles.Fro, articles.email, articles.articleFull, articles.status, articles.articleAbstract, articles.artid, 
									  articles.isid, articles.description FROM articles
									  LEFT JOIN issues ON issues.isid = articles.isid WHERE issues.isid = '$isid' AND articles.status = 1";


							$result1 = $conn->query($query1);

							if($result1 ->num_rows> 0){
								while($row = $result1 -> fetch_assoc()){
							
									echo "<div class='column column-20'>";

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
								}
							}else{
								echo "No result";
							}

						?>
				
				</div>

			</div>

		</section>

		<?php include "footer.php"; ?>