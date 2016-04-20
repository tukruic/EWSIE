<html>
 <head>
  <title>Kontrola liczb przy użyciu kontroli typów</title>
 </head>

<body>
<?php
    $aValue1 = "123";
    $aValue2 = "123.446";
    $aValue3 = "1.56e18";
    $aValue4 = "3 małe świnki";
    if ( is_numeric( $aValue1 ) == True )
        print( "'$aValue1' jest liczbą<br>" );
    else
        print( "'$aValue1' nie jest liczbą<br>" );
    if ( is_numeric( $aValue2 ) == True )
        print( "'$aValue2' jest liczbą<br>" );
    else
        print( "'$aValue2' nie jest liczbą<br>" );
    if ( is_numeric( $aValue3 ) == True )
        print( "'$aValue3' jest liczbą<br>" );
    else
        print( "'$aValue3' nie jest liczbą<br>" );
    if ( is_numeric( $aValue4 ) == True )
        print( "'$aValue4' jest liczbą<br>" );
    else
        print( "'$aValue4' nie jest liczbą<br>" );
?>
</body>
</html>