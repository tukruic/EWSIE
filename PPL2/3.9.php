<?php
    // Sprawdzenie czy istnieje zmienna cookie $LastTime
    $LastTime = $_COOKIE[LastTime];
    if ( !empty($LastTime) )
    {
        $aMessage  = "Ostatnia wizyta miała miejsce ";
        $aMessage .= date( "d F Y", $LastTime );
        $aMessage .= " o ";
        $aMessage .= date( "h:i:s a", $LastTime );
    }
    else
    {
        $aMessage  = "Nie byłeś tu przez ostatnie ";
        $aMessage .= "dwa tygodnie.";
    }
    // Ustawienie cookie ważnego przez dwa tygodnie
    $aTwoWeeks = time() + ( 60 * 60 * 24 * 14 );
    setcookie( "LastTime", time(), $aTwoWeeks );
    // sprawdzenie istnienia niezwykle ważnej tablicy z cookie
    $aValMessage = "";
    $CookieArray=$_COOKIE;
    if ( !empty( $CookieArray ) )
    {
        print_r($_COOKIE);
        $aStartValue  = $_COOKIE[1] + 1;
    }
    else
    {
        $aValMessage = "Wartości nie są dostępne!";
        $aStartValue = 0;
    }
    // usunięcie niezwykle istotnej tablicy wartości
    setcookie( "CookieArray[0]" );
    setcookie( "CookieArray[1]" );
    // dodanie niezwykle istotnej tablicy wartości
    setcookie( "CookieArray[0]", $aStartValue, $aTwoWeeks );
    setcookie( "CookieArray[1]", $aStartValue + 1, $aTwoWeeks );
?>
<html>
<head>
  <title>Użycie cookie</title>
</head>
<body>
<?php
    print( $aMessage . "<br><br>" . $aValMessage );
?>
</body>
</html>