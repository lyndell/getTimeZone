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
    $content = json_decode($content);

    if ( $content->status == "OK" )
    {
      // status OK.
      //
      $tz = $content->zoneName ;
    }
    else 
    {
      $tz = "FAIL";
    }

    return $tz;
  }

    # - [ ] for an empty checkbox
?>
