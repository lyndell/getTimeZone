<?php

    include('api.php');

    // default to Lihue, Hawaii timezone
    $latitude  =   21.53;
    $longitude = -159.22;

    $request_url = "http://api.timezonedb.com/?lat=" . $latitude . "&lng=" . $longitude ."&key=" . $api_key;
    echo "URL: " . $request_url;
    echo "\n\n";

    # - [ ] TO-DO set PHP default timezone to Pacific/Honolulu

    echo "Lihue, HI: \n";
    echo "Timezone is: Pacific/Honolulu \n";
    echo "\n\n";


    // Quyery Houston timezone
    $latitude  =   29.75;
    $longitude =  -95.25;
    $request_url = "http://api.timezonedb.com/?lat=" . $latitude . "&lng=" . $longitude ."&key=" . $api_key;
    $content = file_get_contents($request_url);

    echo "URL: " . $request_url;
    echo "\n\n";
    echo "Houston: \n";
    var_dump($content);

    # - [ ] for an empty checkbox
?>
