<?php

    $dbHostName = "sql301.hyperphp.com";
    $dbUsername = "hp_33345481";
    $dbPassword = "q@j3G@CRLMrXbu4";
    $dbName = "hp_33345481_nightgame";

    $connect = new mysqli($dbHostName, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connect status:complete";
?>