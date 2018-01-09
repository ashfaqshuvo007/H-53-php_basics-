<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP :: BASICS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="header">PHP :: Variable Scope</header>
            <hr><hr>

            <?php
                $x=10; $y=10;
                 
               function test(){
                    global $x;
                    for($x=0;$x<10;$x++){
                       echo "$x<br>"; 
                    }
                   
               }
               function test1(){
                 global $y;
                   echo "$y<br>";
               }
               test();test1();
            ?>



        </div>
    </body>
</html>

