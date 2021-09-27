<?php
    use PHPUnit\Framework\TestCase;
    use App\Factories\UniqId;
    use App\Factories\Md5;
    use App\Classes\Circle;
    use App\Classes\Rectangle;
    
    class CalcTest extends TestCase
    {
        public function setup(): void{
            $this->circle = new Circle(5, 10, 4, new UniqId());
            $this->circle->name = "Circle";

            $this->rectangle = new Rectangle(10, 4, (new UniqId()));
            $this->rectangle->name = "Rectangle";
        }
        
        public function testCalcAreaCircle(){
            $this->assertEquals(78, $this->circle->calculaArea());
        }
        
        public function testCalcAreaRectangle(){           
            $this->assertEquals(40, $this->rectangle->calculaArea());
        }
        
        public function testGetCloneCircle(){           
            $this->assertInstanceOf(Circle::class, $this->circle->getClone());
        }
        
        public function testGetCloneRectangle(){           
            $this->assertInstanceOf(Rectangle::class, $this->rectangle->getClone());
        }

        public function testCircleGetId(){           
            $this->assertIsString($this->circle->getId());
        }

        public function testCircleSetId(){
            $old_id = $this->circle->getId();
            $this->circle->setId(new Md5()); 
            $this->assertNotEquals($this->circle->getId(), $old_id);
        }

        public function testRectangleGetId(){           
            $this->assertIsString($this->rectangle->getId());
        }

        public function testRectangleSetId(){
            $old_id = $this->rectangle->getId();
            $this->rectangle->setId(new Md5()); 
            $this->assertNotEquals($this->rectangle->getId(), $old_id);
        }
    }
?>