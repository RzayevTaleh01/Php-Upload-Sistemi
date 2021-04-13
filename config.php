<?php 

$server = "";
$dbuser = "";
$dbpass = "";
$database = "";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://uploadaze.ml/"; // Website url

?>