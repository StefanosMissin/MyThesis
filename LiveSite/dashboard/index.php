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
                        <canvas id="indoor_data_temp"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-xlg-6 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <canvas id="indoor_data_humidity"></canvas>
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
                        <canvas id="outdoor_data_temp"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-xlg-6 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <canvas id="outdoor_data_humidity"></canvas>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- END OUTDOOR DATA DISPLAY -->




        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-4 col-md-4">
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-xlg-4 col-md-4">
                <div class="card">
                    <div class="card-block" style="text-align: center">
                        <iframe src="http://smissinhome.ddns.net:61459" frameBorder="0" width="120px" height="100px"></iframe>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>



        <!-- VALUES OF CHARTS -->
        <script>
            <?php $testvar = "110,60,70,80,90,100" ?>
            var testarray = [<?php echo $testvar ?>];
            // alert(testarray);
        </script>


        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <!-- Close Container  -->
        <?php include 'static/lowerbody.php';?>