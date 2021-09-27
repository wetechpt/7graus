<?php

    namespace App\Factories;
    use Exception;

    class GeneratorIdFactory{

        public function __construct($type)
        {
            $newClass = ucfirst($type);
            if(!class_exists($newClass)){
                throw new Exception('Class not found');
            }
            
            return new $newClass;
        }
    }
?>