<!DOCTYPE html>
<html>
    <head>
        <title>PHP :: Basics</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="header">Built-in Super Globals :: $GLOBALS,$_SERVER</header>
            <hr><hr>

            <?php
            
            
//            $x = 5;
//            $y = 15;
//
//            function numSum(){
//                
//                $GLOBALS['z']= $GLOBALS['x']+$GLOBALS['y'];
//            }
//            numSum();
//            echo $z;

            
            
        //To get the curently executing sccript.
                echo $_SERVER['PHP_SELF'] . "<br>";
          // To get the server address
              echo $_SERVER['SERVER_NAME'] ."<br>";
//////            //To get the full path of the script.
              echo $_SERVER['SCRIPT_NAME'] . "<br>";
        //To get what browser you are in.
              echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
//////            // To get the IP address of the server.
               echo $_SERVER['SERVER_ADDR'] . "<br>";
////            
            ?>
        </div>
    </body>
</html>