<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<?php
 $arr = [
   ["Olimpia Milano", "Virtus Bologna", " 55-60"],
   ["Cantù", "Fortitudo Bologna", " 55-15"],
   ["Reyer", "Pallacanestro Varese", " 30-30"],
   ["Dinamo", "Pallacanestro Brescia", " 60-45"]
 ];

 for ($i=0; $i < count($arr); $i++) {
   $elem = $arr[$i][0] . " " . "vS" . " " . $arr[$i][1] . " ---> " . "risultato:" . $arr[$i][2];
   echo $elem;
   echo "<br>";
 }
?>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
 -->
<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  //Name
  $nameLength = strlen($name);
  //Mail
  $mailDot = strpos($mail, ".");
  $mailAt = strpos($mail, "@");
  // echo $mailAt;
  //Age
  $ageNum = is_numeric($age);

  if ($nameLength > 3 && $mailDot !== false && $mailAt !== false && $ageNum == true) {
    echo "Accesso riuscito."
  }
  else {
    echo "Accesso NON riuscito."
  }

?>
