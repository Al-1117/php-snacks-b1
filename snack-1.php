<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket
 di un’ipotetica tappa del calendario.
  Ogni array della partita avrà una squadra di casa e una squadra ospite,
   punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->


<?php
// Creo l'array che conterrà le partite
$array_partite = [
  $partita1 = [
    'squadra_casa' => 'Milano',
    'squadra_ospite' => 'Torino',
    'punti_squadra_casa' => 10,
    'punti_squadra_ospite' => 30,
  ],

  $partita2 = [
    'squadra_casa' => 'Roma',
    'squadra_ospite' => 'Palermo',
    'punti_squadra_casa' => 60,
    'punti_squadra_ospite' => 40,
  ],

  $partita3 = [
    'squadra_casa' => 'Bologna',
    'squadra_ospite' => 'Verona',
    'punti_squadra_casa' => 80,
    'punti_squadra_ospite' => 90,
  ],

];

// inizializzo il ciclo per scorrere ogni partita
for ($i=0; $i < count($array_partite) ; $i++) {
  $singola_partita = $array_partite[$i];
  // Stampo a schermo i dettagli delle partite
  echo $singola_partita['squadra_casa']. ' - '. $singola_partita['squadra_ospite']. ' | ' . $singola_partita['punti_squadra_casa']. '- ' . $singola_partita['punti_squadra_ospite']. '<br>';
}

var_dump($array_partite);















 ?>
