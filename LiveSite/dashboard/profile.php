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
        $navloctitle = 'Profile';
    ?>

    <!-- Include head tag -->
    <?php include 'static/head.html';?>

    <title>Smart Homie - Profile</title>
    </head>

    <!-- Start Container  -->
    <?php include 'static/upperbody.php';?>


    <!-- Start Page Content -->
    <!-- ============================================================== -->


    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-6 col-xlg-6 col-md-5">
            <div class="card">
                <div class="card-block">
                    <center class="m-t-30">
                        <img src="assets/images/users/smissin.jpg" class="img-circle" width="200" />
                        <h4 class="card-title m-t-10" style="font-weight: 600">
                            <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </h4>
                        <h6 class="card-subtitle">
                            <?php echo htmlspecialchars($_SESSION['email']); ?>
                        </h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-12">
                                <a href="#" class="link">
                                    <i class="icon-people" style="padding-right: 5px"></i> Users Registered:
                                    <?php 
                                                require_once '../user/config.php';
                                                $result = mysqli_query($link, "SELECT COUNT(*) AS `count` FROM `users`");
                                                $row = mysqli_fetch_array($result);
                                                $count = $row['count'];
                                                echo $count ;
                                            ?>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-6 col-xlg-6 col-md-7">
            <div class="card">
                <div class="card-block">
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                            <label class="col-md-12">Full Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="<?php echo htmlspecialchars($_SESSION['username']); ?>" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="form-control form-control-line"
                                    name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" value="password" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->


    <!-- Close Container  -->
    <?php include 'static/lowerbody.php';?>