<?php

include "conn.php";

$query = "SELECT articles.artid, articles.title, articles.description, articles.articleAbstract, articles.articleFull, 
          articles.status, articles.app, articles.isid, issues.isid, issues.issueName FROM articles
          LEFT JOIN issues ON articles.isid = issues.isid WHERE articles.app = 1 GROUP BY articles.artid DESC";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if($row['status'] == 0)
        {
            $status = "unpublished";
        }else{
            $status = "published";
        }

        if($row['status'] == 0)
        {   
            $updateStatus = "<a href=\"publishArticle.php?artid=".$row['artid']."\">Publish Article</a>";
        }else{
            $updateStatus = "<a href=\"unpublishArticle.php?artid=".$row['artid']."\">Unplish Article</a>";
        }

    	echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . "<a href=\" upload/".$row['articleAbstract']."\">".$row['articleAbstract']."</a>" . "</td>" ;
        echo "<td>" . "<a href=\" upload/".$row['articleFull']."\">".$row['articleFull']."</a>" . "</td>" ;
        echo "<td>" . $status. "</td>";
        echo "<td>" . $row['issueName'] . "</td>";
        echo "<td>" . "<a href=\"delete-article.php?artid=".$row['artid']."\">Delete</a>" . "</br>" . "<a href=\"view-article.php?artid=".$row['artid']."\">View</a>" . "</br>" . "<a href=\"edit-article.php?artid=".$row['artid']."\">Edit Article</a>"  . "</br>" .  $updateStatus . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>