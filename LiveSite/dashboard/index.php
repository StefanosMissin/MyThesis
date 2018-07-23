<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location:../user/login.php");
  exit;
}
?>

    <!-- Include head tag -->
    <?php include 'static/head.html';?>


    <title>Smart Homie - Dashboard</title>
    </head>

    <!-- Start Container  -->
    <?php include 'static/upperbody.php';?>


    <!-- Start Page Content -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!-- Close Container  -->
    <?php include 'static/lowerbody.php';?>