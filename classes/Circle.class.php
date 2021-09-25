<?php
    require('Controllers/Shape.class.php');

    class Circle extends Shape{
        const TIPO = 3;
        protected $radius;

        function __construct($radius, $length, $width){

            parent::__construct($length, $width);
            // $this->Shape($length, $with);

            $this->radius = $radius;
        }

        public function calcAreaCircle(){

            return pow($this->radius, 2) * pi();
        }

        function getCircleProperties()
        {
            $p["name"] = $this->name;
            $p["radius"] = $this->radius;
            $p["id"] = $this->getId(); 

            return (object) $p;
        }
        
    }

?>