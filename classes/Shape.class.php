<?php

    class Shape{

        // Properties
        const TIPO  = 1;
        public $name;
        protected $width, $length;
        private $id;

        function __construct($length, $width, $idType) {
            $this->length   = $length;
            $this->width    = $width;
            $this->construcId($idType);
        }

        // Accessors
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            if (property_exists($this, $id)) {
                return $this->id;
            }
        }

        public function calcArea() {
            $area = $this->length * $this->width;

            return $area;
        }

        public function getShapeProperties()
        {
            $p["name"]      = $this->name;
            $p["width"]     = $this->width;
            $p["length"]    = $this->length;
            $p["id"]        = $this->id;

            return (object) $p;
        }

        public function construcId($idType){
            switch ($idType){
                case 1:
                    $this->id = uniqid();
                    break;
                case 2:
                    $this->id = bin2hex(random_bytes(20));
                    break;
                case 3:
                    $this->id = md5(uniqid(rand(), true));
                    break;
                default:
                    $this->id = uniqid();

                    break;
            }

            return $idType;
        }
    }

?>