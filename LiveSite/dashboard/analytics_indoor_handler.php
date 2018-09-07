<?php 
    require_once '../user/config.php';


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    ///////////////////////////////////////////////////////////////////////////// INDOOR VALUES ////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////////////////////  TEMPERATURE   //////////////////////////////////////////////////////////////////////////

    //TODAY

    $result = mysqli_query($link, "SELECT max(temperature) AS MAXT FROM `indoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $MAXT = $row['MAXT'];

    $result = mysqli_query($link, "SELECT min(temperature) AS MINT FROM `indoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $MINT = $row['MINT'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS AVGT FROM `indoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $AVGT = $row['AVGT'];

    //LAST THREE DAYS

    $result = mysqli_query($link, "SELECT max(temperature) AS MAXT3 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $MAXT3 = $row['MAXT3'];

    $result = mysqli_query($link, "SELECT min(temperature) AS MINT3 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $MINT3 = $row['MINT3'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS AVGT3 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $AVGT3 = $row['AVGT3'];

    //LAST WEEK 

    $result = mysqli_query($link, "SELECT max(temperature) AS MAXT7 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $MAXT7 = $row['MAXT7'];

    $result = mysqli_query($link, "SELECT min(temperature) AS MINT7 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $MINT7 = $row['MINT7'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS AVGT7 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $AVGT7 = $row['AVGT7'];


    //LAST MONTH

    $result = mysqli_query($link, "SELECT max(temperature) AS MAXT30 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $MAXT30 = $row['MAXT30'];

    $result = mysqli_query($link, "SELECT min(temperature) AS MINT30 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $MINT30 = $row['MINT30'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS AVGT30 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $AVGT30 = $row['AVGT30'];


    /////////////////////////////////////////////////////////////////////////////  HUMIDITY   //////////////////////////////////////////////////////////////////////////

    $result = mysqli_query($link, "SELECT max(humidity) AS MAXH FROM `indoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $MAXH = $row['MAXH'];

    $result = mysqli_query($link, "SELECT min(humidity) AS MINH FROM `indoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $MINH = $row['MINH'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS AVGH FROM `indoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $AVGH = $row['AVGH'];

    //LAST THREE DAYS

    $result = mysqli_query($link, "SELECT max(humidity) AS MAXH3 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $MAXH3 = $row['MAXH3'];

    $result = mysqli_query($link, "SELECT min(humidity) AS MINH3 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $MINH3 = $row['MINH3'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS AVGH3 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $AVGH3 = $row['AVGH3'];

    //LAST WEEK 

    $result = mysqli_query($link, "SELECT max(humidity) AS MAXH7 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $MAXH7 = $row['MAXH7'];

    $result = mysqli_query($link, "SELECT min(humidity) AS MINH7 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $MINH7 = $row['MINH7'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS AVGH7 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $AVGH7 = $row['AVGH7'];

    //LAST MONTH

    $result = mysqli_query($link, "SELECT max(humidity) AS MAXH30 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $MAXH30 = $row['MAXH30'];

    $result = mysqli_query($link, "SELECT min(humidity) AS MINH30 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $MINH30 = $row['MINH30'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS AVGH30 FROM `indoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $AVGH30 = $row['AVGH30'];

    
    
?>

