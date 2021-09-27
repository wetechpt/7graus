<?php
    use PHPUnit\Framework\TestCase;
    
    class CalcTest extends TestCase
    {
        public function testCalcAreaCircle(){
            require ("./classes/Circle.class.php");

            $circle = new Circle(5, 10, 4, 1);
            $circle->name = "Circle";
            

            $this->assertEquals(78, $circle->calculaArea());
        }
        
        public function testCalcAreaRectangle(){
            require ("./classes/Rectangle.class.php");
            
            $rectangle = new Rectangle(10, 4, 1);
            $rectangle->name = "Rectangle";

            $this->assertEquals(40, $rectangle->calculaArea());
        }
    }
?>