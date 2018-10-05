<?php

include "conn.php";

$query = "SELECT artid, title, description, articleAbstract, articleFull, app, email, fro, datee FROM articles WHERE app = 0 GROUP BY artid DESC";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if($row['status'] == 0)
        {
            $status = "unapproved";
        }

        if($row['status'] == 0)
        {   
            $updateStatus = "<a href=\"approveArticle.php?artid=".$row['artid']."\">Approve Article</a>";
        }

    	echo "<tr>";
        echo "<td>" . $row['fro'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['datee'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . "<a href=\" upload/".$row['articleAbstract']."\">".$row['articleAbstract']."</a>" . "</td>" ;
        echo "<td>" . "<a href=\" upload/".$row['articleFull']."\">".$row['articleFull']."</a>" . "</td>" ;
        echo "<td>" . $status. "</td>";    
        echo "<td>" . "<a href=\"delete-article.php?artid=".$row['artid']."\">Delete</a>" . "</br>" . "<a href=\"view-articleSub.php?artid=".$row['artid']."\">View</a>" . "</br>" .  $updateStatus . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>