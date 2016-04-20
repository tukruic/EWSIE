<html>
  <head>
    <title>Kontrola poprawności amerykańskiego kodu pocztowego i daty ISO</title>
  </head>

  <body>
<?php
    $aCode1 = "83440";
    $aCode2 = "83440-1607";
    $aCode3 = "834";
    $aCode4 = "M6K 3E3";
    $aCodeFormat = "[0-9]{5}(-[0-9]{4})?";
    if ( ereg( $aCodeFormat, $aCode1 ) == True )
        print( "'$aCode1' jest poprawnym kodem pocztowym<br>" );
    else
        print( "'$aCode1' nie jest poprawnym kodem pocztowym<br>" );
    if ( ereg( $aCodeFormat, $aCode2 ) == True )
        print( "'$aCode2' jest poprawnym kodem pocztowym<br>" );
    else
        print( "'$aCode2' nie jest poprawnym kodem pocztowym<br>" );
    if ( ereg( $aCodeFormat, $aCode3 ) == True )
        print( "'$aCode3' jest poprawnym kodem pocztowym<br>" );
    else
        print( "'$aCode3' nie jest poprawnym kodem pocztowym<br>" );
    if ( ereg( $aCodeFormat, $aCode4 ) == True )
        print( "'$aCode4' jest poprawnym kodem pocztowym<br>" );
    else
        print( "'$aCode4' nie jest poprawnym kodem pocztowym<br>" );

    $aDate1 = "2000-06-29";
    $aDate2 = "2000-7-4";
    $aDate3 = "June 29, 2000";
    $aDate4 = "0000-99-99";
    $aDateFormat = "[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}";
    if ( ereg( $aDateFormat, $aDate1 ) == True )
        print( "'$aDate1' jest poprawnym formatem daty ISO<br>" );
    else
        print( "'$aDate1' nie jest poprawnym formatem daty ISO<br>" );
    if ( ereg( $aDateFormat, $aDate2 ) == True )
        print( "'$aDate2' jest poprawnym formatem daty ISO<br>" );
    else
        print( "'$aDate2' nie jest poprawnym formatem daty ISO<br>" );
    if ( ereg( $aDateFormat, $aDate3 ) == True )
        print( "'$aDate3' jest poprawnym formatem daty ISO<br>" );
    else
        print( "'$aDate3' nie jest poprawnym formatem daty ISO<br>" );
    if ( ereg( $aDateFormat, $aDate4 ) == True )
        print( "'$aDate4' jest poprawnym formatem daty ISO<br>" );
    else
        print( "'$aDate4' nie jest poprawnym formatem daty ISO<br>" );
?>
  </body>
</html>