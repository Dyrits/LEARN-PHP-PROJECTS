<?php
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "At the start of your transaction we had $riel riel, $kyat kyat, $krones krones, and $lek lek.";

$riel_to_euros = 0.00022;
$kyat_to_euros = 0.00065;
$krones_to_euros = 0.093;
$lek_to_euros = 0.0080;

$euros_from_riel = $riel * $riel_to_euros;
$euros_from_kyat = $kyat * $kyat_to_euros;
$euros_from_krones = $krones * $krones_to_euros;
$euros_from_lek = $lek * $lek_to_euros;

echo "\nOur $riel riel were exchanged for $euros_from_riel euros.";
echo "\nOur $kyat riel were exchanged for $euros_from_kyat euros.";
echo "\nOur $krones riel were exchanged for $euros_from_krones euros.";
echo "\nOur $lek riel were exchanged for $euros_from_lek euros.";

$final_amount = round($euros_from_riel + $euros_from_kyat + $euros_from_krones + $euros_from_lek - 4, 2);

echo "\nAfter deducting the transactions fees, we'll be receiving $final_amount euros.";
