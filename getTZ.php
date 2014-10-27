<?php

    include('api.php');

    // Quyery Houston timezone
    $latitude  =   29.75;
    $longitude =  -95.25;
    $request_url = "http://api.timezonedb.com/?format=json" .
      "&key=" . $api_key .
      "&lat=" .  $latitude .
      "&lng=" .  $longitude ;
    $content = file_get_contents($request_url);

    echo "URL: " . $request_url;
    echo "\n\n";
    $content = json_decode($content);
    echo "Decoded JSON object: \n";
    var_dump($content);
    echo "\n\n";

  if ( $content->status == "OK" )
  {
    // status OK.
    //
    echo "Yay JSON successfully decoded.\n";
    echo "API status is: " . $content->status    . "\n";
    echo "Timezone is:   " . $content->zoneName  . "\n";
    echo "Time stamp:    " . $content->timestamp . "\n";
  }
  else
  {
    // default to Lihue, Hawaii timezone
    date_default_timezone_set ('Pacific/Honolulu');
    $latitude  =   21.53;
    $longitude = -159.22;
    echo "Lihue, HI: \n";
    echo "Timezone is: Pacific/Honolulu \n";
    echo "\n\n";
  }

    # - [ ] for an empty checkbox
?>
