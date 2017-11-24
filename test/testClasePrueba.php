<?php
    use PHPUnit\Framework\TestCase;

    use \PruebaClass as PC;

    class TestClasePrueba extends TestCase{
        public $PC;

        protected function setUp(){
            $this->setPC(new PC());
        }

        protected function tearDown(){
           
        }

        public function setPC($pc){
            $this->PC = $pc;
        }

        public function testSuma(){            
            $this->assertEquals(10, $this->PC->suma(7,3));
        }
        public function testSuma2(){            
            $this->assertEquals(-1, $this->PC->suma(-0.5,-0.5));
        }

        public function testResta(){
            $this->assertEquals(6, $this->PC->resta(7,6));   
        }

        public function testMultiplicacion(){
            $this->assertEquals(6, $this->PC->multiplicacion(3,2));   
        }

        public function testArrayKey(){
            $this->assertArrayHasKey('otra', $this->PC->comprobarArrayKey());
        }

        public function testOrder(){
            $this->assertEquals([1,2,3], $this->PC->ordenarArray([3,1,2]));
        }
    }
?>