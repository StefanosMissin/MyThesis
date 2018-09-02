<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location:../user/login.php");
  exit;
}

?>

<?php
    header("Refresh:120");
?>

    <!-- Navigation Location Title -->
    <?php
        $navloctitle = 'Live Monitoring';
    ?>

        <!-- Include head tag -->
        <?php include 'static/head.html';?>


        <title>Smart Homie - Dashboard</title>
        </head>

        <!-- Start Container  -->
        <?php include 'static/upperbody.php';?>


        <!-- Start Page Content -->
        <!-- ============================================================== -->


        <!-- START INDOOR DATA DISPLAY -->
        <div class="row">
             <!-- Column -->
             <div class="col-lg-12 col-xlg-12 col-md-12">
                <p class="display-data-title">Display Indoor Data</p>
            </div>
            <!-- Column -->
        </div>


        <div class="row">
            <!-- Column -->
            <div class="col-lg-6 col-xlg-6 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <canvas id="indoor_data_temp_live"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-xlg-6 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <canvas id="indoor_data_humidity_live"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <!-- END INDOOR DATA DISPLAY -->

        <!-- START OUTDOOR DATA DISPLAY -->
        <div class="row">
             <!-- Column -->
             <div class="col-lg-12 col-xlg-12 col-md-12">
                <p class="display-data-title">Display Outdoor Data</p>
            </div>
            <!-- Column -->
        </div>

        <div class="row">
            <!-- Column -->
            <div class="col-lg-6 col-xlg-6 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <canvas id="outdoor_data_temp_live"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-xlg-6 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <canvas id="outdoor_data_humidity_live"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- END OUTDOOR DATA DISPLAY -->



        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <!-- Close Container  -->
        <?php include 'static/lowerbody.php';?>