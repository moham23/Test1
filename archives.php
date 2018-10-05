	<?php 

		$title = "Archives";

		$page = "Archives";

		include "header.php"; 

		include "conn.php";

	?>
	
		<section class="page-template">

			<div class="container">

				<div class="inner-page">

					<h3>Our archives</h3> 
					
						<?php  

						$query = "SELECT isid, issueName, year FROM issues GROUP BY isid DESC";

						$result = $conn->query($query);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {

						    	echo "<div class='column column-20 height-adjust'>";

						   	 		echo "<div class='inner-page-box'>";

						   	 		echo "<img src='images/category.png'>";

						   	 			echo "<b>This is issue : ".$row['issueName']." </b>";
										echo "<p>Published in : ".$row['year']."</p>";

										echo "<a href=\"individual-category.php?isid=".$row['isid']."\">View article</a>";

						   	 		echo "</div>";

						    echo "</div>";

						    }
						} else {
						    echo "0 results";
						}
						$conn->close();

						?>
				
				</div>

			</div>

		</section>

		<?php include "footer.php"; ?>