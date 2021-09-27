<?php
    namespace App\Classes;
    use App\Interfaces\FactoryIdInterface;
    
    class Md5 implements FactoryIdInterface{

        public function getNewId(): string{
            return md5(uniqid(rand(), true));
        }
    }
?>