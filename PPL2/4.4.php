<?php   /* whois.php */
    // ścieżka do programu whois
    $whois_prog = '/usr/bin/whois';
    if ( !is_file( $whois_prog ) )
    {
        // nie udało się znaleźć programu
        echo "Nie mogę znaleźć $whois_prog!<br>";
        exit;
    }
?>
<html>
    <head>
        <title>Whois: Uzycie potoków w PHP</title>
    </head>
    <body>

    <?php
        if ( !empty($_POST['WhoisQuery']) )
        {
            // otwarcie potoku do polecenia whois
            if ( $aFile = popen( "$whois_prog {$_POST['WhoisQuery']}", "r" ) )
            {
                // odczytanie wszystkich danych z potoku
                while ( !feof( $aFile ) )
                {
                    $aLine = fgets( $aFile, 1024 );
                    print( "$aLine<br>" );
                }
            pclose( $aFile );
            }
            else
            {
                echo "Nie mogę otworzyć $whois do odczytu!<br>";
            }
            print( "<hr>" );
        }
    ?>
 <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
  Wprowadź zapytanie <b>whois</b>: <input type="text" name="WhoisQuery">
  <input type="submit" name="Submit" value="Submit">
 </form>
</body>
</html>