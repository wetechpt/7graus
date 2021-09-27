<?php
    namespace App\Classes;
    use App\Interfaces\FactoryIdInterface;
    
    class UniqId implements FactoryIdInterface{

        public function getNewId(): string{
            return uniqid();
        }
    }
?>