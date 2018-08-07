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
        $navloctitle = 'Register New User';
    ?>

        <!-- Include head tag -->
        <?php include 'static/head.html';?>


        <title>Smart Homie - Register New User</title>
        </head>

        <!-- Start Container  -->
        <?php include 'static/upperbody.php';?>


        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-lg-3 col-xlg-3 col-md-3">
            </div>
            <div class="col-lg-6 col-xlg-6 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <p class="reg-newuser-title">Register New User</p>
                        <form class="form-horizontal form-material" action="newuserreghandler.php" method="post">
                            <div class="form-group">
                                <label class="col-md-12">Username</label>
                                <div class="col-md-12">
                                    <input name="username" type="text" placeholder="" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input name="email" type="email" placeholder="" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12" style="padding-bottom: 10px">Give Administrator Rights?</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="adminrights">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input name="password" type="password" value="" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-6">
                                    <button class="btn btn-success reg-newuser-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <!-- Close Container  -->
        <?php include 'static/lowerbody.php';?>