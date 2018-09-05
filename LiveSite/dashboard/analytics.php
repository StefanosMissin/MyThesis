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
        $navloctitle = 'Analytics';
    ?>

<!-- Include head tag -->
<?php include 'static/head.html';?>


<title>Smart Homie - Analytics</title>
</head>

<!-- Start Container  -->
<?php include 'static/upperbody.php';?>


<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="row">
        <!-- Column -->
        <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <p class="analytics-table-title t-center">Template</p>
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <p class="analytics-table-data t-center">Temperature:</p>
                    </div>
                    <div class="col-lg-6 col-xlg-6 col-md-6">
                        <p class="analytics-table-data t-center">Humidity:</p>
                    </div>
                </div>
                <div class="row">
            
                        <div class="col-lg-2 col-xlg-2 col-md-2">
                            <img src="assets/images/icons/thermometer.png" style="margin-left: 5px" class="img-circle" width="70" />
                        </div>
                        <div class="col-lg-4 col-xlg-4 col-md-4">
                            <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max">28 &deg;C</span> </p>
                            <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg">22 &deg;C</span> </p>
                            <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min">15 &deg;C</span> </p>
                        </div>
                        <div class="col-lg-2 col-xlg-2 col-md-2">
                            <img src="assets/images/icons/humidity.png" style="margin-left: 5px" class="img-circle" width="70" />
                        </div>
                        <div class="col-lg-4 col-xlg-4 col-md-4">
                            <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max">80 %</span> </p>
                            <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg">46 %</span> </p>
                            <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min">15 %</span> </p>
                        </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<!-- Close Container  -->
<?php include 'static/lowerbody.php';?>