<!DOCTYPE html>
<html>
    <head>
        <title>PHP :: Basics</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="header">Built-in Super Globals :: $_REQUEST,$_POST,$_GET</header>
            <hr><hr>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                Username: <input name="uname" type="text">
                Password: <input name="pass" type="password">
                <input type="submit" value="Submit">
            </form>
            <a href="get.php?text1=GOOD&text2=BYE">Some Text</a>
            <?php
            
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    
                     $n = $_POST['uname'];
                     $p = $_POST['pass'];
                     echo $n, $p;
                }
                
            
            
            
            ?>
        </div>
    </body>
</html>

