<?php
    /*
        Plik ten może być dołączany do dowolnego skryptu PHP.
        Powoduje to automatyczne zliczanie odwołań do strony.
        UŻYCIE: Wystarczy dołączyć ten plik. Tworzy on zmienną
        globalną $aPageAccessCount, która zawiera ilość
        odwołań do skryptu który dołącza ten plik.
    */

    $aLogFilePath = "/www/auto_logs/access.log";
    $aCountArray = array();
    // Sprawdzenie czy plik istnieje
    if ( is_file( $aLogFilePath ) == True )
    {
        // Otwarcie i odczytanie pliku. Format pliku to oddzielone tabulatorami
        // pary opisujące kolejne skrypty:
        //   ścieżka-do-skryptu    licznik
        $aFile = fopen( $aLogFilePath, "r" );
        while( !feof( $aFile ) )
        {
            $aLine = fgets( $aFile, 1024 );
            $aTempArray = explode( "\t", $aLine );
            if ( count( $aTempArray ) == 2 )
            {
                $aCountArray[$aTempArray[0]] = $aTempArray[1];
            }
        }
        fclose( $aFile );
    }
    // Ustawienie globalnego licznika odwołań do strony
    // i uaktualnienie tablicy temp
    $aPageAccessCount = $aCountArray[$PATH_TRANSLATED] + 1;
    $aCountArray[$PATH_TRANSLATED] = $aPageAccessCount;
    // Zapis całej tablicy do pliku
    $aFile = fopen( $aLogFilePath, "w" );
    foreach ( $aCountArray as $aKey => $aValue )
    {
        fputs( $aFile, "$aKey\t$aValue\n" );
    }
    fclose( $aFile );
?>