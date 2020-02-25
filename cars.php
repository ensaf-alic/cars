<?php

$car_brands = json_decode(file_get_contents('cars.json') );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
    <h1>Cars</h1>
    <pre>
        <?php
        echo "<br>";

        foreach ($car_brands as $car) {
            echo $car->brand . ":  ";

            foreach ($car->models as $model) {
                echo $model . " | ";
            }

            echo "<br>";
            
            
        }

        print_r($car_brands);
        
        ?>
    </pre>
</body>
</html>