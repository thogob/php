<?php
$datei = fopen("adressen.csv","r"); 
echo "<h3>Adressenliste</h3>"; 
echo "<table width='400'>"; 
while (!feof($datei)){
$anschrift = fgetcsv($datei,1000,";"); 
echo "<tr> <td>$anschrift[0]</td>
<td>$anschrift[1]</td>
<td>$anschrift[2]</td>
<td>$anschrift[3]</td>
<td>$anschrift[4]</td>
</tr>";}
echo "</table>";
fclose($datei);
?>