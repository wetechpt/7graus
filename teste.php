<?php

    // Autoloader
    require('autoloader.php');

    //Manually Import
    // require_once('Controllers/Shape.php');
    // require('Controllers/Rectangle.php');
    // require('Controllers/Circle.php');


    // $rec = new Rectangle(5, 25);
    // $rec->name = "REC 1";
    // var_dump($rec);

    // $circle = new Circle(5, 15, 12);
    // $circle->name = "Circle 1";
    // echo 'Propriedades: ';
    // var_dump($circle->getCircleProperties());
    // echo ("\n");
    // echo ('Area do '.$circle->name.': '.$circle->calcAreaCircle());
    // echo ("\n");
    // var_dump('Circulo: '.$circle);
    // echo ("\n");

    $shape = new Shape(5, 10, 4);
    $shape->name = "Shape 1";

    // var_dump($shape);
    echo( "Área: ".$shape->calcArea() );
    // echo ("\n");
    // $prop = $shape->getShapeProperties();
    // var_dump($shape->id);
    // var_dump($prop);
?>