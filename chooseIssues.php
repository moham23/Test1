<?php

include "conn.php";

$query 	= "SELECT isid, issueName FROM issues";

$result = $conn->query($query);

if($result->num_rows > 0)
{
	while($row = $result->fetch_array())
	{
		echo "<option value=".$row['isid'].">". $row['issueName']."</option>";
	}
}else{
	echo "No results";
}

?>