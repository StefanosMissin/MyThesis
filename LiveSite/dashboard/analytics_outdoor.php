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
        $navloctitle = 'Analytics Outdoor';
    ?>

<!-- Include head tag -->
<?php include 'static/head.html';?>


<title>Smart Homie - Analytics Outdoor</title>
</head>

<!-- Start Container  -->
<?php include 'static/upperbody.php';?>


<!-- Start Page Content -->
<!-- ============================================================== -->

<?php include 'analytics_outdoor_handler.php';?>


<div class="row">
    <div class="col-lg-4 col-xlg-4 col-md-4">
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-xlg-4 col-md-4">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-3 col-xlg-3 col-md-3">
                        <a href="analytics_indoor.php">
                            <img src="assets/images/icons/indoor.png"  style="margin-left: 5px" class="img-circle" width="100" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-xlg-2 col-md-2">
                    </div>
                    <div class="col-lg-7 col-xlg-7 col-md-7">
                        <p class="analytics-explanation-text">Switch to Indoor</p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-xlg-4 col-md-4">
    </div>
</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <p class="analytics-table-title t-center">Today</p>
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
                        <img src="assets/images/icons/thermometer.png" style="margin-left: 5px" class="img-circle"
                            width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXT; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGT; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINT; ?>
                                &deg;C</span> </p>
                    </div>
                    <div class="col-lg-2 col-xlg-2 col-md-2">
                        <img src="assets/images/icons/humidity.png" style="margin-left: 5px" class="img-circle" width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXH; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGH; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINH; ?> %</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <p class="analytics-table-title t-center cur-poin" onclick="window.location.href='analytics_outdoor_threedays.php';">Last Three Days</p>
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
                        <img src="assets/images/icons/thermometer.png" style="margin-left: 5px" class="img-circle"
                            width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXT3; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGT3; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINT3; ?>
                                &deg;C</span> </p>
                    </div>
                    <div class="col-lg-2 col-xlg-2 col-md-2">
                        <img src="assets/images/icons/humidity.png" style="margin-left: 5px" class="img-circle" width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXH3; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGH3; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINH3; ?> %</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <p class="analytics-table-title t-center cur-poin" onclick="window.location.href='analytics_outdoor_sevendays.php';">Last Week</p>
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
                        <img src="assets/images/icons/thermometer.png" style="margin-left: 5px" class="img-circle"
                            width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXT7; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGT7; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINT7; ?>
                                &deg;C</span> </p>
                    </div>
                    <div class="col-lg-2 col-xlg-2 col-md-2">
                        <img src="assets/images/icons/humidity.png" style="margin-left: 5px" class="img-circle" width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXH7; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGH7; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINH7; ?> %</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-6 col-xlg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <p class="analytics-table-title t-center cur-poin" onclick="window.location.href='analytics_outdoor_month.php';">Last Month</p>
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
                        <img src="assets/images/icons/thermometer.png" style="margin-left: 5px" class="img-circle"
                            width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXT30; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGT30; ?>
                                &deg;C</span> </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINT30; ?>
                                &deg;C</span> </p>
                    </div>
                    <div class="col-lg-2 col-xlg-2 col-md-2">
                        <img src="assets/images/icons/humidity.png" style="margin-left: 5px" class="img-circle" width="70" />
                    </div>
                    <div class="col-lg-4 col-xlg-4 col-md-4">
                        <p class="analytics-table-data">Max: <span class="analytics-table-data analytics-data-max"><?php echo $OMAXH30; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Avg: <span class="analytics-table-data analytics-data-avg"><?php echo $OAVGH30; ?> %</span>
                        </p>
                        <p class="analytics-table-data">Min: <span class="analytics-table-data analytics-data-min"><?php echo $OMINH30; ?> %</span>
                        </p>
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