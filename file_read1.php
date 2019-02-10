<?php
$datei = fopen("lesen.txt","r");
while (!feof($datei)){
echo fgets($datei,1000);
echo "<br>";
}
fclose($datei);
?>