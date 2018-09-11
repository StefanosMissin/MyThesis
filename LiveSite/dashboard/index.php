<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location:../user/login.php");
  exit;
}

?>

<!-- Navigation Location Title -->
<?php
        $navloctitle = 'Dashboard';
    ?>

<!-- Include head tag -->
<?php include 'static/head.html';?>


<title>Smart Homie - Dashboard</title>
</head>

<!-- Start Container  -->
<?php include 'static/upperbody.php';?>

<?php 
    $log_id = $_SESSION['id'];
?>

<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="row">

    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-7">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <p class="device-name">Air Condition</p>
                    </div>
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <?php
                                    require_once '../user/config.php';
                                    $result = mysqli_query($link, "SELECT status AS AC FROM `devices_states` WHERE id = 1");
                                    $row = mysqli_fetch_array($result);
                                    $AC = $row['AC'];
                                    if ($AC == 'on')
                                    {
                                        echo "<img src='assets/images/icons/device_on_green.png'  style='margin-left: 5px; padding-top:20px'  width='100' />";
                                    } 
                                    else 
                                    {
                                        echo "<img src='assets/images/icons/device_off.png'  style='margin-left: 5px'  width='100' />";
                                    }
                        ?>
                    </div>
                </div>
                <div class="row pt-39">
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <p class="device-name">Dehumifier</p>
                    </div>
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <?php
                                require_once '../user/config.php';
                                $result = mysqli_query($link, "SELECT status AS DH FROM `devices_states` WHERE id = 2");
                                $row = mysqli_fetch_array($result);
                                $DH = $row['DH'];
                                if ($DH == 'on')
                                {
                                    echo "<img src='assets/images/icons/device_on_green.png'  style='margin-left: 5px; padding-top:20px'  width='100' />";
                                } 
                                else 
                                {
                                    echo "<img src='assets/images/icons/device_off.png'  style='margin-left: 5px'  width='100' />";
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block" style="text-align: center">
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <img src="assets/images/icons/air-conditioner.png" style="margin-left: 5px" width="100">
                    </div>
                    <div class="col-lg-6 col-xlg-6 col-md-6 pt-25">
                        <a class='btn' style='background-color: #26c6da; border-color: #26c6da; color: #fff;' href='devicesstatehandler.php?id=1&status=on'>Turn
                            On AC</a>
                        <a class='btn' style='background-color: #26c6da; border-color: #26c6da; color: #fff;' href='devicesstatehandler.php?id=1&status=off'>Turn
                            Off AC</a>
                    </div>
                </div>
                <div class="row pt-39">
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <img src="assets/images/icons/dehumidifier.png" style="margin-left: 5px" width="100">
                    </div>
                    <div class="col-lg-6 col-xlg-6 col-md-6 pt-25">
                    <a class='btn' style='background-color: #26c6da; border-color: #26c6da; color: #fff;' href='devicesstatehandler.php?id=2&status=on'>Turn
                    On DH</a>
                <a class='btn' style='background-color: #26c6da; border-color: #26c6da; color: #fff;' href='devicesstatehandler.php?id=2&status=off'>Turn
                    Off DH</a>
                    </div>
                </div>
                
                    
                



            </div>
        </div>
    </div>
    <!-- Column -->

</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                <p class="dash-user-title">Hello,&ensp;<span>
                        <?php echo $_SESSION['username'] ?></span></p>
                <p style="text-align: center">Your User Activity</p>
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class='users-table-center'>Date</th>
                                <th class='users-table-center'>Time</th>
                                <th class='users-table-center'>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                        $conn = mysqli_connect("localhost", "root","", "smart_homie");
                                        // Check connection
                                        if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                        } 
                                        $sql = "SELECT date,time,log FROM user_log WHERE user_id = $log_id";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                            <td class='users-table-center'>" . $row["date"]. "</td>
                                            <td class='users-table-center'>" . $row["time"] . "</td>
                                            <td class='users-table-center'>" . $row["log"] . "</td>
                                            </tr>";
                                        }
                                        echo "</table>";
                                        } else { echo "0 results"; }
                                        $conn->close();
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<?php
    function reload() 
    {
        header("Refresh:0");
    }
?>

<div class="row">

</div>



<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<!-- Close Container  -->
<?php include 'static/lowerbody.php';?>