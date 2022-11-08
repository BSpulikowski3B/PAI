<?php
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>    
        <?php
        $x = 5;
        $y = "ciastko";
     
        
            $_SESSION["x"] = $x;
            $_SESSION["y"] = $y;
            echo "zmienne sie wykonanly";
        ?>
    </body>
</html>