<!-- CONSEGNA -->

<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che: -->
<!-- 1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->

<?php
// <!-- Passo come parametri GET name, mail e age

  $name = $_GET['name'];
  $email = $_GET['mail'];
  $age = $_GET['age'];

  //
  // var_dump($name);
  // var_dump($email);
  // var_dump($age);

  // Creo una variabile messaggio per l'output
  $messaggio = 'Accesso negato';

  // var_dump($messaggio);

  // L'accesso all'utente è negato in questi casi:

    // Se la lunghezza del nome è inferiore a 3 caratteri
  if (strlen($name) < 3) {
    $messaggio;

    // Altrimenti se, l'indirizzo email non contiene '.' e '@'

  } elseif (!strpos($email, '.') || (!strpos($email, '@')) ) {
    $messaggio;

    // Altrime se, l'età non è un carattere numerico
  } elseif (!is_numeric($age) ) {
    $messaggio;

    // Se tutte le sovraccitate condizioni risultano false, l'accesso è consentito
  } else {
    $messaggio = 'Accesso riuscito';
  }
  // Stampo il messaggio finale a schermo
  echo $messaggio;







 ?>
