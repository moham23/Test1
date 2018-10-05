<?php

include "conn.php";

$artid = $_GET['artid'];

$query = "UPDATE articles SET status = 1 WHERE artid = '$artid'";

if($conn->query($query) == TRUE)
{
    echo "<script type='text/javascript'> 
    
    alert('Article Published');
    window.location.href='articleDashboard.php';    
    </script>";
}else{
    echo "Unpublished" . mysqli_error($conn);
}


?>