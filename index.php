<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<?php
 $arr = [
   $partita1 = ["Olimpia Milano", "-Virtus Bologna", " 55-60"],
   $partita2 = ["Cantù", "-Fortitudo Bologna", " 55-15"],
   $partita3 = ["Reyer", "-Pallacanestro Varese", " 30-30"],
   $partita4 = ["Dinamo", "-Pallacanestro Brescia", " 60-45"]
 ];
 // foreach ($arr as $elem) {
 //   echo $elem;
 // }
 echo count($arr);
 echo "<br>";
 for ($i=0; $i < count($arr); $i++) {
   $elem = $arr[$i];
   echo $elem[$i];
   // $elem = $arr[$i];
   // $elem2 = $elem[$i];
   // $elem3 = $elem2[i];
   // echo ($elem3);
 }
?>
