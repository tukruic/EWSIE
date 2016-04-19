<html>
<meta charset="utf-8" />
<h1>2.1 asp są wylaczone</h1>
    <? echo "użycie krótkich znaczników PHP do wyjścia z trybu HTML<br>"; ?>
    <?php echo "wyjście przy użyciu pełnych znaczników PHP<br>"; ?>
    <script language="php">
        echo "niektóre edytory HTML nie obsługują instrukcji przetwarzania<br>";
    </script>
    <% echo "można stosować również znaczniki w stylu ASP<br>"; %>
<hr/>
<h1>2.2</h1>
    <?php
        echo "Test, test...<br>";
    ?>
    <?php
        echo "Test, test...<br>"
    ?>
<hr/>
<h1>2.3</h1>
    <?php
      echo "Witaj świecie!<br>";  // To jest jednowierszowy komentarz w stylu C++
      /*  To jest wielowierszowy
          blok komentarza  */
      echo "Witamy ponownie.<br>";  # To jest komentarz w stylu skryptów Uniksa
    ?>
    <?php
    /* Poniższa linia spowoduje wypisanie "To wyświetli
        nic."
      */
    ?>
    To wyświetli <?php # echo "coś"; ?> nic.<br>
    <?php
      /*
        echo "A tutaj mamy problem."; /* Komentarz ten jest
                    nieprawidłowy */
      //*/
    ?>
<hr/>
<h1>2.4</h1>
    <?php
        echo "Test, test...<br>";
    ?>
    <?php
        echo "Test, test...<br>"
    ?>
<hr/>
<h1>2.2</h1>
    <?php
      $int1 = 523;  // liczba dziesiętna
      $int2 = -523;  // dziesiętna ujemna
      $int3 = 01013;  // ósemkowa reprezentacja liczby 523
      $int4 = 0x20B;  // szesnastkowa reprezentacja liczby 523
      $float1 = 523.197;  // zwykły zapis liczby zmiennoprzecinkowej
      $float2 = 5.23197e2;  // notacja naukowa liczby zmiennoprzecinkowej
      /* Wypisanie wszystkich liczb.
       Wyświetla "523, -523, 523, 523, 523.197, 523.197". */
      print( "$int1, $int2, $int3, $int4, $float1, $float2<br>" );
    ?>
<hr/>
<h1>2.5</h1>
    <?php
      $aStr1 = "To jest zwykły ciąg.";
      print( "$aStr1<br>" );
      $aStr2 = "Thatcher";
      print( "$aStr2<br>" );
      $aStr3 = "Nazywam się $aStr2";
            // $aStr3 = "Nazywam się Thatcher"
      print( "$aStr3<br>" );
      $aStr4 = "Nazywam się \$aStr2";
            // $aStr4 = "Nazywam się $aStr2"
      print( "$aStr4<br>" );
      $aStr5 = 'Nie rozwijaj \'$aStr2\'';
            // $aStr5 = "Nie rozwijaj '$aStr2'"
      print( "$aStr5<br>" );
          // wypisuje "Nazywam się Thatcher i Nazywam się $aStr2"
      print( "$aStr3" . " i " . "$aStr4" );
    ?>
<hr/>
<h1>2.6</h1>
    <?php
      $aVar = 123;
      print( "\$aVar = $aVar, typ = " . gettype( $aVar ) . "<br>" );

      $aVar2 = $aVar . " niejawnie skonwertowane do ciągu";
      print( "\$aVar2 = $aVar2, typ = " . gettype( $aVar2 ) . "<br>" );

      $aVar3 = $aVar2 + 1;  // niejawna konwersja na liczbę całkowitą
      print( "\$aVar3 = $aVar3, typ = " . gettype( $aVar3 ) . "<br>" );

      $aVar3 = $aVar2 * 1.1;  // niejawna konwersja na liczbę zmiennoprzecinkową
      print( "\$aVar3 = $aVar3, typ = " . gettype( $aVar3 ) . "<br>" );

      $aNotNumber = "abc";
      $aVar4 = $aNotNumber * 1; // próba konwersji na liczbę, zwracane jest 0
      print( "\$aVar4 = $aVar4, typ = " . gettype( $aVar4 ) . "<br>" );

      $aIsNumber = "3 małe świnki";
      $aVar5 = $aIsNumber + 1; // konwersja $aIsNumber na liczbę 3
      print( "\$aVar5 = $aVar5, typ = " . gettype( $aVar5 ) . "<br>" );
    ?>
<hr/>
<h1>2.7</h1>
    <?php
      // Jawne tworzenie prostej tablicy
      $a[0] = "Ryan";
      $a[1] = "Scott";
      $a[] = "Randall"; // jawne przypisanie do indeksu (klucza) 2
      $a[] = "Sherie";  // jawne przypisanie do indeksu (klucza) 3
      print( "$a[3], $a[2], $a[1], $a[0]<br>" );

      // Tworzenie tablicy asocjacyjnej
      $color["niebieski"] = "#0000FF";
      $color["zielony"] = "#00FF00";
      $color["czerwony"] = "#FF0000";
      print( "Wartość szesnastkowa koloru czerwonego wynosi {$color['czerwony']}<br>" );

      // Tworzenie tej samej co poprzedniej tablicy asocjacyjnej
      // tylko nieco prościej
      $color = array( "niebieski"  =>  "#0000FF",
              "zielony"  =>  "#00FF00",
              "czerwony"  =>  "#FF0000" );
      print( "Wartość szesnastkowa koloru zielonego wynosi {$color['zielony']}<br>" );

      // Ręczne tworzenie tablicy wielowymiarowej
      $m[0][0] = "Zero Zero";
      $m[0][1] = "Zero Jeden";
      print( "Wartością \$m[0][1] jest {$m[0][1]}<br>" );

      // Ręczne tworzenie asocjacyjnej tablicy wielowymiarowej
      $counties["Idaho"][0] = "Ada";
      $counties["Idaho"][1] = "Adams";
      $counties["Idaho"][2] = "Bannock";
      $counties["Arizona"][0] = "Apache";
      $counties["Arizona"][1] = "Cochise";
      $counties["Arizona"][2] = "Coconino";
      print( "\$counties['Idaho'][0] = {$counties['Idaho'][0]}<br>" );
    ?>
<hr/>
<h1>2.8</h1>
    <?php
      $variable1 = "Ryan";
      $variable2 = "Scott";
      print( "$variable1, $variable2<br>" ); // wypisuje "Ryan, Scott"
      //$1variable = 123;  // nieprawidłowa nazwa zmiennej
      $_test = "test";   // prawidłowo, rozpoczyna się podkreśleniem
      $_ąęć = "test2";   // prawidłowo
    ?>
<hr/>
<h1>2.9</h1>
    <?php
      $variable1 = "Ryan";
      $variable2 = $variable1;      // przypisanie wartości
      print( "$variable1, $variable2<br>" );  // wypisuje "Ryan, Ryan"
      $variable2 = "Scott";
      print( "$variable1, $variable2<br>" );  // wypisuje "Ryan, Scott"
      $variable3 = &$variable1;      // przypisanie przez referencję
      print( "$variable1, $variable3<br>" );  // wypisuje "Ryan, Ryan"
      $variable3 = "Katie";
      print( "$variable1, $variable3<br>" );  // wypisuje "Katie, Katie"
    ?>
<hr/>
<h1>2.10</h1>
    <?php
      $aGlobal1 = "To jest test";
      /*
        Dołączamy inny plik z kodem PHP. POwyższa zmienna
        $aGlobal1, będzie dostępna w dołączanym pliku.
      */
      include( "example10_inc.php" );

      function DoPrint( )
      {
          /*
          Poniższa instrukcja wydrukuje tylko <br>
          ponieważ zmienna $aGlobal1 wewnątrz funkcji
          jest poza zasięgiem.
        */
        print( "$aGlobal1<br>" );
      }
      DoPrint();

      function DoPrint2( )
      {
          global $aGlobal1;
          /*
          Poniższa instrukcja wypisze wartość zmiennej
          ponieważ została zadeklarowana jako globalna.
        */
        print( "$aGlobal1<br>" );
      }
      DoPrint2();

      function StaticFunc( )
      {
        static $aVal = 0;
        print( "$aVal<br>" );
        $aVal++;
            }
      // Poniższe wywołania spowodują wypisanie 0, a następnie 1
      StaticFunc();
      StaticFunc();

    ?>
<hr/>
<h1>2.11</h1>
    <?php
      define( "aString", "To jest stały ciąg znaków" );
      define( "aNumber", 1 );

      print( "Mamy tutaj zdefiniowane " . aNumber . " stałych.<br>" );
      print( "Jej wartością jest '" . aString . "'<br>" );
    ?>
<hr/>
<h1>2.12</h1>
    <?php
      $aNum1 = 1;
      $aNum2 = 2;

      $aVal  = ( $aNum1 == $aNum2 ) ? "Wartości są równe" :
                      "Wartości są różne";
      print( "$aVal<br>" ); // drukuje "Wartości są różne"

      $aVal  = ( 1 == "1" ) ? "Wartości są równe" :
                  "Wartości są różne";
      print( "$aVal<br>" ); // drukuje "Wartości są równe"

      $aVal  = ( 1 === "1" ) ? "Wartości są identyczne" :
                   "Wartości nie są identyczne";
      print( "$aVal<br>" ); // prints "Wartości nie są identyczne"

      /*
        Poniższy fragment powoduje przypisanie do $aListing
        zawartości bieżącego katalogu serwera,
        a następnie konwersję znaków nowej linii
        na znaczniki <br> I wypisanie wyników
             */
      $aListing = `ls -l`;
      $aFmtList = nl2br( $aListing );
      print( "<br>Zawartość katalogu:<br><b>$aFmtList</b><br>" );
    ?>
<hr/>
<h1>2.13</h1>
    <?php
      if ( 1 < 2 )
        print( "To zostanie wydrukowane.<br>" );
      else
        print( "To nie zostanie wydrukowane.<br>" );

      $aValue = 2;
      if ( $aValue == 1 )
      {
          // Używamy nawiasów klamrowych do otaczania bloków instrukcji
        print( "\$aValue == 1<br>" );
      }
      elseif ( $aValue == 2 )
      {
        print( "\$aValue == 2<br>" );
      }
      elseif ( $aValue == 3 )
      {
        print( "\$aValue == 3<br>" );
      }
      else
      {
        print( "\$aValue nie jest 1, 2 ani 3<br>" );
      }
    ?>
<hr/>
<h1>2.14</h1>
    <?php
      print( "Liczenie w górę przy użyciu <b>while</b>.<br>" );
      $nIndex = 0;
      // wypisuje liczby od 0 do 9
      while ( $nIndex < 10 )
      {
        print( "$nIndex<br>" );
        $nIndex++;
      }

      print( "Liczenie w dół przy użyciu <b>do..while</b>.<br>" );
      // wypisuje liczby od 10 do 1
      do
      {
        print( "$nIndex<br>" );
        $nIndex--;
      } while ( $nIndex > 0 );
    ?>
<hr/>
<h1>2.15</h1>
    <?php
      // Wypisuje liczby od 0 do 9
      for ( $nIndex = 0; $nIndex < 10; $nIndex++ )
      {
        print( "$nIndex<br>" );
      }

      /*
        $nIndex ma wartość 10. Pokażemy teraz, że
        każde z trzech wyrażeń może zostać opuszczone.
        Nie jest to zalecane ze względu na czytelność kodu.
        Pętla powoduje wypisanie liczb od 10 do 1
      */
      for ( ; $nIndex > 0; $nIndex-- )
      {
        print( "$nIndex<br>" );
      }
    ?>
<hr/>
<h1>2.16</h1>
    <?php
      $aArray = array( "Czerwony", "Zielony", "Niebieski" );
      foreach( $aArray as $aValue )
      {
          print( "Bieżąca wartość to $aValue<br>" );
      }

      $aColorArray = array(  "Czerwony"  =>  "#FF0000",
                              "Zielony"  =>  "#00FF00",
                            "Niebieski"  =>  "#0000FF" );
      foreach( $aColorArray as $aKey => $aValue )
      {
        print( "Wartość szesnastkowa $aKey to $aValue<br>" );
      }
    ?>
<hr/>
<h1>2.17</h1>
    <?php
      $nIndex = 2;
      // Najprostsza instrukcja switch
      switch ( $nIndex )
      {
        case 0:
          print( "zero<br>" );
          break;
        case 1:
          print( "jeden<br>" );
          break;
        case 2:
          print( "dwa<br>" );
          break;
      }

      // Użycie frazy 'default'
      $nIndex = 17;
      switch ( $nIndex )
      {
        case 0:
          print( "zero<br>" );
          break;
        case 1:
          print( "jeden<br>" );
          break;
        case 2:
          print( "dwa<br>" );
          break;
        default:
          print( "Nie jest to zero, jeden ani dwa<br>" );
          break;
      }

      // Switch z użyciem ciągu
      $aColor = "niebieski";
      switch( $aColor )
      {
        case "czerwony":
          print( "#FF0000<br>" );
          break;
        case "zielony":
          print( "#00FF00<br>" );
          break;
        case "niebieski":
          print( "#0000FF<br>" );
          break;
        default:
          print( "inny<br>" );
          break;
      }

      /*
        Opuszczenie instrukcji break spowoduje
        wykonanie wszystkich wyrażeń po pasującej pozycji.
        Jeżeli $nIndex jest 0, zostaną wykonane wszystkie
        trzy instrukcje print. Jeżeli $nIndex jest 1, wykonane zostaną
        ostatnie dwie instrukcje print.
      */
      $nIndex = 0;
      switch ( $nIndex )
      {
        case 0:
          print( "zero<br>" );
        case 1:
          print( "jeden<br>" );
        case 2:
          print( "dwa<br>" );
      }

      /*
        opuszczenie instrukcji break może być czasami przydatne
      */
      $aColor = "Czerwony";
      switch( $aColor )
      {
        case "czerwony":
        case "Czerwony":
          // Poniższa instrukcja zostanie wykonana, jeżeli $aColor
          // będzie miał wartość "Czerwony" lub "czerwony"
          print( "#FF0000<br>" );
          break;
        case "zielony":
        case "Zielony":
          print( "#00FF00<br>" );
          break;
        case "niebieski":
        case "Niebieski":
          print( "#0000FF<br>" );
          break;
        default:
          print( "inny<br>" );
          break;
      }
    ?>
<hr/>
<h1>2.18</h1>
    <?php
      $aArray  = array( 4, 5, 15, 12, 7, 3, 20, 11, 31 );
      $aCurMax = 17;
      /*
        Sprawdzamy, czy istnieje w tablicy wartość większa
        od bieżącej wartości maksymalnej.
      */
      foreach( $aArray as $aValue )
      {
        /*
          Wyrażenie będzie prawdziwe, gdy osiągnięta zostanie wartość
          20. Ponieważ wykonujemy instrukcję break,
          nie sprawdzamy wartości które są w tablicy po wartości 20
        */
        if ( $aValue > $aCurMax )
        {
          $aCurMax = $aValue;
          break; // możemy napisać 'break 1;'
        }
      }
      // wypisuje "Bieżącym maksimum jest 20"
      print( " Bieżącym maksimum jest $aCurMax<br>" );

      // wypisuje liczby nieparzyste od 0 do 20
      $nIndex = 0;
      for ( $nIndex = 0; $nIndex < 20; $nIndex++ )
      {
        if ( ( $nIndex % 2 ) == 0 )
          continue; // opcjonalnie 'continue 1;'
        print( "$nIndex<br>" );
      }
    ?>
<hr/>
<h1>2.19</h1>
    <form action="someotherpage.phtml" method="post">
      <table>
       <tr>
        <td>
         Wybierz swój rok urudzenia:
        </td>
        <td>
         <select name="BirthYear" size="1">
         <?php
          /*
            Generujemy znaczniki dla lat 1920-2000
            w odwrotnej kolejności
          */
          $aCurYear = 2000;
          while( $aCurYear >= 1920 ):
           ?>
            <option value="<?php print( $aCurYear ); ?>">
             <?php print( $aCurYear ); ?>
            </option>
           <?php
           $aCurYear--;
          endwhile;
          /*
           zakładając, że pomiędzy while i endwhile jest dużo więcej tekstu,
           może być trudno znaleźć końcowy średnik,
           jeżeli użyjemy zwykłej składni.
          */
         ?>
         </select>
        </td>
       </tr>
      </table>
    </form>
<hr/>
<h1>2.20</h1>
    <?php
        // prosta funkcja
        function ReturnSum( $a, $b )
        {
            return $a + $b;
        }

        // przekazanie argumentu przez referencję
        function StringAppend( &$BaseString, $AddString )
        {
            // ponieważ jest to przekazane przez referencję, wartość
            // $BaseString może być zmieniona poza tą funkcją
            $BaseString .= $AddString;
        }

        // wartości domyślne
        /*
            Funkcja ta może być wywołana przy użyciu jednej z postaci:
                PrintAnchorTag( "href", "text" );
                PrintAnchorTag( "href", "text", "target" );
        */
        function PrintAnchorTag( $aHREF, $aText, $aTarg = "" )
        {
            if ( $aTarg == "" )
            {
                print( "<a href=\"$aHREF\">$aText</a>" );
            }
            else
            {
                print( "<a href=\"$aHREF\" target=\"$aTarg\">$aText</a>" );
            }
        }

        // zmienna lista argumentów
        function PrintEverything( )
        {
            $aNumArgs = func_num_args();
            for ( $nIndex = 0; $nIndex < $aNumArgs; $nIndex++ )
            {
                $aArgVal = func_get_arg( $nIndex );
                print( "Argument $nIndex: $aArgVal<br>" );
            }
        }

        print( "ReturnSum( 3, 5 ): " . ReturnSum( 3, 5 ) . "<br>" );

        $aString = "Marysia miała ";
        StringAppend( $aString, "małą owieczkę" );
        print( "$aString<br>" ); // wypisuje "Marysia miała małą owieczkę"

        PrintAnchorTag( "example10.phtml",
                        "Zobaczmy jeszcze raz przykład 10" );
        print( "<br>" );
        PrintAnchorTag( "example10.phtml",
                        "Zobaczmy jeszcze raz przykład 10 w nowym oknie",
                        "_blank" );
        print( "<br>" );

        print( "Wywołanie PrintEverything( 1, 2, 3, 4, 5 ):<br>" );
        PrintEverything( 1, 2, 3, 4, 5 );
    ?>
<hr/>
<h1>2.21</h1>
    <?php
        // tworzenie prostej klasy
        class ShoppingBasket
        {
            var $fItems;
            var $fCurValue;

            /*
                jest to konstruktor klasy,
                ponieważ ma taką samą nazwę jak klasa.
                Tak samo jak w C++ konstruktor może posiadać argumenty
                W tym przypadku jest to początkowa wartość koszyka.
                Może być to stała prowizja lub rabat..
            */
            function ShoppingBasket( $aInitialValue = 0.0 )
            {
                $this->fCurValue = $aInitialValue;
            }

            // Dodanie określonej ilości przedmiotów
            function AddItem( $aName, $aValue, $aQuantity = 1 )
            {
                $this->fItems[$aName]["Quantity"] +=  $aQuantity;
                $this->fItems[$aName]["Value"] = $aValue;
                $this->fCurValue += $aValue * $aQuantity;

                return True;
            }

            function RemoveItem( $aName, $aQuantity = 1 )
            {
                // Usuwamy określoną ilość przedmiotów
                // jedynie, gdy była dostępna wystarczająca ich ilość
                if ( $this->fItems[$aName]["Quantity"] > $aQuantity )
                {
                    $this->fItems[$aName]["Quantity"] -= $aQuantity;
                    $this->fCurValue -= $this->fItems[$aName]["Value"] *
                                        $aQuantity;
                }
                else
                {
                    return False;
                }
            }

            function PrintBasket( )
            {
                if ( count( $this->fItems ) > 0 )
                {
                    print( "Zawartość koszyka:<blockquote>" );
                    foreach( $this->fItems as $aKey => $aValue )
                    {
                        print( "{$aValue['Quantity']} $aKey<br>" );
                    }
                    print( "Wartość całkowita: $" .
                            number_format( $this->fCurValue, 2 ) );
                    print( "</blockquote>" );
                    print( "<br>" );
                }
                else
                {
                    print( "<i>Koszyk jest pusty</i><br><br>" );
                }
            }
        }

        /*
            Tworzenie nowego obiektu ShoppingBasket. Dodanie kilku przedmiotów
            usunięcie kilku przedmiotów i wypisanie zawartości koszyka
        */
        $aBasket = new ShoppingBasket( 3.50 );
        $aBasket->PrintBasket();
        $aBasket->AddItem( "gizmo", 1.50 ); // dodanie 1 gizmo
        $aBasket->PrintBasket();
        $aBasket->AddItem( "foobar", 2.10, 6 ); // dodanie 6 foobarów
        $aBasket->PrintBasket();
        $aBasket->RemoveItem( "foobar", 15 );
        $aBasket->PrintBasket();
        $aBasket->RemoveItem( "foobar", 3 );
        $aBasket->PrintBasket();
    ?>
<hr/>
</html>