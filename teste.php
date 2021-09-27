<?php

    // Autoloader
    require('autoloader.php');

    $circle = new Circle(5, 10, 25, 1);
    $circle->name = 'Circle 1';

    // $shape1 = new ShapeConstructor($circle);
    var_dump($circle);
    echo "\n";
    echo $circle->calculaArea();
    echo "\n";
    var_dump($circle->getProperties());

    $rectangle = new Rectangle(70, 88, 2);
    $rectangle->name = 'Rectangle 1';

    // $shape2 = new ShapeConstructor($rectangle);
    var_dump($rectangle);
    echo "\n";
    echo $rectangle->calculaArea();
    echo "\n";
    var_dump($rectangle->getProperties());
?>