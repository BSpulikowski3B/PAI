<html lang="pl">
	<head> 
		<title>Zadania</title>
		<link rel="stylesheet" href="ak.css">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	</head>
	<body style="background-color: lightyellow;">


		<header>
		</header>
        
        <form style="text-align: center; font-family: Arial, Helvetica, sans-serif;">
        <h1>formularz</h1>
        Login: <input type="text" name="login"  required style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
        <br><br>
        Hasło: <input type="password" name="password" required style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
        <br><br>
        <p><input type="checkbox" name="save"  required value="1"  style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zapamietaj mnie
        </p>
        <br>
        <button type="submit" name="login" value="" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">LOGIN</button>
        
    </form>

        <?php

        if(isset($_POST['login'])){
            login();
        }
        function login() {
            $login = $_POST['login'];
            $password = $_POST['password'];

            echo "Witaj" .$login. 'Twoje haslo to' .sha1($haslo);

            if(isset($_POST['save'])){
                echo "zaznaczyłeś";
            }
        }

        
        ?>

		<footer>
		</footer>

	</body>
</html>
