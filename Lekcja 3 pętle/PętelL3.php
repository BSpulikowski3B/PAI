<style>

	</style>
<html lang="pl">
	<head> 
		<link rel="stylesheet" href="">
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript, PHP">

	</head>
	<body>
        <?PHP
        $l1 = 1;
        $l2 = 1;
        
        for($l1 =1;$l1 <= 10; ++$l1){
            echo "<br>";
            for($l2 =1;$l2 <= 10; ++$l2){
                echo $l1 ."*". $l2 ."=". $l1 * $l2 .'<br>';
            }
        }
        
        ?>
        
	</body>
</html>
