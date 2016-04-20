<?php
    //3.11 nie zadziala bo nie moze
    error_reporting( 0 );
    // na początku przestawiamy skrypt na zbieranie nowych danych.
    $aCurPhoneVal  = "";
    $aCurEmailVal  = "";
    $aPhoneTextCol = "black";
    $aEmailTextCol = "black";
    if ( !empty( $_POST["Submit"] ) )
    {
        /*
            Jeżeli zmienna $Submit jest zainicjowana jesteśmy tutaj po
            przesłaniu danych do skryptu. Próbujemy sprawdzić wartości
            zmiennych formularza.
        */
        include( "../include/class.Validator.php3" );
        $aValidator = new Validator;
        $aValidPhone = $aValidator->is_phone( $Phone );
        $aValidEmail = $aValidator->is_email( $Email );
        if ( $aValidPhone && $aValidEmail )
        {
            // Dane są prawidłowe, przechodzimy do odpowiedniej strony
            header( "Location:thanks.html\n" );
        }
        else
        {
            // Dane nieprawidłowe, wyróżniamy je
            $aCurPhoneVal = $Phone;
            $aCurEmailVal = $Email;
            if ( $aValidPhone == False )
                $aPhoneTextCol = "red";
            if ( $aValidEmail == False )
                $aEmailTextCol = "red";
        }
    }
?>
<html>
<head>
<title>Inteligentna obsługa nieprawidłowych danych</title>
</head>
<body>
    <?php
        if ( empty( $_POST["Submit"] ) ) {
    ?>
        Proszę wprowadzić numer telefonu i adres email.
        <br>
    <?php
        } else { // if
    ?>
        We wprowadzonych danych wystąpiły błędy.
        Sprawdź dane oznaczone kolorem czerwonym.
    <?php
        } // end if
    ?>
    <form action="3.11.php" method="post">
        <font color="<?php print( $aPhoneTextCol );?>">
        Numer telefonu:</font>
        <input type="text" name="Phone"
            value="<?php echo $aCurPhoneVal;?>">
        <br>
        <font color="<?php print( $aEmailTextCol );?>">
            Adres e-mail:</font>
        <input type="text" name="Email"
            value="<?php echo $aCurEmailVal;?>">
        <br>
        <input type="submit" name="Submit" value="Wyślij">
    </form>
</body>
</html>