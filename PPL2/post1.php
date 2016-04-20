<html>
<meta charset="utf-8"/>
<head>
<title>Wydruk 3.1: post1.html</title>
</head>

<body>
<?php
    print( "Nazwa użytkownika: {$_POST["Username"]}<br>" );
    print( "Hasło: {$_POST["Password"]}<br>" );
?>
</body>
</html>