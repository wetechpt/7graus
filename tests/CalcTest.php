<?php
    use PHPUnit\Framework\TestCase;
    
    class CalcTest extends TestCase
    {
        public function testCalcArea(){
            // require (__DIR__ ."/classes/Shape.class.php");
            require ("./classes/Shape.class.php");

            $shape = new Shape(5, 10, 4);
            $shape->name = "Shape 1";

            $this->assertEquals(5, $shape->calcArea());
        }
    }
?>