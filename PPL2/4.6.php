<html>
<head>
<title>Użycie klsy File</title>
</head>
<body>
<?php
    print( "The file <b>{$_GET['fn']}</b>:<br><br>" );
    $myfile = fopen("{$_GET['fn']}", "r") or die("Unable to open file!");
    print( "<pre>" );
    print( nl2br( htmlentities( fread($myfile,filesize($_GET['fn'])) ) ) );
    print( "</pre>" );
    fclose($myfile);
?>
</body>
</html>