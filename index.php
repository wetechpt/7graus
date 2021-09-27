<?php
    require_once realpath('vendor/autoload.php');
    use App\Classes\Circle;
    use App\Classes\Rectangle;
    use App\Factories\Bin2hex;
    use App\Factories\UniqId;
    
    $circle = new Circle(5, 10, 25, new Bin2hex());
    $circle->name = 'Circle 1';
    var_dump($circle->getId());

    $circle->setId(new UniqId());
    var_dump($circle->getId());
    
    var_dump($circle->getClone());
    
    $rectangle = new Rectangle(10, 25, new Bin2hex());
    $rectangle->name = 'rectangle 1';
    var_dump($rectangle->getId());

    $rectangle->setId(new Bin2hex());
    var_dump($rectangle->getId());
    
    var_dump($rectangle->getClone());
?>