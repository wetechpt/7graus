<?php
    namespace App\Classes;
    use App\Interfaces\FactoryIdInterface;
    
    abstract class Shape{

        // Properties
        const       TIPO  = 1;
        public      string $name;
        protected   int $width, $length;
        private     $id;

        function __construct(int $length, int $width, FactoryIdInterface $generatorId) {
            $this->length   = $length;
            $this->width    = $width;
            $this->id       = $generatorId->getNewId();
        }

        public function getId(): string
        {
            return $this->id;
        }

        public function setId(?FactoryIdInterface $generatorId) {
            $this->id = $generatorId->getNewId();
        }

        public function calculaArea(): int {
            return $this->length * $this->width;
        }

        public function getClone(): Shape
        {
            return clone $this;
        }

    }
?>