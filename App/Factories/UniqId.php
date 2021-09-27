<?php
    namespace App\Factories;
    use App\Interfaces\FactoryIdInterface;
    
    class UniqId implements FactoryIdInterface{

        public function getNewId(): string{
            return uniqid();
        }
    }
?>