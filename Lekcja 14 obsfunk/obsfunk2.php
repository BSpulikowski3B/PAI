<html lang="pl">
	<head> 
		<title>Zadania</title>
		<link rel="stylesheet" href="ak.css">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	</head>
	<body>
    <form action="./obsfunk2.php" method="POST">
        <input type="text" name="text" placeholder="text" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></br><br>
        <button type="submit" name="sub" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zostaw komentarz</button>
    </form>
    <form action="./obsfunk2.php" method="POST">
        <input type="number" name="number" placeholder="number" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></br><br>
        <button type="submit" name="submit" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zostaw komentarz</button>
    </form>

    <?php

    $owoce = array("orange", "banana", "apple", "raspberry");
    


       if(isset($_POST['sub'])){
            jeden();
    }
        if(isset($_POST['submit'])){
            dwa();
    }

    function jeden() {
        $text = $_POST['text'];
        
        if(strlen($text)== 0) {
            echo "<br><br><b>Nie ma tekstu";
        }
        else{
            echo "<br><br><b>Twój tekst: ".$text;
        }

    }



    function dwa() {
        $number = $_POST['number'];

        if(strlen($number)== 0) {
            echo "<br><br><b>Nie podałeś liczby";
        }
        else{
            echo "<br><br><b>Twója Liczba: ".$number;
        }

    }
    

    ?>
	</body>
</html>

