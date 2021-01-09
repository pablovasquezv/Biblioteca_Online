<?php


    date_default_timezone_set("America/Santiago");
    $fechaActual = date("Y-m-d G:i:s");

    echo $fechaActual ."<br>";

    $futuro = date("Y-m-d", strtotime($fechaActual. ' + '. 10 .' days'));

    echo $futuro."<br>";

    //Convert to date
    $fechaString = $futuro;//Your date
    $fecha = strtotime($fechaString);//Converted to a PHP date (a second count)

    //Calculate difference
    $diff = $fecha-time();//time returns current time in seconds
    $days = floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
    $hours = round(($diff-$days*60*60*24)/(60*60));

    //Report
    echo "$days days $hours hours remain<br />";



?>