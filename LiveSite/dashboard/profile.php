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
                            <img src="assets/images/users/profile-info.png" style="margin-left: 5px" class="img-circle" width="200" />
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
                                                    echo " <b> $count </b> " ;
                                        ?>
                                    </a>
                                </div>
                                <div class="col-12" style="padding-top: 5px; padding-bottom: 27px;">
                                    <a href="#" class="link">
                                        <i class="icon-energy" style="padding-right: 5px"></i> Access Level:
                                        <?php 

                                                    if ($_SESSION['adminuser'] == 'yes'){
                                                        echo " <b>Administrator</b> ";
                                                    }else {
                                                        echo " <b>User</b>";
                                                    }
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
                        <p class="reg-newuser-title">Update Your Credentials</p>
                        <form class="form-horizontal form-material" action="updateprof.php" method="post">
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="<?php echo htmlspecialchars($_SESSION['username']); ?>" class="form-control form-control-line"
                                    name="username-update">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="form-control form-control-line"
                                        name="email-update">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="" class="form-control form-control-line" 
                                    name="password-update">
                                </div>
                            </div>
                            <div>
                                <input style="display:none" type="text" placeholder="<?php echo htmlspecialchars($_SESSION['username']); ?>" class="form-control form-control-line"
                                    name="old-username" value="<?php echo htmlspecialchars($_SESSION['username']); ?>">
                                <input style="display:none" type="text" placeholder="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="form-control form-control-line"
                                    name="old-email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>">
                                <input style="display:none" type="text" placeholder="<?php echo htmlspecialchars($_SESSION['password']); ?>" class="form-control form-control-line"
                                    name="old-password" value="<?php echo htmlspecialchars($_SESSION['password']); ?>">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" name="update-btn">Update Profile</button>
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