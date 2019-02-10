<?php

$datei = fopen("daten.txt","w");
fwrite($datei, "Hallo MGDP16B",100);
fclose($datei);

?>