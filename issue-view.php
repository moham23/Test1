<?php

include "conn.php";

$query = "SELECT isid, issueName FROM issues GROUP BY isid DESC";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


    	echo "<tr>";
        echo "<td>" . $row['issueName'] . "</td>";
        echo "<td>" . "<a href=\"delete-issue.php?isid=".$row['isid']."\">Delete</a>" . "</br>" . "<a href=\"view-issue.php?isid=".$row['isid']."\">View/Edit</a>" . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>