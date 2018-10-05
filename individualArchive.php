<?php include "header.php"; ?>


	<div class="articleOverviewSection">

		<div class="instructionsContainer">

			<?php

			function bake(){
			 echo "</br>";
			}

			include "conn.php";

			$isid = $_GET['isid'];

			$query = "SELECT * FROM issues WHERE isid = '$isid'";

			$result = $conn ->query($query);

			if($result ->num_rows> 0){
				while($row = $result -> fetch_assoc()){
				
				$year = $row['year'];
				
				$name = $row['issueName'];
			
					echo '<h3 class="page-title"> You are viewing articles for issue '.$row['issueName'].'</h3>';
				 
					echo "<p>This issue was published in the year " . "<b>" . $row["year"] . "</b>" ." </p>";

			$query1 = "SELECT issues.isid, issues.issueName, articles.title, articles.email, articles.datee, articles.Fro, articles.email, articles.articleFull, articles.status, articles.articleAbstract, articles.artid, 
					  articles.isid, articles.description FROM articles
					  LEFT JOIN issues ON issues.isid = articles.isid WHERE issues.isid = '$isid' AND articles.status = 1";


			$result1 = $conn->query($query1);

			if($result1 ->num_rows> 0){
				while($row = $result1 -> fetch_assoc()){
					echo "<div class='indArchStyle'>";

					echo "<b class='back'> Article Name: </b>" . "<p>" . $row['title'] . "</p>";

					echo "<b class='back'> Article From: </b>" . "<p>" .$row['Fro']. "</p>";
					
					echo "<b class='back'> Email address: </b>" . "<p>" .$row['email']. "</p>";

					echo "<b class='back'> Article Description: </b>". "<p>" . $row['description'] . "</p>";

					echo "<b class='back'> Article abstract: </b>" . "<a href=\" upload/".$row['articleAbstract']."\">".$row['articleAbstract']."</a>";

					echo "<b class='back'> Full article: </b>" . "<a href=\" upload/".$row['articleFull']."\">".$row['articleFull']."</a>";
					
					echo "</br> <a class='archiveDink' href=\"indArticle.php?artid=".$row['artid']."\">" . "View article </a>" ;
					
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

	<?php include "inc/footer.php"; ?>