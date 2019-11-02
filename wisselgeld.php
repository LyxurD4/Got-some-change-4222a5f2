<?php
$antwoord = 0;
if ($argv[1] > 0 ) {
    $antwoord = intval($argv[1]) / 1;
    echo "$antwoord X 1 euro";
} else {
    echo "Geen wisselgeld";
    exit;
}
?>