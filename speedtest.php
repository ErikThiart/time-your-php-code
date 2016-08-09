<?php

$startTime = microtime(true);


// whatever you want to time


echo "Time:  " . number_format(( microtime(true) - $startTime), 4) . " Seconds\n";

?>