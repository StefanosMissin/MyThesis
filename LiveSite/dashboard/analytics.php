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
                        <p class="analytics-explanation-text">Indoor Data</p>
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
    <div class="col-lg-4 col-xlg-4 col-md-4">
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-xlg-4 col-md-4">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-3 col-xlg-3 col-md-3">
                        <a href="analytics_outdoor.php">
                            <img src="assets/images/icons/outdoor.png"  style="margin-left: 5px" class="img-circle" width="100" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-xlg-2 col-md-2">
                    </div>
                    <div class="col-lg-7 col-xlg-7 col-md-7">
                        <p class="analytics-explanation-text">Outdoor Data</p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4 col-xlg-4 col-md-4">
    </div>
</div>







<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<!-- Close Container  -->
<?php include 'static/lowerbody.php';?>