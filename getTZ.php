<?php

    include('api.php');

    $forecast  = new ForecastIO($api_key);

    // default to Lihue, Hawaii
    $latitude  =   21.53;
    $longitude = -159.22;

    $request_url "http://api.timezonedb.com/?lat=$latitude&lng=$longitude&key=$api_key"
  $content = file_get_contents($request_url);

?>
