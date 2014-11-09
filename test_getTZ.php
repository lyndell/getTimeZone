<?php

  include ('getTZ.php');

  // default to Lihue, Hawaii timezone
  $tz = 'Pacific/Honolulu' ;

  // Houston coordinates
  $latitude  =   29.75;
  $longitude =  -95.25;
  echo "Houston time zone is:  ";
  echo getTZ( $latitude, $longitude );
  echo "\n\n";

  // Jerusalem coordinates
  // 31°47′N 35°13′E
  $latitude  =  31;
  $longitude =  35;
  echo "Jerusalem time zone is:  ";
  echo getTZ( $latitude, $longitude );
  echo "\n\n";

    # - [ ] for an empty checkbox
?>
