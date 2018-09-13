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
            $navloctitle = 'Analytics Indoor Last 3 Days';
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

        <?php include 'analytics_indoor_handler.php';?>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-block">
                        <h4 class="analytics-table-title">Temperature</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class='t-center fs-18'>Date</th>
                                        <th class='t-center fs-18'>Maximum</th>
                                        <th class='t-center fs-18'>Minimum</th>
                                        <th class='t-center fs-18'>Average</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conn = mysqli_connect("localhost", "root","", "smart_homie");
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        //Begin RESULTS
                                        for ($i = 0; $i < 3; $i++) {
                                            echo "<tr>";
                                            $ANdate = "SELECT date AS DATET FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY) LIMIT 1";
                                            $result_date = $conn->query($ANdate);
                                            if ($result_date->num_rows > 0 ) 
                                            {
                                                while($row = $result_date->fetch_assoc()) {
                                                    echo "<td class='users-table-center'>" . $row["DATET"]. "</td>";
                                                    $ANtempmax = "SELECT max(temperature) AS MAXTT FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY)";
                                                    $result_temperaturemax = $conn->query($ANtempmax);
                                                    if ($result_temperaturemax->num_rows > 0 ) 
                                                    {
                                                        while($row = $result_temperaturemax->fetch_assoc()) {
                                                            if ($MAXT3 == $row["MAXTT"] )
                                                            {
                                                                echo "<td class='users-table-center' style='background-color:red; color:#fff'>" . $row["MAXTT"]. " ". "&deg;C". "</td>";
                                                            }
                                                            else
                                                            {
                                                                echo "<td class='users-table-center'>" . $row["MAXTT"]. " ". "&deg;C". "</td>";
                                                            }
                                                            $ANtempmin = "SELECT min(temperature) AS MINT FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY)";
                                                            $result_temperaturemin = $conn->query($ANtempmin);
                                                            if ($result_temperaturemin->num_rows > 0 ) 
                                                            {
                                                                while($row = $result_temperaturemin->fetch_assoc()) {
                                                                    if ($MINT3 == $row["MINT"] )
                                                                    {
                                                                        echo "<td class='users-table-center' style='background-color:#26c6da; color:#fff'>" . $row["MINT"]. " ". "&deg;C". "</td>";
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<td class='users-table-center'>" . $row["MINT"]. " ". "&deg;C". "</td>";
                                                                    }
                                                                    $ANtempavg = "SELECT cast((AVG(temperature)) as decimal(16,2)) AS AVGT FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY)";
                                                                    $result_temperatureavg = $conn->query($ANtempavg);
                                                                    if ($result_temperatureavg->num_rows > 0 ) 
                                                                    {
                                                                        while($row = $result_temperatureavg->fetch_assoc()) {
                                                                            if ($AVGT3 == $row["AVGT"] )
                                                                            {
                                                                                echo "<td class='users-table-center' style='background-color:#53c62d; color:#fff'>" . $row["AVGT"]. " ". "&deg;C". "</td>";
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "<td class='users-table-center'>" . $row["AVGT"]. " ". "&deg;C". "</td>";
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            

                                                        }
                                                    }
                                                }
                                            }
                                            echo "</tr>";
                                        }
                                        $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-block">
                        <h4 class="analytics-table-title">Humidity</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class='t-center fs-18'>Date</th>
                                        <th class='t-center fs-18'>Maximum</th>
                                        <th class='t-center fs-18'>Minimum</th>
                                        <th class='t-center fs-18'>Average</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conn = mysqli_connect("localhost", "root","", "smart_homie");
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        //Begin RESULTS
                                        for ($i = 0; $i < 3; $i++) {
                                            echo "<tr>";
                                            $ANdate = "SELECT date AS DATET FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY) LIMIT 1";
                                            $result_date = $conn->query($ANdate);
                                            if ($result_date->num_rows > 0 ) 
                                            {
                                                while($row = $result_date->fetch_assoc()) {
                                                    echo "<td class='users-table-center'>" . $row["DATET"]. "</td>";
                                                    $ANhumimax = "SELECT max(humidity) AS MAXH FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY)";
                                                    $result_humimax = $conn->query($ANhumimax);
                                                    if ($result_humimax->num_rows > 0 ) 
                                                    {
                                                        while($row = $result_humimax->fetch_assoc()) {
                                                            if ($MAXH3 == $row["MAXH"] )
                                                            {
                                                                echo "<td class='users-table-center' style='background-color:red; color:#fff'>" . $row["MAXH"]. " ". "%". "</td>";
                                                            }
                                                            else
                                                            {
                                                                echo "<td class='users-table-center'>" . $row["MAXH"]. " ". "%". "</td>";
                                                            }
                                                            $ANhumimin = "SELECT min(humidity) AS MINH FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY)";
                                                            $result_humimin = $conn->query($ANhumimin);
                                                            if ($result_humimin->num_rows > 0 ) 
                                                            {
                                                                while($row = $result_humimin->fetch_assoc()) {
                                                                    if ($MINH3 == $row["MINH"] )
                                                                    {
                                                                        echo "<td class='users-table-center' style='background-color:#26c6da; color:#fff'>" . $row["MINH"]. " ". "%". "</td>";
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<td class='users-table-center'>" . $row["MINH"]. " ". "%". "</td>";
                                                                    }
                                                                    $ANhumiavg = "SELECT cast((AVG(humidity)) as decimal(16,2)) AS AVGH FROM `indoor_data` WHERE date = (CURRENT_DATE - INTERVAL $i DAY)";
                                                                    $result_humiavg = $conn->query($ANhumiavg);
                                                                    if ($result_humiavg->num_rows > 0 ) 
                                                                    {
                                                                        while($row = $result_humiavg->fetch_assoc()) {
                                                                            if ($AVGH3 == $row["AVGH"] )
                                                                            {
                                                                                echo "<td class='users-table-center' style='background-color:#53c62d; color:#fff'>" . $row["AVGH"]. " ". "%". "</td>";
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "<td class='users-table-center'>" . $row["AVGH"]. " ". "%". "</td>";
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            

                                                        }
                                                    }
                                                }
                                            }
                                            echo "</tr>";
                                        }
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