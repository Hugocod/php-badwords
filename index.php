<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

/* creo una variabile e gli assegno una stringa */
$quote = 'Ci son due coccodrilli
ed un orango tango,
due piccoli serpenti
e un’aquila reale,
il gatto, il topo, l’elefante:
non manca più nessuno;
solo non si vedono i due liocorni.' ;

/* creo una variabile e dico che è uguale al contenuto di name inserito dall'utente */
$badWord = $_GET['name'];
?>

<div class="container">

   



  <form action="index.php" method="get">
      <input type="text" name="name" placeholder="Inserisci la Bad Word">
      <input type="submit">
  </form>

    <p>
        <?php
        /* con il metodo STR_REPLACE stampo il testo e l'eventuale testo sostituito sostituzione in pagina */
        echo str_replace($badWord, '***', $quote) ;
        ?>
    </p>

    <h3> Questo paragrafo è lungo <?php echo strlen($quote) ?> caratteri </h3>

</div>

    
</body>
</html>