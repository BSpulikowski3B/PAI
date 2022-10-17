<html lang="pl">
	<head> 
		<title>Zadania</title>
		<link rel="stylesheet" href="ak.css">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	</head>
	<body>
        
        <form action="./funkcje3.php" method="POST">
            <h2>Wybierz Giere Tygrysie</h2>
                <select>
        <option value="CSGO" name="CSGO">CSGO</option>
        <option value="LOL" name="LOL">LOL</option>
        <option value="FORTNITE" name="FORTNITE">FORTNITE</option>
        </select>
        <br><br>
        <h2>Ile masz godzin</h2><br>
        <select>
        <option value="nobas" name="nobas">0 - 200h</option>
        <option value="nornik" name="nornik">200 - 600</option>
        <option value="koksu" name="koksu">600+</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Wyslij</button>
        </form>
        <?php

        if(isset($_POST['submit'])){
            main();
        }

        function main() {
            $text = $_POST['text'];

            if(strlen($text)== 0) {
                echo "<br><br><b>Nie ma tekstu";
            }
            else{
                echo "<br><br><b>Twój tekst: ".$text;
            }

        }
            

        ?>
	</body>
</html>
