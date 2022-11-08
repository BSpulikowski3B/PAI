<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body> 
        
    <form action="./Logowanie.php" method="POST">

    <h2 style="color:red;"> login </h2><br>
<input type="text" name="login"><br>
<h2  style="color:red;"> hasło </h2>
<input type="password" name="haslo"><br>
<input type="submit" name="wyslij" value="wyslij">

    </form>
        <?php
        
  
            
           
        if(isset($_POST['wyslij'])){
            $name = $_POST['login'];
            $pass = sha1($_POST['haslo']);
            $_SESSION["pass"] = $pass;
            $_SESSION["name"] = $name;
        }

            
        ?>
    </body>
</html>