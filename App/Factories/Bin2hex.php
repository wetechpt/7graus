<?php
    namespace App\Factories;
    use App\Interfaces\FactoryIdInterface;

    class Bin2hex implements FactoryIdInterface{

        public function getNewId(): string{
            return Bin2hex(random_bytes(20));
        }
    }
?>