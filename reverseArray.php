<?php
$season = array("summer", "winter", "spring", "autumn");
$reverseseason = array_reverse($season);
foreach ($reverseseason as $s) {
    echo "$s\n";
}

// Definition :  returns an array containing elements in reversed order.