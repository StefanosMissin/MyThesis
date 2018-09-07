<?php 
    require_once '../user/config.php';


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    ///////////////////////////////////////////////////////////////////////////// INDOOR VALUES ////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////////////////////  TEMPERATURE   //////////////////////////////////////////////////////////////////////////

    //TODAY

    $result = mysqli_query($link, "SELECT max(temperature) AS OMAXT FROM `outdoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $OMAXT = $row['OMAXT'];

    $result = mysqli_query($link, "SELECT min(temperature) AS OMINT FROM `outdoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $OMINT = $row['OMINT'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS OAVGT FROM `outdoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $OAVGT = $row['OAVGT'];

    //LAST THREE DAYS

    $result = mysqli_query($link, "SELECT max(temperature) AS OMAXT3 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $OMAXT3 = $row['OMAXT3'];

    $result = mysqli_query($link, "SELECT min(temperature) AS OMINT3 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $OMINT3 = $row['OMINT3'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS OAVGT3 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $OAVGT3 = $row['OAVGT3'];

    //LAST WEEK 

    $result = mysqli_query($link, "SELECT max(temperature) AS OMAXT7 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $OMAXT7 = $row['OMAXT7'];

    $result = mysqli_query($link, "SELECT min(temperature) AS OMINT7 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $OMINT7 = $row['OMINT7'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS OAVGT7 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $OAVGT7 = $row['OAVGT7'];


    //LAST MONTH

    $result = mysqli_query($link, "SELECT max(temperature) AS OMAXT30 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $OMAXT30 = $row['OMAXT30'];

    $result = mysqli_query($link, "SELECT min(temperature) AS OMINT30 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $OMINT30 = $row['OMINT30'];

    $result = mysqli_query($link, "SELECT cast((AVG(temperature)) as decimal(16,2)) AS OAVGT30 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $OAVGT30 = $row['OAVGT30'];


    /////////////////////////////////////////////////////////////////////////////  HUMIDITY   //////////////////////////////////////////////////////////////////////////

    $result = mysqli_query($link, "SELECT max(humidity) AS OMAXH FROM `outdoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $OMAXH = $row['OMAXH'];

    $result = mysqli_query($link, "SELECT min(humidity) AS OMINH FROM `outdoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $OMINH = $row['OMINH'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS OAVGH FROM `outdoor_data` WHERE date = CURRENT_DATE");
    $row = mysqli_fetch_array($result);
    $OAVGH = $row['OAVGH'];

    //LAST THREE DAYS

    $result = mysqli_query($link, "SELECT max(humidity) AS OMAXH3 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $OMAXH3 = $row['OMAXH3'];

    $result = mysqli_query($link, "SELECT min(humidity) AS OMINH3 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $OMINH3 = $row['OMINH3'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS OAVGH3 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 3 DAY)");
    $row = mysqli_fetch_array($result);
    $OAVGH3 = $row['OAVGH3'];

    //LAST WEEK 

    $result = mysqli_query($link, "SELECT max(humidity) AS OMAXH7 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $OMAXH7 = $row['OMAXH7'];

    $result = mysqli_query($link, "SELECT min(humidity) AS OMINH7 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $OMINH7 = $row['OMINH7'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS OAVGH7 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 7 DAY)");
    $row = mysqli_fetch_array($result);
    $OAVGH7 = $row['OAVGH7'];

    //LAST MONTH

    $result = mysqli_query($link, "SELECT max(humidity) AS OMAXH30 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $OMAXH30 = $row['OMAXH30'];

    $result = mysqli_query($link, "SELECT min(humidity) AS OMINH30 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $OMINH30 = $row['OMINH30'];

    $result = mysqli_query($link, "SELECT cast((AVG(humidity)) as decimal(16,2)) AS OAVGH30 FROM `outdoor_data` WHERE date >= (CURRENT_DATE - INTERVAL 30 DAY)");
    $row = mysqli_fetch_array($result);
    $OAVGH30 = $row['OAVGH30'];

    
    
?>

