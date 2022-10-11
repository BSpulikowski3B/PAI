<html lang="pl">
	<head> 
		<title>Zadania</title>
		<link rel="stylesheet" href="ak.css">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	</head>
	<body>
        
        <form action="./funkcje2.php" method="POST">
        <a>Podaj swoje imie: <a> <input type=text name="imie"><br><br>
        <a>Podaj swoje nazwisko: <a> <input type=text name="nazwisko"><br><br>
        <a>Wypierz płeć:<a>
        <input type="radio" name="plec" value="Pana">
        <label for="m">Mężczyzna<a></label>
        <input type="radio" name="plec" value="Panią">
        <label for="plec">Kobieta<a></label><br><br>
        <button type="submit" name="submit">Potwierdz</button>
        </form>
        <?php
        if(isset($_POST['submit'])){
            siema($_POST['plec'], $_POST['imie'], $_POST['nazwisko']);
        }
        function siema($plec, $imie, $nazwisko) {
                echo "<br><br><b>Witam ".$plec." ".$imie." ".$nazwisko;
            }
        ?>
	</body>
</html>
