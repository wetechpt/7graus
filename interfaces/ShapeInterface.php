<?php
    require('./classes/Shape.class.php');
    require('classes/idGenerator.class.php');
    
    interface ShapeInterface {
        public function calculaArea(): int;
        public function setId(string $id, IdGenerator $generator): string;
        public function getProperties(): object;
    }

?>