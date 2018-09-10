<?php
    session_start();
    // TRACK LOGOUT ACTIVITY
    $conn_log=mysqli_connect("localhost","root","","smart_homie");
    
    // Check connection
    if (mysqli_connect_errno())
    {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Perform queries
    $test = $_SESSION['id'];
    mysqli_query($conn_log,"INSERT INTO user_log (user_id,date,time,log) VALUES ('$test',CURRENT_DATE(), CURRENT_TIME(),'Logged Out')");

    // close connection
    mysqli_close($conn_log);
    session_destroy();

// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

 
// Redirect to login page
header("location: ../index.html");
exit;
?>