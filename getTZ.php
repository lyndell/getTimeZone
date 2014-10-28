<?php

  function getTZ( $lat, $long )
  {

    include('api.php');

    // default to Lihue, Hawaii timezone
    $tz = 'Pacific/Honolulu' ;

    $request_url = "http://api.timezonedb.com/?format=json" .
      "&key=" . $api_key .
      "&lat=" .  $lat    .
      "&lng=" .  $long   ;
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
      $tz = $content->zoneName ;
    }
    else 
    {
      $tz = "FAIL";
    }

    return $tz;
  }

  // Houston coordinates
  $latitude  =   29.75;
  $longitude =  -95.25;
  echo getTZ( $latitude, $longitude );
  echo "\n\n";

    # - [ ] for an empty checkbox
?>
