<?php 
$id = $_GET['id'];
$status = $_GET['status'];


//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "smart_homie";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to update a record
$sql = "UPDATE `devices_states` SET `status`='".$status."' WHERE `id` = '$id'";


if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);


    if ($id == 1 && $status == 'on') {
        header('Location: http://192.168.1.75:8080/?acon');
    }
    else if ($id == 1 && $status == 'off') {
        header('Location: http://192.168.1.75:8080/?acoff');
    }
    else if ($id == 2 && $status == 'on') {
        header('Location: http://192.168.1.75:8080/?dhon');
    }
    else if ($id == 2 && $status == 'off') {
        header('Location: http://192.168.1.75:8080/?dhoff');
    }
    
    exit;
} else {
    echo "Error deleting record";
    echo $id;
    echo $status;
}

?>