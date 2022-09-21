<style>
    body{
        background-color: cyan;
        
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
        $zm = 1;
                for($zm = -11;$zm <= 11; ++$zm){
                  if($zm %5== 0){
                    continue;
                  }

                  echo "$zm <br> ";
                }
              
            ?>
	</body>
</html>
