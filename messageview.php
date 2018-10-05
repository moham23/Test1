<?php

include "conn.php";

$query = "SELECT * FROM contact GROUP BY id DESC";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if($row['readx'] == 0){
            $read = "New Message";
        }else{
            $read = "Message read";
        }

    	echo "<tr>";
        echo "<td>" . $row['person'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "<td>" . $row['datee'] . "</td>";
        echo "<td>" . $read . "</td>";
        echo "<td>" . "<a href=\"delete-message.php?id=".$row['id']."\">Delete this messsage</a>";
        echo "<td>" . "<a href=\"mark-read.php?id=".$row['id']."\">Mark as read</a>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>