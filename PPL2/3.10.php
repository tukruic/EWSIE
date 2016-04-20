<?php
    /*
        Uruchomienie buforowania wyjścia.  Jeżeli funkcja ob_start()
        jest zakomentowana, skrypt spowoduje błąd.
    */
    //ob_start(); Gówno a nie błąd
?>
<html>
<head>
  <title>Użycie setcookie() wraz z buforowaniem wyjścia</title>
</head>
<body>
<?php
    setcookie( "anyname", "anyvalue", time() + 60 );
?>
Działa świetnie.
</body>
</html>
<?php ob_end_flush(); ?>