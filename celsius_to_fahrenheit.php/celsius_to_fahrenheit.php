<?php 
$temp_in_celsius = 32;
converter($temp_in_celsius);
function converter($temp_in_celsius){
    $temp_in_farenheit = ($temp_in_celsius * (9/5) + 32);
    printf("%.2f", $temp_in_farenheit);
}
?>