<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'marketplace');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect("localhost","root","","marketplace");
 
// Check connection
if($conn=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
@session_start();
?>