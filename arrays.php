<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP :: BASICS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="header">PHP :: Array</header>
            <hr><hr>

            <?php
            /* Conentional Arrays */
//            echo "Array example<br><br>";
//            $x = array(5, 8, 79, 56, 2, 23);
//            //array length 
//            $length = count($x);
//
//            for ($counter = 0; $counter < $length; $counter++) {
//                echo $x[$counter] . "<br>";
//            }
//            Associative Array.
//             $car = array(
//    "BMW" => "$2000",
//    "Porshe" => "$5000",
//    "Lambo" => "$100000"
//                );
//             
//                foreach ($car as $c => $p) {
//                        
//                    echo "car name : $c , Price: $p <br>";
//                 }
//////            echo "<br><br>";
//////            /* Assosiative arrays */
////          echo "Associative Array Example<br><br>";
////          $cars = array(
////              "BMW" => "$2000",
////             "Porshe" => "$5000",
//////                "Lambo" => "$100000"
//////            );
//////            
//////            foreach ($cars as $name => $price) {
//////                
//////                echo "Car name: ".$name . " , Price: ". $price."<br>";
//////            }
//////            
//            echo "<br><br>";
            echo "Multi Dimensional Array Example";

            $cars = array(
                array("BMW","$20000",1953,"red"),
                array("T","$45664",1865,"yellow"),
                array("R","$146223",1945,"blue"),
                array("tata","tk. 5000000",1943,"orange")
            );
            
            for($r=0;$r<4;$r++){
                echo "<p style='color: red;'>Row Number: $r </p>";
                echo "<ul>";
                    for($c=0;$c<4;$c++){
                        echo "<li style='color: blue;'>".$cars[$r][$c]."</li>";
                    }
                echo"</ul>";
            }
                     
//            for($r=0;$r<4;$r++){
//                echo "<p>Row number: $r </p>";
//                echo "<ul>";
//                for($c=0;$c<3;$c++){
//                    echo "<li>". $superCars[$r][$c]."</li>";
//                }
//                echo "</ul>";
//            }
            
            ?>



        </div>
    </body>
</html>



