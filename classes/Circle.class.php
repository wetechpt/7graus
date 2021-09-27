<?php
    // require('classes/Shape.class.php');
    require('./interfaces/ShapeInterface.php');
    // require('classes/idGenerator.class.php');

    class Circle extends Shape implements ShapeInterface{
        const TIPO = 3;
        protected int $radius;
        private $id;

        function __construct($radius, $length, $width, $id){
            
            $generator = new idGenerator();
            parent::__construct($length, $width, $generator->generateId($id));
            $this->radius = $radius;
            $this->id = $generator->generateId($id);
        }

        public function calculaArea(): int{

            return pow($this->radius, 2) * pi();
        }

        function getProperties(): object
        {
            $p["name"] = $this->name;
            $p["radius"] = $this->radius;
            $p["id"] = $this->id; 

            return (object) $p;
        }

        public function generateID($type): string{
            if($type == 1){
                return $this->id = uniqid();
            } elseif($type == 2) {
                return $this->id = bin2hex(random_bytes(20));
            } elseif($type == 3) {
                return $this->id = md5(uniqid(rand(), true));
            } else {
                return $this->id = uniqid();
            }
        }
        
    }

?>