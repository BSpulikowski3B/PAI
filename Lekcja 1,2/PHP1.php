<style>
P{
	color: blue;
}
	</style>
<html lang="pl">
	<head> 
		<link rel="stylesheet" href="">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript, PHP">

	</head>
	<body>
        <?PHP
        $z = 1;
        echo "<p>HEllO WORLD <br>
        My counter $z <br>
        HEllO Friend</p>";

		$w = 5;
		echo "Masz $w wiadomosci <br><br>";

		if($w == 0)
		{
		 echo "brak wiadomosci";
		}
		else
		{
		 echo "Masz $w wiadomosci ";
		}
        ?>
        
	</body>
</html>
