<?php
    // require('./interfaces/ShapeInterface.php');
    // require('classes/idGenerator.class.php');

    abstract class Shape{

        // Properties
        const       TIPO  = 1;
        public      string $name;
        protected   int $width, $length;
        private     string $id;

        function __construct(int $length, int $width, string $id) {
            $this->length   = $length;
            $this->width    = $width;
            $this->id       = $id;
        }

        public function getId(): string
        {
                return $this->id;
        }

        public function setId(string $id, IdGenerator $generator): string {
            if (property_exists($this, $id)) {
                return $this->id = $generator->generateID($id);
            }
        }

        public function calculaArea(): int {
            return $this->length * $this->width;
        }

        public function getProperties(): object
        {
            $p["name"]      = $this->name;
            $p["width"]     = $this->width;
            $p["length"]    = $this->length;
            $p["id"]        = $this->id;

            return (object) $p;
        }

    }

?>