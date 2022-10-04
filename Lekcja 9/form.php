<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body style="background-color: lightyellow;">

	<h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif; color ">Zadanie 1</h2>
	<form method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">
		<input type="text" name="login" placeholder="Login..." style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"><br><br>
		<input type="password" name="password" placeholder="Password..." style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></br><br>
		<label for="checkbox" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zapamietaj mnie</label>
		<input id="checkbox" type="checkbox" name="save" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></br><br>

		<button name="loginButton" type="submit">Login</button>
	</form>

	</br>
	</br>

	<h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif;">Zadanie 2</h2>
	<form method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">
		<input type="text" name="pseudonim" placeholder="Pseudonim..." style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></br><br>
		<textarea type="textarea" name="komentarz" placeholder="Komentarz..." style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000"></textarea></br><br>
		<button type="submit" name="kom" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Zostaw komentarz</button>
	</form>

	</br>
	</br>

	<h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif;">Zadanie 3</h2>
	<form method="POST" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">
		<label for="gra" >Gra: </label>
		<select id="gra" name="gra" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
			<option selected disabled>Ulubiona Gra</option>
			<option>Minecraft</option>
			<option>Fortnite</option>
			<option>Literaki</option>
		</select>

		<p style="margin-bottom: 0px;">Ranga:</p>
		<input type="radio" name="ranga" id="Nobas" value="Nobas" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
		<label for="mezczyzna">Nobas</label>

		<input type="radio" name="ranga" id="Typowygracz" value="Typowygracz" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
		<label for="kobieta">Typowygracz</label>

		<input type="radio" name="ranga" id="kox" value="kox" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
		<label for="inne">kox</label>

		<p style="margin-bottom: 0px;">IQ: </p>
		<input type="checkbox" name="iq" value="0 - 50" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
		<label>0 - 50</label>

		<input type="checkbox" name="iq" value="50 - 100" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
		<label>50 - 100</label>

		<input type="checkbox" name="iq" value="100+" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">
		<label>100+</label></br><br>

		<button type="submit" name="IQ" style="color: #600000; background-color: #99F9FF; font-size: 12pt; font-weight: bold; border-style: dotted; border-color: #000000">Wpisz dane</button>
	</form>

	<?php

		if(isset($_POST['loginButton'])) {
			login();
		}
		if(isset($_POST['kom'])) {
			kom();
		}
		if(isset($_POST['IQ'])) {
			ankieta();
		}

		function login() {
			$login = $_POST['login'];
			$password = $_POST['password'];

			echo "</br>Witaj ".$login.'!</br>Twoje hasło to '.sha1($password);

			if(isset($_POST['save'])) {
				echo "</br>Zaznaczyłeś checkboxa!";
			}
		}

		function kom() {
			$pseudonim = $_POST['pseudonim'];
			$komentarz = $_POST['komentarz'];

			echo "</br>Twoj pseudonim to : ".$pseudonim."</br>Komentarz bez HTML: ".htmlentities($komentarz)."</br>Komentarz z HTML: ".$komentarz;
		}

		function ankieta() {
			$gra = $_POST['gra'];
			$ranga = $_POST['ranga'];
			$iq = $_POST['iq'];


			echo "</br>Ulubiona :  ".$gra.".</br>Twoja ranga to: ".$ranga.".</br>Twoje iq to: ".$iq ;

		}

	?>

</body>
</html>