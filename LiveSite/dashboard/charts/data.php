<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'testdb2');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//getting data from employee table
$result = mysqli_query($conn,"SELECT id FROM users");

// storing in array
$data = array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

//returning response in JSON format

echo json_encode($data);
?>