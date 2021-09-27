<?php
    namespace App\Interfaces;
    use App\Interfaces\FactoryIdInterface;
    
    interface ShapeInterface {
        public function calculaArea(): int;
        public function setId(?FactoryIdInterface $generator);
        public function getClone(): object;
    }

?>