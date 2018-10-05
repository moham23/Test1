<?php include "admin-header.php"; ?>

<section class="page-template">

    <div class="container">

        <div class="inner-page">

                <ul class="breadcrumb">

                        <li><a href="admin.php">Admin Dashboard</a></li>

                        <li><a href="submissiondashboard.php">Submission Dashboard</a></li>

                </ul>

                <?php

                include "conn.php";

                $artid = $_GET['artid'];

                $query = "SELECT * FROM articles WHERE artid = '$artid'";

                $result = $conn->query($query);

                if($result->num_rows > 0)
                {
                	while($row = $result->fetch_assoc())
                	{

                	echo "<div class='article-view'>";
                        echo "<div class='col-sm-8 col-sm-offset-2'>" . "<h3>" .  "Article title: " . $row['title'] . "</h3>" . "</div>";
                        echo "<div class='col-sm-6 col-sm-offset-2'>" . "<b>" .  "Article description: " . $row['description'] . "</b>" . "</div>";
                        echo "<div class='col-sm-6 col-sm-offset-2'>" . "<b>" .  "Email: " . $row['email'] . "</b>" . "</div>";
                        echo "<div class='col-sm-6 col-sm-offset-2'>" . "<b>" .  "From: " . $row['Fro'] . "</b>" . "</div>";
                        echo "<div class='col-sm-6 col-sm-offset-2'>" . "<b>Article Abstract:</b> " . "<a href=\" upload/".$row['articleAbstract']."\">".$row['articleAbstract']."</a>" . "</div>" ;
                        echo "<div class='col-sm-6 col-sm-offset-2'>" . "<b>Article Full:</b> " . "<a href=\" upload/".$row['articleFull']."\">".$row['articleFull']."</a>" . "</div>" ;
                        echo "</div>";
                	}
                }else{
                	echo "No articles found";
                }

                ?>

           </div>

     </div>

</section>

<?php

include "footer.php";

?>