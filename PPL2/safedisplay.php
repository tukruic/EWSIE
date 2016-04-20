<?php
    error_reporting( 255 );
    switch ( $_POST['FilterType'] )
    {
        case 0 : // brak
            $aDisplayText = $_POST['TheText'];
            break;
        case 1 : // strip_tags
            $aDisplayText = strip_tags( $_POST['TheText'] );
            break;
        case 2 : // htmlentities
            $aDisplayText = htmlentities( $_POST['TheText'] );
            break;
    }
?>
<html>
<head>
<title>Bezpieczne wyświetlenie danych użytkownika</title>
</head>
<body>
<?php
    print( $aDisplayText );
?>
</body>
</html>