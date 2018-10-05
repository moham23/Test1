<?php

include "conn.php";

$artid = $_GET['artid'];

$query = "UPDATE articles SET app = 1 WHERE artid = '$artid'";

if($conn->query($query) == TRUE)
{
    echo "<script type='text/javascript'> 
    
    alert('Article Approved');
    window.location.href='articleDashboard.php';    
    </script>";
}else{
    echo "Article not working" . mysqli_error($conn);
}


?>