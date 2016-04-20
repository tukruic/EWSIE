<html>
<head>
    <title>Wyświetlenie wszystkich elementów formularza</title>
</head>
<body>
<h2>Cała zawartość HTTP_GET_VARS</h2>
    <?php print_r($_GET); ?>
<br><br>
<h2>Cała zawartość HTTP_POST_VARS</h2>
    <?php print_r($_POST); ?>
<br><br>
<h2>Cała zawartość HTTP_COOKIE_VARS</h2>
    <?php print_r($_COOKIE); ?>
<br><br>
</body>
</html>