<?php 

$server = "localhost";
$user = "id17903337_root";
$pass = "_K!JPV>v5Jeye|v4";
$database = "id17903337_log";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>