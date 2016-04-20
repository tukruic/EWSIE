<html>
<head>
<title>Przykład wykorzystania serwera QOTD: Użycie gniazd w PHP</title>
</head>
<body>
<?php
    // otwarcie gniazda serwera qotd
    $aFile = fsockopen( "127.0.0.1",  5006 );
    // odczytanie wszystkich danych ze strumienia
    while ( !feof( $aFile ) )
    {
        $aLine = fgets( $aFile, 1024 );
        print( "$aLine<br>" );
    }
    fclose( $aFile );
?>
</body>
</html>