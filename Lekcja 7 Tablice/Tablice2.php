<style>
    body{
        background-color: lightgrey;
        
    }
 echo {
    color: red;
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
$products = array(
    'paper' => array(
        'copier' => "Do kserokopiarek i uniwersalny",
        'inkjet' => "Do drukarek atramentowych",
        'laser' => "Do drukarek laserowych",
        'photo' => "Papier fotograficzny"),
    'pens' => array(
        'ball' => "Długopisy",
        'hilite' => "Markery przezroczyste",
        'marker' => "Markery zwykłe"),
    'misc' => array(
        'tape' => "Taśmy klejące",
        'glue' => "Kleje",
        'clips' => "Spinacze")
    );
echo "<pre>";

    foreach($products as $section => $items)
        foreach($items as $key => $value)
    if($key == "copier"|| $key == "ball" || $key == "tape"){
            echo "$section: \t $key \t ($value)<br><br>";
    }
        echo $products['paper']['copier'];
        echo $products['pens']['ball'];
        echo $products['misc']['tape'];
echo "</pre>"; 
            ?>
	</body>
</html>
