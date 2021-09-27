<?php
    namespace App\Classes;
    use App\Interfaces\FactoryIdInterface;
    use App\Interfaces\ShapeInterface;
    use App\Factories\GeneratorIdFactory;

    class Circle extends Shape implements ShapeInterface{
        const TIPO = 3;
        protected int $radius;

        function __construct($radius, $length, $width, ?FactoryIdInterface $gen){
            $generator = $gen ?? new GeneratorIdFactory('UniqId');

            parent::__construct($length, $width, $generator);
            $this->radius = $radius;
        }

        public function calculaArea(): int{

            return pow($this->radius, 2) * pi();
        }
    }
?>