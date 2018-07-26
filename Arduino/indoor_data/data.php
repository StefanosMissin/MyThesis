<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Smart_Homie');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 


$sql = "INSERT INTO indoor_data (temperature, humidity) VALUES ('".$_GET["temperature"]."', '".$_GET["humidity"]."')";

mysqli_query($link,$sql);

echo "success"
?>