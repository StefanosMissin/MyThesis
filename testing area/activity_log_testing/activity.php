<?php
$conn=mysqli_connect("localhost","root","","smart_homie");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($conn,"INSERT INTO user_log (user_id,date,time,log) VALUES ('stef',CURRENT_DATE(), CURRENT_TIME(),'logged out')");


mysqli_close($conn);
?>