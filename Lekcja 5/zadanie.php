<style>
    body{
        background-color: cyan;
        
    }
 if {
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
           $procenty = 53;

           if ($procenty <=39){
               // echo "masz 1";
                $zm = 1;

           }
           else if($procenty >=40 && $procenty <=54) {
               // echo " masz 2 " ;
                $zm = 2;

           }
           else if($procenty >=55 && $procenty <=69) {
               // echo "masz 3";
                $zm = 3;

           }
           else if($procenty >=70 && $procenty <=84) {
               // echo "masz 4";
                $zm = 4;

           }
           else if($procenty >=85 && $procenty <=94) {
               // echo "masz 5";
                $zm = 5;

           }
           else if($procenty >=95 && $procenty <=100) {
               // echo "masz 6";
                $zm = 6;

           }
           switch($zm)
           {
               case "1":
                   echo "Dostałeś 1";
                   break;
               case "2":
                   echo "Dostałeś 2";
                   break;
               case "3":
                   echo "Dostałeś 3";
                   break;
               case "4":
                   echo "Dostałeś 4";
                   break;
               case "5":
                   echo "Dostałeś 5";
                   break;
                case "6":
                   echo "Dostałeś 6";
                   break;
           }
            ?>
	</body>
</html>
