<html>
<head>
<title>Użycie klasy File</title>
</head>
<body>
Poniżej znajduje się lista plików w bieżącym katalogu.<br>
Kliknij nazwę pliku aby zobaczyć ich zawartość.<br><br>
<?php
    $dir = "./";
    $aDirContents = scandir($dir);
    for ( $nIndex = 0; $nIndex < count( $aDirContents ); $nIndex++ )
    {
        $aCurFile = $aDirContents[$nIndex];
        print( "<a href=\"4.6.php?fn=$aCurFile\">" );
        print( "$aCurFile</a><br>" );
    }
?>
</body>
</html>