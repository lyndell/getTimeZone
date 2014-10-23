<?php

    include('api.php');

    // default to Lihue, Hawaii
    $latitude  =   21.53;
    $longitude = -159.22;

    $request_url = "http://api.timezonedb.com/?lat=" . $latitude . "&lng=" . $longitude ."&key=" . $api_key;
    echo "URL: " . $request_url;
    echo "\n\n";

    $content = file_get_contents($request_url);

    echo "Lihue, HI: \n";

    var_dump($content);


    // default to Houston
    $latitude  =   29.75;
    $longitude =  -95.25;
    $request_url = "http://api.timezonedb.com/?lat=" . $latitude . "&lng=" . $longitude ."&key=" . $api_key;
    $content = file_get_contents($request_url);

    echo "URL: " . $request_url;
    echo "\n\n";
    echo "Houston: \n";
    var_dump($content);



    // Example from API documentation.
    echo "\n\nExample\n";

    $request_url = "http://api.timezonedb.com/?lat=53.7833&lng=-1.75&key=" . $api_key ;
    echo "URL: " . $request_url;
    echo "\n\n";

    $content = file_get_contents($request_url);
    var_dump($content);

?>
