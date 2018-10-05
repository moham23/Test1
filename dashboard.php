<?php include "header.php";  ?>

	<div class="homeArticleOverviewSection">

		<div class="adminInnerContainer">

				<h3 class="overviewHeading">Welcome <?php echo $user; ?> to Dashboard</h3>

				<div class="adminRow">

					<div class="col-2"><a href="issuesDashboard.php"> Manage issues</a></div>

					<div class="col-2"><a href="articleDashboard.php"> Manage Articles</a></div>

					<!-- <div class="col-2"><a href="submissionDashboard.php"> Newest submissons</a><?php echo $alert; ?></div> -->

					<!-- <div class="col-2"><a href="messagesDashboard.php"> Manage Messages</a><?php echo $message; ?></div> -->

				</div>

			</div>

	</div>

<?php include "footer.php"; ?>