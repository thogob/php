<?php
if (!file_exists("counter.txt")) 
    exit("Datei fehlt!");
//Aktuellen Wert lesen
$count = fopen("counter.txt", "r"); 
$aktuell = fgets($count, 10); 
echo "Besucher: $aktuell"; fclose($count);
//Zähler erhöhen
$aktuell++;
//Neuen Wert schreiben
$count = fopen("counter.txt", "w"); 
fputs($count, $aktuell); 
fclose($count);
?>
