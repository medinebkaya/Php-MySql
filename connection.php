<?php 
$servername = "localhost";
$database = "uyelik_sistemi";
$username = "root";
$password = "";
$tablo = "hesaplar";
// Create connection        
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";

mysqli_select_db($conn, "uyelik_sistemi") or die ("Database not found");





?>
