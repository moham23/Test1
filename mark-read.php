<?php

include "conn.php";

$artid = $_GET['id'];

$query = "UPDATE contact SET readx = 1 WHERE id = '$artid'";

if($conn->query($query) == TRUE)
{
    echo "<script type='text/javascript'> 
    
    alert('Message Read');
    window.location.href='messagesDashboard.php';    
    </script>";
}else{
    echo "Unpublished" . mysqli_error($conn);
}


?>