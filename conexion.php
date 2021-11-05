<?php
$servername = "x8autxobia7sgh74.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306"; //servidor y puerto
$database = "bellalovers"; //nombre de la base de datos
$username = "hyblwgztm5vh1aqn"; //nombre de usuario
$password = "g05tsholklitzb0x"; //password del usuario
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>