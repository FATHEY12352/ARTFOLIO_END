<?php
/* Database connection start */
$servername = "id20768189_localhost";
$username = "id20752747_root";
$password = "adhmreffat@12A";
$dbname = "id20752747_project";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>