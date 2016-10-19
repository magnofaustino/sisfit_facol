<?php
include ("menu.php");
?>

<?php
$servername = "localhost";
$username = "root";
$password = "sos101os";
$dbname = "sisfit";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 
?>