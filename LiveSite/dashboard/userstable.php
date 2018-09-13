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
            $navloctitle = 'Registered Users';
        ?>

        <!-- Include head tag -->
        <?php include 'static/head.html';?>


        <title>Smart Homie - Dashboard</title>
        </head>

        <!-- Start Container  -->
        <?php include 'static/upperbody.php';?>

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="users-table-title">Registered Users Table</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class='users-table-center'>ID</th>
                                        <th class='users-table-center'>UserName</th>
                                        <th class='users-table-center'>Email</th>
                                        <th class='users-table-center'>Admin Rights</th>
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
                                        $sql = "SELECT id, username,email,adminuser FROM users";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                            <td class='users-table-center'>" . $row["id"]. "</td>
                                            <td class='users-table-center'>" . $row["username"] . "</td>
                                            <td class='users-table-center'>" . $row["email"] . "</td>
                                            <td class='users-table-center'>" . $row["adminuser"]. "</td>
                                            <td class='users-table-center'>
                                                <a class='btn btn-danger' href='deleteuserhandler.php?id=".$row["id"]."'>Delete User</a>
                                                <a class='btn btn-primary' style='margin-left: 20px' href='changeadminrightshandler.php?id=".$row["id"]."&adminuser=".$row["adminuser"]."'>Change Admin Rigths</a>
                                            </td>
                                            </tr>";
                                        }
                                        } else { echo "0 results"; }
                                        $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <!-- Close Container  -->
        <?php include 'static/lowerbody.php';?>