<?php $servername = "localhost";
$uname = "root";
$password1 = "root";
$dbname = "art_store";

// Create connection
 $conn = mysqli_connect($servername, $uname, $password1, $dbname);
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>