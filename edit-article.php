<?php include "admin-header.php"; ?>


 <section class="page-template">

        <div class="container">

            <div class="inner-page">

			<?php 

				include "conn.php";

				$artid = $_GET['artid'];

				$query = "SELECT * FROM articles WHERE artid = '$artid' ";

				$result = $conn->query($query);

				$row = mysqli_fetch_array($result);
			 
			?>

			<ul class="breadcrumb">

				<li><a href="admin.php">Admin Dashboard</a></li>

				<li><a href="articleDashboard.php">Article Dashboard </a></li>

			</ul>

			<div class='admin-form-template'>
				
				<form action="updatearticle.php" method="post" ecntype="multipart/form-data">

					<input type="hidden" name="artid" value="<?php echo $row['artid']; ?>">

					<label id="article-submit-title">Title: <input type="text" id="login-input" name="title" value="<?php echo $row['title']; ?>"></label>

					<label id="article-submit-title">Description: <input type="text" id="login-input" name="description" value="<?php echo $row['description']; ?>"></label>

					<div class="form-group">
					<label for="pwd">Choose Issue:</label>
					<select class="form-control" name="isid">
					<option value="none">Please select....</option>
					<?php include "chooseIssues.php"; ?>
					</select>
					</div>

					<input class="submit-articles" value="Submit edit" type="submit">

				</form>
			
			</div>
		
		</div>

	</div>

</section>


<?php


include "footer.php";

?>