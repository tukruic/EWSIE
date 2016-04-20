<html>
<head>
<title>Pobieranie danych do wyświetlenia</title>
</head>
<body>
    <form action="safedisplay2.php" method="post">
        Wprowadź tekst:<br>
        <textarea cols="40" rows="6" name="TheText"></textarea>
        <br><br>
        Wybierz metodę filtrowania:
        <select name="FilterType" size="1">
            <option value="0">none</option>
            <option value="1">strip_tags()</option>
            <option value="2">htmlentities()</option>
        </select>
        <br><br>
        <input type="checkbox" name="DoSS"> strip_slashes()<br>
        <input type="checkbox" name="DoNB"> nl2br()<br><br>
        <input type="submit" name="Submit" value="Wyślij">
    </form>
</body>
</html>