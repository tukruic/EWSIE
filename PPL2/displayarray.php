<?php
function DisplayArray( $aArray )
{
  // Upewniamy się, czy $aArray jest na pewno tablicą
  if ( is_array ($aArray ) && (count( $aArray ) > 0 ))
  {
    // Rozpoczęcie tabeli
    print ("<table border = \"1\">");
    // Wyświetlenie nagłówka tabeli
    print ( " <tr><th>Klucz</th><th>Wartość</th></tr>");
    // Wyświetlenie wszystkich par klucz/wartość z tabeli
    foreach( $aArray as $aKey => $aValue )
    {
      print( "<tr>" );
      // Jeżeli bieżąca wartość jest tablicą
      // wywołujemy rekurencyjnie funkcję
      // w przeciwnym wypadku wyświetlamy wartość
      if (!is_array( $aValue ))
      {
        // jeżeli wartość jest pusta, poinformujmy o tym
        if (empty( $aValue ))
        {
          print( "<td>$aKey</td><td><i>pusty</i></td>");
        }
        else
        {
          print( "<td>$aKey</td><td><i>$aValue</i></td>");
        }
      }
      else
      {
        print( "<td>$aKey(array)</td><td>");
        DisplayArray( $aValue );
        print ("</td>" );
      }
      print ("</tr>");
    }
    print ("</table>");
  }
  else
  {
    print("<i>pusty lub nieprawidłowy</i>");
  }
}

$bar = array("value" => "foo", "bar" => "baz");
DisplayArray($bar);
?>