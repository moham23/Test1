<?php include "header.php"; ?>

	<div class="articleOverviewSection">

		<div class="innerContainer">

			<div class="row">

			<h3 class="overviewHeading">Issues</h3>

			<?php 

				include "conn.php";

				$query = "SELECT * FROM issues";

				$result = $conn->query($query);

				if($result->num_rows > 0){

					while ($row = $result->fetch_assoc()){

								echo "<div class='col-1'>";

								echo "<h3>" . $row['issueName'] . "</h3>";

								echo "<b>" . $row['year'] . "</b>";

								echo "<a href=\"individualArchive.php?isid=".$row['isid']."\">" . "View Issue </a>" ;

								echo "</div>";

					}

				}else{
					echo "No result";
				}

			?>

		</div>

	</div>

	</div>

<?php include "inc/footer.php" ?>