<?php 

ini_set("display_error", "on");

session_start();

include "conn.php";

$user_name = $_POST['user_name'];
$user_name = strtoupper($user_name);

$user_password = $_POST['user_password'];

$query = "SELECT user_name, email, fname, lname, id, user_password FROM users where user_name='$user_name' AND user_password='$user_password'";

$result = mysqli_query($conn, $query) or die (mysqli_error());
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($num_rows == 1)
{

header("location: admin.php");
$email = $_SESSION['email'] = $row['email'];
$fname = $_SESSION['fname'] = $row['fname'];
$lname = $_SESSION['lname'] = $row['lname'];
$_SESSION['user_name'] = $user_name;

}
else
{
	echo "wrong detais";
}

?>