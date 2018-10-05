<?php 

ini_set("display_error", "on");

session_start();

include "conn.php";

$uname = $_POST['uname'];
$uname = strtoupper($uname);

$pass = $_POST['pass'];

$query = "SELECT uname, lid, email, firstName, lastName, pass FROM login where uname='$uname' AND pass='$pass'";

$result = mysqli_query($conn, $query) or die (mysqli_error());
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($num_rows == 1)
{

header("location: dashboard.php");

$_SESSION['uname'] = $uname;

}
else
{
	echo "wrong detais";
}

?>