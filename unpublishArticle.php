<?php

include "conn.php";

$artid = $_GET['artid'];

$query = "UPDATE articles SET status = 0 WHERE artid = '$artid'";

if($conn->query($query) == TRUE)
{
    echo "<script type='text/javascript'> 
    
    alert('Article Unpublished');
    window.location.href='articleDashboard.php';    
    </script>";
}else{
    echo "published" . mysqli_error($conn);
}


?>