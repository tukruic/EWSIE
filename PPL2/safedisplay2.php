<?php
    error_reporting( 0 );
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
    if ( $_POST['DoSS'] == "on" )
        $aDisplayText = stripslashes( $aDisplayText );
    if ( $_POST['DoNB'] == "on" )
        $aDisplayText = nl2br( $aDisplayText );
?>
<html>
<head>
<title>Bezpieczne wyświetlenie danych użytkownika</title>
</head>
<body>
<?php print_r($_POST); ?>
<br/>
<?php
    print( $aDisplayText );
    $string = "This\r\nis\n\ra\nstring\r";
    echo "<br/>";
    echo "test czy dziala <br/>";
    echo nl2br($string);
?>

</body>
</html>