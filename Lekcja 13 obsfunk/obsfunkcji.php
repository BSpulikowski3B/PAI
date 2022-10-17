<html lang="pl">
	<head> 
		<title>Zadania</title>
		<link rel="stylesheet" href="ak.css">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	</head>
	<body>
    <?php


    $array_tablica1  = [55,77,5,8,44,1,7,32,11,89];
    $tablica2 = "Hej, mam na imie Borys";
   
    print_r($array_tablica1);
    echo " </br>";
    echo $tablica2."</br>"."</br>";

    //2
    $array_tablica3 = explode(' ', $tablica2);

    //3
    echo "Ilość w array_tablica1: ".count($array_tablica1)."</br>";
    echo "Ilość w array_tablica3: ".count($array_tablica3)."</br>"."</br>";

    //4
    sort($array_tablica1, SORT_NUMERIC);
    sort($array_tablica3, SORT_STRING);
    
    echo "Posortowana array_tablica1: ";
    print_r($array_tablica1);
    echo "</br>";

    echo "Posortowana array_tablica3: ";
    print_r($array_tablica3); 
    echo"</br>"."</br>";
    
    //5

	shuffle($array_tablica1);
	shuffle($array_tablica3);

	echo "Potasowana array_liczby: ";
	print_r($array_tablica1);
	echo "</br>";

	echo "Potasowana array_zdanie: ";
	print_r($array_tablica3);
	echo "</br>"."</br>";

    //6
    $array_tablica4 = array("Kawa", "Ciasto", "Kanapka", "Czekolada", "Tost", "Jajko");
    echo "Zerowy element: ".current($array_tablica4)."<br>";

    next($array_tablica4);
    next($array_tablica4);
    echo "Dwa elementy do przodu: ".current($array_tablica4)."<br>";

    reset($array_tablica4);
    echo "Wskaźnik: ".current($array_tablica4)."<br>";
    ?>        

	</body>
</html>
